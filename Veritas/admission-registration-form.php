<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="StudyPress | Education & Courses HTML Template" />
<meta name="keywords" content="academy, course, education, education html theme, elearning, learning," />
<meta name="author" content="ThemeMascot" />
<!-- Page Title -->
<title>Registration Form</title>
<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<!-- Stylesheet for form -->
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<!-- Main css register form-->
<link rel="stylesheet" href="css/reg/reg.min.css">
<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
 <!-- Header navbar -->
 <?php include_once "includes/innerpage-navbar.php" ?>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/capslider.png">
      <div class="container pt-70 pb-20" data-bg-img="images/bg/capslider.png">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white text-bolder">Prospective Student Registration</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="#" class="text-white text-bolder">Welcome</a></li>
                <li><a href="#" class="text-white text-bolder">registration form</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="main">
      <!-- Sign up form -->
      <section class="signup">
          <div class="container">
              <div class="signup-content">
                  <div class="signup-form">
                      <h2 class="form-title">Register With Us</h2>
                      <form method="POST" class="register-form" id="register-form">
                          <div class="form-group">
                              <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                              <input type="text" name="name" id="name" placeholder="Surname first Name .."/>
                          </div>
                          <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Phone number"/>
                        </div>
                          <div class="form-group">
                              <label for="email"><i class="zmdi zmdi-email"></i></label>
                              <input type="email" name="email" id="email" placeholder="Your Email"/>
                          </div>
                          <div class="form-group">
                              <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                              <input type="password" name="pass" id="pass" placeholder="Password"/>
                          </div>
                          <div class="form-group">
                              <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                              <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                          </div>
                          <div class="form-group">
                              <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                              <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                          </div>
                          <div class="form-group form-button">
                              <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                          </div>
                      </form>
                  </div>
                  <div class="signup-image">
                      <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                      <a href="#" class="signup-image-link text-bolder">I am already member</a>
                  </div>
              </div>
          </div>
      </section>
</div>  
<!-- end main-content -->
  </div>
  <!-- end main-content -->
  <!-- Footer -->
  <?php include_once "includes/footer.php" ?>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>