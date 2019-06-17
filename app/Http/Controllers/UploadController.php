<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Image;
use Auth;
use Validator;
use Response;
class UploadController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
	}

	public function getURL(String $filename)
	{
		$file = collect(Storage::cloud()->listContents('/', false))
                ->where('type', '=', 'file')
                ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
                ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
				->first();
		return Storage::cloud()->url($file['path']);
		
	}

	public function uploadForm()
	{
		return view('upload');
	}

	public function delete(Request $request)
	{
		$filename = $request->get('filename');
		\App\Image::where('name', $filename)->delete();
		return $filename;
	}

	public function store(Request $request)
	{
        // Thiết lập required cho cả 2 mục input
		$rules= array ([
			'photo'=>'required|max:1',
		]);

		$validation = Validator::make($request->toArray(), $rules);
		if ($validation->fails())
		{
			return Response::make($validation->errors->first(), 400);
		}
		//if (count($request->photo) > 10) 
        // kiểm tra có files sẽ xử lý
		if($request->hasFile('photo')) {
			$allowedfileExtension=['jpg', 'jpeg', 'png', 'gif', 'tiff', 'bmp'];
			$photo = $request->file('photo');
			// kiểm tra tất cả các files xem có đuôi mở rộng đúng không
			$extension = $photo->getClientOriginalExtension();
			$check=in_array($extension,$allowedfileExtension);

			// nếu không có file nào vi phạm validate thì tiến hành lưu DB
			if($check) {
					$filename = $photo->getClientOriginalName();
					$unique_name = md5($filename. time()).'.'.$photo->getClientOriginalExtension();
					//$filesize = filesize($photo);
					//$sizeOptimize = "512000";
					// Handing optimize(resize) image
					$img = Image::make(file_get_contents($photo));
					$img->resize(null, 400, function ($constraint) {
						$constraint->aspectRatio();
					});
//					$img->encode('jpg', ($filesize < $sizeOptimize) ? 100 : ($sizeOptimize*100)/$filesize);
					$img->encode('jpg',90);
					

					// Upload to drive
					// small file
					Storage::cloud()->put('m_'.$unique_name, $img);
					$mURL = $this->getURL('m_'.$unique_name);
					// original file
					Storage::cloud()->put($unique_name, file_get_contents($photo));
					$URL = $this->getURL($unique_name);

					// Save info of image to database
					\App\Image::create([
						'name' => $filename,
						'unique_name' => $unique_name,
						'user_id' => Auth::id(),
						'private' => ($request->private == 1) ? true : false,
						'small_link' => $mURL,
						'original_link' => $URL
					]);
				return Response::json('success', 200);
				//return redirect()->back()->with('success', ['Tải ảnh "'.$filename.'" thành công']);
			} else {
				return Response::json('error', 400);
				//return redirect()->back()->with('failedformat',['Tải ảnh thất bại. Chỉ cho phép ảnh định dạng jpg, jpeg, png, gif, tiff, bmp.']);
			}
		}
	}
}
?>
