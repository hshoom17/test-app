<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $allPosts=[
        ];
        return view(view:'posts.index');
    }
    public function show(){

        return view(view:'posts.show') ;
    }
}
