@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
	<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        	<div class="page-header">
                <h2 class="pageheader-title">Nhập đơn hàng mới</h2>
                <p>Tạo đơn hàng nhập mới</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        	<div class="form-group">
        		<label>Nhập sản phẩm</label>
        		<input type="text" name=""  class="form-control" id="product-auto-search">
        	</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="list-product-group">
                <form action="" method="POST">
                    <table class="list-product" style="width: 100%">
                        <tr>
                            <th>
                                <p>Mã SP</p>
                            </th>
                            <th>
                                <p>Tên Sản phẩm</p>
                            </th>
                            <th>
                                <p>Giá</p>
                            </th>
                            <th>
                                <p>Số lượng</p>
                            </th>
                        </tr>
                    </table>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-primary">Tạo đơn</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
$(document).ready(function() {
    var engine = new Bloodhound({
        remote: {
            url: '/search/name?value=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });

    $("#product-auto-search").typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, [
        {
            source: engine.ttAdapter(),
            name: 'product-name',
            display: function(data) {
                return data.name;
            },
            templates: {
                empty: [
                    '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
                ],
                header: [
                    '<div class="list-group search-results-dropdown"></div>'
                ],
                suggestion: function (data) {
                    return '<span class="list-group-item add-product-item" onclick="return (addProduct('+data.id+') )">' + data.title + '</span>';
                }
            }
        }
    ]);
});
</script>
<script type="text/javascript">
	function addProduct(id){
		if(!id){
            alert("Lỗi không tồn tại sản phẩm");
            return false;
        }
        $.ajax({
            url: "{{route('admin.addElementProduct')}}",
            type: 'GET',
            cache: false,
            data: { 'id': id}, 
            datatype: 'html',
            beforeSend: function() {
                //something before send
            },
            success: function(data) {
                if(data.success == true) {
                  $('.list-product').append(data.html);
                }
            },
            error: function(xhr,textStatus,thrownError) {
                alert(xhr + "\n" + textStatus + "\n" + thrownError);
            }
        });
	}
</script>
@endsection