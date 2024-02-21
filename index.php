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
    <?php include "nav.php" ?>

    <div class="mt-3 d-flex justify-content-between"> <!-- class="mt-3" ห่างจากบรรทัดบน 3 --><!-- class="d-flex" ทำให้อยู่ในบรรทัดเดียวกัน --><!-- class="justify-content-between" ทำให้อยู่หน้าสุดและอยู่ท้ายสุด -->
        <div> <!-- div ขึ้นบรรทัดใหม่ -->
            <label>หมวดหนู่</label>
            <span class="dropdown"> <!-- span ไม่ขึ้นบรรทัดใหม่ -->
                <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    --ทั้งหมด--
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">ทั้งหมด</a></li>
                    <li><a class="dropdown-item" href="#">เรื่องเรียน</a></li>
                    <li><a class="dropdown-item" href="#">เรื่องทั่วไป</a></li>
                </ul>
            </span>
        </div>
        <?php if(isset($_SESSION['id'])){ ?>
        <div>
            <a href="newpost.php" class="btn btn-success btn-sm">
            <i class="bi bi-plus"></i>สร้างกระทู้ใหม่</a>
        </div>
        <?php }?>
    </div>
  

    <table class="table table-striped mt-4">
        <?php  
            $l = 1;
            while($l <= 10){
                echo"<tr><td class='d-flex justify-content-between'><a href=post.php?id=$l style=text-decoration:none>กระทู้ที่ $l</a>";                             
                if(isset($_SESSION["id"]) && $_SESSION["role"] ==  "a"){
                    echo "&nbsp;&nbsp;<a href=delete.php?id=$l
                    class='btn btn-danger btn-sm'><i class='bi bi-trash'></i></a>";

                }                   
                echo "</td></tr>";                
                $l++;
            } 
        ?>
    </table>
     
    </div>
</body>
</html>