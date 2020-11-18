<!DOCTYPE html>
@php
    $categories = \App\Category::where('parent_id', 0)->where('state', 1)->with('Children')->get();
    $popularProducts = \App\Product::where('state', 1)->orderBy('view','DESC')->take(4)->get();
    $bestRate = \App\Product::where('state', 1)->orderBy('star', 'DESC')->orderBy('total_star', 'DESC')->take(4)->get();
@endphp
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('custom.app_name') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&subset=latin,latin-ext"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&subset=latin,latin-ext"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <style>
        /*@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);*/

        fieldset, label {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 20px;
        }

        h1 {
            font-size: 1.5em;
            margin: 10px;
        }

        /****** Style Star Rating Widget *****/

        .rating {
            border: none;
            float: left;
        }

        .rating > input {
            display: none;
        }

        .rating > label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        .rating > .half:before {
            content: "\f089";
            position: absolute;
        }

        .rating > label {
            color: #ddd;
            float: right;
        }

        /***** CSS Magic to Highlight Stars on Hover *****/

        .rating > input:checked ~ label, /* show gold star when clicked */
        .rating:not(:checked) > label:hover, /* hover current star */
        .rating:not(:checked) > label:hover ~ label {
            color: #FFD700;
        }

        /* hover previous stars in list */

        .rating > input:checked + label:hover, /* hover current star when changing rating */
        .rating > input:checked ~ label:hover,
        .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
        .rating > input:checked ~ label:hover ~ label {
            color: #FFED85;
        }
    </style>
</head>
<body class="shop-page">

<!-- mobile menu -->
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels"></div>
</div>

<!--header-->
@include('frontend.layouts.header')

<!--main area-->
<main id="main" class="main-site ">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ asset('/') }}" class="link">home</a></li>
                {{--                <li class="item-link"><span>Digital & Electronics</span></li>--}}
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

            {{-- <div class="banner-shop">
                 <a href="#" class="banner-link">
                     <figure><img src="{{ asset('assets/images/shop-banner.jpg') }}" alt=""></figure>
                 </a>
             </div>

             <div class="wrap-shop-control">
                 <h1 class="shop-title">Digital & Electronics</h1>
                 <div class="wrap-right">
                     <div class="sort-item orderby ">
                         <select name="orderby" class="use-chosen">
                             <option value="menu_order" selected="selected">Default sorting</option>
                             <option value="popularity">Sort by popularity</option>
                             <option value="rating">Sort by average rating</option>
                             <option value="date">Sort by newness</option>
                             <option value="price">Sort by price: low to high</option>
                             <option value="price-desc">Sort by price: high to low</option>
                         </select>
                     </div>

                     <div class="sort-item product-per-page">
                         <select name="post-per-page" class="use-chosen">
                             <option value="12" selected="selected">12 per page</option>
                             <option value="16">16 per page</option>
                             <option value="18">18 per page</option>
                             <option value="21">21 per page</option>
                             <option value="24">24 per page</option>
                             <option value="30">30 per page</option>
                             <option value="32">32 per page</option>
                         </select>
                     </div>

                     <div class="change-display-mode">
                         <a href="grid-right-sidebar.html" class="grid-mode display-mode "><i
                                     class="flaticon-squares"></i>Grid</a>
                         <a href="#" class="list-mode display-mode active "><i
                                     class="flaticon-interface"></i>List</a>
                     </div>

                 </div>

             </div>--}}
            <!--end wrap shop control-->

                @yield('content')

            </div><!--end main products area-->

            <!--start sidebar-->
        @include('frontend.layouts.right-side-bar')
        <!--end sidebar-->

        </div><!--end row-->

    </div><!--end container-->

</main>
<!--main area-->

<!--footer area-->
@include('frontend.layouts.footer')

<script src='{{ asset('assets/js/jquery-1.12.4.min.js?ver=1.12.4') }}'></script>
<script src='{{ asset('assets/js/jquery-ui-1.12.4.min.js?ver=1.12.4') }}'></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script>
    $(document).ready(function () {
        let category = 0;
        $(document).on('click', 'button[name=search]', function () {
            let keyword     = $('input[name=search]').val();
            let amount      = $('input#amount').val();
            let regExp      = /\d+/g;
            let arrAmount   = amount.match(regExp);
            window.location = `/?keyword=${keyword}&category=${category}&min=${arrAmount[0]}&max=${arrAmount[1]}`;
        });
        $(document).on('click', 'li.category', function () {
            category = $(this).data('id');
        })
    })
</script>
@yield('scripts')
</body>
</html>