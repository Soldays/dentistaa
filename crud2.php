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
   <header>
      <?php session_start();
      header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
      header("Pragma: no-cache");
      if (isset($_SESSION['user_id'])) {
         include 'header2.php';
         include '../avance2/Backend/crud.php';
      } else {
         include 'header.php';
      } ?>
   </header>

   <body class="bg-light">
      <div class="container py-5">
         <h2 class="mb-4">Gestión de Usuarios</h2>

         <div class="row">
            <!-- Columna del formulario -->
            <div class="col-md-4">
               <div class="card mb-4">
                  <div class="card-header">
                     <?php echo $editData ? 'Editar Usuario' : 'Agregar Usuario'; ?>
                  </div>
                  <div class="card-body">
                     <form method="POST" enctype="multipart/form-data">
                        <?php if ($editData): ?>
                           <input type="hidden" name="id" value="<?php echo $editData['id']; ?>">
                        <?php endif; ?>
                        <div class="mb-3">
                           <label class="form-label">Username</label>
                           <input type="text" name="username" class="form-control" value="<?php echo $editData['username'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                           <label class="form-label">Email</label>
                           <input type="email" name="email" class="form-control" value="<?php echo $editData['email'] ?? ''; ?>" required>
                        </div>
                        <?php if (!$editData): ?>
                           <div class="mb-3">
                              <label class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" required>
                           </div>
                        <?php endif; ?>
                        <div class="mb-3">
                           <label class="form-label">Teléfono</label>
                           <input type="number" name="tel" class="form-control" value="<?php echo $editData['tel'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                           <label class="form-label">Foto</label>
                           <input type="file" name="picsure" class="form-control">
                           <?php if ($editData && $editData['picsure']): ?>
                              <img src="backend/uploads/<?php echo $editData['picsure']; ?>" width="80" class="mt-2">
                           <?php endif; ?>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo $editData ? 'Actualizar' : 'Guardar'; ?></button>
                        <?php if ($editData): ?>
                           <a href="usuarios.php" class="btn btn-secondary">Cancelar</a>
                        <?php endif; ?>
                     </form>
                  </div>
               </div>
            </div>

            <!-- Columna de la tabla -->
            <div class="col-md-8">
               <table class="table table-bordered table-striped">
                  <thead class="table-dark">
                     <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $usuarios = $conn->query("SELECT * FROM users");
                     if ($usuarios->num_rows > 0):
                        while ($row = $usuarios->fetch_assoc()):
                     ?>
                           <tr>
                              <td><?php echo $row['id']; ?></td>
                              <td><?php echo $row['username']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['tel']; ?></td>
                              <td>
                                 <?php if ($row['picsure']): ?>
                                    <img src="backend/uploads/<?php echo $row['picsure']; ?>" width="50">
                                 <?php else: ?>
                                    Sin foto
                                 <?php endif; ?>
                              </td>
                              <td>
                                 <a href="?edit=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Editar</a>
                                 <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar?')">Eliminar</a>
                              </td>
                           </tr>
                        <?php endwhile;
                     else: ?>
                        <tr>
                           <td colspan="6" class="text-center">No hay usuarios registrados</td>
                        </tr>
                     <?php endif; ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </body>

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