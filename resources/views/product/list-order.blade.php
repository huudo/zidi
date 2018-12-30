@extends('layouts.master')
@section('title')
    Đơn hàng của bạn | Zidi.vn
@endsection
@section('content')
	<div class="grey-background">
        <div class="header-empty-space"></div>
        <div class="container">
            <div class="row">
            	<div class="empty-space col-xs-b15 col-sm-b30"></div>
            	<div class="col-md-12">
                    <div class="nav-menu-order">
                        <ul class="nav nav-tabs">
                            <li class="{{ $status == 'requesting' ? 'active' : ''}}" ><a href="#">Chờ duyệt</a></li>
                            <li class="{{ $status == 'verified' ? 'active' : ''}}" ><a href="#">Đã duyệt</a></li>
                            <li class="{{ $status == 'shipping' ? 'active' : ''}}" ><a href="#">Đang giao</a></li>
                            <li class="{{ $status == 'recived' ? 'active' : ''}}" ><a href="#">Đã giao</a></li>
                        </ul>
                    </div>
					<h3>Đơn hàng của bạn</h3>
            	</div>
            </div>
            @foreach($orders as $order)
            <div class="row">
                <div class="col-md-12">
                    <div class="info-head-order">
                        <div class="row">
                            <div class="col-md-4">
                            <p>Mã đơn hàng: <a href="#">ZIDI{{$order->id}}</a></p>
                            <p>Đặt ngày: {{$order->created_at->format('d-m-Y')}}</p>
                        </div>
                        <div class="col-md-4">
                            <p>Người nhận</p>
                            <p>{{$order->name}}</p>
                        </div>
                        <div class="col-md-4">
                            <p>Tổng tiền</p>
                            <p>{{number_format($order->total_price)}} VNĐ</p>
                        </div>
                        </div>
                    </div>
                    <div class="info-detail-order">
                       @foreach($order->detailOrder as $detailOrder)
                            <div class="row">
                                <div class="col-md-4">
                                    <p>{{$detailOrder->title}}</p>
                                </div>
                                <div class="col-md-4">
                                    <p>Số lượng: {{$detailOrder->qty}}</p>
                                </div>
                                <div class="col-md-4">
                                    <p>Giá: {{$detailOrder->price}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
<style type="text/css">
    .nav-menu-order{
        background: #fff;
        padding: 20px;
    }
    .nav-menu-order h3{
        font-size: 18px;
        font-weight: bold;
        padding-bottom: 20px;
    }
    .row-order-element{
        background: #fff;
    }
    .row-order-element .info-head-order{
        padding: 10px;
        background: #CCC;
    }
</style>