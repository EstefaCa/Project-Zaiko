<?php
    $Units_name=$_POST['Units_name'];
    $Users_number_dni=$_POST['Users_number_dni'];
    
    $results=$conexion_bd->prepare("SELECT Users_number_dni FROM users WHERE Users_number_dni='$Users_number_dni'");
    $results -> execute();

    if ($results->rowCount()>=1) {
        $consulta=$conexion_bd->prepare("INSERT INTO units(Units_name)VALUES(?)");
            $consulta->bindParam(1,$Units_name);

        $Users_id=$conexion_bd->prepare("SELECT Users_id FROM users WHERE Users_number_dni='$Users_number_dni'");
        $Users_id->execute();
        $Units_id=$conexion_bd->prepare("SELECT Units_id FROM units WHERE Units_name='$Units_name'");
        $Units_id->execute();

        if ($Users_id->rowCount()>=1 && $Users_id->rowCount()>=1) {
            $consulta=$conexion_bd->prepare("INSERT INTO users_has_units(Users_Users_id,Units_Units_id)VALUES(?,?)");
            $consulta->bindParam(1,$Users_id);
            $consulta->bindParam(1,$Units_id);

        }
        

        if ($consulta->execute()) {
            echo "Datos Almacenados";
            $conexion_bd= Null;
        }else {
            echo "Error no se pudo almacenar los datos";
        }

    }else {
        echo "No se encuentra ningún usuario";
    }
    
?>