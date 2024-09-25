<?php
function getall_client_user()
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM tbl_client");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  return $kq;
}

function insert_client_user($lname, $fname, $sex, $email, $phone, $user, $password, $address)
{
  $conn = connectdb();
  $sql = "INSERT INTO tbl_client(fname,lname,sex,email,phone,user,password,address)
    VALUES ('$fname','$lname','$sex','$email','$phone','$user','$password','$address')";
  $conn->exec($sql);
}

function get_userban($user, $ban)
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM tbl_client WHERE user='" . $user . "' AND ban='" . $ban . "'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  if (count($kq) > 0) {
    return 0;
  }
  return 1;
}

function get_user($user, $pass)
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM tbl_client WHERE user='" . $user . "' AND password='" . $pass . "'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  if (count($kq) > 0) {
    return $kq;
  }
  return 0;
}

function update_password_user($email, $password)
{
  $conn = connectdb();
  $stmt = $conn->prepare("UPDATE tbl_client SET password='" . $password . "' WHERE email ='" . $email . "'");
  $stmt->execute();
}

function get_user_checkout($id_user)
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM tbl_client WHERE id=" . $id_user);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
  if (count($kq) > 0) {
    return $kq;
  }
  return 0;
}
function check_current_password($user, $password)
{
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT id, email FROM tbl_client WHERE user = :user AND password = :password");
  $stmt->bindParam(':user', $user, PDO::PARAM_STR);
  $stmt->bindParam(':password', $password, PDO::PARAM_STR);
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  // Lấy kết quả truy vấn
  if ($stmt->rowCount() > 0) {
    $email = $result['email'];
    return $email;
  } else {
    return 0;
  }
}