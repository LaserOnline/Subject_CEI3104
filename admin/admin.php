<?php
require 'session.php';
require '../connectdb.php';                                                                                             //asc จากมากไปหาน้อย
$sql = "SELECT * FROM data_movie ORDER BY id DESC";
$result_movie = mysqli_query($dbcon, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome admin</title>
    <link href="../lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="card" style="width: 20rem;margin: 22px 0 0 20px;">
        <div class="card-body">
            <h1>ยินดีต้อนรับ</h1>
            <p>คุณ <?php echo $s_login_username ?> อีเมล <?php echo $s_login_email ?></p>
        </div>
    </div>
    <div class="card" style="width: 30rem;margin-left: 650px;margin-top: -100px">
        <div class="card-body">
            <h1 align="center">รายการหนังทั้งหมด</h1>
        </div>
    </div>
    <button style="margin: 15px 0 0 20px;" type="button" class="btn btn-secondary"><a style="color: white;text-decoration:none;padding: 1px;" href="../index.php">กลับหน้าแรก</a></button>
    <button style="margin: 15px 0 0 5px;" type="button" class="btn btn-success"><a style="color: white;text-decoration:none;padding: 1px;" href="../addmovie/addmovie.php">เพิ่มหนัง</a></a></button>
    <button style="margin: 15px 0 0 5px;" type="button" class="btn btn-primary"><a style="color: white;text-decoration:none;padding: 1px;" href="../addmovie/add_series.php">เพิ่มตอนซี่รีย์</a></a></button>
    <button style="margin: 15px 0 0 5px;" type="button" class="btn btn-warning"><a style="color: black;text-decoration:none;padding: 1px;" href="admin2.php">รายชื่อซีรีย์ทั้งหมด</a></button>
    <button style="margin: 15px 0 0 1130px;" type="button" class="btn btn-danger"><a style="color: black;text-decoration:none;padding: 1px;color: white;" href="logout.php">ออกจากระบบ</a></button>
    
    <div style="width: 85%;padding-left: 10%;margin-top: 20px;">
        <table class="table table-striped table-hover ">
            <thead>
                <tr>
                    <th scope="col">หนังเรื่องที่</th>
                    <th ชื่อหนัง scope="col">ชื่อหนัง</th>
                    <th ชื่อหนัง scope="col">รูปหนัง</th>
                    <th scope="col">วิดีโอหนังตัวอย่าง</th>
                    <th scope="col">วิดีโอหนังตัวหลัก</th>
                    <th scoop="col">เป็นซี่รี่ย์</th>
                    <th scoop="col">แก้ไข</th>
                    <th scoop="col">ลบ</th>
                    <th scoop="col">เวลาที่ทำการแก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while ($row_movie = mysqli_fetch_assoc($result_movie)) { // วนลูปข้อมูล ใน database ออกมาเป็นตาราง 
                    ?>
                <tr>
                    <td style="padding-left: 37px;"><?php echo $row_movie['id'] ?></td>
                    <td><?php echo $row_movie['name'] ?></td>
                    <td><?php echo $row_movie['img'] ?></td>
                    <td><?php echo $row_movie['vdo_ex'] ?></td>
                    <td><?php echo $row_movie['vdo_main'] ?></td>
                    <td style="padding-left: 10px" ><?php echo $row_movie['status_list'] ?></td>
                    <td><a style="text-decoration: none;color: orange;" href="../edit/from_edit.php?id=<?= $row_movie['id']; ?>">edit</a></td>
                    <td><a style="text-decoration: none;color: red;" href="../delete.php?id=<?= $row_movie['id']; ?>" onclick="return confirm('ต้องการลบใช่หรือไม่');">Delete</a></td>
                    <td><?php echo $row_movie['movie_time'] ?></td>          
                </tr>
            <?php } ?>
            </tr>
            </tbody>
        </table>
        </table>
    </div>
</body>

</html>