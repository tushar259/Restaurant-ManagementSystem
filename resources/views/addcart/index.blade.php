<!DOCTYPE html>
<html>
<head>
    <title>Add To Cart</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
    </script>
	
	<script>
 
    $(document).ready(function () {
 
    $('#form').validate({ // initialize the plugin
        rules: {
            quantity: {
                required: true
            },
        }
    });
});
</script>
<script>
        jQuery(document).ready(function(){
            jQuery('#addtocart').click(function(e){
                jQuery.ajax({
			        url: "{{URL::route('addcartajax.index')}}",
			        method: 'GET',
			        data: {
						quantity: jQuery('#quantity').val(),
						id: jQuery('#id1').val()
					},
			        success: function(response){
					    alert("item is added to cart");
			        },
			        error: function(error){
                        alert("No Item is added");
			        }
	            });
            });
        });
</script>
	
</head>


<body>
	<form method="post" id="form">    
	Food Name: {{$pro['pname']}}
	Price: {{$pro['price']}}
	<input type="hidden" name="id" id="id1" value="{{$pro['id']}}">
	<input type="text" name="quantity" id="quantity">
	<input type="submit" id="addtocart" value="Add To Cart">
    </form>

</body>


</html>


















