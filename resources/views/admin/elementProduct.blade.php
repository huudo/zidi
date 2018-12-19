
<tr>
	<td>
		<p>
			{{$product->id}}
		</p>	
	</td>
	<td>
		<p>
			{{$product->title}}
		</p>
	</td>
	<td>
		<input type="" name="product[{{$product->id}}][price]" value="{{$product->price}}">
	</td>
	<td>
		<input type="text" name="product[{{$product->id}}][pty]" value="1" class="product-pty-{{$product->id}} product-pty">
	</td>
</tr>
