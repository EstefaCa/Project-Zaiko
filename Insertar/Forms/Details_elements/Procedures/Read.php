<?php
    $consulta=$conexion_bd->prepare("SELECT Elements_name,Elements_references,Elements_code,Elements_brands
    FROM elements");
    $consulta->execute();
    if ($consulta->rowCount()>=1) {
        while ($fila=$consulta->fetch()) {
                echo "<tr>
                    <td>".$fila['Elements_name']."</td>
                    <td>".$fila['Elements_references']."</td> 
                    <td>".$fila['Elements_code']."</td> 
                    <td>".$fila['Elements_brands']."</td> 
                    <td>".$fila['Units_date_of_registration']."</td>
                    <td><a href='#!'>Actualizar</a></td>
                    <td><a href='#!'>Desactivar</a></td>
                </tr>";
        }
        
    }else {
        echo "<tr>
            <td colspan='4'>No hay datos</td>
            </tr>";
    }
?>