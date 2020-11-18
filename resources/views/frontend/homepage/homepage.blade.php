@extends('frontend.layouts.master')
@section('content')
    <ul class="product-list">
        @foreach($products as $product)
            <li class="wrap-product-list-item ">
                <div class="product product-list-style">
                    <div class="product-thumnail">
                        <a href="san-pham/{{ $product->slug }}" title="{{ $product->name }}">
                            <figure><img
                                        src="{{ count($product->Images) > 0 ? asset($product->Images[0]->url) : asset('assets/images/products/digital_20.jpg') }}"
                                        alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="san-pham/{{ $product->slug }}" title="{{ $product->name }}" class="product-name">
                            <span>{{ $product->name }}</span>
                        </a>
                        <div class="desc">
                            {!! $product->description !!}
                        </div>
                        <div class="product-attribute">
                            <ul class="pr-attr color">
                                <li><span class="attr-red-color"></span></li>
                                <li><span class="attr-yellow-color"></span></li>
                                <li><span class="attr-blue-color"></span></li>
                                <li><span class="attr-black-color"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="advance-info">
                        <div class="stock-info in-stock">
                            <p class="availability">Availability: <b>In Stock</b></p>
                        </div>
                        <div class="wrap-price"><span class="product-price">{{ number_format($product->price, 0, '', ' ') }} đ</span>
                        </div>
                        <a href="#" class="btn add-to-cart">Add to Cart</a>
                        {{--                        <div class="wrap-btn">--}}
                        {{--                            <a href="#" class="btn btn-compare">Add Compare</a>--}}
                        {{--                            <a href="#" class="btn btn-wishlist">Add Wishlist</a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{--    <div class="wrap-pagination-info">--}}
    {{--        <ul class="page-numbers">--}}
    {{--            <li><span class="page-number-item current">1</span></li>--}}
    {{--            <li><a class="page-number-item" href="#">2</a></li>--}}
    {{--            <li><a class="page-number-item" href="#">3</a></li>--}}
    {{--            <li><a class="page-number-item next-link" href="#">Next</a></li>--}}
    {{--        </ul>--}}
    {{--        <p class="result-count">Showing 1-8 of 12 result</p>--}}
    {{--    </div>--}}
    {!! $products->links() !!}
@endsection
@section('scripts')

@endsection
