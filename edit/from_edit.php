<?php
require '../connectdb.php';
$id = $_GET['id'];
 $id = $id ;
$sql = "SELECT * FROM data_movie WHERE id = $id";
$query = mysqli_query($dbcon, $sql);
$result = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div style="width: 25%;margin: 70px 0 0 45px ;">
        <h1 style="text-align: center;">แก้ไขหนัง</h1>
        <form method="GET" action="edit.php">
        <label style="margin-top: 10px;" for="exampleInputEmail1">หนังเรื่องที่</label>
                <input class="form-control" name="id" value="<?= $result['id'] ?>">
            <div class="form-group">
                <label style="margin-top: 10px;" for="exampleInputEmail1">ชื่อหนัง</label>
                <input class="form-control" name="name" value="<?= $result['name'] ?>">
            </div>
            <div class="form-group">
                <label style="margin-top: 10px;" for="exampleInputPassword1">ชื่อรูปหนัง</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="img" value="<?= $result['img'] ?>">
            </div>
            <div class="form-group">
                <label style="margin-top: 10px;" for="exampleInputPassword1">ลิ้งวิดีโอตัวอย่าง</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="vdo_ex" value="<?= $result['vdo_ex'] ?>">
            </div>
            <div class="form-group">
                <label style="margin-top: 10px;" for="exampleInputPassword1">ลิ้งวิดีโอหลัก</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="vdo_main" value="<?= $result['vdo_main'] ?>">

                <label style="margin-top: 10px;" for="exampleInputPassword1">วิดีโอเป็นซี่รี่ย์ไหม</label>
            <?php 
            if($result['status_list'] == 'YES'){
                ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_list" value="YES" checked>
                    <label class="form-check-label">YES</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input c" type="radio" name="status_list" value="NO">
                    <label class="form-check-label">NO</label>
                </div>
            <?php }else{ ?>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="status_list" value="YES" >
                    <label class="form-check-label">YES</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input c" type="radio" name="status_list" value="NO"checked>
                    <label class="form-check-label">NO</label>
                </div>
           <?php } ?>




                <button style="margin-top: 10px;" class="btn btn-danger"><a style="text-decoration: none;color: white;" href="../../Subject_CEI3104/admin/admin.php">กลับหน้า Addmin</a></button>
                <button style="margin-top: 10px;" type="submit" class="btn btn-success">ยืนยัน</button>
            </div>
        </form>
    </div>
</body>

</html>