<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
	<h1>User Details</h1>

	<a href="{{route('profile.index')}}">Back</a> |
	<a href="{{route('home.index')}}">Home</a> |
	<a href="{{route('logout.index')}}">Logout</a> 

    <form method="post">
	<table>
	    <tr>
		    <th>
			    User Id
			</th>
		
		    <th>
			    Username
			</th>
		
		    <th>
			    Phone
			</th>
		
		    <th>
			    Address
			</th>
			<th>
			    Type
			</th>
		</tr>
	@foreach($us as $u)
		<tr>
			<td>{{$u['id']}}</td>
		
			
			<td>{{$u['username']}}</td>
		
			
			<td>{{$u['phone']}}</td>
		
			<td>{{$u['address']}}</td>
			
			<td>{{$u['type']}}</td>
		
			<td>
			
			    <a href="{{route('deleteuser.index',$u['id'])}}">Delete User</a>
			</td>
		</tr>
	@endforeach	
	</table>
	</form>
</body>
</html>