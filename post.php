<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Wanadorn</h1>
    <hr>
    <div style="text-align: center;">
        <div><br></div>
        <?php
            $num = $_GET['id'];
            echo "ต้องการดูกระทู้หมายเลข $num";            
        ?>
        <div><br></div>
        <table style="border: 2px solid black; width: 40% "align = "center">
            <tr><td style="background-color: #6cd2fe;" align="left">แสดงความคินเห็น</td></tr>
            <tr><td colspan="2"><textarea name="message" cols="69"></textarea></td></tr>
            <tr><th colspan="2"><input type="submit" value="ส่งข้อความ"></th></tr>
        </table>
        <br>
        <a href="index.html">กลับไปยังหน้าหลัก</a>
    </div>
</body>
</html>