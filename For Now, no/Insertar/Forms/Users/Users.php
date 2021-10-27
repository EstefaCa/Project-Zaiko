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
            <input type="text" name="Users_names"></br>
        <label for="">Primer apellido</label>
            <input type="text" name="Users_surname_one"></br>
        <label for="">Segundo apellido</label>
            <input type="text" name="Users_surname_two"></br>
        <label for="">Tipo de documento de identidad</label>    
        <select name="DNI_DNI_id" id=""></br>
            <option value="1">Cédula de ciudadanía</option>
            <option value="2">Cédula de Extranjería</option>
        </select></br>
        <label for="">Número de documento de identidad</label>
            <input type="text" name="Users_number_dni"></br>
        <select name="Role_Role_id" id=""></br>
            <option value="2">Admin_Units</option>
            <option value="4">AverageUser</option>
        </select></br>
        <label for="">Correo</label>
            <input type="email" name="Users_email"></br>
        <label for="">Contraseña</label>
            <input type="password" name="Users_password"></br>
            <input type="submit" value="Guardar">
    </form>
    <?php
        if (isset($_POST['Users_names'],$_POST['Users_surname_one'],$_POST['Users_surname_two'],$_POST['Users_number_dni'],
        $_POST['Users_email'],$_POST['Users_password'],$_POST['DNI_DNI_id'],$_POST['Role_Role_id'])) {
            require_once "../../../Connection/Connection.php";
            require_once "Procedures/Insert.php";
        }
    ?>
</body>
</html>