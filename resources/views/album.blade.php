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
    
    $("#mygallery").justifiedGallery({
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
        <div class="col-md-12">
            <div id="mygallery" >
                    @foreach ($images as $image)
                        <a href="{{$image->original_link}}" class="swipeboxExampleImg">
                            <img alt="{{$image->name}}" src="{{$image->small_link}}"/>
                        </a>
                    @endforeach
{{--                     
                    <a href="path/to/myimage2_original.jpg">
                        <img alt="Title 2" src="path/to/myimage2_thumbnail.jpg"/>
                    </a>
                    <!-- other images... --> --}}
            </div>
            
            
        </div>
    </div>
</div>
@endsection