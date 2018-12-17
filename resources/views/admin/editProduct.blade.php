@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
	<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        	<div class="page-header">
                <h2 class="pageheader-title">{{$product->title}}</h2>
                <p>Chỉnh sửa sản phẩm</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h2>Thông tin chi tiết sản phẩm</h2>
            <form action="{{route('admin.editProduct',['id'=>$product->id])}}" method="POST">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name ="title" class="form-control" value="{{$product->title}}">
                </div>
                <div class="form-group">
                    <label>Giá bán</label>
                    <input type="text" name ="price" class="form-control" value="{{$product->price}}">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea id="edit-description" name ="description" class="form-control">{{$product->description}}</textarea>
                </div>
                {{csrf_field()}}
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('public/ckeditor/ckeditor.js') }}" charset="utf-8"></script>
<script>
CKEDITOR.replace( 'edit-description', {
        filebrowserBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('public/ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
</script>
@endsection