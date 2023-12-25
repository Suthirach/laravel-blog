<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
/* The `Route::get('/', function () { return view('welcome'); });` code is defining a route for the
root URL ("/") of the application. When a user visits the root URL, it will execute the provided
callback function and return the view named "welcome". */


Route::get('/', function () {
    return view('welcome');
});

Route::get('blog',[Admincontroller::class,'blog'])->name('blog');

Route::get('about',[Admincontroller::class,'about'])->name('about');

Route::get('login',[Admincontroller::class,'login'])->name('login');

Route::get('signin',[Admincontroller::class,'signin'])->name('signin');

Route::get('create',[Admincontroller::class,'create'])->name('create');

Route::post('insert',[Admincontroller::class,'insert']);

Route::get('delete/{id}',[Admincontroller::class,'delete']);

Route::get('change/{id}',[Admincontroller::class,'change'])->name('change');




// Route::get('/', function () {
//     return view('blog');
// });
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return "<a href='".route('login')."'>Login</a>";
// });
// Route::get('/about', function () {
//     return  '<h1>เกี่ยวกับเรา</h1>';
// });
// Route::get('/blog', function () {
//     return  '<h1>บทความทั้งหมด</h1>';
// });
// Route::get('/about/{name}', function ($name) {
//     return  "<h1>about ${name}</h1>";
// }); 

// Route::get('admin/user/toon/suthirach',function (){
//     return '<h1>Admin</h1>';
// })->name('login');



// Route::fallback(function(){
//     return "<h1>ไม่พบหน้าเว็บนี้</h1>";
// });



