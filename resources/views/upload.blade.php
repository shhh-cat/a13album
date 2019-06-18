@extends('layouts.app')

@section('style')
<link href="{{ asset('dropzone/basic.min.css') }}" rel="stylesheet">
<link href="{{ asset('dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="{{ asset('dropzone/dropzone.min.js')}}"></script>
<script type="text/javascript">
Dropzone.options.dropzone = {
	dictDefaultMessage: 'Kéo thả hoặc ấn vào đây để tải ảnh lên',
	paramName: "photo", // The name that will be used to transfer the file
	maxFilesize: 20, // MB
	uploadMultiple: false,
	renameFile: function (file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
    },
	headers: {
		'X-CSRF-TOKEN': '{!! csrf_token() !!}'
	},
	acceptedFiles: ".jpeg,.jpg,.png,.gif",
	dictFileTooBig: '<div class="text-warning">Ảnh lớn hớn 20MB</div>',
	dictInvalidFileType: 'Chỉ hỗ trợ định dạng .jpeg, .jpg, .png, .gif',
	dictCancelUpload: '<div class="text-info btn">Hủy bỏ</div>',
	dictCancelUploadConfirmation: 'Chắc chắn hủy bỏ ?',
	dictRemoveFile: '<div class="text-danger btn">Xóa ảnh</div>',
	addRemoveLinks: true,
	timeout: 50000,
	removedfile: function (file) {
		var name = file.upload.filename;
		console.log(name);
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': '{!! csrf_token() !!}'
			},
			type: 'POST',
			url: '{{ route('deleteimage')}}',
			data: {filename: name},
			success: function (data) {
				console.log(data);
			},
			error: function (e) {
				console.log(e);
			}
		});
		var fileRef;
		return (fileRef = file.previewElement) != null ?
			fileRef.parentNode.removeChild(file.previewElement) : void 0;
	},

	success: function (file, response) {
		console.log(response);
	},
	error: function (file, response) {
		return false;
	}
};
</script>
@endsection

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
					<label>Ảnh dưới < 20MB</label>
					<form class="dropzone bg-light rounded" id="dropzone" action="{{route('storeimage')}}" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" name="private" id="private">
							<label class="form-check-label text-muted" for="private">
							 Riêng tư (Chọn trước khi chọn ảnh)
							</label>
						</div>
						<br>	
					</form>
            {{-- <form class="form-group dropzone" id="my-awesome-dropzone" action="{{route('postupload')}}" method="post" enctype="multipart/form-data">
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
					<input type="submit" class="btn btn-primary" value="Lưu trữ" onclick="uploadFile()" />	
				</form> --}}
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