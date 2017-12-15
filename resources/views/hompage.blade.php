<!DOCTYPE html>
<html>
<head>
  <title>PENERAPAN BOOTSTRAP DAN JQUERY</title>
  
<link rel="stylesheet" type="text/css" href="{{asset('/css/home.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/log_modal.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap-theme.min.css')}}">




</head>
<body>

<div class="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand text-uppercase" href="#">Curve App <span class="label label-success text-capitalize">Free</span></a>
        </div>
    
       <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About</a></li>
                <li><a href="#">Features</a></li>
                <li><button type="button" class="btn btn-success navbar-btn btn-circle" data-toggle="modal" data-target="#login-modal">Sign in</button></li>
            </ul>
        </div>
      </div>
    </nav>

    <!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" align="center">
          
        </div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
                    <div class="modal-body">
                
                <input id="login_username" class="form-control" type="text" placeholder="Username" required>
                <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                            </div>
                  <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
                  <div class="modal-body">
                
                <input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
                </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;">
                    <div class="modal-body">
                
                <input id="register_username" class="form-control" type="text" placeholder="Username" required>
                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                  </div>
                <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                            </div>
                </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form -->
                
      </div>
    </div>
  </div>
    <!-- END # MODAL LOGIN -->

    <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="content">
                  <div class="pull-middle">
                    <h1 class="page-header">Create an awesome App template with Bootstrap.</h1>
                    <p class="lead">Lorem ipsum dolor sit amet.</p>
                  </div>              
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1 text-center mt-100 mb-100">
                <div class="phone">
                    <img class="img-responsive img-rounded" src="http://placemi.com/djlnr/263x480">
                </div>
            </div>
          </div>
        </div>
    </header>
    <section class="section">
        <div class="container">
            <div class="row">
               <div class="col-md-4 col-md-offset-1 text-center mt-100 mb-100">
                    <div class="phone">
                        <img class="img-responsive img-rounded" src="http://placemi.com/djlnr/263x480">
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="content">
                        <div class="pull-middle">
                            <h2 class="h1 page-header">Discover more about features.</h2>
                            <ul class="media-list">
                              <li class="media">
                                <a class="media-left" href="#">
                                  <span class="glyphicon glyphicon-cloud icon text-success"></span>
                                </a>
                                <div class="media-body">
                                  <h3 class="media-heading">Praesent porttitor urna ut enim.</h3>
                                  <p>Maecenas vitae ex iaculis, efficitur est eu, fermentum quam.</p>
                                </div>
                              </li>
                              <li class="media">
                                <a class="media-left" href="#">
                                  <span class="glyphicon glyphicon-lock icon text-success"></span>
                                </a>
                                <div class="media-body">
                                  <h3 class="media-heading">Cras consequat est et elit.</h3>
                                  <p>Integer suscipit massa at tellus semper, at aliquam ante bibendum.</p>
                                </div>
                              </li>
                              <li class="media">
                                <a class="media-left" href="#">
                                  <span class="glyphicon glyphicon-user icon text-success"></span>
                                </a>
                                <div class="media-body">
                                  <h3 class="media-heading">Aenean vel enim quis dui blandit.</h3>
                                  <p>Maecenas vitae ex iaculis, efficitur est eu, fermentum quam.</p>
                                </div>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-right">
                    <div class="content">
                        <div class="pull-middle">
                            <h4><strong>Describe your product.</strong></h4>
                            <p>Proin sapien neque, consequat ac tempus aliquam, gravida in urna. Phasellus et lectus in odio imperdiet tempus. Aenean posuere, nunc a tristique imperdiet, massa dolor dictum eros, sit amet tempor turpis turpis vel tortor.</p>
                            <small>Phasellus feugiat at lorem a tincidunt. Nam hendrerit leo vitae orci pellentesque, nec euismod dolor condimentum.</small>
                        </div>
                    </div>
                </div>
               <div class="col-md-4 col-md-offset-1 mt-100 mb-100">
                    <div class="phone">
                        <img class="img-responsive img-rounded" src="http://placemi.com/djlnr/263x480">
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <div class="content">
                        <div class="pull-middle">
                            <h4><strong>Even more stuff.</strong></h4>
                            <p>Proin sapien neque, consequat ac tempus aliquam, gravida in urna. Phasellus et lectus in odio imperdiet tempus. Aenean posuere, nunc a tristique imperdiet, massa dolor dictum eros, sit amet tempor turpis turpis vel tortor.</p>
                            <!-- <a class="btn btn-success btn-circle" href="#">Sign up for free</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <small>© Copyright 2015. Crafted by <a href="#">@galihjufa</a></small>
        </div>
    </footer>
</div>

<script type= "text/javascript" src="{{ asset('/js/app.js') }}"></script>
<script type ="text/javascript" src="{{ asset('/js/log_modal.js')}}"></script>

</body>
</html>