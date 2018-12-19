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
                    return '<span class="list-group-item add-product" onclick="return (addProduct('+data.id+') )">' + data.title + '</span>';
                }
            }
        }
    ]);
});
</script>
<script type="text/javascript">
	function addProduct(id){
		
	}
</script>
@endsection