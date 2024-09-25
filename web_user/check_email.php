<?php
ob_start();
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    
    include "../model_user/connectdb_user.php";
    $conn = connectdb();
    
    // Sử dụng prepared statement để bảo mật truy vấn SQL
    $stmt = $conn->prepare("SELECT id FROM tbl_client WHERE email = :email");

    // Gán tham số email vào truy vấn (PDO sử dụng dấu ":" trước tên tham số)
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    
    // Lấy kết quả truy vấn
    if ($stmt->rowCount() > 0) {
        echo 'exists';
    } else {
        echo 'not_exists';
    }
    
    // Đóng kết nối
    $conn = null;
}
?>
