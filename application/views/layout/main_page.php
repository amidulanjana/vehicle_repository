<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="en"> <!--<![endif]-->
<head>
	<!-- Basic Meta Tags -->
  <meta charset="utf-8">
  <title>TROY - premium car dealership HTML5 template</title>
	<meta name="description" content="your description">
	<meta name="keywords" content="your keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="<?php echo base_url();?>img/favicon.png" rel="icon" type="image/png">
  <!-- Bootstrap style -->
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <!-- Font Awesome Style -->
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" media="screen" />
  <!-- Animate Style -->
  <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" media="screen" />
  <!-- Flexslider Style -->
  <link href="<?php echo base_url();?>assets/css/flexslider.css" rel="stylesheet" media="screen" />
  <!-- Lightbox -->
  <link href="<?php echo base_url();?>assets/css/magnific-popup.css" rel="stylesheet" media="screen" />
	<!-- Style css -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" media="screen" />
	<!-- Components css -->
  <link href="<?php echo base_url();?>assets/css/components.css" rel="stylesheet" media="screen" />
	<!-- Color style css -->
  <link href="<?php echo base_url();?>assets/css/color/color-1.css" rel="stylesheet" media="screen" id="color" />
	<!-- Responsive css -->
  <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" media="screen" />
  <!-- Google Web Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Cabin:400,600' rel='stylesheet' type='text/css'> 
  <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
  <!-- Modernizr js -->        
	<script src="<?php echo base_url();?>assets/js/modernizr.js"></script>
</head>

<body class="no-main-slider">

  
	<div id="loading-wrap">
		<div id="loading">
      <i class="fa fa-cog fa-spin"></i>
    </div>
	</div>

  <header class="home-header"> <!-- header -->
    
    <nav class="navbar navbar-default" role="navigation">
	    <div class="container">
        <div class="navbar-inner">          
          <!-- logo-->                       
					<a href="../index.html" title="Home" class="logo pull-left"><img src="<?php echo base_url();?>img/logo.png " alt="logo"></a>
          <!-- logo ends -->         
          
          <!-- Menu --> 
          <ul class="nav pull-left" id="nav">
            <li><a href="../index.html" title="">Home</a></li>
            <li><a href="catalog-right.html" title="">Catalog</a>
              <ul>
                <li><a href="catalog-right.html">Right sidebar</a></li>
                <li><a href="catalog-left.html">Left sidebar</a></li>
                <li><a href="catalog.html">Without sidebar</a></li>
                <li><a href="product-detail.html">Product detail</a></li>
              </ul>
            </li>
            <li><a href="components.html" title="">Pages</a>
              <!-- sub menu -->
              <ul>
                <li><a href="components.html" title="">Components</a></li>  
                <li><a href="about-us.html" title="">About us</a></li>
                <li><a href="services.html" title="">Services</a></li>
                <li><a href="gallery-4.html" title="">Gallery</a>
                  <!-- sub sub menu -->  
                  <ul>
                    <li><a href="gallery-4.html" title="">Gallery 4 columns</a></li>
                    <li><a href="gallery-3.html" title="">Gallery 3 columns</a></li>
                    <li><a href="gallery-2.html" title="">Gallery 2 columns</a></li>  
                  </ul>                  
                  <!-- sub sub menu ends -->
                </li>                
              </ul>
              <!-- sub menu ends -->
            </li>
            <li class="selected"><a href="shop-right.html" title="">Shop</a>
              <ul>
                <li><a href="shop-right.html">Right sidebar</a></li>
                <li><a href="shop-left.html">Left sidebar</a></li>
                <li class="selected"><a href="shop.html">Without sidebar</a></li>
                <li><a href="shop-product-detail.html">Shop Product detail</a></li>
                <li><a href="shop-cart.html">Cart</a></li>
                <li><a href="shop-checkout.html">Checkout</a></li>
              </ul>            
            </li>            
            <li><a href="blog-right.html" title="">Blog</a>
              <ul>
                <li><a href="blog-right.html">Right sidebar</a></li>
                <li><a href="blog-left.html">Left sidebar</a></li>
                <li><a href="blog.html">Without sidebar</a></li>
                <li><a href="blog-masonry.html">Blog masonry</a></li>
                <li><a href="blog-detail.html">Blog detail</a></li>
              </ul>            
            </li> 
            <li><a href="contact.html" title="">Contact</a></li>                        
          </ul>
          <!-- Menu ends -->
          <div class="menu-right-bar">
            <ul class="menu-right-bar-ul">
            <li class="text hidden-sm hidden-xs">1-800-555-6789</li>
            <li><a href="shop-cart.html" class="button btn btn-primary" role="button"><i class="fa fa-shopping-cart"></i> (2)</a></li> 
            <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#singInForm">Sign in</button></li>
            </ul>
          </div>
        </div>  
      </div>           
    </nav>         
    <!-- Modal -->

    <div class="modal fade" id="singInForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="myModalLabel">Please Sing Up</h3>
          </div>
          <div class="modal-body">
            <form action="users/login" method="post">
          <div class="form-group">
            <label for="username" class="control-label">Login name:</label>
            <input type="text" class="form-control" id="login-name">
          </div>
          <div class="form-group">
            <label for="password" class="control-label">Password:</label>
            <input type="password" class="form-control" id="password">
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Log in"></br></br>
            <a href="">Not yet Registerd ?</a>
          </div>
          </form>
        </div>
      </div>
    </div>

  </header>

    <section id="section">
      <div class="container">
        <div class="row">
