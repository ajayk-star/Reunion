<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->xml([
            'posts' => Post::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'url',
            'descriptoin' => 'required', 'string',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }else{

        $post = new Post();
        $post->title =  $request->title;
        $post->descriptoin =  $request->descriptoin;
        $post->save();
        return response()->json([
            'message' => 'Post created',
            'status' => 'success',
            'data'  => $post
        ]);
    }
}

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return response()->json(['post' => $post]);
  }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post->title =  $request->title;
        $post->descriptoin =  $request->descriptoin;
        $post->save();
        return response()->json([
            'message' => 'Post updated',
            'status' => 'success',
            'data'  => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json([
            'message' => 'post deleted',
        ]);
    }
}
