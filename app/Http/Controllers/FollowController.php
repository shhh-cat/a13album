<?php

namespace App\Http\Controllers;

use App\Follow;
use Illuminate\Http\Request;


class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Follow::where('time','TranPhatLoc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($time = null)
    {
        Follow::create(['time' => $time]);
        return "OK";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LythuyetLy  $lythuyetLy
     * @return \Illuminate\Http\Response
     */
    public function show(LythuyetLy $lythuyetLy, $chuong = null)
    {
        if ($chuong)
        {
            $data = LythuyetLy::where('chuong', $chuong)->get();
            return view('ly',['data' => $data,'count' => $data->count()]);
        }
        else
        return view('ly',['data' => $chuong]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LythuyetLy  $lythuyetLy
     * @return \Illuminate\Http\Response
     */
    public function edit(LythuyetLy $lythuyetLy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LythuyetLy  $lythuyetLy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LythuyetLy $lythuyetLy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LythuyetLy  $lythuyetLy
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Follow::truncate();
        return redirect('followList');
    }
}
