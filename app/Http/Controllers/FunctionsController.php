<?php

namespace App\Http\Controllers;

use App\Functions;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Validator;

class FunctionsController extends Controller
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
        $functions          =   Functions::where('state',1)->orderBy('ordering','asc')->get();
        return view('backend.system.functions.main', compact('currentFunction','functions'));

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
                'parent_id'     =>  'required',
                'name'          =>  'required',
                'description'   =>  'nullable|string',
                'route'         =>  'nullable|unique:functions,route',
                'controller'    =>  'nullable|unique:functions,controller',
                'ordering'      =>  'nullable|numeric',
                'icon'          =>  'nullable|string',
                'state'         =>  'nullable|numeric',
                'access'        =>  'nullable|numeric'
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
                return datatables($this->getDataSorted())->make(true);
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
                'parent_id'     =>  'required',
                'name'          =>  'required',
                'description'   =>  'nullable|string',
                'route'         =>  'nullable',Rule::unique('functions','route')->ignore($id),
                'controller'    =>  'nullable',Rule::unique('functions','controller')->ignore($id),
                'ordering'      =>  'nullable|numeric',
                'icon'          =>  'nullable|string',
                'state'         =>  'nullable|numeric',
                'access'        =>  'nullable|numeric'
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
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            Functions::destroy($id);
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

    public function addItem($request){
        Functions::create($request->all());
    }

    public function editItem($request, $id){
        $function   =   Functions::find($id);
        $function->fill($request->all());
        $function->save();
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

