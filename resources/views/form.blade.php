@extends('layout')
@section('title','เขียนบทความ')
@section('content') 
    <h2 class="text text-center py-2">เขียนบทความ</h2>
    <form method="POST" action="/insert">
        <div class="form-group">
            @csrf 
            <label for="tilte">ชื่อบทความ</label>
            <input type="text" name="title" class="form-control">
        </div>

        @error('title')
            <div class="my-2">
                <span class="text text-danger">{{$message}}</span>
            </div>
        @enderror

        <div class="form-group">
            <label for="tilte">เนื่อหาบทความ</label>
            <textarea name="content" id="" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <input type="submit" value="บันทึก" class="btn btn-primary my-2">
        <a href="/blog" class="btn btn-success">บทความทั้งหมด</a>
    </form>
 
@endsection 