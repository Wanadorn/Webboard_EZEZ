<?php
    session_start();
    if(isset($_SESSION["id"]) && $_SESSION["role"] == "a"){
        $num = $_GET['id'];
        echo "ลบกระทู้หมายเลข $num";
    }else{
        header("location:index.php");
        die();
    }  
?>