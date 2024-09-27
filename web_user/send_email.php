<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    //render ramdom password 
    $password = generateRandomPassword(12);

    //connect update account in database 
    include "../model_user/connectdb_user.php";
    include "../model_user/clientdb_user.php";
    $encode_password = md5($password);
    update_password_user($email, $encode_password);

    //Load Composer's autoloader
    require '../vendor/autoload.php';
    require '../vendor/phpmailer/phpmailer/src/Exception.php';
    require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require '../vendor/phpmailer/phpmailer/src/SMTP.php';
    
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'ssl://smtp.gmail.com'; // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'nvc19601@gmail.com';
    $mail->Password = 'gfmm khft tvgu hsbh';
    $mail->SMTPSecure = 'SSL';
    $mail->Port = 465;

    $mail->setFrom('nvc19601@gmail.com', 'Cuong Nguyen Shop');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = 'CAP MAT KHAU MOI';
    $mail->Body    = 'Mật khẩu mới của bạn là : <i><b>' . $password . '</b></i> .Vui lòng thay đổi mật khẩu sau khi đăng nhập vào hệ thống.';

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'success';
    }
}
function generateRandomPassword($length = 12)
{
    $randomBytes = random_bytes($length / 2);
    return bin2hex($randomBytes);
}
