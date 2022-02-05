<?php
//--------------------------------------------------------------------------------------------------------------------
require ('../connectdb.php'); 
//--------------------------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------------------------
$login_username =  mysqli_real_escape_string ($dbcon,$_POST['login_username']);
$login_password =  mysqli_real_escape_string ($dbcon,$_POST['login_password']);
//--------------------------------------------------------------------------------------------------------------------

$key = 'd23j08dj23dj23rjdihj32239ru29sdfsd';  
$has_password = hash_hmac('md5', $login_password, $key);  

//$sql = "SELECT * FROM student WHERE stu_username = '".$stu_username."' AND stu_password = '".$stu_password."' ";

$sql = "SELECT * FROM data_user WHERE login_username=? AND login_password=? ";
$stmt = mysqli_prepare ($dbcon, $sql);
mysqli_stmt_bind_param ($stmt, "ss", $login_username, $has_password);
mysqli_execute ($stmt);

//--------------------------------------------------------------------------------------------------------------------
//$result = mysqli_query($condb,$sql);
//$show = mysqli_fetch_array($result);
$show = mysqli_stmt_get_result ($stmt);
//--------------------------------------------------------------------------------------------------------------------
    if ($show->num_rows ==1)
    {
        session_start();
        $se_user = mysqli_fetch_array ($show,MYSQLI_ASSOC);
        $_SESSION ['login_id'] = $se_user ['login_id'];
            if ($se_user['login_status'] == 1)
            {   
                $_SESSION['is_admin'] = 1;
                header ('Location: ../admin/admin.php');
            }else
            {
                $_SESSION['is_member'] = 0;
                $_SESSION ['login_username'] = $se_user ['login_username'];
                header ('Location: ../index.php');
            }

       
    } else 
    {
        echo "<script type='text/javascript'>";
        echo "alert('Username หรือ Password ไม่ถูกต้อง')";
        
        echo "</script>";    
    }
//--------------------------------------------------------------------------------------------------------------------


?>