<?php
    $Users_names=$_POST['Users_names'];
    $Users_surname_one=$_POST['Users_surname_one'];
    $Users_surname_two=$_POST['Users_surname_two'];
    $Users_number_dni=$_POST['Users_number_dni'];
    $Users_email=$_POST['Users_email'];           
    $Users_password=md5($_POST['Users_password']);
    $DNI_DNI_id=$_POST['DNI_DNI_id'];   
    $Role_Role_id=$_POST['Role_Role_id'];   

    $consulta=$conexion_bd->prepare("INSERT INTO users(Users_names,Users_surname_one,Users_surname_two,
    Users_number_dni,Users_email,Users_password,DNI_DNI_id,Role_Role_id)
    VALUES(?,?,?,?,?,?,?,?)");

        $consulta->bindParam(1,$Users_names);
        $consulta->bindParam(2,$Users_surname_one);
        $consulta->bindParam(3,$Users_surname_two);
        $consulta->bindParam(4,$Users_number_dni);
        $consulta->bindParam(5,$Users_email);        
        $consulta->bindParam(6,$Users_password);
        $consulta->bindParam(7,$DNI_DNI_id);
        $consulta->bindParam(8,$Role_Role_id);


        if ($consulta->execute()) {
            echo "Datos Almacenados";
            $conexion_bd= Null;
        }else {
            echo "Error no se pudo almacenar los datos";
        }
?>