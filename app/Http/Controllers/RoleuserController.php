<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class RoleuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
           $role_id =   $request->role_id;
           $user_id =   $request->user_id;
           $user    =   User::findOrFail($user_id);
           $user->attachRole($role_id);
            return response()->json([
                'type'      => 'success',
                'title'     => 'Thành công!',
                'content'   => 'Phân quyền thành công !!'
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
            if ($id === 'get-list-user-add'){
                $role_id        =   $request->role_id;
                if ($role_id == 0){
                    return datatables(User::where('id',0)->get())->make(true);
                }
                $role           =   Role::find($role_id);
                $user_in_role   =   $role->users;
                $id_user        =   [];
                if (!empty($user_in_role)){
                    foreach ($user_in_role as $item){
                        array_push($id_user, $item->id);
                    }
                }
                $users          =   User::whereNotIn('id',$id_user)->where('state',1)->get();
                return datatables($users)->make(true);
            }
            if ($id === 'get-list-user-remove'){
                $role_id        =   $request->role_id;
                if ($role_id == 0){
                    return datatables(User::where('id',0)->get())->make(true);
                }
                $role           =   Role::find($role_id);
                if (!$role){
                    return datatables(User::where('id',0)->get())->make(true);
                }
                $users          =   $role->users;
                return datatables($users)->make(true);
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
            $role_id =   $request->role_id;
            $user_id =   $request->user_id;
            $user    =   User::find($user_id);
            $user->detachRole($role_id);
            return response()->json([
                'type'      => 'success',
                'title'     => 'Thành công!',
                'content'   => 'Phân quyền thành công !!'
            ]);
        } else {
            return response()->json([
                'type'      => 'error',
                'title'     => 'Lỗi!',
                'content'   => 'Không phải ajax request']);
        }
    }
}
