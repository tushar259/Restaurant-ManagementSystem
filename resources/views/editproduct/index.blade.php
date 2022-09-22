<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
</head>
<body>
	<h1>Edit Product</h1>

	<a href="{{route('productlist.index')}}">Back</a> |
	<a href="{{route('home.index')}}">Home</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

<form method="post">
	<table>
		<tr>
			<td>Product Id</td>
			<td><input type="text" name="id" value="{{$product['id']}}" readonly></td>
		</tr>
		<tr>
			<td>Product Name</td>
			<td><input type="text" name="pname" value="{{$product['pname']}}"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value="{{$product['price']}}"></td>
		</tr>
		<tr>
			<td>Quantity</td>
			<td><input type="number" name="quantity" value="{{$product['quantity']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Update"></td>
		</tr>
	</table>
</form>
</body>
</html>