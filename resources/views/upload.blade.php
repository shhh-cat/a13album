<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Kĩ niệm A13</title>
     <!-- Scripts -->
	 <script src="{{ asset('js/app.js') }}" defer></script>
	 <!-- Fonts -->
	 <link rel="dns-prefetch" href="//fonts.gstatic.com">
	 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
 
	 <!-- Styles -->
	 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<style>
		.container {
			padding-top:2%;
		}
		ul{
			margin: 0;
		}
	</style>
</head>
<body>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
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
@endif
	<div class="container">
		<div class="row">
        <div class="col-md-2"> <img src="{{asset('icon.jpg')}}" width="80" /></div>
		<div class="col-md-8"><h2>A13 Album</h2></div>
		<div class="col-md-2"><a class="btn btn-success" href="{{route('album')}}">Xem Album</a></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
            <form class="form-group" action="{{route('postupload')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<label for="Product Name">Ảnh (up nhiều ảnh cũng được):</label>
					<br>
					<input type="file" class="form-control-file	" name="photos[]" multiple />
					
					<br>
					{{-- <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  						<h3 id="status"></h3>
 						 <p id="loaded_n_total"></p>
                    <br>     --}}
					<input type="submit" class="btn btn-primary" value="Upload" onclick="uploadFile()" />	
                </form>
			</div>
		</div>
	</div>

	{{-- <script type="text/javascript">
function _(el) {
  return document.getElementById(el);
}

function uploadFile() {
  var ajax = new XMLHttpRequest();
  ajax.upload.addEventListener("progress", progressHandler, false);
  ajax.addEventListener("load", completeHandler, false);
  ajax.addEventListener("error", errorHandler, false);
  ajax.addEventListener("abort", abortHandler, false);
  ajax.open("POST", "file_upload_parser.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
  //use file_upload_parser.php from above url
}

function progressHandler(event) {
  _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
  var percent = (event.loaded / event.total) * 100;
  _("progressBar").value = Math.round(percent);
  _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
}

function completeHandler(event) {
  _("status").innerHTML = event.target.responseText;
  _("progressBar").value = 0; //wil clear progress bar after successful upload
}

function errorHandler(event) {
  _("status").innerHTML = "Upload Failed";
}

function abortHandler(event) {
  _("status").innerHTML = "Upload Aborted";
}
		</script> --}}
</body>
</html>