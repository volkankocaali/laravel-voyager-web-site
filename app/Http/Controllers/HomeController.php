<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function getCategory($slug){
        echo $slug;
    }
    public function getPage($category,$slug){
        echo $slug;
    }
    public function contact(){
        return view('contact');
    }
}
