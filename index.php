<?php
session_start();
require 'connectdb.php';

$num_rows = mysqli_num_rows(mysqli_query($dbcon, "SELECT * FROM data_movie"));
$limit_page = 12;

if (isset($_GET['Page'])) {
  $page = $_GET['Page'];
} else {
  $page = 1;
}


$num_page = $num_rows / $limit_page;
$limit_start = ($page * $limit_page) - $limit_page;
if (!($num_page == (int)$num_page)) {
  $num_page = (int)$num_page + 1;
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SubJect CEI3104</title>
  <link rel="stylesheet" href="styleindex.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="   background-color: #aa0000!important">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php" style="color: white;">หน้าแรก <span class="sr-only">(current)</span></a>
        </li>



        <!--//* User -->
        <?php if (!isset($_SESSION['is_member'])) { ?>
          <?php if (!isset($_SESSION['is_admin'])) { ?>
            <button type="button" class="btn btn-light"><a style="color: black;text-decoration:none;" href="../Subject_CEI3104/login/login.html">เข้าสู่ระบบ</a></button>
          <?php } ?>
        <?php } ?>

        <?php if (isset($_SESSION['is_member'])) { ?>
          <button type="button" class="btn btn-warning"><a style="color: black;text-decoration:none;" href="../Subject_CEI3104/admin/logout.php">ออกจากระบบ</a></button>
        <?php } ?>

        <?php if (isset($_SESSION['is_admin'])) { ?>
          <button type="button" class="btn btn-warning"><a style="color: black;text-decoration:none;;" href="../Subject_CEI3104/admin/logout.php">ออกจากระบบ</a></button>
        <?php } ?>
        <!--//* User -->
        <li class="nav-item">


          <?php if (isset($_SESSION['is_member'])) { ?>
            <span class="badge badge-light" style="margin-left: 20px;margin-top: 10px">ชื่อ <?php echo  $_SESSION['login_username'] ?></span>
            <span class="badge badge-info" style="margin-left: 1px;">อีเมล <?php echo  $_SESSION['login_email'] ?></span>
          <?php } ?>

          <?php if (isset($_SESSION['is_admin'])) { ?>
            <span class="badge badge-light" style="margin-left: 20px;margin-top: 10px">ชื่อ <?php echo  $_SESSION['login_username'] ?></span>
            <span class="badge badge-info" style="margin-left: 1px;">อีเมล <?php echo  $_SESSION['login_email'] ?></span>
          <?php } ?>

      </ul>

      <form class="form-inline my-2 my-lg-0" method="GET" action="search.php">
        <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="">
        <button class="btn btn-dark" my-2 my-sm-0 type="submit">ค้นหา</button>
      </form>
    </div>
  </nav>

  <!-- หน้าหนัง -->


  <div class="container" style="margin-top: 20px;">

    <div class="title-box-movie">
      <div class="h1-text">
        <h1>ดูหนังยอดฮิต มาใหม่ ไฟแรง</h1>
      </div>
    </div>

    <div class="row" style="margin-top: 15px;">
      <?php
      $query  = mysqli_query($dbcon, "SELECT * FROM data_movie  ORDER BY id DESC LIMIT $limit_start,$limit_page");
      while ($rs = mysqli_fetch_array($query)) {
      ?>
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm ">
            <a style="text-decoration:none;" href="<?php if ($rs['status_list'] == 'YES') { ?>list<?php } else { ?>play<?php } ?>.php?id=<?= $rs['id'] ?>">
              <img src="./images/<?= $rs['img'] ?>" while="100%" height="380" class="card-img-top">
              <div class="card-body">
                <p class="card-text text-center" style="white-space: nowrap;overflow :hidden; text-overflow:ellipsis; color:black;"><?= $rs['name'] ?></p>
              </div>
          </div>
        </div>
      <?php
      }
      ?>

    </div>
  </div>
  <!-- หน้าหนัง -->

  <!-- ปุ่มเปลี่ยนหน้า    -->

  <nav aria-label="...">
    <ul class="pagination justify-content-center">

      <?php
      if ($page <= 1) {
      ?>
        <li class="page-item disabled">

        </li>
      <?php
      } else {
      ?>
        <li class="page-item">
          <a class="page-link" href="?Page=<?= $page - 1 ?>">ก่อนหน้า</a>
        </li>
      <?php
      }
      ?>


      <?php
      if ($page > $num_page)
        $page = $num_page;
      if ($page >= 9) {
        if ($page <= 5) {
          $num_start = 1;
          $num_stop = 9;
        } elseif ($page > $num_page - 4) {
          $num_start = $page - 8;
          $num_stop = $num_page;
        } else {
          $num_start = $page - 2;
          $num_stop = $page + 2;
        }
      } else {
        $num_start = 1;
        $num_stop = $num_page;
      }



      for ($i = 1; $i <= $num_stop; $i++) {
        if ($page == $i) {
      ?>
          <li class="page-item active" aria-current="page">
            <a class="page-link"><?= $i ?><a class="sr-only">(current)</a></a>
          </li>
        <?php
        } else {
        ?>
          <li class="page-item"><a class="page-link" href="?Page=<?= $i ?>"><?= $i ?></a> </li>
      <?php
        }
      }
      ?>


      <?php
      if ($page >= $num_page) {
      ?>
        <li class="page-item disabled">
          <span class="page-link">ถัดไป</span>
        </li>
      <?php
      } else {
      ?>
        <li class="page-item">
          <a class="page-link" href="?Page=<?= $page + 1 ?>">ถัดไป</a>
        </li>
      <?php
      }
      ?>
    </ul>
  </nav>
  <!-- ปุ่มเปลี่ยนหน้า    -->



  </div>








</body>

</html>