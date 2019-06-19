@extends('layouts.app')

@section('script')
<script src="{{ asset('swipebox-master/lib/jquery-2.1.0.min.js')}}"></script>
<script type="text/javascript">
    @if ($data)
    var result = 0;
    $('#result').text(result);
    @foreach ($data as $dt)
    $('button.result-{{$dt->cau}}').on('click', function (e) {
        if ($(this).data('dapan') == '{{$dt->dapan}}') {
            $(this).attr('class', 'btn btn-outline-success p-2 m-1 btn-lg');
            $('.{{$dt->cau}}').fadeOut(1000);
            result = result + 1;
            $('#result').text(result);
        } else {
            $(this).attr('class', 'btn btn-outline-danger p-2 m-1 btn-lg');
            $('.{{$dt->cau}}').fadeOut(1000);
        }
    }); 
    @endforeach
    @endif
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <ul class="nav flex-column">
                @for ($i = 1; $i < 8; $i++)
                    <li class="nav-item">
                        <a class="nav-link chuong" href="{{route('ly', ['chuong' => $i])}}" data-chuong="{{$i}}">Chương {{$i}}</a>
                    </li>
                @endfor
            </ul>
        </div>
        <div class="col-md-9">
            @if ($data)
                <h2>Câu đúng:</h2><p><b id="result"></b>/{{$count}}</p>
                @foreach ($data as $dt)
                <div class="{{$dt->cau}}"><h2 class="m-2">Câu {{$dt->cau}}</h2>
                <button class="result-{{$dt->cau}} btn btn-outline-primary p-2 m-1 btn-lg" data-dapan="A">A
                </button>
                <button class="result-{{$dt->cau}} btn btn-outline-primary p-2 m-1 btn-lg" data-dapan="B">B
                </button>
                <button class="result-{{$dt->cau}} btn btn-outline-primary p-2 m-1 btn-lg" data-dapan="C">C
                </button>
                <button class="result-{{$dt->cau}} btn btn-outline-primary p-2 m-1 btn-lg" data-dapan="D">D
                </button>
                </div>
                @endforeach
            @else 
                <h4>Chọn chương muốn làm</h4>
            @endif
        </div>
    </div>
</div>
@endsection
