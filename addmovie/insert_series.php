<?php

include '../connectdb.php';

$main_id = $_POST['id'];

$name = $_POST['name'];
$vdo = $_POST['vdo'];
$part = $_POST['part'];



$sql = "INSERT INTO data_list (main_id,name,vdo,part)";

$sql .= " VALUES ('$main_id','$name','$vdo','$part')";

$result = mysqli_query($dbcon, $sql);

if ($result) {
    echo "บันทึกข้อมูลเรียบร้อย";
} else {
    echo "เกิดข้อผิดพลาด" . mysqli_error($dbcon);
}
