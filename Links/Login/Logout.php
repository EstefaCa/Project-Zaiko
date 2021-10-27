<?php
//Cerrar Sesión
session_start();
include "../../Connection/Connection.php";
if(isset($_GET['tk']) && isset($_SESSION['token']) 
&& $_GET['tk'] == $_SESSION['token']){
$conexion_bd = Null;
session_destroy();
header("Location: ../../Index.html");
}
?>