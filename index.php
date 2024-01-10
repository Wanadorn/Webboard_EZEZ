<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Wanadorn</h1>
    <hr>
    <form action="verify.php" method="post">
        หมวดหนู่:
        <select>
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option>
        </select>
        <a href="login.php" style="float: right;">เข้าสู่ระบบ</a>     
    </form>
    <ul>
        <?php  
            $l = 1;
            while($l <= 10){
                echo"<li><a href=post.php?id=$l>กระทู้ที่$l</a></li>";
                $l++;
            } 
        ?>
    </ul>
    
    
    
</body>
</html>