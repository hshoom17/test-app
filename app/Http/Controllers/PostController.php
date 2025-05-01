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
        

        $data=request()->all();
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;
        // dd($data);
        // return $data;
        return to_route(route:'posts.index');
    }

    public function edit(){

        return view(view:'posts.edit');

    }

    public function update(){

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        return to_route(route:'posts.show',parameters:1);


    }
    public function destroy(){


        return to_route(route:'posts.index',parameters:1);
    }


}
