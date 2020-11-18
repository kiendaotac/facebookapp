<?php

namespace App\Http\Controllers;

use App\Functions;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Validator;

class PermissionController extends Controller
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
        $roles              =   Role::all();
        return view('backend.system.permission.main', compact('currentFunction','roles'));
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
                'role_id'       =>  'required|numeric',
                'permission'    =>  'required|string',
                'attach'        =>  'required|string',
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
                    'content'   => 'Phân quyền chức năng thành công !!'
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
                $role_id    =   $request->role;
                if (!$role_id){
                    $role   =   Role::first();
                } else {
                    $role   =   Role::find($role_id);
                }
                $function   =   $this->getDataSorted();
                $permissions= $role->permissions;
//                return $permissions;
                return datatables($function)
                    ->addColumn('xem', function (Functions $f) use ($permissions){
                        if (!empty($permissions)){
                            foreach ($permissions as $permission){
                                $name   =   explode('-',$permission->name);
                                $per    =   $name[0];
                                $func_id=   $name[1];
                                if ($per === 'View' && $func_id == $f->id){
                                    return 1;
                                }
                            }
                        }
                        return 0;
                    })->addColumn('them', function (Functions $f) use ($permissions){
                        if (!empty($permissions)){
                            foreach ($permissions as $permission){
                                $name   =   explode('-',$permission->name);
                                $per    =   $name[0];
                                $func_id=   $name[1];
                                if ($per === 'Add' && $func_id == $f->id){
                                    return 1;
                                }
                            }
                        }
                        return 0;
                    })->addColumn('sua', function (Functions $f) use ($permissions){
                        if (!empty($permissions)){
                            foreach ($permissions as $permission){
                                $name   =   explode('-',$permission->name);
                                $per    =   $name[0];
                                $func_id=   $name[1];
                                if ($per === 'Edit' && $func_id == $f->id){
                                    return 1;
                                }
                            }
                        }
                        return 0;
                    })->addColumn('xoa', function (Functions $f) use ($permissions){
                        if (!empty($permissions)){
                            foreach ($permissions as $permission){
                                $name   =   explode('-',$permission->name);
                                $per    =   $name[0];
                                $func_id=   $name[1];
                                if ($per === 'Delete' && $func_id == $f->id){
                                    return 1;
                                }
                            }
                        }
                        return 0;
                    })
                    ->make(true);
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
    public function destroy($id)
    {
        //
    }

    public function addItem($request){
        if ($request->attach === 'true'){
            $role                       =   Role::find($request->role_id);
            $name                       =   $request->permission.'-'.$request->func_id;
            $permission                 =   Permission::where('name',$name)->first();
            if (is_null($permission)){
                $permission                 =   new Permission();
                $permission->name           =   $request->permission.'-'.$request->func_id;
                $permission->display_name   =   $request->permission.' '.$request->func_id;
                $permission->description    =   'Allow '.$request->permission.' '.$request->func_id;
                $permission->save();
            }
            $role->attachPermission($permission);
        } else {
            $role                       =   Role::find($request->role_id);
            $name                       =   $request->permission.'-'.$request->func_id;
            $permission                 =   Permission::where('name',$name)->first();
            $role->detachPermission($permission);
        }
    }

    public function getDataSorted(){
        $functions  =   Functions::orderBy('ordering','asc')->get();
        $listdata   =   [];
        foreach ($functions as $item){
            if ($item->parent_id == 0){
                array_push($listdata,$item);
                if (count($item->childs)){
                    foreach ($item->childs->sortBy('ordering') as $i){
                        array_push($listdata,$i);
                    }
                }
            }
        }
        return $listdata;
    }
}
