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
        $imgs = \App\Image::all();
        return view('album',['images' => $imgs]);
        
	}
}
