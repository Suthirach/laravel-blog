<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class Admincontroller extends Controller

{   
    // ฟังชั้นที่ใช้สำหรับการจำกัดสิทธิการเข้าถึง โดยต้องล็อคอินก่อน
    public function __construct()
    {
        $this->middleware('auth');
    }


    //paginate(3);คืือการจำจัดข้อมูลในหน้าแสดงผล  
    function blog () {
        //เรียกใช้ตารางแบบ ไม่ใช่  model
        // $blogs = DB::table('blogs')->paginate(5); 

        //เรียกใช้ตารางแบบ model คำสั่งจะสั้นขึ้น
        $blogs=Blog::paginate(10);
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
        Blog::insert($data);
        return redirect('/author/blog');

        

    }
    //ฟังชั่นที่ใช้ในการลบข้อมูล
    function delete($id){
        // DB::table('blogs')->where('id',$id)->delete();

        // ลบใช้ตารางแบบ model 
       
        Blog::find($id)->delete();
        return redirect('/author/blog');

    }
    //ฟังชั้นที่ใช้ในการ update ข้อูมูล
    function change($id){
        $blog=DB::table('blogs')->where('id',$id)->first();
        // return redirect('/blog');
        $data = [
            'status'=>!$blog->status
        ];
        $blog=DB::table('blogs')->where('id',$id)->update($data);
        return redirect('/author/blog');
        
    }
     function edit($id){
       $blog=(DB::table('blogs')->where('id',$id)->first());
       return view('edit',compact('blog'));

     }
    //ฟังชั้นในการแก้ไขข้อความ
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
        return redirect('/author/blog');
     }


}  