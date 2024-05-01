<?php
    $con = mysqli_connect('localhost','root','','person');
    if (!$con) {
        die('Connect error : '.mysqli_connect_error());
    } 
    $id = $_GET["id"];
    $sql = "DELETE FROM person_data WHERE id = $id";

    if(mysqli_query($con, $sql))
    {
        header("Location: home.php");
    }
    else{
        echo "Silme hatası!";
    }
?>