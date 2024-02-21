<?php
    session_start();
    $Login = $_POST['login'];
    $Password = $_POST['pwd'];
    if(isset($_SESSION["id"]) || $Login == "" && $Password == ""){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>

        <?php
            
            if($Login == "admin" && $Password == "ad1234"){
                $_SESSION["username"] = "admin";
                $_SESSION["role"] = "a";
                $_SESSION["id"] = session_id();
                //echo "ยินดีต้อนรับคุณ ADMIN<br>";
                header("location:index.php");
                die();              
            }else if($Login == "member" && $Password == "mem1234"){
                $_SESSION["username"] = "member";
                $_SESSION["role"] = "m";
                $_SESSION["id"] = session_id();
                //echo "ยินดีต้อนรับคุณ MEMBER<br>";
                header("location:index.php");
                die();   
            }else{
                //echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง<br>";
                $_SESSION['error']='error';
                header("location:login.php");
                die();   
            }
        ?>


        //<a href="index.php" style="float: center;">กลับไปยังหน้าหลัก</a>

    
</body>
</html>
