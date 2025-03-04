<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function firstAction(){

       ;
       return view(view: 'welcome');
       
    }

    public function greet(){


        return 'hello this is greet func';
    }
}
