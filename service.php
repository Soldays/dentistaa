<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>limelight</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout in_page">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- para checar cual header usar -->
      <?php session_start();
      header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
      header("Pragma: no-cache");
      if (isset($_SESSION['user_id'])) {
         include 'header2.php';
      } else {
         include 'header.php';
      } ?>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!--  service -->
   <div id="service" class="service mb-4">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Nuestros <span class="green">Servicios</span></h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="row">
                  <div class="col-md-4 col-sm-6">
                     <div class="service_box">
                        <i><img src="images/service1.png" alt="#" /></i>
                        <h3>Consulta y Diagnóstico Dental</h3>
                        <p>Evaluación completa de la salud bucal con diagnóstico personalizado y plan de tratamiento.</p>
                     </div>
                  </div>
                  <div class="col-md-4 offset-md-1 col-sm-6">
                     <div class="service_box">
                        <i><img src="images/service2.png" alt="#" /></i>
                        <h3>Extracciones Dentales</h3>
                        <p>Extracción segura de dientes dañados, retenidos o sin espacio.</p>
                     </div>
                  </div>
                  <div class="col-md-4 offset-md-3 col-sm-6 mar_top">
                     <div class="service_box">
                        <i><img src="images/service3.png" alt="#" /></i>
                        <h3>Ortodoncia</h3>
                        <p>Brackets tradicionales o alineadores invisibles para corregir la posición dental.</p>
                     </div>
                  </div>
                  <div class="col-md-4 offset-md-1 col-sm-6 mar_top">
                     <div class="service_box">
                        <i><img src="images/service4.png" alt="#" /></i>
                        <h3> Limpieza Dental Profesional</h3>
                        <p>Eliminación de placa, sarro y manchas para mantener dientes y encías saludables.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end service -->
   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class=" col-md-3 col-sm-6">
                  <ul class="social_icon">
                     <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                  <p class="variat pad_roght2">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by
                  </p>
               </div>
               <div class=" col-md-3 col-sm-6">
                  <h3>LET US HELP YOU </h3>
                  <p class="variat pad_roght2">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by
                  </p>
               </div>
               <div class="col-md-3 col-sm-6">
                  <h3>INFORMATION</h3>
                  <ul class="link_menu">
                     <li><a href="index.html">Home</a></li>
                     <li><a href="about.html"> About</a></li>
                     <li><a href="service.html">Services</a></li>
                     <li><a href="gallery.html">Gallery</a></li>
                     <li><a href="testimonial.html">Testimonial</a></li>
                     <li><a href="contact.html">Contact Us</a></li>
                  </ul>
               </div>
               <div class="col-md-3 col-sm-6">
                  <h3>OUR Design</h3>
                  <p class="variat">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by
                  </p>
               </div>
               <div class="col-md-6 offset-md-6">
                  <form id="hkh" class="bottom_form">
                     <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                     <button class="sub_btn">subscribe</button>
                  </form>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>