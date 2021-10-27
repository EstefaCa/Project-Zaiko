<?php
    $consulta=$conexion_bd->prepare("SELECT Users_id,Users_names,Users_surname_one,Users_surname_two,Users_telephone,Users_address,
    Users_number_dni,Users_city,Users_name_user,Users_email,Users_date_of_registration,Role_Role_id FROM users");
    $consulta->execute();
    if ($consulta->rowCount()>=1) {
        while ($fila=$consulta->fetch()) {
                echo "<tr>
                    <td>".$fila['Users_names']."</td>
                    <td>".$fila['Users_surname_one']."</td>
                    <td>".$fila['Users_surname_two']."</td>
                    <td>".$fila['Users_telephone']."</td>
                    <td>".$fila['Users_address']."</td>
                    <td>".$fila['Users_number_dni']."</td>
                    <td>".$fila['Users_city']."</td>
                    <td>".$fila['Users_name_user']."</td>
                    <td>".$fila['Users_email']."</td>
                    <td>".$fila['Users_date_of_registration']."</td>
                    <td>".$fila['Role_Role_id']."</td>
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