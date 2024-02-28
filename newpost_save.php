<?php
    session_start();
    $login=$_POST['login'];
    $passwd=sha1($_POST['pwd']);
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    
    $cat=$_POST['category'];
    $topic=$_POST['topic'];
    $comment=$_POST['comment'];

    $sql="INSERT INTO post(title,content,post_date,cat_id,user_id)
    VALUES ('$topic','$comment',NOW(),'$cat','$_SESSION[user_id]')";
    $conn->exec($sql);
    $_SESSION['status_login']="success";

    $conn=null;
    header("location:register.php");
    die();
?>