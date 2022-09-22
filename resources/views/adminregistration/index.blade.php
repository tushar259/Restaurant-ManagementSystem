<!DOCTYPE html>

<html>
<head>
	
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
      Admin Registration
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
<body>
    
	
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
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
          
          
        </ul>
      </div>
    </div>
  </nav>	
  <div class="main main-raised">	
	<div class="section section-signup page-header" style="background-image: url('./assets/img/city.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
              <form class="form" method="post">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Registration</h4>
                  
                </div>
                <div class="card-body">
                  
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      </span>
                    </div>
                    <input type="text" name="username" class="form-control" placeholder="Username...">
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password...">
                  </div>
				  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      </span>
                    </div>
                    <input type="text" name="phone" class="form-control" placeholder="Phone...">
                  </div>
				  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      </span>
                    </div>
                    <input type="text" name="address" class="form-control" placeholder="Address...">
                  </div>
				  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                      </span>
                    </div>
                    <input type="text" name="pinId" class="form-control" placeholder="PIN...">
                  </div>
				  <input type="hidden" name="type" value="admin">
				  @foreach($errors->all() as $message)
			     {{$message}} <br/>
	          @endforeach
                </div>
                <div class="footer text-center">
				  <input type="submit" name="submit" value="Registration">
                </div>
				<div class="footer text-center">
				  
                </div>
              </form>
			  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>