<?php

namespace App\Http\Controllers;

use App\Events\MessageEvent;
use App\Functions;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url                =   getURL();
        $currentFunction    =   Functions::where('route',$url)->where('state',1)->orderBy('id','desc')->first();
        $settings           =   Setting::where('key', 'message')->orWhere('key', 'stream')->orWhere('key', 'account')->get();
        return view('backend.facebook.settings.main',compact('currentFunction', 'settings'));
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
    public function store(Request $request)
    {
        if ($request->ajax()) {
            if ($request->type == 'message'){
                Setting::where('key', 'message')->first()->update([
                    'value' => $request->message
                ]);
                event(new MessageEvent($request->message));
                return response()->json([
                    'type'      => 'success',
                    'title'     => 'Thành công!',
                    'content'   => 'Tạo thông báo thành công !!'
                ]);
            }

            if ($request->type == 'stream'){
                Setting::where('key', 'stream')->first()->update([
                    'value' => $request->stream
                ]);

                return response()->json([
                    'type'      => 'success',
                    'title'     => 'Thành công!',
                    'content'   => 'Thay đổi stream thành công !!'
                ]);
            }

            if ($request->type == 'account'){
                Setting::where('key', 'account')->first()->update([
                    'value' => $request->account
                ]);

                return response()->json([
                    'type'      => 'success',
                    'title'     => 'Thành công!',
                    'content'   => 'Thay đổi số lượng account thành công !!'
                ]);
            }

        }
        return response()->json([
            'type'      => 'error',
            'title'     => 'Lỗi!',
            'content'   => 'Không phải ajax request']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
