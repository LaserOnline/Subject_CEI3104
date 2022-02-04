<?php

require 'connectdb.php';
$id = @$_GET['id'];
if (!$id) {
  echo 'NO ID';
  exit;
}
$list = @$_GET['list'];

if (!$list) {
  $sql = "SELECT * FROM data_movie WHERE id =$id";
  $query  = mysqli_query($dbcon, $sql);
  $result = mysqli_fetch_array($query);
} else {
  $sql = "SELECT * FROM data_list WHERE main_id =$id and part=$list";
  $query  = mysqli_query($dbcon, $sql);
  $result = mysqli_fetch_array($query);
  $num_row = mysqli_num_rows($query);

  $sql_row = "SELECT  * FROM data_list";
  $result_row = mysqli_query($dbcon, $sql_row);
  $num_row = mysqli_num_rows($result_row);
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SubJect CEI3104</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <!--ส่วน Navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="   background-color: #c00513!important">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php" style="color: white;">หน้าแรก <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            หมวดหมุ่
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" style="color: white;">เข้าสู่ระบบ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" style="color: white;">ออกจากระบบ</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">

      </form>
    </div>
  </nav>
  <!--ส่วน Navbar-->


  <div class="album py-5 bg-light">
    <div class="container">
      <!-- ส่วนเล่นหนัง -->
      <?php
      if (!$list) {
        // ถ้าเป็นหนังให้ทำอันนี้
      ?>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" style="color: black;font-size: 25px; font-weight: bold; "><?= $result['name'] ?></li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
              <img class="card-img-top" width="100%" height="380" src="./images/<?= $result['img'] ?>">
            </div>
          </div>


          <div class="col-md-9">
            <div class="card mb-4 shadow-sm">
              <iframe width="100%" height="380" src="https://www.youtube.com/embed/<?= $result['vdo_ex'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-12">

            <div class="card shadow-sm text-center " style="background-color: #d81432!important;color: white;">
              <h3>ตัวเล่นหนัง</h3>
            </div>
            <div class="card mb-4 shadow-sm">
              <iframe width="100%" height="550" src="https://www.youtube.com/embed/<?= $result['vdo_ex'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      <?php } else { ?>
        <!-- ถ้าเป้นซี่รี่ย์ให้ทำอันนี้ -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" style="color: black;font-size: 25px; font-weight: bold; "><?= $result['name'] ?><a href="./list.php?id=<?= $id ?>" style="text-decoration:none; color: green;"> / ดูตอนอื่นๆ</a></li>
          </ol>
        </nav>
        <div class="col-md-12">
          <div class="card shadow-sm text-center" style="background-color: red;color: white;">
            <h3>ตอนที่ <?= $result['part'] ?> </h3>
          </div>
          <div class="card mb-4 shadow-sm">
            <iframe width="100%" height="550" src="https://www.youtube.com/embed/<?= $result['vdo'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <!-- ส่วนเล่นหนัง -->

        <!-- ปุ่มด้านล่าง -->

        <div class="row">
          <div class="col-md-4">
            <a class="btn shadow-sm text-center <?php if ($list <= 1) {
                                                  echo 'disabled';
                                                } ?>" style="background-color: red; padding: 10px;width: 100% ;color: white;" href="play.php?id=<?= $id ?>&list=<?= $list - 1 ?>">ตอนก่อนหน้า</a>
          </div>
          <div class="col-md-4">
            <a class="btn shadow-sm text-center " style="background-color: red; padding: 10px;width: 100% ;color: white;" href="list.php?id=<?= $id ?>&list=<?= $list ?>">ตอนอื่นๆ</a>
          </div>
          <div class="col-md-4">
            <a class="btn shadow-sm text-center <?php if ($list >= $num_row) {echo 'disabled';
} ?>" style=" background-color: red; padding: 10px;width: 100% ;color: white;" href="play.php?id=<?= $id ?>&list=<?= $list + 1 ?>">ตอนถัดไป</a>
          </div>
        </div>

        <!-- ปุ่มด้านล่าง -->
      <?php } ?>

    </div>
  </div>


  </div>

  <br>




</body>

</html>