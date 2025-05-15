<?php
//Cerrar el login 
echo("ola");
session_start();
session_unset();
session_destroy();
header('Location: /avance2/index.php');
exit;

?>