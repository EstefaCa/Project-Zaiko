<?php
    $Elements_name=$_POST['Elements_name'];
    $Elements_references=$_POST['Elements_references'];    
    $Elements_code=$_POST['Elements_code'];
    $Elements_brands=$_POST['Elements_brands'];

    $consulta=$conexion_bd->prepare("INSERT INTO elements(Elements_name,Elements_references,Elements_code,Elements_brands
    )VALUES(?,?,?,?)");

        $consulta->bindParam(1,$Elements_name);
        $consulta->bindParam(2,$Elements_references);
        $consulta->bindParam(3,$Elements_code);
        $consulta->bindParam(4,$Elements_brands);

    if ($consulta->execute()) {
            echo "Datos Almacenados";
            $conexion_bd= Null;
        }else {
            echo "Error no se pudo almacenar los datos";
        }

    
?>