

<?php
// Conexión a la base de datos

include 'backend/crud.php';
if (isset($_SESSION['user_id'])) {
   $userId = $_SESSION['user_id'];
   $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
   $stmt->bind_param("i", $userId);
   $stmt->execute();
   $result = $stmt->get_result();
   $usuario = $result->fetch_assoc();
} else {
   $usuario = null;
}

if (isset($_SESSION['flash_message'])): ?>
   <div class="alert alert-<?php echo $_SESSION['flash_message']['type']; ?> alert-dismissible fade show mt-3" role="alert">
       <?php echo $_SESSION['flash_message']['message']; ?>
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
   </div>
   <?php unset($_SESSION['flash_message']); ?>
<?php endif;

?>


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
            <nav class="navigation navbar navbar-expand-md navbar-dark ">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                  aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>

               <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                     <button class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Administrador</button>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="crud2.php">Gestor de Usuarios</a></li>
                     </ul>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.php">Sobre mi</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="service.php">Servicios</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="gallery.php">Galeria</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="testimonial.php"> Testimonios </a>
                  </li>


                  <!-- Muestra quién ha ingresado -->
                  <!-- Verifica si la variable usuario está definida -->
                  <li class="nav-item">
                        <span class="nav-item">
                           Bienvenido, <?php echo htmlspecialchars($usuario['username']); ?>
                           <?php
                           // Verifica si hay imagen de usuario
                           if (!empty($usuario['picsure'])): ?>
                              <img src="backend/uploads/<?php echo htmlspecialchars($usuario['picsure']); ?>"  width="30" height="30" class="rounded-circle ml-2">
                           <?php else: ?>
                              <!-- Si no hay imagen, mostrar imagen por defecto -->
                              <img src="backend/uploads/default-avatar.png" width="30" height="30" class="rounded-circle ml-2">
                           <?php endif; ?>
                        </span>
                     </li>

                  <a href="/avance2/Backend/logout.php" class="btn btn-sm btn-danger ml-md-2">
                     <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                  </a>
               </ul>

         </div>
      </div>
      </nav>
   </div>

</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>