<?php
require '../connectdb.php';
$id = $_GET['id'];
$sql = "SELECT * FROM data_list WHERE id = $id";
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
        <h1 style="text-align: center;"><?= $result['name'] ?></h1>
        <form method="get" action="edit2.php">
            <div class="form-group">
            <label style="margin-top: 10px;" for="exampleInputEmail1">หนังเรื่องที่</label>
                <input class="form-control" name="id" placeholder="<?= $result['id'] ?>">
                <label style="margin-top: 10px;" for="exampleInputEmail1">ชื่อตอน</label>
                <input class="form-control" name="name" placeholder="<?= $result['name'] ?>">
            </div>
            <div class="form-group">
                <label style="margin-top: 10px;" for="exampleInputPassword1">ลิ้งตอน</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="vdo" placeholder="<?= $result['vdo'] ?>">

                <label style="margin-top: 10px;" for="exampleInputPassword1">ตอนที่</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="part" placeholder="<?= $result['part'] ?>">

                

                <button style="margin-top: 20px;" class="btn btn-danger"><a style="text-decoration: none;color: white;" href="../../Subject_CEI3104/admin/admin.php">กลับหน้า Addmin</a></button>
                <button style="margin-top: 20px;" type="submit" class="btn btn-success">ยืนยัน</button>
            </div>
        </form>
    </div>
</body>

</html>