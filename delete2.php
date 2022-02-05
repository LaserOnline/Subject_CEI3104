<?php
    require 'connectdb.php';
    $del_id = $_GET['id']; 


    // ลบข้อมูลออกจาก database 
    $sql  = "DELETE FROM data_list WHERE id='$del_id'";
    $result = mysqli_query($dbcon, $sql);
    if($result) {
        header("Location: ../SUBJECT_CEI3104/admin/admin2.php");
    }else{
        echo "เกิดข้อผิดพลาด" . mysqli_error($dbcon);
    }
    mysqli_close($dbcon); // ปิด database 
    ?>