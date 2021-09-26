<?php
    $Details_available=$_POST['Details_available'];
    $Details_description=$_POST['Details_description'];    
    $Details_observation=$_POST['Details_observation'];
    $Details_state=$_POST['Details_state'];
    $Details_purchase_value=$_POST['Details_purchase_value'];
    $Details_date_of_purchase=$_POST['Details_date_of_purchase'];

    $consulta=$conexion_bd->prepare("INSERT INTO details_elements(Details_available,Details_description,Details_observation,Details_state,
    Details_purchase_value,Details_date_of_purchase)VALUES(?,?,?,?,?,?)");

        $consulta->bindParam(1,$Details_available);
        $consulta->bindParam(2,$Details_description);
        $consulta->bindParam(3,$Details_observation);
        $consulta->bindParam(4,$Details_state);
        $consulta->bindParam(5,$Details_purchase_value);
        $consulta->bindParam(6,$Details_date_of_purchase);

    if ($consulta->execute()) {
            echo "Datos Almacenados";
            $conexion_bd= Null;
        }else {
            echo "Error no se pudo almacenar los datos";
        }

    
?>