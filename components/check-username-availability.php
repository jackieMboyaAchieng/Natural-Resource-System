<?php
    session_start();
    require '../_database/database.php';
    
    if(isSet($_POST['user_username'])){
        if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
            die();
        }
        $username = $_POST['user_username'];
        $username = mysqli_real_escape_string($database,$username);
        $sql_check = mysqli_query($database,"SELECT user_username FROM user WHERE user_username='$username'");
        if(mysqli_num_rows($sql_check)){
            die();
        }
        else{
            die();
        }
    }
?>