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
<title>commig-soon</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

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

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">


<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
  <div id="" class="clearfix">
  <?php include_once "includes/administration-navbar.php" ?>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="layer-overlay overlay-theme-colored2-9 bg-no-repeat bg-pos-center-center" data-tm-bg-img="images/project/librar6.jpg" style="background-image: url(&quot;images/project/librar6.jpg&quot;);">
        <div class="container pt-70 pb-20">
            <h2 class="title text-navy text-bolder text-center">Veritas University library</h2>
        <!-- Section Content -->
        <div class="section-content"> 
          <div class="row">
            <div class="col-md-5  bg-theme-colored-transparent-9 border-left-theme-color-2-4px mr-5 mb-5">
                <h2 class="title text-white text-bolder text-uppercase">OPENING Hours</h2>
                <h2 class="text-white text-bolder">7:30 Am</h2>
            </div>
            <div class="col-md-6 bg-theme-colored-transparent-9 border-right-theme-color-2-4px ">
                <h2 class="title text-white text-bolder text-uppercase">Closing Hours</h2>
                <h2 class="text-white text-bolder">6:30 PM</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  <section class="container pt-0 pb-0 mb-30 mt-50">
    <div class="row">
      <div class="section-content text-center">
        <div class="col-md-12">
          <h1 class="font-weight-400 text-theme-color-2 font-48 mb-50">library Time Count-down</h1>
          <!-- FlipClock Script -->
          <div class="pl-100 ml-150  mt-50">
            <div class="clock" style="margin:2em;"></div>
            <div class="message"></div>
            <script type="text/javascript">
              var clock;
              $(document).ready(function() {
                var clock;
                clock = $('.clock').FlipClock({
                  clockFace: 'DailyCounter',
                  autoStart: false,
                  callbacks: {
                    stop: function() {
                      $('.message').html('The clock has stopped! Therefore, the site has been completely tested and we are now hosting the site.')
                    }
                  }
                });
                clock.setTime(30000);
                clock.setCountdown(true);
                clock.start();
              });
            </script>
          </div>
        </div>
      </div>
    </div>
  </section><br><br>
  <script src="js/custom.js"></script>
    <?php include_once "includes/footer.php" ?>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

  </body>
</html>