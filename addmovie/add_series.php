<?php
require '../connectdb.php';
$sql = "SELECT * FROM data_movie";
$query = mysqli_query($dbcon, $sql);
$sql2 = "SELECT * FROM data_movie WHERE status_list = 'YES' ";
$query2 = mysqli_query($dbcon, $sql2);
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
    <div style="width: 25%;margin: 70px 0 0 690px ;">
        <h1 style="text-align: center;">เพิ่มตอนซี่รีย์ </h1>
        <form method="post" action="insert_series.php">
        <select class="form-select" name='id'>
                <option selected>เลือกหนังเพื่อเพิ่มตอน</option>
                <?php while ($result_movie = mysqli_fetch_assoc($query2)) { ?>
                    <option value="<?= $result_movie['id'] ?>"><?= $result_movie['name'] ?></option>
                <?php } ?>
            </select>
            <div class="form-group">
                <label style="margin-top: 10px;" for="exampleInputEmail1">ชื่อตอน</label>
                <input class="form-control" name="name" placeholder="">
            </div>
            <div class="form-group">
                <label style="margin-top: 10px;" for="exampleInputPassword1">ลิ้งตอน</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="vdo">
                <label style="margin-top: 10px;" for="exampleInputPassword1">เพิ่มตอนที่</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="part">
                <button style="margin-top: 10px;" class="btn btn-danger"><a style="text-decoration: none;color: white;" href="../../Subject_CEI3104/admin/admin.php">กลับหน้า Addmin</a></button>
                <button style="margin-top: 10px;" type="submit" class="btn btn-success"><a href="id?=<?= $series_id ?>"></a>ยืนยัน</button>
            </div>
        </form>
    </div>
</body>

</html>