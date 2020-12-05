<?php

namespace App\Http\Controllers;

use App\Account;
use App\Events\AccountAvailabeEvent;
use App\Events\AccountSuccessEvent;
use App\Functions;
use App\Role;
use App\Setting;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
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
        $users              =   User::all();
        return view('backend.facebook.account.main',compact('currentFunction', 'users'));
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
            $validator  =   Validator::make($request->all(), [
                'file'          =>  'required|file',
                'stream'        =>  'required|numeric',
            ]);
            if($validator->fails()){
                return response()->json([
                    'type'      =>  'error',
                    'title'     =>  'Lỗi!',
                    'content'   =>  $validator->errors()->all()]);
            }
            /*
             * Upload file text
             * */
            $relativePath = "files/accounts";
            $name = date('Y-m-d-H-i-s');
            $fileName = $request->file('file')->storeAs($relativePath, $name.'.'.$request->file('file')->getClientOriginalExtension());

            /*
             * Read text file
             * */

            $fullPath = storage_path('app/'.$fileName);
            $accounts = file($fullPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $stream = $request->stream;
//            $index = 0;
//            $arrayAccount = [];
            foreach ($accounts as $index => $account){
                $arrayAttr = explode('|', $account);
                $acc = [
                    'stream'    => $stream,
                    'uid'       => $arrayAttr[0],
                    'oldpass'   => $arrayAttr[1],
                    'newpass'   => $arrayAttr[2],
                    'email'     => $arrayAttr[3],
                    'emailpass' => $arrayAttr[4],
                    'useragent' => $arrayAttr[5]
                ];
                Account::create($acc);
                /*if ($index >= 10){
                    Account::insert($arrayAccount);
                    $index = 0;
                    $arrayAccount = [];
                } else {
                    array_push($arrayAccount, $acc);
                    $index++;
                }*/
            }

//            Account::insert($arrayAccount);

            return response()->json([
                'type'      => 'success',
                'title'     => 'Thành công!',
                'content'   => 'Thêm chức năng thành công !!'
            ]);
        } else {
            return response()->json([
                'type'      => 'error',
                'title'     => 'Lỗi!',
                'content'   => 'Không phải ajax request']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if ($id === 'download'){
            $status = $request->status;
            $stream = $request->stream;
            $user = $request->user;
            $created_at = $request->created_at;
            $accounts = Account::query();
            if ($status != 0){
                $accounts = $accounts->where('status', $status);
            }
            if ($stream != 0){
                $accounts = $accounts->where('stream', $stream);
            }
            if ($user != 0){
                $accounts = $accounts->where('user_id', $user);
            }
            if (!empty($created_at)){
                $accounts = $accounts->whereDate('created_at', $created_at);
            }

            $accounts = $accounts->with('User')->get();
            $content = "";
            foreach ($accounts as $account){
                $uid = $account->uid;
                $oldpass = $account->oldpass;
                $newpass = $account->newpass;
                $email = $account->email;
                $useragent = $account->useragent;
                $twofa = $account->twofa;
                $cookie = $account->cookie;
                $user = $account->User ? $account->User->display_name : '';
                $content .= "$uid|$oldpass|$newpass|$email|$twofa|$useragent|$cookie|$user\n";
            }
            $fileName = "backup".date("Y-m-d-H-i-s").".txt";
            $headers = [
                'Content-type' => 'text/plain',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $fileName),
                'Content-Length' => strlen($content)
            ];
            // make a response, with the content, a 200 response code and the headers
            return response()->make($content, 200, $headers);

        }

        if ($id === 'downloadMultipleRows'){
            $rows = $request->rows;
            if (empty($rows)){
                abort(404);
            }
            $accounts = Account::whereIn('id', $rows)->with('User')->get();
            $content = "";
            foreach ($accounts as $account){
                $uid = $account->uid;
                $oldpass = $account->oldpass;
                $newpass = $account->newpass;
                $email = $account->email;
                $useragent = $account->useragent;
                $twofa = $account->twofa;
                $cookie = $account->cookie;
                $user = $account->User ? $account->User->display_name : '';
                $content .= "$uid|$oldpass|$newpass|$email|$twofa|$useragent|$cookie|$user\n";
            }
            $fileName = "backup".date("Y-m-d-H-i-s").".txt";
            $headers = [
                'Content-type' => 'text/plain',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $fileName),
                'Content-Length' => strlen($content)
            ];
            // make a response, with the content, a 200 response code and the headers
            return response()->make($content, 200, $headers);

        }
        if ($request->ajax()) {
            if ($id === 'getDatatable'){
                $status = $request->status;
                $stream = $request->stream;
                $user = $request->user;
                $created_at = $request->created_at;
                $accounts = Account::with('User');
                if ($status != 0){
                    $accounts = $accounts->where('status', $status);
                }
                if ($stream != 0){
                    $accounts = $accounts->where('stream', $stream);
                }
                if ($user != 0){
                    $accounts = $accounts->where('user_id', $user);
                }
                if (!empty($created_at)){
                    $accounts = $accounts->whereDate('created_at', $created_at);
                }
                return datatables($accounts)->make(true);
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
                'twofa'       =>  'nullable|string',
                'email'     =>  'required|email',
                'status'    =>  'required|numeric|min:2'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'type'    => 'error',
                    'title'   => 'Lỗi!',
                    'content' => $validator->errors()->all()]);
            }

            Account::where('id', $id)
                ->update([
                    'typevia'   =>  request('typevia'),
                    'newpass'   =>  request('newpass'),
                    'twofa'     =>  request('twofa'),
                    'email'     =>  request('email'),
                    'status'    =>  request('status'),
                    'cookie'    => request('cookie')
                ]);
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
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            if ($id == 'deleteMultipleRows'){
                $id = $request->rows;
            }
            Account::destroy($id);
            return response()->json([
                'type'      => 'success',
                'title'     => 'Thành công!',
                'content'   => 'Xóa chức năng thành công !!'
            ]);
        } else {
            return response()->json([
                'type'      => 'error',
                'title'     => 'Lỗi!',
                'content'   => 'Không phải ajax request']);
        }
    }
}
