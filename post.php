<?php
    session_start();
    $id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">   
    <title>Post</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;" class="mt-3">Webboard Wanadorn</h1>   
        <?php include "nav.php" ?>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
            <div class="col-lg-4 col-md-6 col-sm-8 col-10">  
                <!-- card แสดงกระทู้ -->                                    
                <?php  
                    $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                    $sql="SELECT post.title,post.content,post.post_date,user.login FROM post 
                    INNER JOIN user ON (post.user_id=user.id) WHERE post.id=$_GET[id]";
                    $result=$conn->query($sql);
                    while($row=$result->fetch()){
                        echo "<div class='card border-primary mt-3'>
                        <div class='card-header bg-primary text-white'>$row[0]</div>       
                        <div class='card-body'>
                                $row[1]<br><br>$row[3] - $row[2]
                            </div>   
                        </div>";            
                    }
                ?>
                <!-- card แสดงcomment -->
                <?php  
                    $sql="SELECT comment.content,comment.post_date,user.login FROM comment 
                    INNER JOIN user ON (comment.user_id=user.id) WHERE comment.post_id=$_GET[id] ";
                    $result=$conn->query($sql);
                    $i=1;
                    while($row=$result->fetch()){
                        echo "<div class='card border-info mt-3'>
                        <div class='card-header bg-info text-white'>ความคิดเห็นที่่ $i</div>       
                        <div class='card-body'>
                                $row[0]<br><br>$row[2] - $row[1]
                            </div>   
                        </div>";
                        $i++;            
                    }
                ?>

                <?php if(isset($_SESSION["id"])){ ?>
                    <!-- card แสดงข้อมูล -->
                    <div class="card border-success mt-3">
                        <div class="card-header bg-success text-white">แสดงความคินเห็น</div>
                        <div class="card-body">             
                            <form action="post_save.php" method="post">
                                <input type="hidden" name="post_id" value="<?= $_GET['id'];?>">
                                <div class="row mb-3 justify-content-center">
                                    <div class="col-lg-10">
                                        <textarea name="comment" class="form-control" rows="8" required></textarea>
                                    </div>                              
                                </div>   
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-sm text-white"><i class="bi bi-box-arrow-up-right"></i>ส่งข้อความ</button>
                                        <button type="reset" class="btn btn-danger btn-sm ms-2"><i class="bi bi-x-square"></i>ยกเลิก</button>
                                    </div>
                                </div>                    
                            </form> 
                        </div>                     
                    </div>
                <?php } ?>               
            </div>
            <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>               
        </div>
    </div>    
</body>
</html>