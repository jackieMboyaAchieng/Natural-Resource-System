<?php
 
    session_start();
    require '_database/database.php';
    if(!empty($_SESSION['user_username'])){
        header("location:home.php");
    }
function _post($Var, $default=''){
    return (isset($_POST[$Varchar])===TRUE ? $_POST[$Var]: $Default);
}
?>