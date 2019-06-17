@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-7"><h2>Tải ảnh lên</h2></div>
		<div class="col-md-2"><a class="btn btn-dark" href="{{route('album')}}">Xem ảnh công khai</a></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
            <form class="form-group" action="{{route('postupload')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<label for="Product Name">Ảnh:</label>
					<br>
					<input type="file" class="form-control-file	" name="photos[]" />
					
					<br>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="1" name="private" id="private">
						<label class="form-check-label text-muted" for="private">
						 Riêng tư (Không công khai) ?
						</label>
					</div>
					<br>
					{{-- <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  						<h3 id="status"></h3>
 						 <p id="loaded_n_total"></p>
                    <br>     --}}
					<input type="submit" class="btn btn-primary" value="Lưu trữ" onclick="uploadFile()" />	
				</form>
	@error('photos')
	<div class="alert alert-danger">
		<ul>
				@foreach ($errors->all(	) as $error )
				<li>{{ $error }}</li>
				@endforeach
				{{-- <li>Hãy chọn ảnh cần lưu</li> --}}
		</ul>
	</div>
	@enderror
	@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
			@foreach (\Session::get('success') as $success)
				<li>{{ $success }}</li>
			@endforeach
        </ul>
	</div>
	@elseif(\Session::has('warning'))
	<div class="alert alert-warning">
			<ul>
				@foreach (\Session::get('warning') as $warning)
					<li>{{ $warning }}</li>
				@endforeach
			</ul>
		</div>
	@elseif(\Session::has('failedformat'))
		<div class="alert alert-danger">
				<ul>
					@foreach (\Session::get('failedformat') as $failedformat)
						<li>{{ $failedformat }}</li>
					@endforeach
				</ul>
		</div>
	@endif
			</div>
		</div>
	</div>
@endsection