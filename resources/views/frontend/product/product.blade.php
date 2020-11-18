@extends('frontend.layouts.master')
@section('content')
    @php
        $star = $product->star;
        $product_id = $product->id;
    @endphp
    <div class="wrap-product-detail">
        <div class="detail-media">
            <div class="product-gallery">
                <ul class="slides">
                    @if($product->Images)
                        @foreach($product->Images as $image)
                            <li data-thumb="{{ asset($image->url) }}">
                                <img src="{{ asset($image->url) }}" alt="product thumbnail"/>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="detail-info">
            <div class="product-rating" data-produc="{{ $product->id }}">
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5"/>
                    <label data-value="5" class="full" for="star5" title="Awesome - 5 stars"></label>
                    <input type="radio" id="star4half" name="rating" value="4.5"/>
                    <label data-value="4.5" class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                    <input type="radio" id="star4" name="rating" value="4"/>
                    <label data-value="4" class="full" for="star4" title="Pretty good - 4 stars"></label>
                    <input type="radio" id="star3half" name="rating" value="3.5"/>
                    <label data-value="3.5" class="half" for="star3half" title="Meh - 3.5 stars"></label>
                    <input type="radio" id="star3" name="rating" value="3"/>
                    <label data-value="3" class="full" for="star3" title="Meh - 3 stars"></label>
                    <input type="radio" id="star2half" name="rating" value="2.5"/>
                    <label data-value="2.5" class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                    <input type="radio" id="star2" name="rating" value="2"/>
                    <label data-value="2" class="full" for="star2" title="Kinda bad - 2 stars"></label>
                    <input type="radio" id="star1half" name="rating" value="1.5"/>
                    <label data-value="1.5" class="half" for="star1half" title="Meh - 1.5 stars"></label>
                    <input type="radio" id="star1" name="rating" value="1"/>
                    <label data-value="1" class="full" for="star1" title="Sucks big time - 1 star"></label>
                    <input type="radio" id="starhalf" name="rating" value="0.5"/>
                    <label data-value="0.5" class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                </fieldset>
            </div>
            <h2 class="product-name">{{ $product->name }}</h2>
            <div class="short-desc">
                <ul>
                    {!! $product->description !!}
                </ul>
            </div>
            {{--<div class="wrap-social">
                <a class="link-socail" href="#"><img src="{{ asset('assets/images/social-list.png') }}"
                                                     alt="Mạng xã hội"></a>
            </div>--}}
            <div class="wrap-price"><span
                        class="product-price">{{ number_format($product->price, 0, '', ' ') }} đ</span></div>
            <div class="stock-info in-stock">
                <p class="availability">Availability: <b>In Stock</b></p>
            </div>
            <div class="quantity">
                <span>Quantity:</span>
                <div class="quantity-input">
                    <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*">
                    <a class="btn btn-increase" href="#"></a>
                    <a class="btn btn-reduce" href="#"></a>
                </div>
            </div>
            <div class="wrap-butons">
                <a href="#" class="btn add-to-cart">Add to Cart</a>
                <div class="wrap-btn">
                    <a href="#" class="btn btn-compare">Add Compare</a>
                    <a href="#" class="btn btn-wishlist">Add Wishlist</a>
                </div>
            </div>
        </div>
        <div class="advance-info">
            <div class="tab-control normal">
                <a href="#description" class="tab-control-item active">description</a>
            </div>
            <div class="tab-contents">
                <div class="tab-content-item active" id="description">
                    {!! $product->description !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">You also like</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                             data-loop="false" data-nav="true" data-dots="false"
                             data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>
                            @foreach($alsoLike as $product)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ asset("san-pham/{$product->slug}") }}" title="{{ $product->name }}">
                                            <figure><img
                                                        src="{{ $product->Images ? asset($product->Images[0]->url) :  asset('assets/images/products/digital_04.jpg') }}"
                                                        width="214"
                                                        height="214" alt="{{ $product->name }}">
                                            </figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">new</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="{{ asset("san-pham/{$product->slug}") }}" class="function-link">quick
                                                view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ asset("san-pham/{$product->slug}") }}"
                                           class="product-name"><span>{{ $product->name }}</span></a>
                                        <div class="wrap-price"><span class="product-price">{{ number_format($product->price, 0, '', ' ') }} đ</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div><!--End wrap-products-->
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            let star = parseFloat('{{ $star }}');
            $('input[name="rating"][value="' + star + '"]').prop('checked', true);
                    @auth
            let url = '/rate';
            $('.rating label').on('click', function () {
                let id   = $(this).attr('for');
                let star = $('#' + id).val();
                $.ajax(url, {
                    method : 'post',
                    data   : {
                        product_id: {{ $product_id }},
                        _token    : '{{ csrf_token() }}',
                        rate      : star
                    },
                    success: function (response) {
                        notification(response.type, response.title, response.content);
                    }
                });
            })
            @endauth
        })
    </script>
@endsection
