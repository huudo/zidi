@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
	<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        	<div class="page-header">
                <h2 class="pageheader-title">Quản lý xuất hàng</h2>
                <p>Xuất hàng - danh sách đơn hàng xuất</p>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 col-12">
    		<a href="{{route('admin.shipmentCreate')}}" class="btn btn-primary">Tạo mới</a>
    	</div>
    </div>
    <section class="list-order-in">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã đơn</th>
                        <th>Tên shop</th>
                        <th>Số điện thoại</th>
                        <th>Ngày nhập</th>
                        <th>Tổng tiền hàng</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>
                        {{$order->id}}
                    </td>
                    <td>
                        {{$order->name}}
                    </td>
                    <td>
                        {{$order->phone}}
                    </td>
                    <td>
                        {{$order->created_at->format('d-m-Y')}}
                    </td>
                    <td>
                        {{$order->total_price}}
                    </td>
                    <td>
                       {{$order->status}}
                    </td>
                    <td>
                        Thao tac
                    </td>
                </tr>    
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div>
@endsection