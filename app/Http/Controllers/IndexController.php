<?php

namespace App\Http\Controllers;

use App\Comment;
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

    public function readmore($id)
    {
        $post =  Post::findOrfail($id);
        $comment =  Comment::latest()->paginate(3);
        $lastpost = Post::latest()->paginate(4);
        $lastpostname = Post::latest()->paginate(5);
        return view('maincustomersitelayouts.readmore-hotel' , [
            'post' => $post ,
            'comment' => $comment,
            'lastpostname' =>$lastpostname,
            'lastpost' => $lastpost
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
