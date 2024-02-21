<?php
    session_start();
    if(!isset($_SESSION["id"])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newpost</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Wanadorn</h1>
    <hr>
    <?php
        echo "<table>
            <td>ผู้ใช้ : </td><td>$_SESSION[username]</td></tr>
            <tr><td>หมวดหมู่ : </td><td><select>
                <option value='all'>--ทั้งหมด--</option>
                <option value='general'>เรื่องทั่วไป</option>
                <option value='study'>เรื่องเรียน</option>
                </select></td></tr>
            <tr><td>หัวข้อ : </td><td><input type='text' name='head' size='20'></td></tr>
            <tr><td>เนื้อหา : </td><td style='text-align: left;'><textarea name='message' rows='5' cols='20'></textarea></td></tr>
            <tr><th colspan='2'><input type='submit' value='บันทึกข้อความ'></th></tr>
            <tr><th colspan='2'><a href='index.php'>กลับไปยังหน้าหลัก</a></th></tr>
        </table>";
    ?>
    
</body>
</html>