<?php
session_start();
ob_start();
include "../model_user/connectdb_user.php";
include "../model_user/clientdb_user.php";
if (isset($_POST['current_password']) && isset($_POST['new_password'])) {
    $currentPass = $_POST['current_password'];
    $newPass = $_POST['new_password'];
    $user = $_SESSION['username'];

    //check currentPass
    $email=check_current_password($user, $currentPass);
    if($email){
        update_password_user($email, $newPass);
        echo 'success';
    }else{
        echo 'fail';
    }
}