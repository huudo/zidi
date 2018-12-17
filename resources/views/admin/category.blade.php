@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
	<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Danh mục sản phẩm</h2>
                <p class="pageheaders-text">Danh sách danh mục sản phẩm thuộc <strong style="text-transform: uppercase;">{{$category->description}}</strong>.</p>
                <!-- <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                        </ol>
                    </nav>
                </div> -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategory" style="float: right;">
					 Thêm danh mục
				</button>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    		<div class="category">
    			@foreach($subcategories as $sub)
    			<div class="one-category">
    				<form>
    					<div class="form-group">
						    <label>Tên danh mục</label>
						    <input type="text" class="form-control" value="{{$sub->description}}">
						</div>
						<div class="form-group">
						    <label>Ảnh đại diện</label>
						</div>
						<button type="submit" class="btn btn-primary mb-2">Cập nhật</button>
    				</form>
    			</div>
				@endforeach
    		</div>
    	</div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addCategoryLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm cho <strong style="text-transform: uppercase;">{{$category->description}}</strong></h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		</div>
       	<form action="{{route('admin.addCategory',['id'=>$category->id])}}" method="POST">
	      	<div class="modal-body">
	       
	        	<div class="form-group">
				    <label>Tên danh mục</label>
				    <input type="text" name ="description" class="form-control">
				</div>
				<div class="form-group">
				    <label>Tên đường dẫn</label>
				    <input type="text" name ="name" class="form-control">
				</div>
				<div class="form-group">
				    <label>Ảnh đại diện</label>
				</div>
	        
	      	</div>
	      	<div class="modal-footer">
	      		{{csrf_field()}}
		        <button type="submit" class="btn btn-primary">Tạo mới</button>
	      	</div>
      	</form>
    </div>
  </div>
</div>
@endsection