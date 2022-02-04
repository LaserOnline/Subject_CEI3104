<?php
        require '../connectdb.php';
        
        $login_username = $_POST['username'];
        $login_password = $_POST['password'];
        $login_email = $_POST['email'];
    //    if($login_username == "admin"){          // ไม่ให้ สร้าง user ที่ ชื่อ admin อีก 
            // echo"ห้ามใช้ Username เป็น admin ";
            // exit;
        // }
        
        //เข้ารหัส รหัสผ่าน
        $salt = 'tikde78uj4ujuhlaoikiksakeidke';
        $hash_login_password = hash_hmac('sha256', $login_password, $salt);
        // เพิ่มข้อมูล ลงไปใน ตาราง 
        $query = "INSERT INTO tblogin (login_username,login_password,login_email) VALUES ('$login_username','$hash_login_password','$login_email')";
        
        $result = mysqli_query($dbcon,$query);
        
        if ($result) {
            echo 'ลงทะเบียนสำเร็จ';
        } else {
            echo "เกิดข้อผิดพลาด ".  mysqli_error($dbcon); 
        }
        
        mysqli_close($dbcon);