<?php

namespace App\Http\Controllers;

use App\Category;
use App\Functions;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $url             = getURL();
        $currentFunction = Functions::where('route', $url)->where('state', 1)->orderBy('id', 'desc')->first();
        $categories      = Category::where('parent_id', 0)->where('state', 1)->get();

        return view('backend.walmart.category.main', compact('currentFunction', 'categories'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        Category::create($request->all());

        return response()->json([
            'type'    => 'success',
            'title'   => 'Thành công!',
            'content' => 'Thêm category thành công !!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id === 'getDatatable') {
            return datatables($this->getDataSorted())->make(true);
        }
    }

    public function getDataSorted()
    {
        $categories = Category::where('parent_id', 0)->with('Children')->withCount('Children')->get();
        $listData   = [];
        foreach ($categories as $category) {
            array_push($listData, $category);
            if ($category->children_count > 0)
                foreach ($category->Children as $child) {
                    array_push($listData, $child);
                }
        }

        return $listData;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Category $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        return response()->json([
            'type'    => 'success',
            'title'   => 'Thành công!',
            'content' => 'Sửa category thành công !!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Category $category
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'type'    => 'success',
            'title'   => 'Thành công!',
            'content' => 'Xóa category thành công !!'
        ]);
    }
}
