<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index0(){

    	return view('child0',['page'=>'child0']);
    }
        public function index1(){

    	return view('child1',['page'=>'child1']);
    }
        public function index2(){

    	return view('child2',['page'=>'child2']);
    }
      public function index3(){

    	return view('alert',['page'=>'alert']);
    }
     public function index4(){

    	return view('animation',['page'=>'animation']);
    }
    public function index5(){

    	return view('basic',['page'=>'basic']);
    }      
    public function index6(){

    	return view('colored',['page'=>'colored']);
    }
     
}      

