<?php
session_start();
ob_start();
include "../model_user/connectdb_user.php";
include "../model_user/clientdb_user.php";
if (isset($_POST['current_password']) && isset($_POST['new_password'])) {
    $currentPassword = $_POST['current_password'];
    $encodeCurrentPassWord = md5($currentPassword);
    $newPassword = $_POST['new_password'];
    $encodeNewPassWord = md5($newPassword);
    $user = $_SESSION['username'];

    //check currentPass
    $email=check_current_password($user, $encodeCurrentPassWord);
    if($email){
        update_password_user($email, $encodeNewPassWord);
        echo 'success';
    }else{
        echo 'fail';
    }
}