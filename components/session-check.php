<?php
    
    require '_database/database.php';
    if(!$_SESSION['user_username']){
        header("location:login.php?session=notset");
    }
?>