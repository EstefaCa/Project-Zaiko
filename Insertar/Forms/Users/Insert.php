<?php
    $Users_names=$_POST['Users_names'];
    $Users_surname_one=$_POST['Users_surname_one'];
    $Users_surname_two=$_POST['Users_surname_two'];
    $Users_number_dni=$_POST['Users_number_dni'];
    $Users_email=$_POST['Users_email'];           
    $Users_password=md5($_POST['Users_password']);
    $Users_active=1;
    $DNI_DNI_id=$_POST['DNI_DNI_id'];   
    $Role_Role_id=$_POST['Role_Role_id'];   

    $consulta=$conexion_bd->prepare("INSERT INTO users(Users_names,Users_surname_one,Users_surname_two,
    Users_number_dni,Users_email,Users_password,Users_active,DNI_DNI_id,Role_Role_id)
    VALUES(?,?,?,?,?,?,?,?,?)"); 

        $consulta->bindParam(1,$Users_names);
        $consulta->bindParam(2,$Users_surname_one);
        $consulta->bindParam(3,$Users_surname_two);
        $consulta->bindParam(4,$Users_number_dni);
        $consulta->bindParam(5,$Users_email);        
        $consulta->bindParam(6,$Users_password);
        $consulta->bindParam(7,$Users_active);
        $consulta->bindParam(8,$DNI_DNI_id);
        $consulta->bindParam(9,$Role_Role_id);
        if ($consulta->execute()) {
            $Users_id = $conexion_bd->lastInsertId();
            if($_FILES["Users_profile_photo"]["error"]){
                echo 'Error al cargar archivo';
            }else{
                $permitted_files= array("image/png","image/jpeg");
                $permitted_size = 100000000;
                if (in_array($_FILES["Users_profile_photo"]["type"],$permitted_files) && $_FILES["Users_profile_photo"]
                ["size"] <= $permitted_size * 1024) {
                    $file_address = '../../../Assets/files/Users_profile_photo/'.$Users_id.'/';
                    $file_name = $file_address.$_FILES["Users_profile_photo"]["name"];
                    if (!file_exists($file_address)) {
                        mkdir($file_address);
                    }
                    if (!file_exists($file_name)) {
                        $file = @move_uploaded_file($_FILES["Users_profile_photo"]["tmp_name"],$file_name);
                        if($file){
                            echo 'Archivo Guardado';
                        }else{
                            echo 'Error al guardar el archivo';
                        }
                        
                    }else{
                        echo 'Archivo ya existe';
                    }

                }else{
                    echo 'Archivo no permitido o excede el tamaño';
                }
            }
            echo "Datos Almacenados";
            $conexion_bd= Null;
        }else {
            echo "Error no se pudo almacenar los datos";
        }
?>