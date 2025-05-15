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

<body class="main-layout">
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
   <!-- banner -->
   <section class="banner_main">
      <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption relative">
                     <div class="row">
                        <div class="col-md-7 offset-md-5">
                           <div class="text-bg">
                              <h1> Agenda <br>tu cita</h1>
                              <span>La Dra. Janet Valensuela te acompaña en cada paso hacia una salud bucal completa.</span>
                              <a class="read_more" href="Javascript:void(0)">Agendar</a>
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
                        <div class="col-md-7 offset-md-5">
                           <div class="text-bg">
                              <h1> Design <br>Of Furniture</h1>
                              <span>There are many variations of passages of Lorem Ipsum available</span>
                              <a class="read_more" href="Javascript:void(0)">Leer mas</a>
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
                        <div class="col-md-7 offset-md-5">
                           <div class="text-bg">
                              <h1> Design <br>Of Furniture</h1>
                              <span>There are many variations of passages of Lorem Ipsum available</span>
                              <a class="read_more" href="Javascript:void(0)">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
         </a>
      </div>
   </section>
   <!-- end banner -->
   <!-- about -->
   <div id="about" class="about">
      <div class="container">
         <div class="row">
            <div class="col-md-5">
               <div class="titlepage">
                  <h2>¿Quiénes <span class="green">somos</span>?</h2>
                  <p>En el consultorio de la Dra. Janeth Valensuela, nos dedicamos a brindar atención odontológica de calidad, con un enfoque humano y personalizado. Nuestra misión es cuidar la salud bucal de nuestros pacientes en un ambiente cómodo, seguro y profesional.</p>
                  <a class="read_more" href="Javascript:void(0)"> Leer mas</a>
               </div>
            </div>
            <div class="col-md-7">
               <div class="about_img">
                  <figure><img src="images/doc.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end about -->
   <!--  service -->
   <div id="service" class="service">
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
                  <div class="col-md-12">
                     <a class="read_more" href="Javascript:void(0)">Leer mas</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end service -->
   <!-- gallery -->
   <div id="gallery" class="gallery">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Nuestra<span class="green">Galeria</span></h2>
                  <p>Te mostramos los tratamientos necesarios para tu procedimiento.</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <div class="gallery_text">
                  <div class="galleryh3">
                     <h3>Educación en Higiene Oral</h3>
                     <p>
                        Asesoramiento personalizado<br>
                        para una correcta técnica de <br>
                        cepillado, uso de hilo dental<br>
                        y enjuagues.


                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery1.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery2.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery3.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery4.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="gallery_text">
                  <div class="galleryh3">
                     <h3>Trabajos garantizados </h3>
                     <p>Nuestros trabajos   <br>
                        son garantizados<br>
                        
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="gallery_text">
                  <div class="galleryh3">
                     <h3> Tratamiento de Caries</h3>
                     <p>Relleno de cavidades con <br>
                        materiales estéticos o <br>
                        metálicos según cada caso.<br>
                     </p>

                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery5.jpg" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div class="gallery_img">
                  <figure><img src="images/gallery6.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end gallery -->
   <!-- design -->
   <div class="design">
      <div class="container-fluid">
         <div class="row d_flex">
            <div class="col-md-5">
               <div id="design" class="carousel slide banner_design" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#design" data-slide-to="0" class="active"></li>
                     <li data-target="#design" data-slide-to="1"></li>
                     <li data-target="#design" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption relative">
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="text_de">
                                       <div class="titlepage">
                                          <h2> Tratamientos<span class="green">Especializados</span></h2>
                                       </div>
                                       <p>Tratamiento para dientes con infecciones o dolor persistente.</p>
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
                                 <div class="col-md-12">
                                    <div class="text_de">
                                       <div class="titlepage">
                                          <h2>Odontología <span class="green">Infantil</span></h2>
                                       </div>
                                       <p>Atención amable para niños con enfoque preventivo y educativo.</p>
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
                                 <div class="col-md-12">
                                    <div class="text_de">
                                       <div class="titlepage">
                                          <h2>Carillas <span class="green">Dentales</span></h2>
                                       </div>
                                       <p>Laminados estéticos que corrigen forma, color o tamaño de los dientes frontales.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#design" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#design" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
            <div class="col-md-7 pad_roght0">
               <div class="design_img">
                  <figure><img src="images/desi.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end design -->
   <!-- latest news -->
   <div class="latest_news">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Nuetras <span class="green">Noticias</span></h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 offset-md-2">
               <div id="new" class="news_box">
                  <div class="news_img">
                     <figure><img src="images/gallery2.jpg" alt="#" /></figure>
                  </div>
                  <div class="news_room">
                     <span>Post By :limelight</span>
                     <ul>
                        <li><a href="Javascript:void(0)">Like <i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                        <li><a href="Javascript:void(0)">Comment <i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
                        <li><a href="Javascript:void(0)">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                     </ul>
                     <h3>Tratamiento de Caries</h3>
                     <p>Relleno de cavidades con materiales estéticos o metálicos según cada caso.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 ">
               <div id="new" class="news_box">
                  <div class="news_img mr_le">
                     <figure><img src="images/gallery1.jpg" alt="#" /></figure>
                  </div>
                  <div class="news_room">
                     <span>Post By :limelight</span>
                     <ul>
                        <li><a href="Javascript:void(0)">Like <i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                        <li><a href="Javascript:void(0)">Comment <i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
                        <li><a href="Javascript:void(0)">Share <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                     </ul>
                     <h3>Me encanta</h3>
                     <p>Mis dientes ahora estan mas sanos , acudi con la dra.Janeth Valenzuela </p>
                  </div>
               </div>
            </div>
            <div class="col-md-12">
               <a class="read_more" href="Javascript:void(0)"> Read More</a>
            </div>
         </div>
      </div>
   </div>
   <!-- end latest news -->
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
                     <li><a href="index.html">Inicio</a></li>
                     <li><a href="about.html"> Sobre nosotros</a></li>
                     <li><a href="service.html">Servicios</a></li>
                     <li><a href="gallery.html">Portafolio</a></li>
                     <li><a href="testimonial.html">Testimonios</a></li>
                     <li><a href="contact.html">Contactanos</a></li>
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