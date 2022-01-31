<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
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
        $posts=Post::paginate(4);
        return view('admindashboardlayout.posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admindashboardlayout.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request);
        $validate=$request->validate([

            'title'=>'required|min:8|string',
            'text'=>'required|string|min:20',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif',

//    'profile_avatar'=>'required|image|mimes:png,jpg,jpeg,gif',
        ],[
            'title.required'=>'The title  is required',
            'text.required'=>'The body  is required',
            'image.required'=>'The image  is required',
            'image.mimes'=>'The image  it should be jpg,png,jpeg,gif',
            'image.image'=>'it should be an image',


        ]);
          if(!$validate)
          return redirect()->back()->withErrors($validate)->withInput($request->all());

         $file=$request->file('image');
         $newfile=time().$file->getClientOriginalName();
         $file->move('admindashboard/imagesUploads/posts_images/',$newfile);
         $data['image']='admindashboard/imagesUploads/posts_images/'.$newfile;
         $data['title']=$request->title;
         $data['text']=$request->text;
         $data['manager_id']=Auth::guard('admin')->user()->id;
         Post::create($data);
         return redirect()->route('admin.posts')->with('sucess' ,'Post Created Successfull');



    }


    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('admindashboardlayout.editPost',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $post=Post::findOrFail($id);
        $validate=$request->validate([

            'title'=>'required|min:8|string',
            'text'=>'required|string|min:20',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',

//    'profile_avatar'=>'required|image|mimes:png,jpg,jpeg,gif',
        ],[
            'title.required'=>'The title  is required',
            'text.required'=>'The body  is required',
            'image.required'=>'The image  is required',
            'image.mimes'=>'The image  it should be jpg,png,jpeg,gif',


        ]);
          if(!$validate)
          return redirect()->back()->withErrors($validate)->withInput($request->all());
          if($file=$request->file('image'))
          {
             if($post->image!=Null)
             {
                        unlink(public_path().'/'.$post->image);
             }
             $newfile=time().$file->getClientOriginalName();
             $file->move('admindashboard/imagesUploads/manager_images/',$newfile);
             $data['image']='admindashboard/imagesUploads/manager_images/'.$newfile;

          }
          else
          $data['image']=$post->image;

          $data['title']=$request->title;
          $data['text']=$request->text;
          $post->update($data);
          return redirect()->route('admin.posts')->with('sucess' ,'Post Updated Successfull');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect()->route('admin.posts')->with('sucess' ,'Post Deleted Successfull');
    }
}
