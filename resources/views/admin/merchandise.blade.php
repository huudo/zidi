@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
	<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        	<div class="page-header">
                <h2 class="pageheader-title">Quản lý nhập hàng</h2>
                <p>Nhập hàng - danh sách nhập hàng</p>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 col-12">
    		<a href="{{route('admin.merchandiseCreate')}}">Tạo mới</a>
    	</div>
    </div>
</div>
@endsection