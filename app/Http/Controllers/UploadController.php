<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class UploadController extends Controller
{
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
					Storage::cloud()->put($filename, file_get_contents($photo));
					array_push($message,'Tải ảnh "'.$filename.'" thành công');
				}
				return redirect()->back()->with('success', $message);
			} else {
				return redirect()->back()->withErrors('failedfomat','1');
			}
		}
	}
}
?>
