@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <a class="col-md-6 text-center btn text-dark" href="{{ route('getupload')}}" style="height: 50vh;">
            <h1>Lưu trữ ảnh</h1>
            <i class="fas fa-cloud-upload-alt fa-10x"></i>
        </a>
        <a class="col-md-6 text-center btn text-dark" href="{{ route('album')}}" style="height: 50vh;">
            <h1>Xem ảnh công khai</h1>
            <i class="fas fa-images fa-10x"></i>
        </a>
    </div>
</div>
@endsection
