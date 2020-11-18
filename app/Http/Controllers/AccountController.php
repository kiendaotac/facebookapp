<?php

namespace App\Http\Controllers;

use App\Account;
use App\Functions;
use App\Role;
use Illuminate\Http\Request;
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
        return view('backend.facebook.account.main',compact('currentFunction'));
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
        if ($request->ajax()) {
            if ($id === 'getDatatable'){
                return datatables(Account::query())->make(true);
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
        //
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
