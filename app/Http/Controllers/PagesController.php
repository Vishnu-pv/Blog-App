<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Blog App";
        $data = array(
            'value' => 'Hello Everyone!'
        );
        return view('pages.index',compact('title','data'));
        // return view('pages.index')->with('data',$data);
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }
}
