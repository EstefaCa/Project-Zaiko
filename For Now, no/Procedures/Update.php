<?php
if (!isset($_POST['Users_number_dni'])){
	header('location: Select.php');
	} 
//print_r($_POST);

	include '../Connection/Connection.php';

    $Users_number_dni= $_POST['Users_number_dni'];
    $Users_names=$_POST['Users_names'];
    $Users_surname_one=$_POST['Users_surname_one'];
    $Users_name_user=$_POST['Users_name_user'];
    $Users_email=$_POST['Users_email'];
    date_default_timezone_set('America/Bogota'); 
    $DateAndTime = date('Y-m-d h:i:s', time());  


    $sentencia = $conexion_bd-> prepare ("UPDATE users SET  Users_names=?,Users_surname_one=?,Users_name_user=?,Users_email=?, Users_date_of_modification=? WHERE Users_number_dni = ?;");
    $resultado = $sentencia->execute([ $Users_names, $Users_surname_one, $Users_name_user, $Users_email,$DateAndTime, $Users_number_dni]);
    if ($resultado === TRUE){
    	header('location: Select.php');
    }else{
    	echo "Error";
    }


 ?>