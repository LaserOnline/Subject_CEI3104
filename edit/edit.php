<?php
    include '../connectdb.php' ; 
    $edit_id = $_GET['id'];
    $name = $_GET['name'];
    $img = $_GET['img'];
    $vdo_ex = $_GET['vdo_ex'];
    $vdo_main = $_GET['vdo_main'];
    
    //update data 
    $sql = "UPDATE data_movie SET name='$name',img='$img',vdo_ex='$vdo_ex',vdo_main='$vdo_main' WHERE id = $edit_id "; 
    $result = mysqli_query($dbcon,$sql);

    if($result) {
        header('location: ../../../../Subject_CEI3104/success.php');     
    }else{
       echo "เกิดข้อผิดพลาด". mysqli_error($dbcon);
    }
?>