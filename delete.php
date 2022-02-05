<?php
require 'connectdb.php';

$del_id = $_GET['id'];


$sql  = "DELETE  FROM data_list WHERE main_id = $del_id";
$result = mysqli_query($dbcon, $sql);

// ลบข้อมูลออกจาก database 



if ($result) {

    $sql  = "DELETE  FROM data_movie WHERE id = $del_id";
    $result = mysqli_query($dbcon, $sql);
    header("Location: ../SUBJECT_CEI3104/admin/admin.php");

    // ลบข้อมูลออกจาก database 



    if ($result) {
    } else {
        echo "เกิดข้อผิดพลาด" . mysqli_error($dbcon);
    }
} else {
    echo "เกิดข้อผิดพลาด" . mysqli_error($dbcon);
}

mysqli_close($dbcon); // ปิด database 
