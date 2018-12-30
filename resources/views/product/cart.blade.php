
@extends('layouts.master')
@section('title')
    Thông tin giỏ hàng
@endsection
@section('content')
<div class="header-empty-space"></div>

<div class="container">
    <div class="empty-space col-xs-b15 col-sm-b30"></div>
    <div class="breadcrumbs">
        <a href="{{route('main')}}">Trang chủ</a>
        <a href="{{route('product.shoppingCart')}}">Giỏ hàng</a>
    </div>
    <div class="empty-space col-xs-b15 col-sm-b50 col-md-b20"></div>
    <div class="text-center">
        <div class="h3">Thông tin giỏ hàng</div>
        <div class="title-underline center"><span></span></div>
    </div>
</div>

<div class="empty-space col-xs-b35 col-md-b30"></div>

<div class="container">
    <table class="cart-table">
        <thead>
            <tr>
                <th style="width: 95px;"></th>
                <th>Sản phẩm</th>
                <th style="width: 150px;">Giá</th>
                <th style="width: 260px;">Số lượng</th>
                <th style="width: 150px;">Tổng tiền</th>
                <th style="width: 70px;"></th>
            </tr>
        </thead>
        <tbody>
            @if(Session::has('cart'))
                @foreach($products as $product)
                    <tr>
                        <td data-title=" ">
                            <a class="cart-entry-thumbnail" href="#"><img src="img/product-1.png" alt=""></a>
                        </td>
                        <td data-title=" "><h6 class="h6"><a href="#">{{$product['item']->title}}</a></h6></td>
                        <td data-title="Price: ">{{number_format($product['item']->price,0)}}</td>
                        <td data-title="Quantity: ">
                            <div class="quantity-select">
                                <a href="{{route('product.reduce',['id' => $product['item']->id ])}}">
                                    <span class="minus"></span>
                                </a>                                
                                <span class="number">{{$product['qty']}}</span>
                                <a href="{{route('product.plusToCart',['id' => $product['item']->id ])}}">
                                    <span class="plus"></span>
                                </a>  
                            </div>
                        </td>
                        <td data-title="Total:">{{number_format($product['price'],0)}}</td>
                        <td data-title="">
                            <div class="button-close">
                                
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <form action="{{route('product.shoppingCart')}}" method="POST">
    <div class="row">
        <div class="col-md-6 col-xs-b50 col-md-b0 info-customer">
            <h4 class="h4 col-xs-b25">Thông tin khách hàng</h4>
            <div class="form-group">
                <label>Họ tên</label>
                <input type="text" name="name-customer" class="form-control" value="{{ Auth::check() ? Auth::user()->name : ''}}">
            </div>
            <div class="form-group">
                <label>Địa chỉ nhận hàng</label>
                <input type="text" name="address" class="form-control" value="{{ Auth::check() ? Auth::user()->address : ''}}">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" name="phone-number" class="form-control" value="{{ Auth::check() ? Auth::user()->phone : ''}}"> 
            </div>
            @if ( $errors->any() )
                <ul class="error-list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>   
            @endif    
        </div>
        <div class="col-md-6">
            <h4 class="h4">Đơn hàng</h4>
            <div class="order-details-entry simple-article size-3 grey uppercase">
                <div class="row">
                    <div class="col-xs-6">
                        Tiền hàng
                    </div>
                    <div class="col-xs-6 col-xs-text-right">
                        <div class="color">
                            @if(Session::has('cart'))
                                {{number_format($totalPrice,0)}} VNĐ
                            @endif   
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-details-entry simple-article size-3 grey uppercase">
                <div class="row">
                    <div class="col-xs-6">
                        Tiền ship
                    </div>
                    <div class="col-xs-6 col-xs-text-right">
                        <div class="color">free shipping</div>
                    </div>
                </div>
            </div>
            <div class="order-details-entry simple-article size-3 grey uppercase">
                <div class="row">
                    <div class="col-xs-6">
                        Tổng tiền
                    </div>
                    <div class="col-xs-6 col-xs-text-right">
                        <div class="color">
                            @if(Session::has('cart'))
                                {{number_format($totalPrice,0)}} VNĐ
                            @endif   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="empty-space col-xs-b35"></div>
    <div class="row">
        <div class="col-sm-6 col-md-5 col-xs-b10 col-sm-b0">
            <!-- <div class="single-line-form">
                <input class="simple-input" type="text" value="" placeholder="Enter your coupon code" />
                <div class="button size-2 style-3">
                    <span class="button-wrapper">
                        <span class="icon"><img src="img/icon-4.png" alt=""></span>
                        <span class="text">submit</span>
                    </span>
                    <input type="submit" value="">
                </div>
            </div> -->
        </div>
        <div class="col-sm-6 col-md-7 col-sm-text-right">
            <div class="buttons-wrapper">
                {{csrf_field()}}
                <input class="btn submit-cart" type="submit" value="Chốt đơn">
            </div>
        </div>
    </div>
    </form>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
</div>
@endsection

