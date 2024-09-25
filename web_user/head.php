<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Cường Nguyễn Shop</title>
  <meta name="robots" content="noindex, follow" />
  <meta name="description" content="" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link
    rel="shortcut icon"
    type="image/x-icon"
    href="../assets/images/logo/logo.png" />

  <!-- CSS
    ============================================ -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/css/vendor/font-awesome.css" />
  <link rel="stylesheet" href="../assets/css/vendor/flaticon/flaticon.css" />
  <link rel="stylesheet" href="../assets/css/vendor/slick.css" />
  <link rel="stylesheet" href="../assets/css/vendor/slick-theme.css" />
  <link rel="stylesheet" href="../assets/css/vendor/jquery-ui.min.css" />
  <link rel="stylesheet" href="../assets/css/vendor/sal.css" />
  <link rel="stylesheet" href="../assets/css/vendor/magnific-popup.css" />
  <link rel="stylesheet" href="../assets/css/vendor/base.css" />
  <link rel="stylesheet" href="../assets/css/style.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#forgot_action').on('click', function(e) {
        e.preventDefault(); // Ngăn chặn sự kiện mặc định

        // Hiển thị prompt để nhập email
        var email = prompt("Vui lòng nhập email của bạn:");

        if (email) {
          // Kiểm tra định dạng email
          var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
          if (emailPattern.test(email)) {
            // Gửi yêu cầu AJAX để kiểm tra email tồn tại
            $.ajax({
              url: 'check_email.php', // URL đến file PHP kiểm tra email
              type: 'POST',
              data: {
                email: email
              },
              success: function(response) {
                if (response === 'exists') {
                  // Gửi email qua SMTP
                  $.ajax({
                    url: 'send_email.php',
                    type: 'POST',
                    data: {
                      email: email
                    },
                    success: function(response) {
                      if (response === 'success') {
                        alert('Mật khẩu đã được gửi đến email của bạn.Vui lòng kiểm tra email !!!');
                      } else {
                        alert('Đã xảy ra lỗi khi gửi email. Vui lòng thử lại !');
                      }
                    },
                    error: function() {
                      alert('Đã xảy ra lỗi khi gửi email. Vui lòng thử lại !');
                    }
                  });
                } else {
                  alert('Email không tồn tại trong hệ thống.');
                }
              },
              error: function() {
                alert('Đã xảy ra lỗi khi kiểm tra email.');
              }
            });
          } else {
            alert("Email không hợp lệ.");
          }
        }
      });
    });
  </script>

</head>