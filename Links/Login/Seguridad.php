<?php
if (!isset($_SESSION['Users_name_user'],$_SESSION['Users_email'])){
    header("Location: ../../Index.php");
}
?>