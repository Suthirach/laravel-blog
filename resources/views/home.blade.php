@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header tex text-success">เข้าสู่ระบบสำเร็จ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    คุณนักเขียน :  {{ Auth::user()->name }} มาเริ่มเขียนบทความกัน!!
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center py-2" >           
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="/author/create" class="btn btn-dark">เขียนบทความ</a>
                    <a href="/author/blog" class="btn btn-dark">บทความทั้งหมด</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
