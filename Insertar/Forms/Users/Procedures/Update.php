<?php
if (!isset($_POST['Users_id'])){
	header('location: ../UsersUpdate.php');
	} 
    include '../../../../Connection/Connection.php';
    $Users_id = $_POST['Users_id'];
    $Users_names=$_POST['Users_names'];
    $Users_names_two=$_POST['Users_names_two'];
    $Users_surname_one=$_POST['Users_surname_one'];
    $Users_surname_two=$_POST['Users_surname_two'];
    $Users_telephone=$_POST['Users_telephone'];
    $Users_address=$_POST['Users_address'];
    $Users_number_dni= $_POST['Users_number_dni'];
    $Users_city=$_POST['Users_city'];
    $Users_name_user=$_POST['Users_name_user'];
    $Users_email=$_POST['Users_email'];

    date_default_timezone_set('America/Bogota'); 
    $DateAndTime = date('Y-m-d h:i:s', time());  


    $sentencia = $conexion_bd-> prepare ("UPDATE users SET  Users_names=?,Users_names_two=?,Users_surname_one=?,Users_surname_two=?,Users_telephone=?,Users_address=?,Users_number_dni=?,Users_city=?,Users_name_user=?,Users_email=?, Users_date_of_modification=? WHERE Users_id = ?;");
    $resultado = $sentencia->execute([ $Users_names,$Users_names_two,$Users_surname_one,$Users_surname_two,$Users_telephone,$Users_address,$Users_number_dni,$Users_city,$Users_name_user,$Users_email,$DateAndTime, $Users_id]);
    if ($resultado === TRUE){
    	header('location: ../../../../Links/SystemAdmin/SelectUsers.php ');
    }else{
    	echo "Error al Actualizar los Datos";
    }


 ?>