<?php
// Recuperar datos
    if(isset($GET['Users_id'])){
        $Users_id=$GET['Users_id'];
        $consulta=$conexion_bd->prepare("SELECT * FROM users WHERE Users_id=:Users_id");
        $consulta->bindParam(":Users_id",$Users_id);
        $consulta->execute();

        if($consulta->rowCount()>=1){
            $fila=$consulta->fetch(); 
            echo '<form action="" method="post">
            <input type="hidden" name="Users_id" value="'.$fila['Users_id'].'"></br>
            <label for="">Nombre del usuario</label>
                <input type="text" name="Users_names" value="'.$fila['Users_names'].'"></br>
            <label for="">Primer apellido</label>
                <input type="text" name="Users_surname_one" value="'.$fila['Users_surname_one'].'"></br>
            <label for="">Segundo apellido</label>
                <input type="text" name="Users_surname_two" value="'.$fila['Users_surname_two'].'"></br>
            <label for="">Tipo de documento de identidad</label>    
            <label for="">Correo</label>
                <input type="text" name="Users_email" value="'.$fila['Users_email'].'"></br>
            <label for="">Contraseña</label>
                <input type="text" name="Users_password" value="'.$fila['Users_password'].'"></br>
                <input type="submit" value="Guardar">
        </form>';
        }else {
            echo "Ocurrió un error";
        }
    }else {
        echo "Error no se pudo procesar la petición";
    }
?>