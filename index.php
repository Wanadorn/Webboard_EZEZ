<?php
    session_start();
?>
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
        <?php
        if(!isset($_SESSION["id"])){
            echo "<a href=login.php style='float: right;'>เข้าสู่ระบบ</a>";
        }else{
            echo "<div style='float: right;'>
                ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;&nbsp
                <a href=logout.php>ออกจากระบบ</a>;
            </div><br>
            <a href=newpost.php>สร้างกระทู้ใหม่</a>
            ";       
        }  
        ?> 
             
    </form>
    <ul>
        <?php  
            $l = 1;
            while($l <= 10){
                echo"<li><a href=post.php?id=$l>กระทู้ที่$l</a>";                             
                if(isset($_SESSION["id"]) && $_SESSION["role"] ==  "a"){
                    echo "&nbsp;&nbsp<a href=delete.php>ลบ</a>";
                }                   
                echo "</li>";                
                $l++;
            } 
        ?>
    </ul>
    
    
    
</body>
</html>