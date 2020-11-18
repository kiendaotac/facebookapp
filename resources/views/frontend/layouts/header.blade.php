<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="wrap-banner-top">
                <figure><img src="{{ asset('assets/images/banner-top.jpg') }}" alt="mercado top banner" width="1920"
                             height="88"></figure>
            </div>

            <div class="topbar-menu-area">
                <div class="container">
                    {{--<div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item">
                                <a title="Hotline: (+123) 456 789" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        <ul>
                            <li class="menu-item" ><a title="Register or Login" href="login.html">Register or Login</a></li>
                            <li class="menu-item" ><a title="Newsletter" href="#">Newsletter</a></li>
                            <li class="menu-item" ><a title="Store Location" href="#">Store Location</a></li>
                            <li class="menu-item" ><a title="About" href="about-us.html">About</a></li>
                            <li class="menu-item lang-menu menu-item-has-children parent">
                                <a title="English" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-en.png') }}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu lang" >
                                    <li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-hun.png') }}" alt="lang-hun"></span>Hungary</a></li>
                                    <li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-ger.png') }}" alt="lang-ger" ></span>German</a></li>
                                    <li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-fra.png') }}" alt="lang-fre"></span>French</a></li>
                                    <li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{ asset('assets/images/lang-can.png') }}" alt="lang-can"></span>Canada</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children parent" >
                                <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu curency" >
                                    <li class="menu-item" >
                                        <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                    </li>
                                    <li class="menu-item" >
                                        <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                    </li>
                                    <li class="menu-item" >
                                        <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>--}}
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <!-- Logo -->
                    <div class="wrap-logo-top left-section">
                        <a href="{{ asset('/') }}" class="link-to-home">
                            <img src="{{ asset('assets/images/logo-top-1.png') }}" alt="mercado">
                        </a>
                    </div>
                    <!-- Search input -->
                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="#" id="form-search-top" name="form-search-top">
                                <input type="text" name="search" value="" placeholder="Search here...">
                                <button form="form-search-top" type="button" name="search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                                <div class="wrap-list-cate">
                                    <input type="hidden" name="product-cate" value="0" id="product-cate">
                                    <a href="#" class="link-control">All Category</a>
                                    <ul class="list-cate">
                                        <li class="category level-0" data-id="0">All Category</li>
                                        @foreach($categories as $category)
                                            <li class="category level-1"
                                                data-id="{{ $category->id }}">{!!$category->name!!}</li>
                                            @foreach($category->Children as $child)
                                                <li class="category level-2"
                                                    data-id="{{ $child->id }}">{!! $child->name !!}</li>
                                            @endforeach
                                        @endforeach
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- <!-- Add to cart -->
                     <div class="wrap-icon right-section">
                         <div class="wrap-icon-section wishlist">
                             <a href="#" class="link-direction">
                                 <i class="fa fa-heart" aria-hidden="true"></i>
                                 <div class="left-info">
                                     <span class="index">0 item</span>
                                     <span class="title">Wishlist</span>
                                 </div>
                             </a>
                         </div>
                         <div class="wrap-icon-section minicart">
                             <a href="#" class="link-direction">
                                 <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                 <div class="left-info">
                                     <span class="index">4 items</span>
                                     <span class="title">CART</span>
                                 </div>
                             </a>
                         </div>
                         <div class="wrap-icon-section show-up-after-1024">
                             <a href="#" class="mobile-navigation">
                                 <span>1</span>
                                 <span>2</span>
                                 <span>3</span>
                             </a>
                         </div>
                     </div>--}}

                </div>
            </div>

            <div class="nav-section header-sticky">
                <!-- Recommend -->
            {{--<div class="header-nav-section">
                <div class="container">
                    <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
                        <li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
                        <li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
                        <li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
                        <li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
                        <li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
                    </ul>
                </div>
            </div>--}}
            <!-- Top menu -->
                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                            <li class="menu-item home-icon">
                                <a href="{{ asset('/') }}" class="link-term mercado-item-title">
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                </a>
                            </li>
                            @foreach($categories as $category)
                                <li class="menu-item menu-item-has-children item-megamenu">
                                    <a href="#" title="{{ $category->name }}"
                                       class="link-term mercado-item-title">{{ $category->name }}</a>
                                    <div class="wrap-megamenu">
                                        <div class="megamenu-content">
                                            <div class="row">
                                                @foreach($category->Children as $child)
                                                    <div class="custom-col-5">
                                                        <div class="wrap-vertical-nav">
                                                            <h2 class="menu-title"><a href="#"
                                                                                      class="link-term">{{ $child->name }}</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                            {{--  <li class="menu-item menu-item-has-children item-megamenu">
                                  <a href="#" title="Furnitures & Home decors" class="link-term mercado-item-title">Furnitures
                                      & Home decors</a>
                                  <div class="wrap-megamenu">
                                      <div class="megamenu-content min-height-526 bg-furniture-decor">
                                          <div class="row">
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Badroom</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Living Room</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Tops &
                                                                  Tees</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sweaters</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jeans</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Pants</a><span
                                                                      class="nav-label new-label">new</span></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Skirts</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Bedroom</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a><span class="nav-label sale-label">sale</span>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5-2">
                                                  <div class="wrap-banner mg-position-01 banner-style-1 ">
                                                      <h3 class="banner-title">Fresh Look</h3>
                                                      <h4 class="sub-title">We’ll Make Your office more comfortablet</h4>
                                                      <a href="#" class="btn banner-link">Shop now</a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row margin-top-34">
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Dining room</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Accessories</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>

                              <li class="menu-item menu-item-has-children item-megamenu">
                                  <a href="#" title="Digital & Electronics" class="link-term mercado-item-title">Digital &
                                      Electronics</a>
                                  <div class="wrap-megamenu">
                                      <div class="megamenu-content min-height-526 bg-digital-electronic">
                                          <div class="row">
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Smartphone & Tablet</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Laptop & Computer</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Tops &
                                                                  Tees</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sweaters</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jeans</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Pants</a><span
                                                                      class="nav-label new-label">new</span></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Skirts</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Sound & Audio</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a><span class="nav-label sale-label">sale</span>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row margin-top-34">
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Game & Consoles</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Printer & Ink</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>

                              <li class="menu-item menu-item-has-children item-megamenu">
                                  <a href="#" title="Tools & Equipments" class="link-term mercado-item-title">Tools &
                                      Equipments</a>
                                  <div class="wrap-megamenu">
                                      <div class="megamenu-content">

                                          <div class="row">

                                              <div class="col-lg-3">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Men's Fashion</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Footies &
                                                                  Rompersrs</a></li>
                                                      </ul>
                                                  </div>
                                              </div>

                                              <div class="col-lg-3">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Women's Fashion</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Tops &
                                                                  Tees</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sweaters</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jeans</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Pants</a><span
                                                                      class="nav-label new-label">new</span></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Skirts</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Activewear</a></li>
                                                      </ul>
                                                  </div>
                                              </div>

                                              <div class="col-lg-3">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Girl's fashion</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a><span class="nav-label sale-label">sale</span>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Footies &
                                                                  Rompers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>

                                              <div class="col-lg-3">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Boy's Fashion</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Footies &
                                                                  Rompers</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Swimwear</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>

                                          </div>

                                          <div class="row">
                                              <div class="col-sm-12">
                                                  <div class="megamenu-banner without-col grid-two-bn-01">
                                                      <a href="#" class="link-banner banner-effect-3">
                                                          <figure><img
                                                                      src="{{ asset('assets/images/megamenu_tool_equiment_banner_1.jpg') }}"
                                                                      alt="" width="740" height="210"></figure>
                                                      </a>
                                                  </div>
                                                  <div class="megamenu-banner without-col grid-two-bn-02">
                                                      <a href="#" class="link-banner banner-effect-3">
                                                          <figure><img
                                                                      src="{{ asset('assets/images/megamenu_tool_equiment_banner_2.jpg') }}"
                                                                      width="370" height="210" alt=""></figure>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>
                                  </div>
                              </li>

                              <li class="menu-item menu-item-has-children item-megamenu">
                                  <a href="#" title="Kid’s Toys" class="link-term mercado-item-title">Kid’s Toys</a>
                                  <div class="wrap-megamenu">
                                      <div class="megamenu-content min-height-460 bg-kidtoy">
                                          <div class="row">
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Toy Kid’s & Baby</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Tops &
                                                                  Tees</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sweaters</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jeans</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Pants</a><span
                                                                      class="nav-label new-label">new</span></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Skirts</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Accessories</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a><span class="nav-label sale-label">sale</span>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Clothing & Shoes</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="wrap-banner banner-style-2 mg-position-02">
                                              <h3 class="banner-title">Baby and Kids Toothcare</h3>
                                              <h4 class="sub-title">3 simple steps and products to help along the way</h4>
                                              <a href="#" class="btn banner-link">Shop now</a>
                                          </div>
                                      </div>
                                  </div>
                              </li>

                              <li class="menu-item menu-item-has-children item-megamenu">
                                  <a href="#" title="Organics & Spa" class="link-term mercado-item-title">Organics &
                                      Spa</a>
                                  <div class="wrap-megamenu">
                                      <div class="megamenu-content">
                                          <div class="row">
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Spa & Beauty Salon</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#" class="link-term">Foot
                                                                  Massage</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Body
                                                                  scrub</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Facial
                                                                  Spa</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Oil Bath</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Pants</a><span
                                                                      class="nav-label new-label">new</span></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Skirts</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Accessories</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a><span class="nav-label sale-label">sale</span>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Organics</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#" class="link-term">Fruit
                                                                  Soup</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Red Bean
                                                                  Soup</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Chowder</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Kwait
                                                                  Soup</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Clothing & Shoes</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets &
                                                                  Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear &
                                                                  Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                              <div class="custom-col-5">
                                                  <div class="wrap-vertical-nav">
                                                      <h2 class="menu-title">Functional Food</h2>
                                                      <ul>
                                                          <li class="menu-item"><a href="#"
                                                                                   class="link-term">Bodysuits</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Clothing
                                                                  Sets</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Dresses</a>
                                                          </li>
                                                          <li class="menu-item"><a href="#" class="link-term">Jackets
                                                                  &amp; Coats</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Sleepwear
                                                                  &amp; Robes</a></li>
                                                          <li class="menu-item"><a href="#" class="link-term">Bloomers,
                                                                  Diaper Covers</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>