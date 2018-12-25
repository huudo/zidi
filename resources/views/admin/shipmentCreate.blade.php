@extends('admin.layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
	<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        	<div class="page-header">
                <h2 class="pageheader-title">Xuất đơn hàng mới</h2>
                <p>Tạo đơn hàng xuất mới</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        	<div class="form-group">
        		<label>Nhập têm sản phẩm</label>
        		<input type="text" name=""  class="form-control" id="product-auto-search">
        	</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="list-product-group">
                <form action="" method="POST">
                    <div style="width: 100%">
                        <p style="float: right;padding-right: 20px;">
                            <label><i class="fa fa-dollar-sign"></i> Tổng tiền: </label>
                            <input class="total-price" type="text" name="total-price"  value="0">
                        </p>
                    </div>
                    <table class="list-product" style="width: 100%">
                        <tr style="background: #0e0c28;color: #fff;">
                            <th style="width: 8%">
                                <p>Mã SP</p>
                            </th>
                            <th style="width: 50%">
                                <p>Tên Sản phẩm</p>
                            </th>
                            <th>
                                <p>Giá nhập</p>
                            </th>
                            <th>
                                <p>Giá bán</p>
                            </th>
                            <th>
                                <p>Số lượng</p>
                            </th>
                            <th>
                                <p>Thao tác</p>
                            </th>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                            <div class="info-shop">
                                <div class="form-group">
                                    <label>Tên khách hàng</label>
                                    <input type="text" name="customer-name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="customer-phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ nhận hàng</label>
                                    <input type="text" name="customer-address" class="form-control">
                                </div>
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-primary">Xuất hàng</button>
                            </div> 
                            @if ( $errors->any() )
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>   
                            @endif                                                      
                        </div>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // Các biến để tính tổng tiền nhập
    var total = 0;
    function Product(id,price,pty){
        this.id = id;
        this.price = price;
        this.pty = pty;
    }
    var listProduct = [];
</script>
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
        //var cs = "{{route('admin.addElementProduct',['type' => 'shipment'])}}";
        //console.log(cs);
        $.ajax({
            url: "{{route('admin.addElementProduct',['type' => "shipment"])}}",
            type: 'GET',
            cache: false,
            data: { 'id': id}, 
            datatype: 'html',
            beforeSend: function() {
                //something before send
                //console.log(url);
            },
            success: function(data) {
                if(data.success == true) {
                    var id = data.product['id'];
                    if(listProduct[id]){
                        listProduct[id]['pty'] += 1;
                        var count = parseInt($(".product-pty-"+id).val());
                        count++;
                        $('.product-pty-'+id).val(count);
                    }else{
                        $('.list-product').append(data.html);
                        var pro = new Product(id,data.product['price_in'],1);
                        listProduct[id] = pro;
                    }
                    calculatePrice();
                }
            },
            error: function(xhr,textStatus,thrownError) {
                alert(xhr + "\n" + textStatus + "\n" + thrownError);
            }
        });
	}
    function calculatePrice(){
        var new_total = 0;
        listProduct.forEach(function(element) {
            new_total += element['pty']*element['price'];
        });
        total = new_total;
        $('.total-price').val(total);
        //console.log("TOTAL: ",total);
    }
</script>
@endsection