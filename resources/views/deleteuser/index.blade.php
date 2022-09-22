<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>
	<h1>Delete User</h1>

	<a href="{{route('userlist.index')}}">Back</a> |
	<a href="{{route('home.index')}}">Home</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

	<table>
		<tr>
			<td>User ID</td>
			<td>{{$us['id']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>{{$us['username']}}</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>{{$us['phone']}}</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>{{$us['address']}}</td>
		</tr>
		<tr>
			<td>Type</td>
			<td>{{$us['type']}}</td>
		</tr>
		
	</table>
	
	<h2>Are you sure?</h2>
	<form method="post">
		<input type="submit" name="confirm" value="Confirm">
	</form>
</body>
</html>