<?php

namespace App\Http\Controllers;

use App\Functions;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;

class RolesController extends Controller
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
        return view('backend.system.roles.main', compact('currentFunction'));
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
                'name'          =>  'required|unique:roles,name',
                'display_name'  =>  'nullable|string',
                'description'   =>  'nullable|string',
            ]);
            if($validator->fails()){
                return response()->json([
                    'type'      =>  'error',
                    'title'     =>  'Lỗi!',
                    'content'   =>  $validator->errors()->all()]);
            } else{
                $this->addItem($request);
                return response()->json([
                    'type'      => 'success',
                    'title'     => 'Thành công!',
                    'content'   => 'Thêm chức năng thành công !!'
                ]);
            }
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
                $roles  =   Role::withTrashed()->get();
                return datatables($roles)->make(true);
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
                'name'          =>  'required',Rule::unique('roles','name')->ignore($id),
                'display_name'  =>  'nullable|string',
                'description'   =>  'nullable|string',
            ]);
            if($validator->fails()){
                return response()->json([
                    'type'      =>  'error',
                    'title'     =>  'Lỗi!',
                    'content'   =>  $validator->errors()->all()]);
            } else{
                $this->editItem($request,$id);
                return response()->json([
                    'type'      => 'success',
                    'title'     => 'Thành công!',
                    'content'   => 'Sửa chức năng thành công !!'
                ]);
            }
        } else {
            return response()->json([
                'type'      => 'error',
                'title'     => 'Lỗi!',
                'content'   => 'Không phải ajax request']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::find($id)->forceDelete();
        return response()->json([
            'type'      => 'success',
            'title'     => 'Thành công!!',
            'content'   => 'Xóa role thành công']);
    }

    public function addItem($request){
        $role               =   new Role();
        $role->name         =   $request->name;
        $role->display_name =   $request->display_name;
        $role->description  =   $request->description;
        $role->save();
        $state              =   intval($request->state);
        if (!$state){
            $role->delete();
        }
    }

    public function editItem($request,$id){
        $role               =   Role::withTrashed()->where('id',$id)->first();
        $role->name         =   $request->name;
        $role->display_name =   $request->display_name;
        $role->description  =   $request->description;
        $role->deleted_at   =   null;
        $role->save();
        $state              =   intval($request->state);
        if (!$state){
            $role->delete();
        }
    }
}
