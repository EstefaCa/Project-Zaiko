<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Units</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nombre de la dependencia</label>
            <input type="text" name="Units_name"></br>
        <label for="">Ingrese el número de identidad del administrador de esta dependencia</label> 
            <input type="text" name="Users_number_dni">   
            <input type="submit" value="Guardar">
    </form>
    <?php
        if (isset($_POST['Units_name'],$_POST['Users_number_dni'])) {
            require_once "../../../Connection/Connection.php";
            require_once "Procedures/Insert.php";
        }
    ?>
</body>
</html>