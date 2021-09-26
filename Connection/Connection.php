<?php
/**
 * Conexión de base de datos.
 * @author Estefanía <estefaniaalarcon2011@gmail.com>
 * @version 1.0
 * @return string configuración de la conexión
 */
    $conexion_bd=new PDO('mysql:host=localhost;dbname=zaiko_db','root','');
?>