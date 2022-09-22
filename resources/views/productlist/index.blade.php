<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Orders
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="index-page sidebar-collapse">
	

	
	
	
	
	
	
	
	
	

	

	
	

  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
  Welcome! {{session('uname')}}
    <div class="container">
      <div class="navbar-translate">
	    
        <a class="navbar-brand" href="{{route('home.index')}}">
          Home </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
		  @if(session('type')=="user")
		  
		  <li class="nav-item">
            <a class="nav-link" href="{{route('logout.index')}}" >
               Logout
            </a>
          </li>
		  @elseif(session('type')=="admin")
		  <li class="nav-item">
            <a class="nav-link" href="{{route('addproduct.index')}}" >
               Add Product
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="{{route('logout.index')}}" >
               Logout
            </a>
          </li>
	      @else
		  <li class="nav-item">
            <a class="nav-link" href="{{route('login.index')}}" >
               Login
            </a>
          </li>
		  @endif
          
		  
		  
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('./assets/img/bg2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
          <div class="brand">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    
    <!-- 	            end nav tabs -->
    
    <!--        notifications -->
    
    <!--        end notifications -->
    <div class="section">
	
      <div class="container tim-container">
	  <h3>ADD, DELETE, UPDATE PRODUCTS</h3>
        <!--     	        typography -->
        
        <!--                 end typography -->
        <div class="space-50"></div>
        <!--                 images -->
        <div id="images">
          
          <br>
		  <form method="post">
		  <table>
		  <tr>
		    <th>
			    Product Id |
			</th>
		    
		    <th>
			    Product Name |
			</th>
		    
		    <th>
			    Price |
			</th>
		
		    <th>
			    Quantity
			</th>
		  </tr>
		  
		  @foreach($product as $p)
		  <tr>
          <div class="row">
            <div class="col-sm-2">
              <td>{{$p['id']}}</td>
		
			
			  <td>{{$p['pname']}}</td>
		
			
			  <td>{{$p['price']}}</td>
		
			  <td>{{$p['quantity']}}</td>
		
			<td>
			
			    <a href="{{route('editproduct.index',$p['id'])}}">Edit</a> | <a href="{{route('deleteproduct.index',$p['id'])}}">Delete</a>
			</td>
            </div>
            
          </div>
		  
		  </tr>
		  @endforeach
		  
		  </table>
		  
		  <br><br>
	      </form>
          <div class="row">
          </div>
        </div>
        <!--                 end images	             -->
        <div class="space-50"></div>
      </div>
    </div>
    <!--         carousel  -->
    
    <!--         end carousel -->
	
	
  </div>
  <!-- Classic Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link">Nice Button</button>
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--  End Modal -->
  
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }

  </script>
	
	
	
	
	
	
	
	
	
</body>
</html>