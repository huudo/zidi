@extends('layouts.master')

@section('content')
    <div class="grey-background">
        <div class="header-empty-space"></div>
        <div class="container">
            <div class="row">
                <div class="empty-space col-xs-b15 col-sm-b30"></div>
                <div class="col-md-9 col-md-push-3">
                    <section class="info-product-sc">
                        <div class="row">
                            <div class="col-sm-6 col-xs-b30 col-sm-b0">
                                
                                <div class="main-product-slider-wrapper swipers-couple-wrapper">
                                    <div class="swiper-container swiper-control-top">
                                       <div class="swiper-button-prev hidden"></div>
                                       <div class="swiper-button-next hidden"></div>
                                       <div class="swiper-wrapper">
                                            @foreach($product->images as $image)
                                            <div class="swiper-slide">
                                                <div class="swiper-lazy-preloader"></div>
                                                <div class="product-big-preview-entry swiper-lazy" data-background="{{url('storage/app/'.$image->path_url) }}"></div>
                                            </div>
                                            @endforeach
                                       </div>
                                    </div>

                                    <div class="empty-space col-xs-b30 col-sm-b60"></div>
                                    <div class="swiper-container swiper-control-bottom" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="4" data-slides-per-view="5" data-center="1" data-click="1">
                                       <div class="swiper-button-prev hidden"></div>
                                       <div class="swiper-button-next hidden"></div>
                                       <div class="swiper-wrapper">
                                            @foreach($product->images as $image)
                                                <div class="swiper-slide">
                                                    <div class="product-small-preview-entry">
                                                        <img src="{{url('storage/app/'.$image->path_url) }}" style="width: 80px;height: 80px;object-fit: cover;" alt="" />
                                                    </div>
                                                </div>
                                            @endforeach
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="simple-article size-3 grey col-xs-b5">{{$product->sub_categories->description}}</div>
                                <div class="h3 col-xs-b25">{{$product->title}}</div>
                                <div class="row col-xs-b25">
                                    <div class="col-sm-6">
                                        <div class="simple-article size-5 grey">GIÁ: <span class="color">{{number_format($product->price,0)}} VNĐ</span></div>        
                                    </div>
                                    <div class="col-sm-6 col-sm-text-right">
                                        <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">YES</span></div>
                                    </div>
                                </div>
                                <div class="simple-article size-3 col-xs-b30">
                                    {{$product->sort_description}}
                                </div>
                                <div class="row col-xs-b40">
                                    <div class="col-sm-3">
                                        <div class="h6 detail-data-title size-1">quantity:</div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="quantity-select">
                                            <span class="minus"></span>
                                            <span class="number">1</span>
                                            <span class="plus"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m5 col-xs-b40">
                                    <div class="col-sm-6 col-xs-b10 col-sm-b0">
                                        <a class="button size-2 style-2 block" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="" alt=""></span>
                                                <span class="text">add to cart</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="button size-2 style-1 block noshadow" href="#">
                                        <span class="button-wrapper">
                                            <span class="icon"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                                            <span class="text">add to favourites</span>
                                        </span>
                                    </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="h6 detail-data-title size-2">share:</div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="follow light">
                                            <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                                            <a class="entry" href="#"><i class="fa fa-twitter"></i></a>
                                            <a class="entry" href="#"><i class="fa fa-linkedin"></i></a>
                                            <a class="entry" href="#"><i class="fa fa-google-plus"></i></a>
                                            <a class="entry" href="#"><i class="fa fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="empty-space col-xs-b35 col-md-b30"></div>
                    <section class="description-sc">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="detail-description">
                                    <div class="title-description">
                                        <h2>THÔNG TIN CHI TIẾT</h2>
                                    </div>
                                    <div class="content-description">
                                        <?php echo $product->description ;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="empty-space col-xs-b35 col-md-b70"></div>

                    <div class="swiper-container rounded">
                        <div class="swiper-button-prev style-1 hidden"></div>
                        <div class="swiper-button-next style-1 hidden"></div>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="banner-shortcode style-1">
                                    <div class="background" style="background-image: url();"></div>
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
                                    <div class="background" style="background-image: url();"></div>
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
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="empty-space col-xs-b35 col-md-b70"></div>
                    <div class="empty-space col-md-b70"></div>
                </div>
                <div class="col-md-3 col-md-pull-9">

                    
                    <ul class="categories-menu">
                        <div class="h4 col-xs-b25">Danh mục</div>
                        @foreach($categories as $category)
                            @foreach($category->subcategories as $sub)                           
                            <li>
                                <a href="#">{{$sub->description}}</a>
                                <div class="toggle"></i></div>
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
    <style type="text/css">
        .categories-menu{
            background: #fff;
        }
        .categories-menu .h4 {
            padding-top: 20px;
            padding-left: 20px;
        }
        .info-product-sc,.description-sc{
            background: #fff;
            padding: 10px;
            padding-bottom: 20px;
        }
        .detail-description .title-description h2{
            font-size: 18px;
            padding: 10px 0px;
            border-bottom: 1px solid #ccc;
        }
        .detail-description .content-description {
            padding-top: 20px;
            padding-left: 20px;
        }
        .detail-description .content-description p{
            padding-top: 10px;
            line-height: 1.5;
        }
    </style>
@endsection