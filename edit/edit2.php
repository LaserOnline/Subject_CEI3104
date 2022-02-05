<?php
    include '../connectdb.php' ; 
    $edit_id = $_GET['id'];
    $name = $_GET['name'];
    $vdo = $_GET['vdo'];
    $part = $_GET['part'];
      
    $sql = "UPDATE data_list SET name='$name',vdo='$vdo',part='$part' WHERE id = $edit_id "; 
    $result = mysqli_query($dbcon,$sql);

    if($result) {
        header('location: ../../../../Subject_CEI3104/success2.php');     
    }else{
       echo "เกิดข้อผิดพลาด". mysqli_error($dbcon);
    }
?>