<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
	<h1>Cart List</h1>

	<a href="{{route('cart.index')}}">Back</a> |
	<a href="{{route('home.index')}}">Home</a> |
	<a href="{{route('logout.index')}}">Logout</a> <br><br>

<form method="post">
    
	<table>
		<tr>
		    <td>Food Name</td>
			<td>Price</td>
			<td>Quantity</td>
		</tr>
		
		<tr>
		    <td>{{$carts['pname']}}</td>
			<td>{{$carts['price']}}</td>
			<td>{{$carts['quantity']}}</td>
			<td><input type="hidden" name="quantity" value="{{$carts['quantity']}}"></td>
			<td><input type="hidden" name="cartid" value="{{$carts['id']}}"></td>
			<td><input type="hidden" name="pid" value="{{$carts['pid']}}"></td>
		</tr>
		
		
	</table>
	<p>Are you sure, you want to remove this item?</p>
	<input type="submit" value="Delete">
	<br><br>
</form>
</body>
</html>