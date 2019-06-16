<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Image;
use Auth;

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

	public function uploadSubmit(Request $request)
	{
        // Thiết lập required cho cả 2 mục input
		$this->validate($request, [
			'photos'=>'required',]
		);
        // kiểm tra có files sẽ xử lý
		if($request->hasFile('photos')) {
			$allowedfileExtension=['jpg', 'jpeg', 'png', 'gif', 'tiff', 'bmp'];
			$files = $request->file('photos');
            // flag xem có thực hiện lưu DB không. Mặc định là có
			$exe_flg = true;
			// kiểm tra tất cả các files xem có đuôi mở rộng đúng không
			foreach($files as $file) {
				$extension = $file->getClientOriginalExtension();
				$check=in_array($extension,$allowedfileExtension);

				if(!$check) {
                    // nếu có file nào không đúng đuôi mở rộng thì đổi flag thành false
					$exe_flg = false;
					break;
				}
			} 
			// nếu không có file nào vi phạm validate thì tiến hành lưu DB
			if($exe_flg) {
				// duyệt từng ảnh và thực hiện lưu
				$message = [];
				foreach ($request->photos as $photo) {
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


					array_push($message,'Tải ảnh "'.$filename.'" thành công');
				}
				return redirect()->back()->with('success', $message);
			} else {
				return redirect()->back()->with('failedformat',['Tải ảnh thất bại. Chỉ cho phép ảnh định dạng jpg, jpeg, png, gif, tiff, bmp.']);
			}
		}
	}
}
?>
