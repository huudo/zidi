@extends('layouts.master')

@section('content')
	<div class="header-empty-space"></div>
	<div class="container">
		<div class="row">
			<div class="empty-space col-xs-b15 col-sm-b30"></div>
			<div class="col-md-9 col-md-push-3">
                <div class="row">
                    <div class="col-sm-6 col-xs-b30 col-sm-b0">
                        
                        <div class="main-product-slider-wrapper swipers-couple-wrapper">
                            <div class="swiper-container swiper-control-top swiper-swiper-unique-id-3 initialized swiper-container-horizontal" id="swiper-unique-id-3">
                               <div class="swiper-button-prev hidden swiper-button-prev-swiper-unique-id-3 swiper-button-disabled"></div>
                               <div class="swiper-button-next hidden swiper-button-next-swiper-unique-id-3"></div>
                               	<div class="swiper-wrapper">
                                   	<div class="swiper-slide swiper-slide-active" style="width: 409px;">
                                        
                                        <div class="product-big-preview-entry swiper-lazy swiper-lazy-loaded" style="background-image: url({{$product->picture}});"></div>
                                   	</div>
                                   	<!-- <div class="swiper-slide swiper-slide-next" style="width: 409px;">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-5.jpg"></div>
                                   	</div>
                                   	<div class="swiper-slide" style="width: 409px;">
                                        <div class="swiper-lazy-preloader"></div>
                                        <div class="product-big-preview-entry swiper-lazy" data-background="img/product-preview-6.jpg"></div>
                                   	</div>    -->                               
                               	</div>
                            </div>

                            <div class="empty-space col-xs-b30 col-sm-b60"></div>

                            <div class="swiper-container swiper-control-bottom swiper-swiper-unique-id-4 initialized swiper-container-horizontal" data-breakpoints="1" data-xs-slides="3" data-sm-slides="3" data-md-slides="4" data-lt-slides="4" data-slides-per-view="5" data-center="1" data-click="1" id="swiper-unique-id-4">
                               <div class="swiper-button-prev hidden swiper-button-prev-swiper-unique-id-4 swiper-button-disabled"></div>
                               <div class="swiper-button-next hidden swiper-button-next-swiper-unique-id-4"></div>
                               <div class="swiper-wrapper" style="transform: translate3d(163.6px, 0px, 0px); transition-duration: 0ms;">
                                   <div class="swiper-slide swiper-slide-active" style="width: 81.8px;">
                                        <div class="product-small-preview-entry">
                                            <img src="{{$product->picture}}" alt="" style="width: 70px; height: 70px">
                                        </div>
                                    </div>
                                    <!-- <div class="swiper-slide swiper-slide-next" style="width: 81.8px;">
                                        <div class="product-small-preview-entry">
                                            <img src="img/product-preview-5_.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 81.8px;">
                                        <div class="product-small-preview-entry">
                                            <img src="img/product-preview-6_.jpg" alt="">
                                        </div>
                                    </div>         -->         
                               </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="simple-article size-3 grey col-xs-b5">{{$product->title}}</div>
                        <div class="h3 col-xs-b25">{{$product->title}}</div>
                        <div class="row col-xs-b25">
                            <div class="col-sm-6">
                                <div class="simple-article size-5 grey">GIÁ: <span class="color">${{$product->price}}</span></div>        
                            </div>
                            <div class="col-sm-6 col-sm-text-right">
                                <div class="rate-wrapper align-inline">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <div class="simple-article size-2 align-inline">128 Reviews</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="simple-article size-3 col-xs-b5">ITEM NO.: <span class="grey">127-#5238</span></div>
                            </div>
                            <div class="col-sm-6 col-sm-text-right">
                                <div class="simple-article size-3 col-xs-b20">AVAILABLE.: <span class="grey">YES</span></div>
                            </div>
                        </div>
                        <div class="simple-article size-3 col-xs-b30">
                        	<?php echo strip_tags($product->description) ; ?>
                        </div>
                        <div class="row col-xs-b40">
                            <div class="col-sm-3">
                                <div class="h6 detail-data-title size-1">Số lượng:</div>
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
                                        <span class="icon"><img src="img/icon-2.png" alt=""></span>
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

                <div class="empty-space col-xs-b35 col-md-b70"></div>

                <div class="tabs-block">
                    <div class="tabulation-menu-wrapper text-center">
                        <div class="tabulation-title simple-input">description</div>
                        <ul class="tabulation-toggle">
                            <li><a class="tab-menu active">description</a></li>
                            <li><a class="tab-menu">technical specs</a></li>
                            <li><a class="tab-menu">testimonials</a></li>
                        </ul>
                    </div>
                    <div class="empty-space col-xs-b30 col-sm-b60"></div>

                    <div class="tab-entry visible" style="display: block; opacity: 1;">
                        <div class="row">
                            <div class="col-sm-6 col-xs-b30 col-sm-b0">
                                <div class="simple-article">
                                    <img class="rounded-image" src="img/thumbnail-15.jpg" alt="">
                                </div>
                                <div class="empty-space col-xs-b25"></div>
                                <div class="h5">Nullam et massa nulla</div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="simple-article size-2">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="simple-article">
                                    <img class="rounded-image" src="img/thumbnail-16.jpg" alt="">
                                </div>
                                <div class="empty-space col-xs-b25"></div>
                                <div class="h5">Vivamus ut posuere nunc</div>
                                <div class="empty-space col-xs-b20"></div>
                                <div class="simple-article size-2">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet.</div>
                            </div>
                        </div>

                        <div class="empty-space col-xs-b35 col-md-b70"></div>

                        <div class="left-right-entry clearfix align-right">
                            <div class="preview-wrapper">
                                <img class="preview" src="img/thumbnail-17.jpg" alt="">
                            </div>
                            <div class="description">
                                <div class="h5">Aenean a tincidunt felis</div>
                                <div class="empty-space col-xs-b15"></div>
                                <div class="simple-article size-2">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vulputate elit.</div>
                                <div class="empty-space col-xs-b30 col-sm-b45"></div>
                                <div class="h5">Nulla sed arcu ipsum</div>
                                <div class="empty-space col-xs-b15"></div>
                                <div class="simple-article size-2">Nullam et massa nulla. Quisque nec magna ornare tellus consequat lacinia a quis sem. Vivamus ut posuere nunc. Praesent porttitor vitae augue in semper. Vestibulum non leo et nisi facilisis consequat. Ut volutpat augue faucibus, fermentum turpis convallis, lobortis augue.</div>
                            </div>
                        </div>

                        <div class="empty-space col-xs-b35 col-md-b70"></div>

                        <div class="left-right-entry clearfix">
                            <div class="preview-wrapper">
                                <img class="preview" src="img/thumbnail-18.jpg" alt="">
                            </div>
                            <div class="description">
                                <div class="h5">Aenean a tincidunt felis</div>
                                <div class="empty-space col-xs-b15"></div>
                                <div class="simple-article size-2">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vulputate elit.</div>
                                <div class="empty-space col-xs-b30 col-sm-b45"></div>
                                <div class="h5">Nulla sed arcu ipsum</div>
                                <div class="empty-space col-xs-b15"></div>
                                <div class="simple-article size-2">Nullam et massa nulla. Quisque nec magna ornare tellus consequat lacinia a quis sem. Vivamus ut posuere nunc. Praesent porttitor vitae augue in semper. Vestibulum non leo et nisi facilisis consequat. Ut volutpat augue faucibus, fermentum turpis convallis, lobortis augue.</div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-entry" style="display: none; opacity: 1;">
                        <div class="h5">watch 38mm</div>
                        <div class="empty-space col-xs-b15"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-description-entry row nopadding">
                                    <div class="col-xs-6">
                                        <div class="h6">height:</div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="simple-article size-2">38.6mm</div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-6">
                                <div class="product-description-entry row nopadding">
                                    <div class="col-xs-6">
                                        <div class="h6">width:</div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="simple-article size-2">33.3mm</div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-6">
                                <div class="product-description-entry row nopadding">
                                    <div class="col-xs-6">
                                        <div class="h6">depth:</div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="simple-article size-2">10.5mm</div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-6">
                                <div class="product-description-entry row nopadding">
                                    <div class="col-xs-6">
                                        <div class="h6">case:</div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="simple-article size-2">40g</div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-6">
                                <div class="product-description-entry row nopadding">
                                    <div class="col-xs-6">
                                        <div class="h6">material:</div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="simple-article size-2">Stainless Steel</div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="empty-space col-xs-b30 col-sm-b60"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="simple-article size-2 text-center">
                                    <img src="img/thumbnail-19.jpg" alt="">
                                    <p><br>Stainless Steel</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="simple-article size-2 text-center">
                                    <img src="img/thumbnail-20.jpg" alt="">
                                    <p><br>Space Black Stainless Steel</p>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space col-xs-b30 col-sm-b60"></div>
                        <div class="h5">watch 42mm</div>
                        <div class="empty-space col-xs-b15"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-description-entry row nopadding">
                                    <div class="col-xs-6">
                                        <div class="h6">height:</div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="simple-article size-2">42.0mm</div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-6">
                                <div class="product-description-entry row nopadding">
                                    <div class="col-xs-6">
                                        <div class="h6">width:</div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="simple-article size-2">35.9mm</div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-6">
                                <div class="product-description-entry row nopadding">
                                    <div class="col-xs-6">
                                        <div class="h6">depth:</div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="simple-article size-2">10.5mm</div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-6">
                                <div class="product-description-entry row nopadding">
                                    <div class="col-xs-6">
                                        <div class="h6">case:</div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="simple-article size-2">50g</div>
                                    </div>
                                </div>  
                            </div>
                            <div class="col-sm-6">
                                <div class="product-description-entry row nopadding">
                                    <div class="col-xs-6">
                                        <div class="h6">material:</div>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="simple-article size-2">Space Black Stainless Steel</div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="empty-space col-xs-b30 col-sm-b60"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="simple-article size-2 text-center">
                                    <img src="img/thumbnail-21.jpg" alt="">
                                    <p><br>Stainless Steel</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="simple-article size-2 text-center">
                                    <img src="img/thumbnail-22.jpg" alt="">
                                    <p><br>Space Black Stainless Steel</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-entry" style="display: none; opacity: 1;">
                        <div class="testimonial-entry">
                            <div class="row col-xs-b20">
                                <div class="col-xs-8">
                                    <img class="preview" src="img/testimonial-1.jpg" alt="">
                                    <div class="heading-description">
                                        <div class="h6 col-xs-b5">Dorian gray</div>
                                        <div class="rate-wrapper align-inline">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <div class="simple-article size-1 grey">20:45 APR 07 / 15</div>
                                </div>
                            </div>
                            <div class="simple-article size-2 col-xs-b15">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vulputate elit. </div>
                            <div class="pros">
                                <div class="simple-article size-2 col-xs-b15">Runc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis</div>
                            </div>
                            <div class="cons">
                                <div class="simple-article size-2 col-xs-b25">Do not have</div>
                            </div>
                        </div>
                        <div class="testimonial-entry">
                            <div class="row col-xs-b20">
                                <div class="col-xs-8">
                                    <img class="preview" src="img/testimonial-2.jpg" alt="">
                                    <div class="heading-description">
                                        <div class="h6 col-xs-b5">alan doe</div>
                                        <div class="rate-wrapper align-inline">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <div class="simple-article size-1 grey">20:45 APR 07 / 15</div>
                                </div>
                            </div>
                            <div class="simple-article size-2 col-xs-b15">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vulputate elit. </div>
                            <div class="pros">
                                <div class="simple-article size-2 col-xs-b15">Runc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis</div>
                            </div>
                            <div class="cons">
                                <div class="simple-article size-2 col-xs-b25">Do not have</div>
                            </div>
                        </div>
                        <div class="testimonial-entry">
                            <div class="row col-xs-b20">
                                <div class="col-xs-8">
                                    <img class="preview" src="img/testimonial-3.jpg" alt="">
                                    <div class="heading-description">
                                        <div class="h6 col-xs-b5">samantha rae</div>
                                        <div class="rate-wrapper align-inline">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <div class="simple-article size-1 grey">20:45 APR 07 / 15</div>
                                </div>
                            </div>
                            <div class="simple-article size-2 col-xs-b15">Sed sodales sed orci molestie tristique. Nunc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur vulputate elit. </div>
                            <div class="pros">
                                <div class="simple-article size-2 col-xs-b15">Runc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis</div>
                            </div>
                            <div class="cons">
                                <div class="simple-article size-2 col-xs-b25">Do not have</div>
                            </div>
                        </div>
                        <form>
                            <div class="row m10">
                                <div class="col-sm-6">
                                    <input class="simple-input" type="text" value="" placeholder="Your name">
                                    <div class="empty-space col-xs-b20"></div>
                                </div>
                                <div class="col-sm-6">
                                    <input class="simple-input" type="text" value="" placeholder="Your name">
                                    <div class="empty-space col-xs-b20"></div>
                                </div>
                                <div class="col-sm-12">
                                    <input class="simple-input" type="text" value="" placeholder="Describe the pros">
                                    <div class="empty-space col-xs-b20"></div>
                                </div>
                                <div class="col-sm-12">
                                    <input class="simple-input" type="text" value="" placeholder="Describe cons">
                                    <div class="empty-space col-xs-b20"></div>
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="simple-input" placeholder="Your comment"></textarea>
                                    <div class="empty-space col-xs-b20"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="align-inline">
                                        <div class="empty-space col-xs-b5"></div>
                                        <div class="simple-article size-3">Rating&nbsp;&nbsp;&nbsp;</div>
                                        <div class="empty-space col-xs-b5"></div>
                                    </div>
                                    <div class="rate-wrapper set align-inline">
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <div class="button size-2 style-3">
                                        <span class="button-wrapper">
                                            <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                            <span class="text">submit</span>
                                        </span>
                                        <input type="submit" value="">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="empty-space col-xs-b35 col-md-b70"></div>

                <div class="swiper-container rounded swiper-swiper-unique-id-5 initialized swiper-container-horizontal" id="swiper-unique-id-5">
                    <div class="swiper-button-prev style-1 hidden swiper-button-prev-swiper-unique-id-5 swiper-button-disabled"></div>
                    <div class="swiper-button-next style-1 hidden swiper-button-next-swiper-unique-id-5"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-slide-active" style="width: 848px;">
                            <div class="banner-shortcode style-1">
                                <div class="background" style="background-image: url(img/thumbnail-14.jpg);"></div>
                                <div class="description valign-middle">
                                    <div class="valign-middle-content">
                                        <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                        <div class="banner-title color">UP TO 70%</div>
                                        <div class="h4 light">best android tv box</div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <a class="button size-1 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                                <span class="text">learn more</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" style="width: 848px;">
                            <div class="banner-shortcode style-1">
                                <div class="background" style="background-image: url(img/thumbnail-10.jpg);"></div>
                                <div class="description valign-middle">
                                    <div class="valign-middle-content">
                                        <div class="simple-article size-3 light fulltransparent">DON'T MISS!</div>
                                        <div class="banner-title color">UP TO 70%</div>
                                        <div class="h4 light">best android tv box</div>
                                        <div class="empty-space col-xs-b25"></div>
                                        <a class="button size-1 style-3" href="#">
                                            <span class="button-wrapper">
                                                <span class="icon"><img src="img/icon-4.png" alt=""></span>
                                                <span class="text">learn more</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="empty-space col-xs-b60 col-sm-b0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-swiper-unique-id-5 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                </div>

                <div class="empty-space col-xs-b35 col-md-b70"></div>
                <div class="empty-space col-md-b70"></div>

            </div>
            <div class="col-md-3 col-md-pull-9">

                    <div class="h4 col-xs-b25">Danh mục</div>
                    <ul class="categories-menu">
                                                                               
                            <li>
                                <a href="#">Sâm nấm</a>
                            </li>
                                                       
                            <li>
                                <a href="#">Linh chi</a>
                            </li>
                                                       
                            <li>
                                <a href="#">Thực phẩm chức năng</a>
                            </li>
                                                                                                           
                            <li>
                                <a href="#">Mỹ phẩm</a>
                            </li>
                                                       
                            <li>
                                <a href="#">Quần áo</a>
                            </li>
                                                       
                            <li>
                                <a href="#">Trang sức</a>
                            </li>
                                                                                                                            </ul>

                    <div class="empty-space col-xs-b25 col-sm-b50"></div>

                    <div class="row">
                        <div class="col-sm-6 col-md-12">
                            <div class="swiper-container banner-shortcode style-2 swiper-swiper-unique-id-11 initialized swiper-container-horizontal" id="swiper-unique-id-11">
                                <div class="swiper-button-prev hidden swiper-button-prev-swiper-unique-id-11 swiper-button-disabled"></div>
                                <div class="swiper-button-next hidden swiper-button-next-swiper-unique-id-11"></div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide-active" style="width: 263px;">
                                        <div class="banner-shortcode style-2">
                                            <div class="content">
                                                <div class="background" style="background-image: url(img/thumbnail-11.jpg);"></div>
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
                                    <div class="swiper-slide swiper-slide-next" style="width: 263px;">
                                        <div class="banner-shortcode style-2">
                                            <div class="content">
                                                <div class="background" style="background-image: url(img/thumbnail-11.jpg);"></div>
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
                                    <div class="swiper-slide" style="width: 263px;">
                                        <div class="banner-shortcode style-2">
                                            <div class="content">
                                                <div class="background" style="background-image: url(img/thumbnail-11.jpg);"></div>
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
                                    <div class="swiper-slide" style="width: 263px;">
                                        <div class="banner-shortcode style-2">
                                            <div class="content">
                                                <div class="background" style="background-image: url(img/thumbnail-11.jpg);"></div>
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
                                <div class="swiper-pagination swiper-pagination-swiper-unique-id-11 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                            </div>

                            <div class="empty-space col-xs-b25 col-sm-b50"></div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <div class="h4 col-xs-b25">most viewed</div>
                            <div class="product-shortcode style-4 clearfix">
                                <a class="preview" href="#"><img src="img/product-28.jpg" alt=""></a>
                                <div class="description">
                                    <div class="simple-article color size-1 col-xs-b5"><a href="#">WIRELESS</a></div>
                                    <h6 class="h6 col-xs-b10"><a href="#">wireless headphones</a></h6>
                                    <div class="simple-article dark">$98.00</div>
                                </div>
                            </div>
                            <div class="col-xs-b10"></div>
                            <div class="product-shortcode style-4 clearfix">
                                <a class="preview" href="#"><img src="img/product-29.jpg" alt=""></a>
                                <div class="description">
                                    <div class="simple-article color size-1 col-xs-b5"><a href="#">CASES</a></div>
                                    <h6 class="h6 col-xs-b10"><a href="#">earphones case</a></h6>
                                    <div class="simple-article dark">$12.00</div>
                                </div>
                            </div>
                            <div class="col-xs-b10"></div>
                            <div class="product-shortcode style-4 clearfix">
                                <a class="preview" href="#"><img src="img/product-30.jpg" alt=""></a>
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
                            <div class="swiper-container swiper-swiper-unique-id-12 initialized swiper-container-horizontal" id="swiper-unique-id-12">
                                <div class="swiper-button-prev hidden swiper-button-prev-swiper-unique-id-12 swiper-button-disabled"></div>
                                <div class="swiper-button-next hidden swiper-button-next-swiper-unique-id-12"></div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide-active" style="width: 263px;">
                                        <div class="product-shortcode style-1 text-center">
                                            <div class="title">
                                                <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                                <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                            </div>
                                            <div class="preview">
                                                <img src="img/product-26.jpg" alt="">
                                                <div class="preview-buttons valign-middle">
                                                    <div class="valign-middle-content">
                                                        <a class="button size-2 style-2" href="#">
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
                                    <div class="swiper-slide swiper-slide-next" style="width: 263px;">
                                        <div class="product-shortcode style-1 text-center">
                                            <div class="title">
                                                <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                                <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                            </div>
                                            <div class="preview">
                                                <img src="img/product-27.jpg" alt="">
                                                <div class="preview-buttons valign-middle">
                                                    <div class="valign-middle-content">
                                                        <a class="button size-2 style-2" href="#">
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
                                    <div class="swiper-slide" style="width: 263px;">
                                        <div class="product-shortcode style-1 text-center">
                                            <div class="title">
                                                <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                                <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                            </div>
                                            <div class="preview">
                                                <img src="img/product-26.jpg" alt="">
                                                <div class="preview-buttons valign-middle">
                                                    <div class="valign-middle-content">
                                                        <a class="button size-2 style-2" href="#">
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
                                    <div class="swiper-slide" style="width: 263px;">
                                        <div class="product-shortcode style-1 text-center">
                                            <div class="title">
                                                <div class="simple-article size-1 color col-xs-b5"><a href="#">LAPTOPS</a></div>
                                                <div class="h6 animate-to-green"><a href="#">high-end spectre x360</a></div>
                                            </div>
                                            <div class="preview">
                                                <img src="img/product-25.jpg" alt="">
                                                <div class="preview-buttons valign-middle">
                                                    <div class="valign-middle-content">
                                                        <a class="button size-2 style-2" href="#">
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
                                <div class="swiper-pagination swiper-pagination-swiper-unique-id-12 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                            </div>

                            <div class="empty-space col-xs-b25 col-sm-b50"></div>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <div class="h4 col-xs-b25">latest post</div>
                            <div class="row m5 text-center">
                                <div class="blog-shortcode style-1">
                                    <a href="#" class="preview simple-mouseover"><img src="img/thumbnail-12.jpg" alt=""></a>
                                    <div class="description">
                                        <div class="simple-article size-1 grey col-xs-b5">APR 07 / 15 &nbsp;&nbsp;&nbsp;<a href="#" class="color">GADGETS</a></div>
                                        <h6 class="h6 col-xs-b10"><a href="#">Phasellus rhoncus in</a></h6>
                                        <div class="simple-article size-2">Etiam mollis tristique mi ac ultrices. Morbi vel neque eget lacus</div>
                                    </div>
                                </div>
                                
                                <div class="blog-shortcode style-1">
                                    <a href="#" class="preview simple-mouseover"><img src="img/thumbnail-13.jpg" alt=""></a>
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
@endsection