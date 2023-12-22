@extends('layout')
@section('title','บทความทั้งหมด')
@section('content')
    <h2 class="text text-center py-2">บทความทั้งหมด</h2>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">ชื่อบทความ</th>
                <th scope="col">เนื้อหา</th>
                <th scope="col">สถานะ</th>
            </tr>
        </thead>
        @foreach ($blogs as $item)
        <tbody>
            <tr>
                {{-- <th scope="row">1</th> --}}
                <td>{{$item["title"]}}</td>
                <td>{{$item["content"]}}</td>
                <td>
                    @if ($item["status"]==true)
                   <a href="#" class="btn btn-success">เผยแพร่</a> 
                    @else 
                   <a href="#" class="btn btn-warning">ฉบับร่าง</a>
                    @endif
                    
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>  
@endsection