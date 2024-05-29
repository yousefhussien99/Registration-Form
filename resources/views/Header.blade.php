<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/header.css">
    
    <title>Registration Webpage.</title>
  </head>
  <body >


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">         
            <i class="fa fa-times js-menu-toggle"></i>   
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">yousefhussien919@gmail.com</span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">+ (20) 1063-005-573</span></a>


              <div class="float-right">

                <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">{{__('message.Twitter')}}</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">{{__('message.Facebook')}}</span></a>

              </div>

            </div>

          </div>

        </div>
      </div>

      <header class="site-navbar js-sticky-header site-navbar-target shadow-sm " role="banner" style ="background:#fbfbfd;">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="index.php" class="text-black"><span>{{__('message.Registration')}}</span></a>
			  <style>
		      .site-logo a span {
				color : #6754e2;
			   }
			  </style>

            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto fs-5" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="#" class="nav-link">{{__('message.Home')}}</a></li>
                  <li><a href="#" class="nav-link">{{__('message.Services')}}</a></li>
                  <li><a href="#" class="nav-link">{{__('message.Why Us')}}</a></li>

                  <li><a href="#" class="nav-link nh">{{__('message.Testimonials')}}</a></li>
                  <li><a href="#" class="nav-link">{{__('message.Blog')}}</a></li>
                  <li><a href="#" class="nav-link">{{__('message.Contact Us')}}</a></li>
                  <li class="has-children">
                    <a href="#" class="nav-link">{{__('message.Language')}}<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown ">
                      <li><a  class="nav-link" href='/locale/en'>{{__('message.English')}}</a></li>
                      <li><a  class="nav-link" href='/locale/ar'>{{__('message.Arabic')}}</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>

            <div class="toggle-button d-inline-block d-lg-none text-right"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black">
              <i class="fa fa-bars h3"></i>
            </a></div>

          </div>
        </div>

      </header>

  


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/Header.js"></script>
  </body>
</html>