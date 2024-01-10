<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Wanadorn</h1>
    <hr>
    <div style="text-align: center;">
        <?php
            $Login = $_POST['login'];
            $Password = $_POST['pwd'];
            if($Login == "admin" && $Password == "ad1234"){
                echo "ยินดีต้อนรับคุณ ADMIN";
            }else if($Login == "member" && $Password == "mem1234"){
                echo "ยินดีต้อนรับคุณ MEMBER";
            }else{
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            }
        ?>
        <br>
        <a href="login.php" style="float: center;">กลับไปยังหน้าหลัก</a>
    </div>
    
</body>
</html>
