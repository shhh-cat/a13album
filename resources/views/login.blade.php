@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            @guest
                <h1 class="m-3">Đăng nhập</h1>
                <a href="{{ route('facebook.login')}}" class="btn btn-social btn-facebook font-weight-bold">
                        <i class="fab fa-facebook-square"></i> Đăng nhập bằng Facebook
                </a>
            @else
                <h1 class="m-3">Đăng nhập</h1>
                <a href="{{ route('facebook.login')}}" class="btn btn-social btn-facebook font-weight-bold">
                        <i class="fab fa-facebook-square"></i> Tiếp tục với {{ Auth::user()->name }} <img src="{{ Auth::user()->avatar }}" alt="Facebook Avatar" height="28" width="28" class="ml-2 rounded">
                </a>
            @endguest
        </div>
    </div>
</div>
@endsection
