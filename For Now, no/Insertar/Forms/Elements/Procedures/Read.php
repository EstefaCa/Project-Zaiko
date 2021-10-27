<?php
    $consulta=$conexion_bd->prepare("SELECT Details_available,Details_description,Details_observation,
    Details_state,Details_date_of_modification,
    FROM elements");
    $consulta->execute();
    if ($consulta->rowCount()>=1) {
        while ($fila=$consulta->fetch()) {
                echo "<tr>
                    <td>".$fila['Elements_name']."</td>
                    <td>".$fila['Elements_references']."</td> 
                    <td>".$fila['Elements_photo']."</td> 
                    <td>".$fila['Elements_code']."</td> 
                    <td>".$fila['Elements_brands']."</td> 
                    <td>".$fila['Units_date_of_registration']."</td>
                    <td><a href='#!'>Actualizar</a></td>
                    <td><a href='#!'>Desactivar</a></td>
                </tr>";
        }
        
        Details_id Primaria	int(11)			
        2	Details_available	
        3	Details_description
        4	Details_observation	
        5	Details_state	
        6	Details_serial	
        7	Details_active
        8	Details_date_of_modification
        9	Details_purchase_value	int(11)
        10	Details_date_of_purchase
        11	Details_insurance
        12	Details_photo_observation
        13	Elements_Elements_id 
    }else {
        echo "<tr>
            <td colspan='4'>No hay datos</td>
            </tr>";
    }
?>