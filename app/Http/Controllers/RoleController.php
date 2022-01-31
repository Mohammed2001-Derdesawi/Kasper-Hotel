<?php

namespace App\Http\Controllers;

use App\Manager;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
         $this->middleware('admin');
    }
    public function index()
    {

        $roles=Role::latest()->paginate(5);

        // $managers=[];
        // foreach($roles as $role)
        // {
        //     Manager::role($role->name)->get();
        //     array_push($managers,'');
        // }
        $allroles=Role::all();
        $permissions=Permission::latest()->paginate(5);
        $allpermissions=Permission::all();
        $allmanagers=Manager::all();

        return view('admindashboardlayout.roles',compact('roles','permissions','allpermissions','allmanagers','allroles'));

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ' required','max:20',
        ]);
        // dd($request);
            if($validator->fails())
            {


                return response()->json([
                     'status'=>400,
                      'errors'=>$validator->messages(),

                ]);


            }

                $role=Role::create(['name'=>$request->name,'guard_name'=>'admin']);



             if($request->has('permissions'))
             {

                    $role->givePermissionTo($request->permissions);
             }
             if($request->has('managers'))
             {

          foreach($request->managers as $manager)
          {
              $manager=Manager::findorFail($manager);
              $manager->assignRole($role);
          }

             }
             Alert::success('Role has Created Successfull', '')->width('40rem')->padding('60px')->showConfirmButton($btnText = 'Done', $btnColor = '#Fa2c27')->buttonsStyling('btn btn-success p-20')->toToast();







    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role=Role::find($id);
        if(!$role)
        abort(404);
        $allpermissions=Permission::all();
        $managers=Manager::all();
        $managershasrole=Manager::role($role)->get();
        // dd($managershasrole);
        return view('admindashboardlayout.editroles',compact('role','allpermissions','managers','managershasrole'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $role=Role::find($id);
        if(!$role)
        {
               abort(404);
        }
        else
        {
             $validator=Validator::make($request->all(),[
                'name' => [' required','max:15'],

             ]);
             if($validator->fails())
             {
                 return redirect()->back()->withErrors($validator)->withInput($request->all());
             }
             $role->name=$request->name;
             $role->save();

             $role->syncPermissions($request->permissions);


             $this->DeleteOrUpdateManagers($request,$role);

            toast('Role has Updated Successfull','success');
            return redirect()->back();
        }
    }

    private function DeleteOrUpdateManagers($request,$role)
    {

        $allmanager=Manager::all();



        if($request->has('managers'))
        {

           foreach($allmanager as $managercollect)
           {
              foreach($request->managers as $manager)
              {

                   if($manager==$managercollect->id)
                   {
                       if(!$managercollect->hasRole($role->name))
                       $managercollect->assignRole($role);

                   }




              }

           }
             $selectmanager=$request->managers;
        //    foreach($request->managers as $manager)
        //    {
        //             array_push($selectmanager,intval($manager));
        //    }



               foreach($allmanager as $managercollect)
               {

                       if(!in_array($managercollect->id,$selectmanager))
                            $managercollect->removeRole($role->name);
               }





        }




        else
        {
           foreach($allmanager as $managercollect)
           if($managercollect->hasRole($role->name))
           $managercollect->removeRole($role->name);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Role $role)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role=Role::find($id);
        if(!$role)
        {
               abort(404);
        }
        else
        {
            $role->delete();
            toast('Role has Deleted Successfull','success');
            return redirect()->back();
        }

    }
}
