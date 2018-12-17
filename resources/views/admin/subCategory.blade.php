@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
	<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        	<div class="page-header">
                <h2 class="pageheader-title">{{$sub->description}}</h2>
                <p class="pageheaders-text">Danh sách sản phẩm thuộc <strong style="text-transform: uppercase;">{{$sub->description}}</strong>.</p>
                <!-- <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                        </ol>
                    </nav>
                </div> -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProduct" style="float: right;">
					 Thêm sản phẩm
				</button>
            </div>
        </div>
    </div>
    <div class="row">
    	@foreach($products as $product)
    	<div class="col-xs-12 col-ms-6 col-md-4">
    		<div class="one-product">
    			<form action="" method="POST">
    				<div class="form-group">
    					<label>Tên sản phẩm</label>
						<input type="text" class="form-control" name="title" value="{{$product->title}}">
    				</div>
    				<div class="form-group">
    					<label>Mô tả</label>
						<input type="text" class="form-control" name="description" value="{{$product->description}}">
    				</div>
    				<button type="submit" class="btn btn-primary mb-2">Cập nhật</button>
    			</form>
    		</div>
    	</div>
    	@endforeach
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm cho <strong style="text-transform: uppercase;">{{$sub->description}}</strong></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		</div>
       	<form action="{{route('admin.addProduct',['id'=>$sub->id])}}" method="POST">
	      	<div class="modal-body">
	       
	        	<div class="form-group">
				    <label>Tên sản phẩm</label>
				    <input type="text" name ="title" class="form-control">
				</div>
				<div class="form-group">
				    <label>Giá sản phẩm</label>
				    <input type="text" name ="price" class="form-control">
				</div>
				<div class="form-group">
				    <label>Mô tả</label>
				    <input type="text" name ="description" class="form-control">
				</div>
				<div class="form-group">
				    <label>Ảnh đại diện</label>
				</div>
	        
	      	</div>
	      	<div class="modal-footer">
	      		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
		        <button type="submit" class="btn btn-primary">Tạo mới</button>
	      	</div>
      	</form>
    </div>
  </div>
</div>
@endsection