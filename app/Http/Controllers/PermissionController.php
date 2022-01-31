<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $roles=Role::latest()->paginate(5);
    //     // $managers=[];
    //     // foreach($roles as $role)
    //     // {
    //     //     Manager::role($role->name)->get();
    //     //     array_push($managers,'');
    //     // }
    //     $permissions=Permission::latest()->paginate(5);
    //     return view('admindashboardlayout.roles',compact('roles','permissions'));

    // }

    public function __construct()
    {
         $this->middleware('admin');
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


                $permission=Permission::create(['name'=>$request->name,'guard_name'=>'admin']);


                if($request->has('roles'))
                {

                      foreach($request->roles as $role)
                      {
                        $permission->assignRole($role);
                      }


                }

                if( $request->has('managers'))
                {


                  foreach($request->managers as $manager)
                      {
                        $manager=Manager::findorFail($manager);
                       $manager->givePermissionTo($permission->name);
                      }



                }
                Alert::success('Permission has Created Successfull', '')->width('40rem')->padding('60px')->showConfirmButton($btnText = 'Done', $btnColor = '#Fa2c27')->buttonsStyling('btn btn-success p-20')->toToast();
                // return redirect()->route('admin.roles');














    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission=Permission::find($id);
        if(!$permission)
        abort(404);
        $allroles=Role::all();
        $managers=Manager::all();
        $managershaspermission=Manager::permission($permission)->get();
        // $managershaspermission=$managershaspermission->getAllPermissions();
        return view('admindashboardlayout.editpermission',compact('permission','allroles','managers','managershaspermission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $permission=Permission::find($id);
        if(!$permission)
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
             $permission->name=$request->name;
             $permission->save();
             $permission->syncRoles($request->roles);

               $this->DeleteOrUpdateManagers($request,$permission);



            toast('Permssion has Updated Successfull','success');

            return redirect()->back();
        }
    }

    private function DeleteOrUpdateManagers($request,$permission)
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
                       if(!$managercollect->hasPermissionTo($permission->name))
                       $managercollect->givePermissionTo($permission);

                   }




              }

           }
             $selectmanager=array();
           foreach($request->managers as $manager)
           {
                    array_push($selectmanager,intval($manager));
           }



               foreach($allmanager as $managercollect)
               {

                       if(!in_array($managercollect->id,$selectmanager))
                            $managercollect->revokePermissionTo($permission->name);
               }





        }




        else
        {
           foreach($allmanager as $managercollect)
           if($managercollect->hasPermissionTo($permission->name))
           $managercollect->revokePermissionTo($permission->name);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission=Permission::find($id);
        if(!$permission)
        {
               abort(404);
        }
        else
        {
            $permission->delete();
            toast('Permission has Deleted Successfull','success');
            return redirect()->back();
        }

    }
}
