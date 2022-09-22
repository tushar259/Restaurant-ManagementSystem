<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	
<script>
 
    $(document).ready(function () {
 
    $('#form').validate({ // initialize the plugin
        rules: {
            pname: {
                required: true
            },
			price: {
                required: true
            },
			quantity: {
                required: true
            },
        }
    });
});
</script>
	
</head>
<body>
	<h1>Add Product</h1>

	<a href="{{route('productlist.index')}}">Back</a> |
	<a href="{{route('home.index')}}">Home</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

<form method="post" id="form">
	<table>
		<tr>
			<td>Product Name</td>
			<td><input type="text" name="pname" ></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price"></td>
		</tr>
		<tr>
			<td>Quantity</td>
			<td><input type="number" name="quantity"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Add Product"></td>
		</tr>
	</table>
</form>
</body>
</html>