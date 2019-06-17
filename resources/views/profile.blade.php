@extends('layouts.app')

@section('style')
<link href="{{ asset('css/justifiedGallery.min.css') }}" rel="stylesheet">
<link href="{{ asset('swipebox-master/src/css/swipebox.min.css') }}" rel="stylesheet">

@endsection

@section('script')
<script src="{{ asset('swipebox-master/lib/jquery-2.1.0.min.js')}}"></script>
<script src="{{ asset('js/jquery.justifiedGallery.min.js')}}"></script>
<script src="{{ asset('swipebox-master/src/js/jquery.swipebox.min.js')}}"></script>
<script type="text/javascript">
    
    $("#public").justifiedGallery({
    rowHeight : 150,
    lastRow : 'nojustify',
    margins : 5,
}).on('jg.complete', function () {
    $('.swipeboxExampleImg').swipebox();
});
    $("#private").justifiedGallery({
    rowHeight : 150,
    lastRow : 'nojustify',
    margins : 5,
}).on('jg.complete', function () {
    $('.swipeboxExampleImg').swipebox();
});
</script>
@endsection

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
    <h2 class="text-center">Ảnh cá nhân</h2>
    <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>[Ảnh công khai]</h3>
                <div id="public" >
                        @foreach (Auth::user()->images->where('private', '=' ,0) as $image)
                            <a href="{{$image->original_link}}" class="swipeboxExampleImg">
                                <img alt="{{$image->name}}" src="{{$image->small_link}}"/>
                            </a>
                        @endforeach                   
                </div>
                <hr/>
                <h3>[Ảnh riêng tư]</h3>
                <div id="private" >
                        @foreach (Auth::user()->images->where('private', '=' ,1) as $image)
                            <a href="{{$image->original_link}}" class="swipeboxExampleImg">
                                <img alt="{{$image->name}}" src="{{$image->small_link}}"/>
                            </a>
                        @endforeach                   
                </div>
            </div>
        </div>
</div>
@endsection
