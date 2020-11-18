<?php

namespace App\Http\Controllers;

use App\Product;
use App\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RateController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productId = $request->product_id;
        $userId    = Auth::id();
        $star      = $request->rate;
        $rate      = Rate::where('product_id', $productId)->where('user_id', $userId)->first();
        if (is_null($rate)) {
            Rate::create([
                'user_id'    => $userId,
                'product_id' => $productId,
                'rate'       => $star
            ]);
            $product = Product::find($productId);
            $product->vote++;
            $product->total_star += $star;
            $product->star       = $star;
            $product->save();
        } else {
            $rate->update([
                'rate' => $request->rate
            ]);
            $product = Product::where('id', $productId)->with('Rate')->first();
            $star    = 0;
            $total   = count($product->Rate);
            $sum     = 0;
            foreach ($product->Rate as $item) {
                $sum += $item->rate;
            }
            if ($total) {
                $star = floor($sum * 2 / $total) / 2;
            }
            $product->star = $star;
            $product->save();
        }

        return response()->json([
            'type'    => 'success',
            'title'   => 'Thành công!',
            'content' => 'Thêm đánh giá sản phẩm thành công !!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Rate $rate
     * @return \Illuminate\Http\Response
     */
    public function show(Rate $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Rate $rate
     * @return \Illuminate\Http\Response
     */
    public function edit(Rate $rate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Rate $rate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rate $rate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Rate $rate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rate $rate)
    {
        //
    }
}
