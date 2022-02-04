<?php
    require 'connectdb.php';
    
    $del_id = $_GET['id']; // รับค่า get id มาจากหน้า main ตรงกด delete 
    // // ลบรูปออกจาก database 
    // $sql_select = "SELECT img FROM data_movie  WHERE del='$del_id'"; 
    // $res_select = mysqli_query($dbcon, $sql_select);
    // $news_image = mysqli_fetch_row($res_select) ;
    // $filename = $news_image[0];
    
    // unlink('../news_image/'.$filename); // ลบรูปออกจากโฟลเดอร์ 
    
    // ลบข้อมูลออกจาก database 
    $sql  = "DELETE FROM data_movie WHERE id='$del_id'";
    $result = mysqli_query($dbcon, $sql);
    if($result) {
        header("Location: login/admin.php");   
    }else{
        echo "เกิดข้อผิดพลาด" . mysqli_error($dbcon);
    }
    mysqli_close($dbcon); // ปิด database 