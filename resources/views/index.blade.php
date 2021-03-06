@extends('layouts.master')
@section('title')
    Hàng Hàn Quốc nhập khẩu
@endsection
@section('content')
    <div class="header-empty-space"></div>
    <div class="slider-wrapper">
        <div class="swiper-button-prev visible-lg"></div>
        <div class="swiper-button-next visible-lg"></div>
        <div class="swiper-container" data-parallax="1" data-auto-height="1">
           <div class="swiper-wrapper">
               <div class="swiper-slide">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="cell-view page-height">
                                    <div class="col-xs-b40 col-sm-b80"></div>
                                    <div data-swiper-parallax-x="-600">
                                        <div class="simple-article grey size-5">BEST PRICE <span class="color">$199.00</span></div>
                                        <div class="col-xs-b5"></div>
                                    </div>
                                    <div data-swiper-parallax-x="-500">
                                        <h1 class="h1">smartphone x transform</h1>
                                        <div class="title-underline left"><span></span></div>
                                    </div>
                                    <div data-swiper-parallax-x="-400">
                                        <div class="simple-article size-4 grey">In feugiat molestie tortor a malesuada. Etiam a venenatis ipsum. Proin pharetra elit at feugiat commodo vel placerat tincidunt sapien nec</div>
                                        <div class="col-xs-b30"></div>
                                    </div>
                                    <div data-swiper-parallax-x="-300">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="#" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><i class="fa fa-cart-plus"></i></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-b40 col-sm-b80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-product-preview">
                            <div class="product-preview-shortcode">
                                <div class="preview">
                                    <div class="swiper-lazy-preloader"></div>
                                    <div class="entry full-size swiper-lazy active" data-background="#"></div>
                                    <div class="entry full-size swiper-lazy" data-background="#"></div>
                                    <div class="entry full-size swiper-lazy" data-background="#"></div>
                                </div>
                                <div class="sidebar valign-middle" data-swiper-parallax-x="-300">
                                    <div class="valign-middle-content">
                                        <div class="entry active"><img src="#" alt="" /></div>
                                        <div class="entry"><img src="#" alt="" /></div>
                                        <div class="entry"><img src="#" alt="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space col-xs-b80 col-sm-b0"></div>
                    </div>
               </div>

           </div>
           <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="grey-background">
        <div class="empty-space col-xs-b40 col-sm-b80"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="tabs-block">
                        <div class="tabulation-menu-wrapper text-center">
                            <div class="tabulation-title simple-input">all</div>
                            <ul class="tabulation-toggle">
                               <!--  <li><a class="tab-menu active">all</a></li> -->
                                @foreach($categories as $category)
                                    @if($category->id == 1)
                                        <li><a class="tab-menu active">{{$category->description}}</a></li>
                                    @else
                                        <li><a class="tab-menu">{{$category->description}}</a></li>
                                    @endif                                    
                                @endforeach

                            </ul>
                        </div>
                        <div class="empty-space col-xs-b30"></div>
                        <div class="tab-entry visible">
                            <div class="row nopadding">
                                @foreach ($products as $product)
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <!-- <div class="simple-article size-1 color col-xs-b5"><a href="#">{{$product->title}}</a></div> -->
                                            <div class="h6 animate-to-green"><a href="{{route('product.getDetailProduct',['id'=>$product->slug])}}">{{$product->title}}</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="{{$product->picture}}" alt="{{$product->title}}" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3 add-to-card" href="#" data-href = "/add-to-cart/{{$product->id}}">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><i class="fa fa-cart-plus"></i></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$ {{$product->price}}</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">
                                                {{$product->sort_description}}
                                            </div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-entry">
                            <div class="row nopadding">
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="#" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><i class="fa fa-cart-plus"></i></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="#" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><i class="fa fa-cart-plus"></i></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><i class="fa fa-cart-plus"></i></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-entry">
                            <div class="row nopadding">
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="#" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="#" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>

                    <div class="swiper-container arrows-align-top" data-breakpoints="1" data-xs-slides="1" data-sm-slides="3" data-md-slides="4" data-lt-slides="4" data-slides-per-view="4">
                        <div class="h4 swiper-title">our best categories</div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="swiper-button-prev style-1"></div>
                        <div class="swiper-button-next style-1"></div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="#" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                                <a class="product-shortcode style-2" href="#">
                                    <span class="preview"><img src="" alt="" /></span>
                                    <span class="description">
                                        <span class="h6 animate-to-green">smart watches</span>
                                        <span class="simple-article size-1 animate-to-fulltransparent">137 PRODUCTS</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination relative-pagination visible-xs"></div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>

                    <div class="swiper-container arrows-align-top">
                        <div class="h4 swiper-title">people choice</div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="swiper-button-prev style-1"></div>
                        <div class="swiper-button-next style-1"></div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="banner-shortcode style-1">
                                    <div class="background" style="background-image: url('');"></div>
                                    <div class="description valign-middle">
                                        <div class="valign-middle-content">
                                            <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                            <div class="banner-title color">UP TO 70%</div>
                                            <div class="h4 light">best android tv box</div>
                                            <div class="empty-space col-xs-b25"></div>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">learn more</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="banner-shortcode style-1">
                                    <div class="background" style="background-image: url('');"></div>
                                    <div class="description valign-middle">
                                        <div class="valign-middle-content">
                                            <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                            <div class="banner-title color">UP TO 70%</div>
                                            <div class="h4 light">best android tv box</div>
                                            <div class="empty-space col-xs-b25"></div>
                                            <a class="button size-1 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">learn more</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination visible-xs"></div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>

                    <div class="swiper-container arrows-align-top" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lt-slides="2" data-slides-per-view="2">
                        <div class="h4 swiper-title">hot proposes</div>
                        <div class="empty-space col-xs-b20"></div>
                        <div class="swiper-button-prev style-1"></div>
                        <div class="swiper-button-next style-1"></div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-shortcode style-3">
                                    <div class="simple-article size-5 grey col-xs-b20">BEST PRICE: <span class="color">$299.00</span></div>
                                    <div class="products-line col-xs-b25">
                                        <div class="line col-xs-b10"><div class="fill" style="width: 55%;"></div></div>
                                        <div class="row">
                                            <div class="col-xs-6 text-left">
                                                <div class="simple-article size-1">AVAILABLE: <span class="grey">21</span></div>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <div class="simple-article size-1">SOLD: <span class="grey">14</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container" data-loop="1" data-touch="0">
                                        <div class="swiper-button-prev style-1"></div>
                                        <div class="swiper-button-next style-1"></div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="" alt="" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="h6 animate-to-green"><a href="#">smartphone VIBE S1</a></div>
                                    <div class="empty-space col-xs-b10"></div>
                                    <div class="description">
                                        <div class="simple-article size-2">Penatibus nec consequat at In feugiat mole stie tortor a malesuada natoque penatibus</div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="countdown-wrapper">
                                        <div class="countdown" data-end="Sep,1,2017"></div>
                                    </div>
                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-shortcode style-3">
                                    <div class="simple-article size-5 grey col-xs-b20">BEST PRICE: <span class="color">$299.00</span></div>
                                    <div class="products-line col-xs-b25">
                                        <div class="line col-xs-b10"><div class="fill" style="width: 55%;"></div></div>
                                        <div class="row">
                                            <div class="col-xs-6 text-left">
                                                <div class="simple-article size-1">AVAILABLE: <span class="grey">21</span></div>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <div class="simple-article size-1">SOLD: <span class="grey">14</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container" data-loop="1" data-touch="0">
                                        <div class="swiper-button-prev style-1"></div>
                                        <div class="swiper-button-next style-1"></div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="" alt="" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="h6 animate-to-green"><a href="#">smartphone VIBE S1</a></div>
                                    <div class="empty-space col-xs-b10"></div>
                                    <div class="description">
                                        <div class="simple-article size-2">Penatibus nec consequat at In feugiat mole stie tortor a malesuada natoque penatibus</div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="countdown-wrapper">
                                        <div class="countdown" data-end="Sep,1,2017"></div>
                                    </div>
                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-shortcode style-3">
                                    <div class="simple-article size-5 grey col-xs-b20">BEST PRICE: <span class="color">$299.00</span></div>
                                    <div class="products-line col-xs-b25">
                                        <div class="line col-xs-b10"><div class="fill" style="width: 55%;"></div></div>
                                        <div class="row">
                                            <div class="col-xs-6 text-left">
                                                <div class="simple-article size-1">AVAILABLE: <span class="grey">21</span></div>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <div class="simple-article size-1">SOLD: <span class="grey">14</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container" data-loop="1" data-touch="0">
                                        <div class="swiper-button-prev style-1"></div>
                                        <div class="swiper-button-next style-1"></div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="" alt="" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="h6 animate-to-green"><a href="#">smartphone VIBE S1</a></div>
                                    <div class="empty-space col-xs-b10"></div>
                                    <div class="description">
                                        <div class="simple-article size-2">Penatibus nec consequat at In feugiat mole stie tortor a malesuada natoque penatibus</div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="countdown-wrapper">
                                        <div class="countdown" data-end="Sep,1,2017"></div>
                                    </div>
                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-shortcode style-3">
                                    <div class="simple-article size-5 grey col-xs-b20">BEST PRICE: <span class="color">$299.00</span></div>
                                    <div class="products-line col-xs-b25">
                                        <div class="line col-xs-b10"><div class="fill" style="width: 55%;"></div></div>
                                        <div class="row">
                                            <div class="col-xs-6 text-left">
                                                <div class="simple-article size-1">AVAILABLE: <span class="grey">21</span></div>
                                            </div>
                                            <div class="col-xs-6 text-right">
                                                <div class="simple-article size-1">SOLD: <span class="grey">14</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-container" data-loop="1" data-touch="0">
                                        <div class="swiper-button-prev style-1"></div>
                                        <div class="swiper-button-next style-1"></div>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="" alt="" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="h6 animate-to-green"><a href="#">smartphone VIBE S1</a></div>
                                    <div class="empty-space col-xs-b10"></div>
                                    <div class="description">
                                        <div class="simple-article size-2">Penatibus nec consequat at In feugiat mole stie tortor a malesuada natoque penatibus</div>
                                    </div>
                                    <div class="empty-space col-xs-b20"></div>
                                    <div class="countdown-wrapper">
                                        <div class="countdown" data-end="Sep,1,2017"></div>
                                    </div>
                                    <div class="preview-buttons">
                                        <div class="buttons-wrapper">
                                            <a class="button size-2 style-2" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">Learn More</span>
                                                </span>
                                            </a>
                                            <a class="button size-2 style-3" href="#">
                                                <span class="button-wrapper">
                                                    <span class="icon"><img src="" alt=""></span>
                                                    <span class="text">Add To Cart</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination relative-pagination visible-xs"></div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>

                    <div class="tabs-block">
                        <div class="row">
                            <div class="col-lg-4 col-xs-b15 col-lg-b0">
                                <div class="h4">best proposes</div>
                            </div>
                            <div class="col-lg-8">
                                <div class="tabulation-menu-wrapper col-lg-text-right">
                                    <div class="tabulation-title simple-input">all</div>
                                    <ul class="tabulation-toggle">
                                        <li><a class="tab-menu active">all</a></li>
                                        <li><a class="tab-menu">featured</a></li>
                                        <li><a class="tab-menu">on sale</a></li>
                                        <li><a class="tab-menu">top rated</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="empty-space col-xs-b15 col-sm-b30"></div>
                        <div class="tab-entry visible">
                            <div class="row nopadding">
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="color-selection">
                                                <div class="entry active" style="color: #a7f050;"></div>
                                                <div class="entry" style="color: #50e3f0;"></div>
                                                <div class="entry" style="color: #eee;"></div>
                                            </div>
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="color-selection">
                                                <div class="entry active" style="color: #d0c45c;"></div>
                                                <div class="entry" style="color: #000;"></div>
                                                <div class="entry" style="color: #eee;"></div>
                                            </div>
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-entry">
                            <div class="row nopadding">
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="color-selection">
                                                <div class="entry active" style="color: #d0c45c;"></div>
                                                <div class="entry" style="color: #000;"></div>
                                                <div class="entry" style="color: #eee;"></div>
                                            </div>
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-entry">
                            <div class="row nopadding">
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="color-selection">
                                                <div class="entry active" style="color: #a7f050;"></div>
                                                <div class="entry" style="color: #50e3f0;"></div>
                                                <div class="entry" style="color: #eee;"></div>
                                            </div>
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-entry">
                            <div class="row nopadding">
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="color-selection">
                                                <div class="entry active" style="color: #a7f050;"></div>
                                                <div class="entry" style="color: #50e3f0;"></div>
                                                <div class="entry" style="color: #eee;"></div>
                                            </div>
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="color-selection">
                                                <div class="entry active" style="color: #d0c45c;"></div>
                                                <div class="entry" style="color: #000;"></div>
                                                <div class="entry" style="color: #eee;"></div>
                                            </div>
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-shortcode style-1">
                                        <div class="title">
                                            <div class="simple-article size-1 color col-xs-b5"><a href="#">SMART PHONES</a></div>
                                            <div class="h6 animate-to-green"><a href="#">Smartphone vibe x2</a></div>
                                        </div>
                                        <div class="preview">
                                            <img src="" alt="" />
                                            <div class="preview-buttons valign-middle">
                                                <div class="valign-middle-content">
                                                    <a class="button size-2 style-2" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Learn More</span>
                                                        </span>
                                                    </a>
                                                    <a class="button size-2 style-3" href="#">
                                                        <span class="button-wrapper">
                                                            <span class="icon"><img src="" alt=""></span>
                                                            <span class="text">Add To Cart</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <div class="simple-article size-4 dark">$630.00</div>
                                        </div>
                                        <div class="description">
                                            <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                            <div class="icons">
                                                <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>
                </div>
                <div class="col-md-3 col-md-pull-9">

                    <div class="h4 col-xs-b25">Danh mục</div>
                    <ul class="categories-menu">
                        @foreach($categories as $category)
                            @foreach($category->subcategories as $sub)                           
                            <li>
                                <a href="#">{{$sub->description}}</a>
                            </li>
                            @endforeach
                        @endforeach
                    </ul>

                    <div class="empty-space col-xs-b25 col-sm-b50"></div>

                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="swiper-container banner-shortcode style-2">
                                <div class="swiper-button-prev hidden"></div>
                                <div class="swiper-button-next hidden"></div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="banner-shortcode style-2">
                                            <div class="content">
                                                <div class="background" style="background-image: url('');"></div>
                                                <div class="description valign-middle">
                                                    <div class="valign-middle-content">
                                                        <div class="simple-article size-1 color"><a href="#">GADGETS</a></div>
                                                        <div class="h4 light"><a href="#">cool sport gadget</a></div>
                                                        <div class="banner-title color">- 35% OFF</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-shortcode style-2">
                                            <div class="content">
                                                <div class="background" style="background-image: url('');"></div>
                                                <div class="description valign-middle">
                                                    <div class="valign-middle-content">
                                                        <div class="simple-article size-1 color"><a href="#">GADGETS</a></div>
                                                        <div class="h4 light"><a href="#">cool sport gadget</a></div>
                                                        <div class="banner-title color">- 35% OFF</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-shortcode style-2">
                                            <div class="content">
                                                <div class="background" style="background-image: url('');"></div>
                                                <div class="description valign-middle">
                                                    <div class="valign-middle-content">
                                                        <div class="simple-article size-1 color"><a href="#">GADGETS</a></div>
                                                        <div class="h4 light"><a href="#">cool sport gadget</a></div>
                                                        <div class="banner-title color">- 35% OFF</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-shortcode style-2">
                                            <div class="content">
                                                <div class="background" style="background-image: url('');"></div>
                                                <div class="description valign-middle">
                                                    <div class="valign-middle-content">
                                                        <div class="simple-article size-1 color"><a href="#">GADGETS</a></div>
                                                        <div class="h4 light"><a href="#">cool sport gadget</a></div>
                                                        <div class="banner-title color">- 35% OFF</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div class="empty-space col-xs-b25 col-sm-b50"></div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <div class="h4 col-xs-b25">most viewed</div>
                            <div class="product-shortcode style-4 clearfix">
                                <a class="preview" href="#"><img src="" alt="" /></a>
                                <div class="description">
                                    <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                                    <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                                    <div class="simple-article dark">$98.00</div>
                                </div>
                            </div>
                            <div class="col-xs-b10"></div>
                            <div class="product-shortcode style-4 clearfix">
                                <a class="preview" href="#"><img src="" alt="" /></a>
                                <div class="description">
                                    <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                                    <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                                    <div class="simple-article dark">$12.00</div>
                                </div>
                            </div>
                            <div class="col-xs-b10"></div>
                            <div class="product-shortcode style-4 clearfix">
                                <a class="preview" href="#"><img src="" alt="" /></a>
                                <div class="description">
                                    <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                                    <h6 class="h6 col-xs-b10"><a href="#">headphones case</a></h6>
                                    <div class="simple-article dark">$4.00</div>
                                </div>
                            </div>
                            
                            <div class="empty-space col-xs-b25 col-sm-b50"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="h4 col-xs-b25">feature products</div>
                            <div class="swiper-container">
                                <div class="swiper-button-prev hidden"></div>
                                <div class="swiper-button-next hidden"></div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="product-shortcode style-1 text-center">
                                            <div class="title">
                                                <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                                <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                            </div>
                                            <div class="preview">
                                                <img src="" alt="">
                                                <div class="preview-buttons valign-middle">
                                                    <div class="valign-middle-content">
                                                        <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                        </a>
                                                        <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price">
                                                <div class="simple-article size-4 dark">$950.00</div>
                                            </div>
                                            <div class="description">
                                                <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                                <div class="icons">
                                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="empty-space col-xs-b60"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-shortcode style-1 text-center">
                                            <div class="title">
                                                <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                                <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                            </div>
                                            <div class="preview">
                                                <img src="" alt="">
                                                <div class="preview-buttons valign-middle">
                                                    <div class="valign-middle-content">
                                                        <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                        </a>
                                                        <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price">
                                                <div class="simple-article size-4 dark">$950.00</div>
                                            </div>
                                            <div class="description">
                                                <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                                <div class="icons">
                                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="empty-space col-xs-b60"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-shortcode style-1 text-center">
                                            <div class="title">
                                                <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                                <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                            </div>
                                            <div class="preview">
                                                <img src="" alt="">
                                                <div class="preview-buttons valign-middle">
                                                    <div class="valign-middle-content">
                                                        <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                        </a>
                                                        <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price">
                                                <div class="simple-article size-4 dark">$950.00</div>
                                            </div>
                                            <div class="description">
                                                <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                                <div class="icons">
                                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="empty-space col-xs-b60"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="product-shortcode style-1 text-center">
                                            <div class="title">
                                                <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                                <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                            </div>
                                            <div class="preview">
                                                <img src="" alt="">
                                                <div class="preview-buttons valign-middle">
                                                    <div class="valign-middle-content">
                                                        <a class="button size-2 style-2" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="" alt=""></span>
                                                                <span class="text">Learn More</span>
                                                            </span>
                                                        </a>
                                                        <a class="button size-2 style-3" href="#">
                                                            <span class="button-wrapper">
                                                                <span class="icon"><img src="" alt=""></span>
                                                                <span class="text">Add To Cart</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price">
                                                <div class="simple-article size-4 dark">$950.00</div>
                                            </div>
                                            <div class="description">
                                                <div class="simple-article text size-2">Mollis nec consequat at In feugiat mole stie tortor a malesuada</div>
                                                <div class="icons">
                                                    <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                    <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="empty-space col-xs-b60"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                            <div class="empty-space col-xs-b25 col-sm-b50"></div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <div class="h4 col-xs-b25">latest post</div>
                            <div class="row m5 text-center">
                                <div class="blog-shortcode style-1">
                                    <a href="#" class="preview simple-mouseover"><img src="" alt="" /></a>
                                    <div class="description">
                                        <div class="simple-article size-1 grey col-xs-b5">APR 07 / 15 &nbsp;&nbsp;&nbsp;<a href="#" class="color">GADGETS</a></div>
                                        <h6 class="h6 col-xs-b10"><a href="#">Phasellus rhoncus in</a></h6>
                                        <div class="simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus</div>
                                    </div>
                                </div>
                                
                                <div class="blog-shortcode style-1">
                                    <a href="#" class="preview simple-mouseover"><img src="" alt="" /></a>
                                    <div class="description">
                                        <div class="simple-article size-1 grey col-xs-b5">APR 07 / 15 &nbsp;&nbsp;&nbsp;<a href="#" class="color">GADGETS</a></div>
                                        <h6 class="h6 col-xs-b10"><a href="#">Phasellus rhoncus in</a></h6>
                                        <div class="simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus</div>
                                    </div>
                                </div>
                            </div>
                            <div class="empty-space col-xs-b25 col-sm-b50"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection