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
      <!-- header inner -->
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
   <!-- testimonial -->
   <div id="testimonial" class="Testimonial">
      <div class="container-fluid">
         <div class="row d_flex">
            <div class="col-md-8 pad_left0">
               <div id="testimon" class="carousel slide banner_testimonial" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#testimon" data-slide-to="0" class="active"></li>
                     <li data-target="#testimon" data-slide-to="1"></li>
                     <li data-target="#testimon" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption relative">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="text_humai">
                                       <i><img src="images/tett1.png" alt="#" /></i>
                                       <span>🗣️ María G. – 32 años
                                       </span>
                                       <p>"Tenía años sin sonreír con confianza, pero después del blanqueamiento y la limpieza profunda, mis dientes cambiaron por completo. ¡Estoy feliz con el resultado!"</p>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="text_humai">
                                       <i><img src="images/tett2.png" alt="#" /></i>
                                       <span> David T. – 28 años</span>
                                       <p>"Tuve un dolor muy fuerte y me atendió el mismo día. El tratamiento de conducto fue rápido, sin molestias y muy bien explicado. ¡Volveré sin duda!"</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption relative">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="text_humai">
                                       <i><img src="images/tett1.png" alt="#" /></i>
                                       <span> Sofía L.</span>
                                       <p>"Llevar a mi hijo al dentista era todo un reto, pero la doctora tiene una manera especial de tratar a los niños. Leo ahora hasta me recuerda cuándo tiene cita. ¡100% recomendada para odontopediatría!"</p>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="text_humai">
                                       <i><img src="images/tett2.png" alt="#" /></i>
                                       <span>Luis</span>
                                       <p> Tuve un dolor muy fuerte y me atendió el mismo día.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#testimon" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#testimon" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
            <div class="col-md-4 ">
               <div class="titlepage">
                  <h2>Testimonial</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end design -->
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