<?php
    $Users_names=$_POST['Users_names'];
    $Users_surname_one=$_POST['Users_surname_one'];
    $Users_surname_two=$_POST['Users_surname_two'];
    $Users_telephone=$_POST['Users_telephone'];
    $Users_address=$_POST['Users_address'];
    $Users_number_dni=$_POST['Users_number_dni'];
    $Users_city=$_POST['Users_city'];
    $Users_name_user=$_POST['Users_name_user'];
    $Users_email=$_POST['Users_email'];   
    $Users_password=md5($_POST['Users_password']);
    $DNI_DNI_id=$_POST['DNI_DNI_id'];   
    $Role_Role_id=$_POST['Role_Role_id'];       
    $Users_active=true;

    //Definir Rol del Usuario
    switch ($Role_Role_id) {
        case $Role_Role_id==3:
            $Role_Role_id=1;
            break;
        case $Role_Role_id==4:
            $Role_Role_id=2;
            break;
        case $Role_Role_id==5:
            $Role_Role_id=3;
            break; 
        default:
            $Role_Role_id=4;
            break;
        }
    $consulta=$conexion_bd->prepare("INSERT INTO users(Users_names,Users_surname_one,Users_surname_two,Users_telephone,
    Users_address,Users_number_dni,Users_city,Users_name_user,Users_email,Users_password,Users_active,DNI_DNI_id,Role_Role_id)
    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $consulta->bindParam(1,$Users_names);
        $consulta->bindParam(2,$Users_surname_one);
        $consulta->bindParam(3,$Users_surname_two);
        $consulta->bindParam(4,$Users_telephone);
        $consulta->bindParam(5,$Users_address);
        $consulta->bindParam(6,$Users_number_dni);
        $consulta->bindParam(7,$Users_city);
        $consulta->bindParam(8,$Users_name_user);
        $consulta->bindParam(9,$Users_email);
        $consulta->bindParam(10,$Users_password);
        $consulta->bindParam(11,$Users_active);
        $consulta->bindParam(12,$DNI_DNI_id);
        $consulta->bindParam(13,$Role_Role_id);

        if ($consulta->execute()) {
            echo "Datos Almacenados";
            $conexion_bd= Null;
        }else {
            echo "Error no se pudo almacenar los datos";
        }
?>