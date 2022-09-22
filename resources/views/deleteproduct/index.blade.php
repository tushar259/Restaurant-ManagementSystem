<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
</head>
<body>
	<h1>Delete Product</h1>

	<a href="{{route('productlist.index')}}">Back</a> |
	<a href="{{route('home.index')}}">Home</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

	<table>
		<tr>
			<td>Product ID</td>
			<td>{{$product['id']}}</td>
		</tr>
		<tr>
			<td>Product Name</td>
			<td>{{$product['pname']}}</td>
		</tr>
		<tr>
			<td>Price</td>
			<td>{{$product['price']}}</td>
		</tr>
		<tr>
			<td>Quantity</td>
			<td>{{$product['quantity']}}</td>
		</tr>
		
	</table>
	
	<h2>Are you sure?</h2>
	<form method="post">
		<input type="submit" name="confirm" value="Confirm">
	</form>
</body>
</html>