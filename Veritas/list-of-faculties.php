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
<title>List of Faculties</title>
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
<script src="https://kit.fontawesome.com/13d098a0cf.js" crossorigin="anonymous"></script>
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
<div id="wrapper" class="clearfix">
  <!-- Header -->
<!-- Header - Header -->
<?php include_once "includes/innerpage-navbar.php" ?>
  <!-- Start main-content -->
  <div class="main-content " >
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/event/building.png">
      <div class="container pt-60 pb-60 height-300px">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center mt-20 bg-wallv">
              <h3 class="font-28 text-black text-bolder">Our Faculties</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
    <!-------Table listing of departmens and undergraduates---------->
    <section  class="mt-0">
      <div class="container bg-color-white">
        <div class="row">
          <div class=" col-sm-12 col-md-9">
            <form id="appointment_form" name="appointment_form" class="mt-30" method="post" action="includes/appointment.php">
              <input type="text" id='myInput'  onkeyup='searchTable()' placeholder="&#xF002; Search" title="Type in a name">
            </form>
            <div class="section-title mb-5">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div><h4 class="mt-0 font-28 line-bottom line-height-1">Faculties</h4></div>
                  <div></div>
                </div>
              </div>
            </div>
            <div data-example-id="hoverable-table" class="bs-example">
              <table class="table" id='myTable'> 
                <thead class="bg-theme-colored text-white"> 
                  <tr> 
                    <th>S/N</th> 
                    <th>Faculty NAME</th> 
                    <th>Abbrivation</th> 
                  </tr> 
                </thead> 
                <tbody> 
                  <tr> 
                    <th scope="row">1</th> 
                    <td><a href="#" class="text-deepgreen text-bolder">Faculty of Natural & Applied Science</a></td> 
                    <td>F.N.A.S</td> 
                  </tr> 
                  <tr> 
                    <th scope="row">2</th> 
                    <td><a href="#" class="text-deepgreen text-bolder text-uppercase">Faculty of Engineering & ENGINEERING TECHNOLOGY</a></td> 
                    <td>F.E.E.T</td> 
                  </tr> 
                  <tr> 
                    <th scope="row">3</th> 
                    <td><a href="#" class="text-deepgreen text-bolder">Faculty of pharmaceutical sciences</a></td> 
                    <td>FPS</td> 
                    </tr> 
                    <tr> 
                      <th scope="row">4</th> 
                      <td><a href="#" class="text-deepgreen text-bolder">Faculty of Management Sciences</a></td> 
                      <td>FMS</td> 
                      </tr> 
                      <tr> 
                        <th scope="row">5</th> 
                        <td><a href="#" class="text-deepgreen text-bolder">Faculty of Health Sciences</a></td> 
                        <td>FHS</td> 
                        </tr> 
                        <tr> 
                          <th scope="row">6</th> 
                          <td><a href="#" class="text-deepgreen text-bolder">Faculty of Social Sciences</a></td> 
                          <td>FSS</td> 
                          </tr>
                          <tr> 
                          <th scope="row">7</th> 
                          <td><a href="#" class="text-deepgreen text-bolder">Faculty of Humanities</a></td> 
                          <td>FH</td> 
                          </tr> 
                          <tr> 
                          <th scope="row">8</th> 
                          <td><a href="#" class="text-deepgreen text-bolder">Faculty of Education</a></td> 
                          <td>FE</td> 
                          </tr>  
                          <tr>
                          <th scope="row">9</th> 
                          <td><a href="#" class="text-deepgreen text-bolder">Faculty of Law</a></td> 
                          <td>FL</td> 
                          </tr>  
                          <tr>
                          <th scope="row">10</th> 
                          <td><a href="#" class="text-deepgreen text-bolder">Faculty of Philosophy & Theology</a></td> 
                          <td>FPT</td> 
                          </tr>  
                          
                  </tbody> 
                </table> 
              </div>
        </div><br>
          <div class=" col-sm-12 col-md-3" style="margin-top:10%;">
            <div class="widget">
              <h4 class="widget-title line-bottom text-bolder text-deepgreen">Quick Link</h4>
              <ul class="list angle-double-right ">
                <li><a href="#" class="text-black text-bold">A-Z Programmes</a></li>
                <li><a class="text-black text-bold"  href="postgraduate-school.php">Post Graduate</a></li>
                <li><a class="text-black text-bold"  href="admission.php">Undergraduate</a></li>
                <li class="libtab"><a class="text-black text-bold" href="list-of-department.php">Departments</a></li>
                <li class="libtab"><a class="text-black text-bold"  href="librar.php">Using Our library</a></li>
                <li class="libtab"><a class="text-black text-bold"  href="news.php">News & Events</a></li>
                <li class="libtab"><a class="text-black text-bold"  href="development-office.php">New projects</a></li>   
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      function searchTable() {
          var input, filter, found, table, tr, td, i, j;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td");
              for (j = 0; j < td.length; j++) {
                  if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                      found = true;
                  }
              }
              if (found) {
                  tr[i].style.display = "";
                  found = false;
              } else {
                  tr[i].style.display = "none";
              }
          }
      }
      </script>
  <!-- Footer -->
 <?php include_once "includes/footer.php" ?>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>