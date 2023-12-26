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
                <th scope="col">ลบบทความ</th>
            </tr>
        </thead>
        @foreach ($blogs as $item)
        <tbody>
            <tr>
                {{-- <th scope="row">1</th> --}}
                <td>{{$item->title}}</td>
                <td>{{Str::limit($item->content,15)}}</td>
                <td>
                    @if ($item->status==true)
                   <a href="{{route('change',$item->id)}}" class="btn btn-success">เผยแพร่</a> 
                    @else 
                   <a href="{{route('change',$item->id)}}" class="btn btn-secondary">ฉบับร่าง</a>
                    @endif

                </td>
                
                <td>
                    <a href="#" class="btn btn-primary">แก้ไข </a>
                </td>
                <td>
                    <a  
                        href="/delete/{{$item->id}}" 
                        class="btn btn-danger" 
                        onclick="return confirm('คุณต้องการจะลบบทความ {{$item->title}} ใช่หรือไม่ ?')"
                        >ลบ
                    </a>
                </td>
                <td><a href="#" class="btn btn-primary">แก้ไข</a>
                    
                </td>
                {{-- <td><a href="{{route('delete',$item->id)}}" class="btn btn-danger">ลบ</a></td> --}}
            </tr>
        </tbody>
        @endforeach
    </table>  
@endsection