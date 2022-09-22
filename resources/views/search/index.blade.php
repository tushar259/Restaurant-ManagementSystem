<!DOCTYPE html>
<html>
<head>
<title>Products</title>
</head>

<body>
   @foreach($mitu as $m)
  ProductName: {{$m['pname']}}<br>
   @endforeach

</body>


</html>