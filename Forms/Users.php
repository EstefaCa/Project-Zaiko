<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form/User</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nombre del usuario</label>
            <input type="text" name="Users_names"></br><br>
        <label for="">Primer apellido</label>
            <input type="text" name="Users_surname_one"></br><br>
        <label for="">Segundo apellido</label>
            <input type="text" name="Users_surname_two"></br><br>
        <label for="">Telefono</label>
            <input type="text" name="Users_telephone"></br><br>
        <label for="">Nombre Ciudad</label>
            <input type="text" name="Users_city"></br><br>
        <label for="">Dirección</label>
            <input type="text" name="Users_address"></br><br>
        <label for="">Tipo de documento de identidad</label>    
        <select name="DNI_DNI_id" id=""></br><br>
            <option value="1">Cédula de ciudadanía</option>
            <option value="2">Cédula de Extranjería</option>
        </select></br><br>
        <label for="">Número de documento de identidad</label>
            <input type="text" name="Users_number_dni"></br><br>
        <label for="">Apodo</label>
            <input type="text" name="Users_name_user"></br><br>
        <label for="">Rol</label> 
        <select name="Role_Role_id" id=""></br><br>
            <option value="3">Administrador de sistemas</option>
            <option value="4">Administrador de Dependencia</option>
            <option value="5">Administrador de Sub-Dependencia</option>
            <option value="6">Visualizador</option>
        </select></br><br>
        <label for="">Correo</label>
            <input type="text" name="Users_email"></br><br>
        <label for="">Contraseña</label>
            <input type="text" name="Users_password"></br><br>
            <input type="submit" value="Guardar">
    </form>
    <?php
        if (isset($_POST['Users_names'],$_POST['Users_surname_one'],$_POST['Users_surname_two'],$_POST['Users_telephone'],
        $_POST['Users_address'],$_POST['Users_number_dni'],$_POST['Users_name_user'],$_POST['Users_password'],$_POST['DNI_DNI_id'],
        $_POST['Role_Role_id'],$_POST['Users_email'])) {
            require_once "../Connection/Connection.php";
            require_once "../Procedures/Insert.php";
        }
    ?>
</body>
</html>