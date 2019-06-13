@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h1 class="m-3">Đăng nhập</h1>
            <a href="{{ route('facebook.login')}}" class="btn btn-social btn-facebook font-weight-bold">
                 <i class="fab fa-facebook-square"></i> Đăng nhập bằng Facebook
            </a>
            {{-- <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
