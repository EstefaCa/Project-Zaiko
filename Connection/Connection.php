<?php
/**
 * Conexión de base de datos.
 * @author Estefanía <estefaniaalarcon2011@gmail.com>
 * @version 1.0
 * @return string configuración de la conexión
 */
function connection_DB (){
    try {
        $conexion_bd = new PDO('mysql:host=localhost;dbname=Zaiko_db', 'root', '');
        $conexion_bd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion_bd -> exec('SET CHARACTER SET utf8');
        return $conexion_bd;
    } catch (Exception $e) {
        die('Error: '.$e->GetMessage());
    }
}
?>