<?php 
include '../../../Connection/Connection.php';
if(isset($_GET['Users_id'])){
    $Users_id=$_GET['Users_id'];
    $consulta=$conexion_bd->prepare("SELECT * FROM users WHERE Users_id=:Users_id");
    $consulta->bindParam(":Users_id",$Users_id);
    $consulta->execute();

    if($consulta->rowCount()>=1){
        $fila=$consulta->fetch(); 
    }else {
        echo "Ocurrió un error";
    }
}else {
    echo "Error no se pudo procesar la petición";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <p>bienvenido</p>
    <div class="col-xs-12 col-sm-6 col-md-6">
    <a href="../../../Links/SystemAdmin/SelectUsers.php" class="btn btn-primary">Regresar</a>
    </div>
    <form action="Procedures/Update.php" method="POST" enctype="">
            <label for="">Nombre</label>
                <input type="text" name="Users_names" value="<?php echo$fila['Users_names'];?>"></br>
            <label for="">Segundo Nombre</label>
                <input type="text" name="Users_names_two" value="<?php echo$fila['Users_names_two'];?>"></br>
            <label for="">Primer apellido</label>
                <input type="text" name="Users_surname_one" value="<?php echo$fila['Users_surname_one'];?>"></br>
            <label for="">Segundo apellido</label>
                <input type="text" name="Users_surname_two" value="<?php echo$fila['Users_surname_two'];?>"></br>
            <label for="">Numero de documento de identidad</label>
                <input type="text" name="Users_number_dni" value="<?php echo$fila['Users_number_dni'];?>"></br>
            <label for="">Correo</label>
                <input type="text" name="Users_email" value="<?php echo$fila['Users_email'];?>"></br>
            <label for="">Telefono</label>
                <input type="text" name="Users_telephone" value="<?php echo$fila['Users_telephone'];?>"></br>
            <label for="">Dirección</label>
                <input type="text" name="Users_address" value="<?php echo$fila['Users_address'];?>"></br>
            <label for="">Ciudad</label>
                <input type="text" name="Users_city" value="<?php echo$fila['Users_city'];?>"></br>
            <label for="">Nombre de usuario</label>
                <input type="text" name="Users_name_user" value="<?php echo$fila['Users_name_user'];?>"></br>
                <input type="hidden" name="Users_id" value="<?php echo $fila['Users_id'];?>">
                <input type="submit" value="Guardar">
                </form>

</body>
</html>