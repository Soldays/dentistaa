<div class="header">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-3 col logo_section">
            <div class="full">
               <div class="center-desk">
                  <div class="logo">
                     <a href="index.html"><img src="images/1.png" alt="#" /></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-10 offset-md-1">
            <!-- nav  -->
            <nav class="navigation navbar navbar-expand-md navbar-dark">
               <button class="navbar-toggler" type="button"
                  data-toggle="collapse" data-target="#navbarsExample04"
                  aria-controls="navbarsExample04" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarsExample04">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
                     <li class="nav-item"><a class="nav-link" href="about.php">Sobre mi</a></li>
                     <li class="nav-item"><a class="nav-link" href="service.php">Servicios</a></li>
                     <li class="nav-item"><a class="nav-link" href="gallery.php">Galería</a></li>
                     <li class="nav-item"><a class="nav-link" href="testimonial.php">Testimonios</a></li>
                     <li class="nav-item"><a class="nav-link" href="contact.php">Contacto</a></li>
                  </ul>

                  <!-- aquí el login “empujado” a la derecha -->
                  <div class="login-form d-flex align-items-center ml-auto">
                     <form class="form-inline mb-0" action="Backend/login.php" method="post">
                        <!-- ocultamos visualmente el label para no “romper” el inline -->
                        <label for="navEmail" class="sr-only">email</label>
                        <input
                           type="email"
                           id="navEmail"
                           name="email"
                           class="form-control form-control-sm mx-1"
                           placeholder="correo@example.com"
                           required>

                        <label for="navPassword" class="sr-only">password</label>
                        <input
                           type="password"
                           id="navPassword"
                           name="password"
                           class="form-control form-control-sm mx-1"
                           placeholder="Password"
                           maxlength="30"
                           required>

                        <button class="btn btn-sm btn-outline-light mx-1" type="submit">
                           Login
                        </button>
                     </form>

                     <button
                        class="btn btn-sm btn-primary ml-2"
                        onclick="window.location.href='registrar.php'">
                        Registrarse
                     </button>
                  </div>
               </div>
            </nav>
         </div>

      </div>
   </div>
</div>