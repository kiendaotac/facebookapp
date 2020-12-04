<?php

namespace App\Http\Controllers;

use App\Account;
use App\Events\AccountAvailabeEvent;
use App\Events\AccountSuccessEvent;
use App\Functions;
use App\Schedule;
use App\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class WorkController extends Controller
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
        return view('backend.facebook.work.main',compact('currentFunction'));
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
            if ($request->schedule === 'schedule'){
                Schedule::create([
                    'user_id'=>Auth::id(),
                    'date'=>Carbon::today(),
                    'time'=>$request->times
                ]);

                return response()->json([
                    'type'      => 'success',
                    'title'     => 'Thành công!',
                    'content'   => 'Đăng ký lịch thành công !!'
                ]);
            }
            $limit = Setting::where('key', 'account')->first()->value;
            $stream = Setting::where('key', 'stream')->first()->value;
            Account::where('status', 1)->where('stream',$stream)->orderBy('user_id', 'DESC')->limit($limit)->update(['user_id'=>Auth::id()]);
            return response()->json([
                'type'      => 'success',
                'title'     => 'Thành công!',
                'content'   => 'Lấy Account thành công !!'
            ]);
        }
        return response()->json([
            'type'      => 'error',
            'title'     => 'Lỗi!',
            'content'   => 'Không phải ajax request']);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function show(Request $request, $id)
    {
        if ($id === 'download') {
            $fileID = $request->id;
            $uid = Account::where('user_id', Auth::id())->where('id', $fileID)->where('status',1)->firstOrFail()->uid;
            $path = "data/$uid".".html";
            $exists = Storage::disk('local')->exists("public/data/$uid.html");
            if ($exists){
                return response()->download(storage_path("app/public/".$path));
            }
            abort(404);
        }
        if ($request->ajax()) {
            if ($id === 'getDatatable'){
                $limit = Setting::where('key', 'account')->first()->value;
                return datatables(Account::where('user_id', Auth::id())->where('status', 1)->limit($limit)->get())->removeColumn(['emailpass'])->make(true);
            }
        } else {
            return response()->json([
                'type'      => 'error',
                'title'     => 'Lỗi!',
                'content'   => 'Không phải ajax request']);
        }
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
        if ($request->ajax()) {
            $validator  =   Validator::make($request->all(), [
                'typevia'   =>  'required|numeric',
                '2fa'       =>  'nullable|string',
                'email'     =>  'required|email',
                'status'    =>  'required|numeric|min:2'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'type'    => 'error',
                    'title'   => 'Lỗi!',
                    'content' => $validator->errors()->all()]);
            }

            Account::where('status', 1)
                ->where('user_id', Auth::id())
                ->where('id', $id)
                ->update([
                    'typevia'   =>  request('typevia'),
                    '2fa'       =>  request('2fa'),
                    'email'     =>  request('email'),
                    'status'    =>  request('status')
                ]);
            event(new AccountSuccessEvent(Auth::user()));
            $stream = Setting::where('key', 'stream')->first()->value;
            $availableAccount = Account::where('status', 1)->where('stream', $stream)->count();
            event(new AccountAvailabeEvent($availableAccount));

            return response()->json([
                'type'      => 'success',
                'title'     => 'Thành công!',
                'content'   => 'Update Account thành công !!'
            ]);
        }
        return response()->json([
            'type'      => 'error',
            'title'     => 'Lỗi!',
            'content'   => 'Không phải ajax request']);
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
