@extends('layouts.app')
@section('title','login')
@section('content')
    <h1>Login
      <i class="bi bi-file-lock2"></i>
    </h1>
    {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta vitae asperiores temporibus adipisci dolorem, sit dolores sunt, et illo non illum cupiditate dolorum architecto nobis! Quibusdam culpa ipsam quidem voluptas.</p> --}}
    <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
        <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Login</a>
        <a href="{{route('signin')}}" class="btn btn-info" role="button" data-bs-toggle="button">Sign in</a>
    </form>
@endsection