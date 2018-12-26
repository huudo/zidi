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
                <div class="form-group has-error">
                    @if ( $errors->any() )
                        <h3 class="text-danger">Đăng sản phẩm không thành công</h3>
                        @foreach ($errors->all() as $error)
                            <span class="text-danger">{{ $error }}</span>
                        @endforeach   
                    @endif  
                </div>
                  
            </div>
        </div>
    </div>
    <div class="row">
    	@foreach($products as $product)
    	<div class="col-xs-12 col-ms-6 col-md-3">
    		<div class="one-product">
                <div class="delete-product">
                    <a href="{{route('admin.deleteProduct',['id'=>$product->id])}}"><i class="fas fa-times"></i></a>
                </div>
    			<div class="title">
                    <h3><a href="{{route('admin.editProduct',['id'=>$product->id])}}">{{$product->title}}</a></h3>
                </div>
                <div class="img-product">
                    <img src="{{$product->picture}}">
                </div>
                <div class="group-price">
                    <p>Giá nhập: {{number_format($product->price_in)}}</p>
                    <p>Giá bán: {{number_format($product->price)}}</p>
                </div>
                <div class="description-product">
                    <h4>Mô tả</h4>
                    <p>{{$product->sort_description}}</p>
                </div>
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
       	<form action="{{route('admin.addProduct',['id'=>$sub->id])}}" method="POST" enctype="multipart/form-data">
	      	<div class="modal-body">
	       
	        	<div class="form-group">
				    <label>Tên sản phẩm</label>
				    <input type="text" name ="title" class="form-control">
				</div>
				<div class="form-group">
				    <label>Giá nhập</label>
				    <input type="text" name ="price-in" class="form-control">
				</div>
                <div class="form-group">
                    <label>Giá bán</label>
                    <input type="text" name ="price" class="form-control">
                </div>
				<div class="form-group">
				    <label>Mô tả</label>
				    <textarea name="description" id="description-editor">
                                
                    </textarea>
				</div>
				<div class="form-group">
				    <label>Ảnh sản phẩm</label>
                    <input type="file" class="form-control" name="photos[]" multiple />
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
<script src="{{ asset('public/ckeditor/ckeditor.js') }}" charset="utf-8"></script>
<script>
CKEDITOR.replace( 'description-editor', {
        filebrowserBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
</script>
@endsection