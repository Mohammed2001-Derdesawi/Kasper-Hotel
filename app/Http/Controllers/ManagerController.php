<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;


class ManagerController extends Controller
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
        $managers=Manager::latest()->paginate(15);
        return view('admindashboardlayout.manager',compact('managers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allpermissions=Permission::all();
        $roles=Role::all();
        return view('admindashboardlayout.addmanager',compact('allpermissions','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';

        $validator= Validator::make($request->all(), [
           'name' => ['required', 'string', 'max:25'],
           'email' => ['required', 'string', 'email', 'max:255', 'unique:managers'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],
           'image'=>      ['image','mimes:jpeg,jpg,png,gif','max:10000'],
           'description' => ['required', 'string', 'max:20'],
           'facebook' => [ 'required','url' ,'regex:'.$regex],
           'twitter' => [ 'required','url' ,'regex:'.$regex],
           'github' => ['required' ,'url' ,'regex:'.$regex],
       ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

          if($request->has('image'))
          {


                $file=$request->image;
                $newfile=time().$file->getClientOriginalName();
                $file->move('admindashboard/imagesUploads/manager_images/',$newfile);
                $data['image']='admindashboard/imagesUploads/manager_images/'.$newfile;
                foreach($request->all()  as $key=> $value)
                {
                    if($key=='image')
                    continue;
                    $data[$key]=$value;

                }


          }
          else
          foreach($request->all()  as $key=> $value)
          {

              $data[$key]=$value;

          }

          $data['password']=Crypt::encrypt($request->password);
          $manager=Manager::create($data);

          if($request->has('roles'))
          {
            foreach($request->roles as $role)
            {
                $role=Role::findOrFail($role);
            }
            $manager->assignRole($request->roles);
          }

         if($request->has('permissions'))
         {
            foreach($request->permissions as $permission)
            {
                $role=Permission::findOrFail($permission);
            }
            $manager->givePermissionTo($request->permissions);
         }







         Alert::success('Manager has Added Successfull', '')->width('40rem')->padding('60px')->showConfirmButton($btnText = 'Done', $btnColor = '#Fa2c27')->buttonsStyling('btn btn-success p-20')->toToast();
          return redirect()->back();


    }


    public function validateManager($request){


    }

    public function storeImage(Request $request)
    {


         $validator= Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:40'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image'=>      ['required','image','mimes:jpeg,jpg,png,gif'],
            'description' => ['required', 'string', 'max:20'],
        ]);
         if($validator->fails())
         {
             return redirect()->route('admin.managers.edit')->withErrors($validator)->withInput($request->all());
         }
         $manger=$request->all();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show(Manager $manager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $manager=Manager::find($id);
            $allpermissions=Permission::all();
            $roles=Role::all();
            return view('admindashboardlayout.editmanager',compact('manager','allpermissions','roles'));
    }

    // public function validateUpdateManager($request)
    // {
    //     $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';

    //     $validator= Validator::make($request->all(), [
    //        'name' => ['required', 'string', 'max:25'],
    //        'email' => ['required', 'string', 'email', 'max:255', 'unique:managers'],

    //        'description' => ['required', 'string', 'max:20'],
    //        'facebook' => [ 'required','url' ,'regex:'.$regex],
    //        'twitter' => [ 'required','url' ,'regex:'.$regex],
    //        'github' => ['required' ,'url' ,'regex:'.$regex],
    //    ]);
    //     if($validator->fails())
    //     {
    //         return redirect()->back()->withErrors($validator)->withInput($request->all());
    //     }

    //     if($request->has('image'))
    //     {
    //         $validte=$request->validate([
    //             'image'=>      ['image','mimes:jpeg,jpg,png,gif','max:10000'],
    //         ]);
    //         if(!$validte)
    //         return redirect()->back()->withErrors($validator)->withInput($request->all());
    //     }
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';

        $validator= Validator::make($request->all(), [
           'name' => ['required', 'string', 'max:25'],
           'email' => ['required', 'string', 'email', 'max:255'],
           'image'=>      ['image','mimes:jpeg,jpg,png,gif','max:10000'],
           'description' => ['required', 'string', 'max:20'],
           'facebook' => [ 'required','url' ,'regex:'.$regex],
           'twitter' => [ 'required','url' ,'regex:'.$regex],
           'github' => ['required' ,'url' ,'regex:'.$regex],
       ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        $manager=Manager::findOrFail($id);
        $data=$request->all();

            if($file=$request->file('image'))
            {
               if($manager->image!=Null)
               {
                          unlink(public_path().'/'.$manager->image);
               }
               $newfile=time().$file->getClientOriginalName();
               $file->move('admindashboard/imagesUploads/manager_images/',$newfile);
               $data['image']='admindashboard/imagesUploads/manager_images/'.$newfile;

            }

            if($request->has('password'))
            {
                $data['password']=Crypt::encrypt($request->password);
            }

            else
            $data['password']=$manager->password;
            if($request->email!=$manager->email)
            {
               $validate=$request->validate([
                   'email'=>'required|string|email|max:255|unique:managers',
                ],[
                    'email.unique'=>'email is already defiend',
                    'email.string'=>'email must be string',
                    'email.max'=>'email adress is to long',
                    'email.required'=>'email is required field',
                ]);
                if(!$validate)
                {

                return redirect()->back()->withErrors($validate)->withInput($request->all());

                }
                $data['email']=$request->email;
            }

          $manager->update($data);
          $manager->syncRoles($request->roles);
          $manager->syncPermissions($request->permissions);
            toast('Manager updated Successfull','success');
            return redirect()->back();



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manager=Manager::findOrFail($id);
        $manager->delete();
        Alert::success('Manager has deleted Successfull', '')->width('40rem')->padding('60px')->showConfirmButton($btnText = 'Done', $btnColor = '#Fa2c27')->buttonsStyling('btn btn-success p-20')->toToast();
        return redirect()->back();
    }
    public function profile($id)
    {
        if($id!=Auth::guard('admin')->user()->id)
        {
            toast('Sorry You Don'.",t Have access to This Page",'warning');
            abort(403);
        }

        $manager=Manager::findOrFail($id);
        return view('admindashboardlayout.profile',compact('manager'));

    }
    public function updateinfoprofile(Request $request,$id)
    {
        if($id!=Auth::guard('admin')->user()->id)
        {
            toast('Sorry You Don'.",t Have access to This Page",'warning');
            abort(403);
        }
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
           $manager=Manager::findOrFail($id);
           $validate=$request->validate([

               'email'=>'required|email',
               'facebook'=>'required|url|regex:'.$regex,
               'twitter'=>'required|url|regex:'.$regex,
               'github'=>'required|url|regex:'.$regex,
               'name'=>'required|max:20|string',
               'description'=>'required|max:20|string',
 //    'profile_avatar'=>'required|image|mimes:png,jpg,jpeg,gif',
           ]);
           if(!$validate)
           return response()->json([
               'status'=>false,
               'error'=>$validate,
           ]);

           $data=$request->all();

           if($file=$request->file('image'))
           {
            if($manager->image!=Null)
            {
                       unlink(public_path().'/'.$manager->image);
            }
            $newfile=time().$file->getClientOriginalName();
            $file->move('admindashboard/imagesUploads/manager_images/',$newfile);
            $data['image']='admindashboard/imagesUploads/manager_images/'.$newfile;

           }
           $success=$manager->update($data);
           if($success)
           {

            return response()->json([
                'status'=>true,
                'message'=>'Profile Updated Successfull',
            ]);
           }



            toast("Something Won't Wrong ",'warning');
            return response()->json([
                'status'=>false,
                'message'=>"Something Won't Wrong ",
             ]);





    }


    public function updatepasswordprofile(Request $request,$id)
    {
        if($id!=Auth::guard('admin')->user()->id)
        {
            toast('Sorry You Don'.",t Have access to This Page",'warning');
            abort(403);
        }

           $manager=Manager::findOrFail($id);
           $validate=$request->validate([

               'currentpassword'=>'required|min:8|string',
               'password'=>'required|confirmed|string|min:8',

 //    'profile_avatar'=>'required|image|mimes:png,jpg,jpeg,gif',
           ],[
               'currentpassword.required'=>'The current password is required'
           ]);

           if(!$validate)
           return response()->json([
               'status'=>422,
               'error'=>$validate,
           ]);


           if(Hash::check($request->currentpassword,$manager->password))
           {
            $data=$request->all();

            $success=$manager->update([
                'password'=> Hash::make($request->password),
            ]);
            if($success)
            {

             return response()->json([
                 'status'=>true,
                 'message'=>'Password Updated Successfull',
             ]);
            }




           }

           return response()->json([
               'status'=>421,
               'message'=>"The current password is not correct",
            ]);





    }

    public function profileforgetpassword()
    {
           Auth::guard('admin')->logout();
           return redirect()->route('admin.showresetpassword');


    }
    public function getdata()
    {
         $id=Auth::guard('admin')->user()->id;
         $manager=Manager::findOrFail($id);
         $img=asset($manager->image);
         return '      <div class="row">
         <label class="col-xl-3"></label>
         <div class="col-lg-9 col-xl-6">
             <h3 class="kt-section__title kt-section__title-sm">Customer Info:</h3>
         </div>
     </div>
     <div class="form-group row">
         <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
         <div class="col-lg-9 col-xl-6">
             <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
                 <div class="kt-avatar__holder" style="background-image: url('.$img.');"></div>

                 </label>

             </div>
         </div>
     </div>
     <div class="form-group row">
         <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
         <div class="col-lg-9 col-xl-6">
             <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                 <label class="form-control" style="text-align: left;">'.$manager->email .'</label>
             </div>
         </div>

     </div>

     <div class="form-group row">
         <label class="col-xl-3 col-lg-3 col-form-label">Name</label>
         <div class="col-lg-9 col-xl-6">
             <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-user"></i></span></div>
                 <label class="form-control" style="text-align: left;">'.$manager->name.'</label>
             </div>
         </div>
     </div>


     <div class="form-group row">
         <label class="col-xl-3 col-lg-3 col-form-label">FaceBook</label>
         <div class="col-lg-9 col-xl-6">
             <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="fab fa-facebook-f"></i></span></div>
                 <label class="form-control" style="text-align: left;">'.$manager->facebook.'</label>
             </div>
         </div>
     </div>
     <div class="form-group row">
         <label class="col-xl-3 col-lg-3 col-form-label">GitHub</label>
         <div class="col-lg-9 col-xl-6">
             <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-github"></i></span></div>
                 <label class="form-control" style="text-align: left;">'.$manager->github.'</label>
             </div>

         </div>
     </div>
     <div class="form-group row">
         <label class="col-xl-3 col-lg-3 col-form-label">Twitter</label>
         <div class="col-lg-9 col-xl-6">
             <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-twitter"></i></span></div>
                 <label class="form-control" style="text-align: left;">'.$manager->twitter.'</label>
             </div>
         </div>
     </div>


     <div class="form-group row">
         <label class="col-xl-3 col-lg-3 col-form-label">Description</label>
         <div class="col-lg-9 col-xl-6">
             <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-address-card"></i></span></div>
                 <label class="form-control" style="text-align: left;">'.$manager->description.'</label>
             </div>
         </div>
     </div>';

    }
}
