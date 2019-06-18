@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 text-center mt-5">
                <img src="{{ Auth::user()->avatar }}" alt="Facebook Avatar" class="rounded">
        </div>
        <div class="col-md-8">
            <h2>Thông tin cá nhân</h2>
            <ul class="list-group">
                    <li class="list-group-item"><b>Tên:</b> {{ Auth::user()->name }}</li>
                    <li class="list-group-item"><b>Email:</b> {{ Auth::user()->email }}</li>
            <li class="list-group-item"><b>Số ảnh đã tải lên:</b> {{Auth::user()->images()->count()}}</li>
            </ul>
        </div>
    </div>
    <br/>
</div>
@endsection
