<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Middleware\Admin;
use App\Manager;
use App\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post =  Post::latest()->get();
        $manager =  Manager::all();
        return view('maincustomersitelayouts.index' , [
            'post' => $post ,
            'manager' => $manager
        ]);
    }

    public function readmore($id , Request $request , $guard = 'admin')
    {
        $post =  Post::findOrfail($id);
        $lastpost = Post::latest()->paginate(4);
        $lastpostname = Post::latest()->paginate(5);


        return view('maincustomersitelayouts.readmore-hotel' , [
            'post' => $post ,
            'lastpostname' =>$lastpostname,
            'lastpost' => $lastpost ,
            'guard' => $guard
        ]);
    }

    function save_comment(Request $request){

        //         $addcomment  = Comment::create([
        //         'email' => $request->input('email') ,
        //         'name' => $request->input('name') ,
        //         'post_id' => $request->input('post') ,
        //         'password' => $request->input('password') ,
        //          'text' =>  $request->input('text')
        //     ]);
        //  return redirect('/');

                 $addcomment  = Comment::create([
                    'post_id' => $request->input('post') ,
                     'text' =>  $request->input('comment')
                ]);
                return response()->json([
                    'bool'=>true
                ]);
    }

        // Save Comment
        // function save_comment(Request $request){
        //     $addcomment  = Comment::create([
        //             // 'email' => $request->input('email'),
        //             // 'name' => $request->input('name'),
        //             // 'message' => $request->input('message'),
        //             'post_id' => $request->input('post') ,
        //              'text' =>  $request->input('text')
        //         ]);
        //         return response()->json([
        //             'bool'=>true
        //         ]);

        // //    $data = new Comment;
        // //     $data->post_id = $request->post;
        // //     $data->comment_text = $request->comment;
        // //     $data->save();
        // //     return response()->json([
        // //         'bool'=>true
        // //     ]);
        // }

        // Save Comment
        // function save_comment(Request $request){
        //     // $data = new  Comment;
        //     // $data->user_id = '2';
        //     // $data->parent_id = '5';
        //     // $data->post_id = $request->post;
        //     // $data->text = $request->comment;
        //     // $data->save();

        //         //   $addcomment  = Comment::create([
        //         //     'user_id' => $request->input('user_id') ,
        //         //     'parent_id' => $request->input('parent_id') ,
        //         //     'post_id' => $request->input('post') ,
        //         //      'text' =>  $request->input('text')
        //         // ]);
        //     return response()->json([
        //         'bool'=>true
        //     ]);
        // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {

        // Comment::insert([
        //  'user_id' => '3'
        // ]);

        // $addcomment  = Comment::create([
        //     'email' => $request->input('email'),
        //     'name' => $request->input('name'),
        //     'message' => $request->input('message'),

        // ]);
        // return route('readmore/'.$id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
