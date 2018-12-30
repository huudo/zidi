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
            <table class="table table-bordered" style="text-align: center;">
                <thead>
                    <tr>
                        <th>Mã đơn</th>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Ngày xuất</th>
                        <th>Tổng tiền hàng</th>
                        <th>Thanh toán</th>
                        <th>Trạng thái</th>
                        <th>Chuyển trạng thái</th>
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
                        {{number_format($order->total_price,0)}}
                    </td>
                    <td>
                        @if($order->payment == 'yes')
                            <p class="text-primary">
                                Đã thanh toán
                            </p>
                        @else
                            <p class="text-secondary">
                                Chưa thanh toán
                            </p>
                        @endif
                    </td>
                    <td>
                        @switch($order->status)
                            @case('requesting')
                                <p class="text-info">
                                    Chờ xác nhận
                                </p>
                            @break
                            @case('verified')
                                <p class="text-success">
                                    Đã xác nhận
                                </p>
                            @break
                            @case('shipping')
                                <p class="text-warning">
                                    Đang giao
                                </p>
                            @break
                            @case('recived')
                                <p class="text-primary">
                                    Đã giao
                                </p>
                            @break
                            @case('cancel')
                                <p class="text-muted">
                                    Đã hủy
                                </p>
                            @break
                            @default
                                <p class="text-danger">
                                    Sai trạng thái
                                </p>
                        @endswitch
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Thao tác
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                @switch($order->status)
                                    @case('requesting')
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('admin.shipmentAction',['order_id' => $order->id, 'action' => 'verified'])}}">Xác nhận</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('admin.shipmentAction',['order_id' => $order->id, 'action' => 'shipping'])}}">Đang giao</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('admin.shipmentAction',['order_id' => $order->id, 'action' => 'recived'])}}">Đã giao</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('admin.shipmentAction',['order_id' => $order->id, 'action' => 'cancel'])}}">Hủy đơn</a></li>
                                        @break
                                    @case('verified')
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('admin.shipmentAction',['order_id' => $order->id, 'action' => 'shipping'])}}">Đang giao</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('admin.shipmentAction',['order_id' => $order->id, 'action' => 'recived'])}}">Đã giao</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('admin.shipmentAction',['order_id' => $order->id, 'action' => 'cancel'])}}">Hủy đơn</a></li>
                                        @break
                                    @case('shipping')
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('admin.shipmentAction',['order_id' => $order->id, 'action' => 'recived'])}}">Đã giao</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('admin.shipmentAction',['order_id' => $order->id, 'action' => 'cancel'])}}">Hủy đơn</a></li>
                                        @break
                                    @case('cancel')
                                        <span>Đã hủy</span>
                                        @break
                                    @default
                                        <span>Đã hoàn thành</span>
                                @endswitch
                                @if($order->payment == 'no')
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{route('admin.shipmentAction',['order_id' => $order->id, 'action' => 'payment'])}}">Đã thanh toán</a></li>
                                @endif
                            </ul>
                        </div>
                    </td>
                </tr>    
                @endforeach
                </tbody>
            </table>
            <?php echo $orders->render(); ?>
        </div>
    </section>
</div>
@endsection