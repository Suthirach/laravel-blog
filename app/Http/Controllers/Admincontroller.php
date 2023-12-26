<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admincontroller extends Controller
{   
    function blog() {
        $blogs = DB::table('blogs')->get();
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
    //ฟังชั่นที่ใช้ในการลบข้อมูล
    function insert(Request $request){
        $request->validate(
            [    //การตรวจใน inpull 
                'title'=>'required| max:50',
                'content'=>'required'
            ], 
            [   //การตรวจใน inpull 
                'title.required'=>'กรุณาป้อนชื่อบทความ',
                'title.max'=>'ชื่อไม่ควรเกิน 50 ตัวอักษร',
                'content.required'=>'กรุณาป้อนบทความ'
            ]
        );
        $data=[
            'title'=>$request->title,
            'content'=>$request->content
        ];
        //ส่งข้อมูลเพื่อบันทึกลง database 
        DB::table('blogs')->insert($data);
        return redirect('/blog');

        

    }
    //ฟังชั่นที่ใช้ในการลบข้อมูล
    function delete($id){
        DB::table('blogs')->where('id',$id)->delete();
        return redirect('/blog');

    }
    //ฟังชั้นที่ใช้ในการ update ข้อูมูล
    function change($id){
        $blog=DB::table('blogs')->where('id',$id)->first();
        // return redirect('/blog');
        $data = [
            'status'=>!$blog->status
        ];
        $blog=DB::table('blogs')->where('id',$id)->update($data);
        return redirect('/blog');
        
    }
     function edit($id){
       $blog=(DB::table('blogs')->where('id',$id)->first());
       return view('edit',compact('blog'));

     }
    
     function update(Request $request,$id){
        $request->validate(
            [    //การตรวจใน inpull 
                'title'=>'required| max:50',
                'content'=>'required'
            ], 
            [   //การตรวจใน inpull 
                'title.required'=>'กรุณาป้อนชื่อบทความ',
                'title.max'=>'ชื่อไม่ควรเกิน 50 ตัวอักษร',
                'content.required'=>'กรุณาป้อนบทความ'
            ]
        );
        $data=[
            'title'=>$request->title,
            'content'=>$request->content
        ];
        //ส่งข้อมูลเพื่อบันทึกลง database 
        DB::table('blogs')->where('id',$id)->update($data);
        return redirect('/blog');
     }


}  