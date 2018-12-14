<header>
    <div class="header-top">
        <div class="content-margins">
            <div class="row">
                <div class="col-md-5 hidden-xs hidden-sm">
                    <div class="entry"><b>contact us:</b> <a href="tel:0904075992">0904 075 992</a></div>
                    <div class="entry"><b>email:</b> <a href="mailto:huudt.dev@gmail.com">huudt.dev@gmail.com</a></div>
                </div>
                <div class="col-md-7 col-md-text-right">
                    <div class="entry"><a class="open-popup " data-toggle="modal" data-target="#myModalLogin" data-rel="1"><b>Đăng nhập</b></a>&nbsp; or &nbsp;<a class="open-popup" data-rel="2"><b>Đăng ký</b></a></div>
                    <div class="entry hidden-xs hidden-sm"><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></div>
                    <div class="entry hidden-xs hidden-sm cart">
                        <a href="{{route('product.shoppingCart')}}">
                            <b class="hidden-xs">Giỏ hàng</b>
                            <span class="cart-icon">
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                <span class="cart-label">{{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}</span>
                            </span>
                            <span class="cart-title hidden-xs">${{ Session::has('cart') ? Session::get('cart')->totalPrice : 0 }}</span>
                        </a>
                    </div>
                    <div class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="content-margins">
            <div class="row">
                <div class="col-xs-3 col-sm-1">
                    <a id="logo" href="index1.html"><img src="img/logo-2.png" alt="" /></a>  
                </div>
                <div class="col-xs-9 col-sm-11 text-right">
                    <div class="nav-wrapper">
                        <div class="nav-close-layer"></div>
                        <nav>
                            <ul>
                                <li class="active">
                                    <a href="{{route('main')}}">Home</a>
                                </li>
                                <li>
                                    <a href="#">about us</a>
                                </li>
                                <li class="megamenu-wrapper">
                                    <a href="#">products</a>
                                    <div class="menu-toggle"></div>
                                    <div class="megamenu">
                                        <div class="links">
                                            <a class="active" href="products1.html">Products Landing 1</a>
                                            <a href="products2.html">Products Landing 2</a>
                                            <a href="products3.html">Products Landing 3</a>
                                            <a href="product.html">Product Detail</a>
                                        </div>
                                        <div class="content">
                                            <div class="row nopadding">
                                                <div class="col-xs-6">
                                                    <div class="product-shortcode style-5">
                                                        <div class="product-label green">best price</div>
                                                        <div class="icons">
                                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="preview">
                                                            <div class="swiper-container" data-loop="1">
                                                                <div class="swiper-button-prev style-1"></div>
                                                                <div class="swiper-button-next style-1"></div>
                                                                <div class="swiper-wrapper">
                                                                    <div class="swiper-slide">
                                                                        <img src="img/product-59.jpg" alt="" />
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <img src="img/product-61.jpg" alt="" />
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="content-animate">
                                                            <div class="title">
                                                                <div class="shortcode-rate-wrapper">
                                                                    <div class="rate-wrapper align-inline">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="h6 animate-to-green"><a href="product.html">modern beat nine</a></div>
                                                            </div>
                                                            <div class="description">
                                                                <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                                            </div>
                                                            <div class="price">
                                                                <div class="simple-article size-4 dark">$630.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="preview-buttons">
                                                            <div class="buttons-wrapper">
                                                                <a class="button size-2 style-2" href="product.html">
                                                                    <span class="button-wrapper">
                                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                                        <span class="text">Learn More</span>
                                                                    </span>
                                                                </a>
                                                                <a class="button size-2 style-3" href="#">
                                                                    <span class="button-wrapper">
                                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                                        <span class="text">Add To Cart</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="product-shortcode style-5">
                                                        <div class="product-label green">best price</div>
                                                        <div class="icons">
                                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="preview">
                                                            <div class="swiper-container" data-loop="1">
                                                                <div class="swiper-button-prev style-1"></div>
                                                                <div class="swiper-button-next style-1"></div>
                                                                <div class="swiper-wrapper">
                                                                    <div class="swiper-slide">
                                                                        <img src="img/product-60.jpg" alt="" />
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <img src="img/product-61.jpg" alt="" />
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="content-animate">
                                                            <div class="title">
                                                                <div class="shortcode-rate-wrapper">
                                                                    <div class="rate-wrapper align-inline">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="h6 animate-to-green"><a href="product.html">modern beat nine</a></div>
                                                            </div>
                                                            <div class="description">
                                                                <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                                            </div>
                                                            <div class="price">
                                                                <div class="simple-article size-4 dark">$630.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="preview-buttons">
                                                            <div class="buttons-wrapper">
                                                                <a class="button size-2 style-2" href="product.html">
                                                                    <span class="button-wrapper">
                                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                                        <span class="text">Learn More</span>
                                                                    </span>
                                                                </a>
                                                                <a class="button size-2 style-3" href="#">
                                                                    <span class="button-wrapper">
                                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                                        <span class="text">Add To Cart</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="services1.html">Services</a>
                                </li>
                                <li>
                                    <a href="blog3.html">blog</a>
                                    <div class="menu-toggle"></div>
                                    <ul>
                                        <li>
                                            <a href="blog3.html">Blog Landing Pages</a>
                                            <div class="menu-toggle"></div>
                                            <ul>
                                                <li><a href="blog3.html">Blog Landing 1</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="blogdetail1.html">Blog Detail Pages</a>
                                            <div class="menu-toggle"></div>
                                            <ul>
                                                <li><a href="blogdetail1.html">Blog Detail 1</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="gallery1.html">gallery</a>
                                    <div class="menu-toggle"></div>
                                    <ul>
                                        <li><a href="gallery1.html">Gallery 1</a></li>
                                        <li><a href="gallery2.html">Gallery 2</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu-wrapper">
                                    <a href="#">Pages</a>
                                    <div class="menu-toggle"></div>
                                    <div class="megamenu">
                                        <div class="links">
                                            <a class="active" href="checkout1.html">Checkout 1</a>
                                            <a href="checkout2.html">Checkout 2</a>
                                            <a href="cart.html">Cart</a>
                                            <a href="elements.html">Elements</a>
                                        </div>
                                        <div class="content">
                                            <div class="row nopadding">
                                                <div class="col-xs-6">
                                                    <div class="product-shortcode style-5">
                                                        <div class="product-label green">best price</div>
                                                        <div class="icons">
                                                            <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                            <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                            <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="preview">
                                                            <div class="swiper-container" data-loop="1">
                                                                <div class="swiper-button-prev style-1"></div>
                                                                <div class="swiper-button-next style-1"></div>
                                                                <div class="swiper-wrapper">
                                                                    <div class="swiper-slide">
                                                                        <img src="img/product-61.jpg" alt="" />
                                                                    </div>
                                                                    <div class="swiper-slide">
                                                                        <img src="img/product-59.jpg" alt="" />
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="content-animate">
                                                            <div class="title">
                                                                <div class="shortcode-rate-wrapper">
                                                                    <div class="rate-wrapper align-inline">
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="h6 animate-to-green"><a href="product.html">modern beat nine</a></div>
                                                            </div>
                                                            <div class="description">
                                                                <div class="simple-article text size-2">Mollis nec consequat at In feugiat molestie tortor a malesuada</div>
                                                            </div>
                                                            <div class="price">
                                                                <div class="simple-article size-4 dark">$630.00</div>
                                                            </div>
                                                        </div>
                                                        <div class="preview-buttons">
                                                            <div class="buttons-wrapper">
                                                                <a class="button size-2 style-2" href="product.html">
                                                                    <span class="button-wrapper">
                                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                                        <span class="text">Learn More</span>
                                                                    </span>
                                                                </a>
                                                                <a class="button size-2 style-3" href="#">
                                                                    <span class="button-wrapper">
                                                                        <span class="icon"><img src="img/icon-3.png" alt=""></span>
                                                                        <span class="text">Add To Cart</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="banner-shortcode style-3 rounded-image text-center" style="background-image: url(img/background-11.jpg);">
                                                        <div class="valign-middle-cell">
                                                            <div class="valign-middle-content">
                                                                <div class="simple-article size-5 light transparent uppercase col-xs-b5"><span class="color">30%</span>DISCOUNT</div>
                                                                <h3 class="h3 light col-xs-b15">all models from relax seriece</h3>
                                                                <div class="simple-article size-3 light transparent col-xs-b30">Vivamus in tempor eros. Phasellus rhoncus in nunc sit amet mattis. Integer in ipsum vestibulum, molestie arcu ac</div>
                                                                <a class="button size-2 style-1" href="#">
                                                                    <span class="button-wrapper">
                                                                        <span class="icon"><img src="img/icon-1.png" alt=""></span>
                                                                        <span class="text">learn more</span>
                                                                    </span>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="contact1.html">contact</a></li>
                            </ul>
                            <div class="navigation-title">
                                Navigation
                                <div class="hamburger-icon active">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="header-bottom-icon toggle-search"><i class="fa fa-search" aria-hidden="true"></i></div>
                    <div class="header-bottom-icon visible-rd"><i class="fa fa-heart-o" aria-hidden="true"></i></div>
                    <!-- <div class="header-bottom-icon visible-rd">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        <span class="cart-label">5</span>
                    </div> -->
                </div>
            </div>
            <div class="header-search-wrapper">
                <div class="header-search-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
                                <form>
                                    <div class="search-submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                        <input type="submit"/>
                                    </div>
                                    <input class="simple-input style-1" type="text" value="" placeholder="Enter keyword" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="button-close"></div>
                </div>
            </div>
        </div>
    </div>
</header>