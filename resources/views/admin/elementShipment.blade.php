<tr class="element-product-tr-{{$product->id}}">
	<td class="td-id">
		<p>
			{{$product->id}}
		</p>	
	</td>
	<td class="td-title">
		<input type="text" name="product[{{$product->id}}][title]" value="{{$product->title}}">	
	</td>
	<td class="td-price-in">
		<p>{{$product->price_in}}</p>
	</td>
	<td class="td-price">
		<input type="text" name="product[{{$product->id}}][price]" value="{{$product->price}}">
	</td>
	<td class="td-pty">
		<input type="text" name="product[{{$product->id}}][pty]" value="1" class="product-pty-{{$product->id}} product-pty">
	</td>
	<td class="td-action"><i class="fa fa-trash"></i></td>
</tr>
