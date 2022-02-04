<?php

include '../connectdb.php';

$name = $_POST['name'];
$img = $_POST['img'];
$vdo_ex = $_POST['vdo_ex'];
$vdo_main = $_POST['vdo_main'];
$status_list = $_POST['status_list'];


$sql = "INSERT INTO data_movie (name,img,vdo_ex,vdo_main,status_list)";

$sql .= " VALUES ('$name','$img','$vdo_ex','$vdo_main','$status_list')";

$result = mysqli_query($dbcon, $sql);

if ($result) {
    echo "บันทึกข้อมูลเรียบร้อย";
} else {
    echo "เกิดข้อผิดพลาด" . mysqli_error($dbcon);
}
