<?php

require 'connectdb.php';
require 'session_user.php';
$id = $_GET['id'];
if (!$id) {
    echo 'NO ID';
    exit;
}
$sql = "SELECT * FROM data_movie WHERE id ='$id'";
$query  = mysqli_query($dbcon, $sql);

$result = mysqli_fetch_array($query);

$sql_list = "SELECT * FROM data_list WHERE main_id = $id ";
$query_list = mysqli_query($dbcon, $sql_list)

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="
    background-color: #aa0000!important;">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent"  >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"style="color: white;">หน้าแรก <span class="sr-only">(current)</span></a>
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
                <button  type="button" class="btn btn-warning"><a style="color: black;text-decoration:none;padding: 1px;" href="../Subject_CEI3104/admin/logout.php">ออกจากระบบ</a></button>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark" type="submit">ค้นหา</button>
            </form>
        </div>
    </nav>
    <!--ส่วน Navbar-->


    <div class="album py-5 bg-light">
        <div class="container">
            <!-- Nav -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" style="color: black;font-size: 30px; font-weight: bold;"><?= $result['name'] ?></li>
                </ol>
            </nav>
            <!-- Nav -->

            <!--Play-->
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
                    <div class="card shadow-sm text-center" style="background-color: #dd171d!important;color: white;">
                        <h3>ตอนอื่นๆ </h3>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="list-group ">
                            <?php
                            while ($result_list = mysqli_fetch_array($query_list)) {
                                echo '<button  type="button" class="list-group-item list-group-item-action " ><a style="text-decoration:none; color: black;" href="play.php?id=' . $id . '&list=' . $result_list['part'] . '">' . $result_list['name'] . '&nbsp;ตอนที่ ' . $result_list['part'] . '</a></button>';
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Play-->

    </div>

    <br>
    <center>
        <footer class="blog-footer">
            <p>จัดทำโดย เด็กชาย ประหยัด จันทร์อังคาร์</p>
        </footer>
    </center>



</body>

</html>