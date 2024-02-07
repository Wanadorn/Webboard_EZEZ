<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Webboard Wanadorn</title>
    </head>   
<body>
    <div class="container-md">
    <h1 style="text-align: center;" class="mt-3">Webboard Wanadorn</h1>
    
    <nav class="navbar navbar-expand-lg" style="background-color: #d3d3d3;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><i class="bi bi-house-door-fill"></i> Home</a>        
            <ul class="navbar-nav">
                <?php if(!isset($_SESSION["id"])){ ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php"><i class="bi bi-pencil-square"></i> เข้าสู่ระบบ</a>
                    </li>
                <?php }else{ ?>            
                    <li class="nav-item dropdown">
                        <a class="btn btn-outline-secondary btn-sm dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-lines-fill"> </i><?php echo $_SESSION["username"] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-power"></i> ออกจากระบบ</a></li>
                            
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>

   


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
    
    
    </div>
</body>
</html>