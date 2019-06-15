@extends('layouts.app')

@section('style')
<link href="{{ asset('css/justifiedGallery.min.css') }}" rel="stylesheet">
@endsection

@section('script')
<script src="{{ asset('js/jquery.justifiedGallery.min.js')}}"></script>
<script type="text/javascript">
    $("#mygallery").justifiedGallery({
    rowHeight : 150,
    lastRow : 'nojustify',
    margins : 5,
    captions : false
});
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="mygallery" >
                    @foreach ($images as $image)
                        <a href="{{$image}}">
                            <img alt="Title 1" src="{{$image}}"/>
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