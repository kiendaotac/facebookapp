<?php

namespace App\Http\Controllers;

use App\Category;
use App\Functions;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
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
        $categories      = Category::where('parent_id', 0)
            ->whereHas('Children', function ($child) {
                $child->where('state', 1);
            })
            ->with(['Children' => function ($child) {
                $child->where('state', 1);
            }])
            ->where('state', 1)
            ->get();

        return view('backend.walmart.product.main', compact('currentFunction', 'categories'));
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
        $product              = new Product();
        $product->category_id = $request->category_id;
        $product->name        = $request->name;
        $product->slug        = '1';
        $product->description = $request->description;
        $product->price       = $request->price;
        $product->view        = 0;
        $product->state       = $request->state;
        $product->save();
        $product->slug = Str::slug($product->name) . '-' . $product->id;
        $product->save();
        $images = [];
        foreach ($request->url as $url) {
            array_push($images, ['url' => $url]);
        }
        $product->images()->createMany($images);

        return response()->json([
            'type'    => 'success',
            'title'   => 'Thành công!',
            'content' => 'Thêm Sản phẩm thành công !!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        if ($product === 'getDatatable') {
            $product = Product::with(['Category', 'Images'])->get();

            return datatables($product)->make(true);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        $product->slug = Str::slug($product->name) . '-' . $product->id;
        $product->Images()->delete();
        $product->save();
        $images = [];
        foreach ($request->url as $url) {
            array_push($images, ['url' => $url]);
        }
        $product->images()->createMany($images);

        return response()->json([
            'type'    => 'success',
            'title'   => 'Thành công!',
            'content' => 'Sửa Sản phẩm thành công !!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'type'    => 'success',
            'title'   => 'Thành công!',
            'content' => 'Xóa sản phẩm thành công !!'
        ]);
    }
}