<!--          { SITE CONTENT (You can do your work here)}-->
          <?php $this->load->view($register_view)?>

        </div>
      </div>
    </section>  <!-- section ends -->
         

  <footer class="footer">  <!-- footer -->
    <div class="footer-top">
      <div class="footer-top-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-6">
              <h4>Hot</h4>
              <ul class="list-2">
                <li><a href="#">Timeline</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Statistics</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Log in</a></li>
              </ul>
            </div>
            <div class="col-sm-3 col-xs-6">
              <h4>Services</h4>
              <ul class="list-2">
                <li><a href="#">Timeline</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Statistics</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Log in</a></li>
              </ul>
            </div>
            <div class="col-sm-3 col-xs-6">
              <h4>About us</h4>
              <ul class="list-2">
                <li><a href="#">Timeline</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Statistics</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Log in</a></li>
              </ul>
            </div>
            <div class="col-sm-3 col-xs-6">
              <h4>Follow us</h4>
              <ul class="colored-social-icons-2">
                <li><a href="#" rel="external" class="facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" rel="external" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" rel="external" class="twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" rel="external" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#" rel="external" class="instagram"><i class="fa fa-instagram"></i></a></li>  
              </ul>
              <div class="spacer25"></div>
              <h4>Subscribe</h4>
              <form role="form">
                <div class="input-group">
                  <input type="text" class="form-control footer-form-control" placeholder="E-mail">
                  <span class="input-group-addon">
                    <button class="btn btn-default" type="button"> <i class="fa fa-angle-right"></i> </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>      
      </div>
    </div>
    
    <div class="footer-bottom">
      <div class="footer-bottom-bg">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <h4>Info</h4>
              <p>Nullam sagittis. Quisque id odio. Curabitur nisi. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Fusce egestas elit eget lorem.</p>
              <div class="spacer50"></div>
              <div class="spacer1"></div>
              <p>© TROY. 2014 – Created by <a href="#">entiri</a>.</p>
            </div>
            <div class="col-sm-3">
              <h4>Address</h4>
              <ul class="list-3">
                <li>920 Reserve Dr. Suite 140</li>
                <li>Roseville, CA 95678</li>
                <li>&nbsp;</li>
                <li>(415) 496-9612</li>
                <li>&nbsp;</li>
                <li><a href="mailto:info@domain.com">info@domain.com</a></li>
              </ul>

            </div>
            <div class="col-sm-3">
              <h4>Contact</h4>
              <ul class="list-3">
                <li>(415) 496-9612</li>
                <li>(415) 496-9613</li>
                <li>(415) 496-9614</li>
              </ul>
              <div class="spacer15"></div>
              <a class="btn btn-default" href="mailto:email@example.com" role="button">Email us</a>              
            </div>
          </div>
        </div>
      </div>
    
    </div>
    
  </footer> <!-- Footer ends -->
  <a href="#" class="back-to-top"><span></span></a>  
  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.easing.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.isotope.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.fitvids.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.appear.js"></script>
  <script src="<?php echo base_url();?>assets/js/retina.js"></script>
  <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.sticky.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.countTo.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.flexslider-min.js"></script>
  <script src="<?php echo base_url();?>assets/js/ion.rangeSlider.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/selectnav.js"></script>
  <script src="<?php echo base_url();?>assets/js/responsive-tabs.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap-select.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/functions.js"></script>
	</body>
</html>