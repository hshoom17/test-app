<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $postsFromDB=Post::all();
        return view('posts.index', ['posts' => $postsFromDB]);
    }


    public function show(Post $post)
    {
        // $singlePostFromDB = Post::findOrFail($postId);
        return view('posts.show', ['post' => $post]);
    }


    public function create(){
        $users=User::all();
        return view('posts.create', ['users' => $users]);
    } 


    public function store(){
        
        //1- get the user data
        $data=request()->all();

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        Post::create([
            'title'=> $title,
            'description' => $description,
            'user_id' => $postCreator,

        ]);

        return to_route(route:'posts.index');
    }


    public function edit(Post $post){
        
        $users=User::all();   
        return view('posts.edit', ['users' => $users,'post'=> $post]);

    }

    public function update($postId){

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        $singlePostFromDB = Post::find($postId);
        $singlePostFromDB->update(['title'=> $title,
                                'description'=>$description,
                                'user_id'=>$postCreator]);

        return to_route(route:'posts.show',parameters:$postId);
    }


    public function destroy($postId){

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        $singlePostFromDB = Post::find($postId);
        $singlePostFromDB->delete();

        return to_route(route:'posts.index',parameters:$postId);
    }


}
