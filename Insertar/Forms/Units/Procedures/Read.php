<?php
    $consulta=$conexion_bd->prepare("SELECT Units_name,Units_date_of_registration FROM units");
    $consulta->execute();
    if ($consulta->rowCount()>=1) {
        while ($fila=$consulta->fetch()) {
                echo "<tr>
                    <td>".$fila['Units_name']."</td>
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