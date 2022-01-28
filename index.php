<?php
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ทำไรดีปุ่มนี้</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--ส่วน Navbar-->

    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="./Image/Show_Wallpaper/Edge of Tomorrow.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="./Image/Show_Wallpaper/inception.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="./Image/Show_Wallpaper/inTime.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="./Image/Show_Wallpaper/Tenet.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <!--Carousel-->



<div class="album py-5 bg-light">
        <div class="container">

        <!--ส่วน Navbar-->
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">คิดไมออกจะลบปุ่มนี้ดีไหม</a>
            </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">อันนี้ไว้ใช้สำหรับแนวหนังว่าแนวอะไร</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">เช่นอนิเมะ</a>
                            <a class="dropdown-item" href="#">เช่นหนัง</a>
                            <a class="dropdown-item" href="#">หนังแนวผี</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">ทุกแนวรวมแมร่งให้หมด</a>
                        </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">นี้ก็ไมรู้จะใช้ทำไร</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">นี้ก็ไมรู้จะใช้ทำไร</a>
                </li>
        </ul>
        <!--ส่วน Navbar-->    

        <!--เมนูหนัง-->
        <div class="row">
        <!--loop หนัง-->   
        <?php for($i=1;$i<=12;$i++)
        {
        ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <a href="./play.php?id=<?=$i?>">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./Image/Movie/Godzilla vs Kong.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./Image/Movie/Fight Club.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="./Image/Movie/JoJo Rabbit.jpg" alt="Third slide">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  <p class="card-text text-center">สวัสดีครับ</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">IMDb 9.9</small>
                  </div>
                </div>
              </div>
            </div>
        <?php
        }
        ?>    
        <!--loop หนัง-->       

          </div>
        </div>
        <!--เมนูหนัง-->

                <!--Button toolbar"-->
                    <center>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </center>
                    <!--Button toolbar"-->
        </div>

        <br>
    <center>       
        <footer class="blog-footer">
            <p>จัดทำโดย เด็กชาย ประหยัด จันทร์อังคาร์</p>
        </footer>
    </center>  



</body>
</html>