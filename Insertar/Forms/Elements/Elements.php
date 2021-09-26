<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementos</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nombre del elemento</label>
            <input type="text" name="Elements_name"></br>
        <label for="">Referencia del elemento</label> 
            <input type="text" name="Elements_references">   
        <label for="">Codigo del elemento</label> 
            <input type="text" name="Elements_code">  
        <label for="">Marca del elemento</label> 
            <input type="text" name="Elements_brands">  
            <input type="submit" value="Guardar">
    </form>
    <?php
        if (isset($_POST['Elements_name'],$_POST['Elements_references'],$_POST['Elements_code'],$_POST['Elements_brands'])) {
            require_once "../../../Connection/Connection.php";
            require_once "Procedures/Insert.php";
        }
    ?>
</body>
</html>