<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{   
    function blog() {
        $blogs = [
            [
                'title' => "บทความที่ 1",
                'content' => "เนื้อหาบทความ",
                'status' => true
            ],
            
            [
                'title' => "บทความที่ 2",
                'content' => "เนื้อหาบทความ",
                'status' => true
            ],
            
            [
                'title' => "บทความที่ 3",
                'content' => "เนื้อหาบทความ",
                'status' => true
            ],
            
            [
                'title' => "บทความที่ 4",
                'content' => "เนื้อหาบทความ",
                'status' => false
            ],
            
            [
                'title' => "บทความที่ 5",
                'content' => "เนื้อหาบทความ",
                'status' => false
            ],
             
        ]; 
        return view('blog',compact('blogs'));
    }

    function about() {
        $name = "Suthirach";
        $date = "10/02/23";
        return view('about',compact('name', 'date'));
    }

    function login() {
        return view('login');
    }

    function signin() {
        return view('signin');
    }

    function create(){
        return view('form');
    }
    
    function insert(Request $request){
        $request->validate([
            'title'=>'required| max:50',
            'content'=>'required'
        ]);

    }
}
 