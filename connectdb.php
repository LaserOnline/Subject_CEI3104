        <?php

        $dbcon = mysqli_connect('localhost', 'root', '', 'movie');

        if (mysqli_connect_error()) {
            echo "ไม่สามารถติดต่อฐานข้อมูล MYSQL ได้" . mysqli_connect_error();
            exit;
        } else {
        }

        mysqli_set_charset($dbcon, 'utf8');

        ?>