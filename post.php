        <div><br></div>
        <?php
            $num = $_GET['id'];          
            echo "ต้องการดูกระทู้หมายเลข $num<br>";
            if($num%2 == 0){
                echo "เป็นกระทู้หมายเลขคู่";
            }else{
                echo "เป็นกระทู้หมายเลขคี่";
            }            
        ?>
        <div><br></div>
        <table style="border: 2px solid black; width: 40% "align = "center">
            <tr><th colspan="2"><input type="submit" value="ส่งข้อความ"></th></tr>
        </table>
        <br>
        <a href="index.php">กลับไปยังหน้าหลัก</a>
    </div>
</body>
</html>