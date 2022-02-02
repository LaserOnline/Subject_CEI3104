<?php
require 'connectdb.php';
$num_rows = mysqli_num_rows(mysqli_query($dbcon, "SELECT * FROM data_movie"));

$limit_page = 8;
$page = $_GET['Page'];

$num_page = $num_rows / $limit_page;
$limit_start = ($page * $limit_page) - $limit_page;

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
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="   background-color: #53a2f1!important">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">หน้าแรก <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ยอดฮิตติดอันดับ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          <a class="nav-link " href="#">เข้าสู่ระบบ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">ออกจากระบบ</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark" my-2 my-sm-0" type="submit">ค้นหา</button>
      </form>
    </div>
  </nav>

  <!-- หน้าหนัง -->
  <div class="album py-5 bg-light " style="background-color: #a2c9f0!important">
    <div class="container">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
          <li class="breadcrumb-item active"><a href="#"></a></li>
        </ol>
      </nav>

      <div class="row">
        <?php
        $query  = mysqli_query($dbcon, "SELECT * FROM data_movie ORDER BY id DESC LIMIT 16,$limit_page");
        while ($rs = mysqli_fetch_array($query)) {
        ?>
          <div class="col-md-3">
            <div class="card mb-4 box-shadow">
              <a href="./play.php?id=<?= $rs['id'] ?>">
                <img class="d-block w-100" src="./images/<?= $rs['img'] ?>" alt="First slide">
                <div class="card-body">
                  <p class="card-text text-center"><?= $rs['name'] ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                  </div>
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
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <!-- ------------------------------------------------- -->
        <li class="page-item disabled">
          <a class="page-link">Previous</a>
        </li>
        <!-- ------------------------------------------------- -->
        <?php
        for ($i = 1; $i <= $num_page; $i++) {
          if ($page == $i) {

        ?>
            <li class="page-item active" aria-current="page">
              <span class="page-link"><?= $i ?><span class="sr-only">(current)</span></span>
            </li>
          <?php
          } else {
          ?>
            <li class="page-item"><a class="page-link" href="?Page=<?= $i ?>"><?= $i ?></a> </li>
        <?php
          }
        }
        ?>


        <!-- ------------------------------------------------- -->
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
    <!-- ปุ่มเปลี่ยนหน้า    -->



  </div>








</body>

</html>