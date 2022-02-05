<?php

include '../connectdb.php';

$main_id = $_POST['id'];

$name = $_POST['name'];
$vdo = $_POST['vdo'];
$part = $_POST['part'];



$sql = "INSERT INTO data_list (main_id,name,vdo,part,sereis_time)";

$sql .= " VALUES ('$main_id','$name','$vdo','$part',NOW())";

$result = mysqli_query($dbcon, $sql);

if ($result) {
    header('location: ../../../../Subject_CEI3104/success.php');
} else {
    echo "เกิดข้อผิดพลาด" . mysqli_error($dbcon);
}
