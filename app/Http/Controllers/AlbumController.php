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
        $imgs = \App\Image::where('private', '=', 0)->get();
        return view('album',['images' => $imgs]);
    }
}
