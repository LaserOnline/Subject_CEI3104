<?php

include '../connectdb.php';

$name = $_POST['name'];
$img = $_POST['img'];
$vdo_ex = $_POST['vdo_ex'];
$vdo_main = $_POST['vdo_main'];
$status_list = $_POST['status_list'];


$sql = "INSERT INTO data_movie (name,img,vdo_ex,vdo_main,status_list,movie_time)";

$sql .= " VALUES ('$name','$img','$vdo_ex','$vdo_main','$status_list',NOW())";

$result = mysqli_query($dbcon, $sql);

if ($result) {
    header('location: ../../../../Subject_CEI3104/success.php');
} else {
    echo "เกิดข้อผิดพลาด" . mysqli_error($dbcon);
}
