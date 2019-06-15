<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
class AlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showAll()
	{
        $imgs = \App\Image::all()->toArray();
        $urlImgs = [];
        foreach ($imgs as $img)
        {
            $filename = $img['unique_name'];
            $dir = '/';
            $recursive = false; // Có lấy file trong các thư mục con không?
            $contents = collect(Storage::cloud()->listContents($dir, $recursive));
            $file = $contents
                ->where('type', '=', 'file')
                ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
                ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
                ->first(); // có thể bị trùng tên file với nhau!
            //return $file; // array with file info
            array_push($urlImgs, Storage::cloud()->url($file['path']));
        }
        return view('album',['images' => $urlImgs]);
        
	}
}
