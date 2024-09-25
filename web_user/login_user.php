<?php
    include 'head.php';
?>
<div class="axil-signin-area">

    <!-- Start Header -->
    <div class="signin-header">
        <div class="row align-items-center">
            <div class="col-sm-4">
                <a href="fashionApp.php" class="site-logo"><img src="../assets/images/logo/logo5.png" alt="logo"></a>
            </div>
            <div class="col-sm-8">
                <div class="singin-header-btn">
                    <p>Không phải thành viên?</p>
                    <a href="fashionApp.php?act=insert_client_user&id='1'" class="axil-btn btn-bg-secondary sign-up-btn">Đăng ký ngay</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <div class="row" style="text-align: center; justify-content: center;
">
        <div class="col-lg-6 offset-xl-2">
            <div class="axil-signin-form-wrap">
                <div class="axil-signin-form">
                    <h3 class="title">Đăng nhập vào Cường Nguyễn Shop</h3>
                    <p class="b2 mb--55">Hoàn thành thông tin</p>
                    <form action="fashionApp.php?act=login_account_user" method="POST" class="singin-form">
                        <div class="form-group">
                            <label>User name</label>
                            <input placeholder="Tên đăng nhập" type="text" class="form-control" name="user">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input placeholder=".................." type="password" class="form-control"
                                name="password">
                        </div>
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] === '1') {
                            echo '<font color="red">Thông tin không tồn tại!</font><br><br>';
                        } elseif(isset($_GET['error']) && $_GET['error'] === '2'){
                            echo '<font color="red">Tài khoản của bạn đã bị khóa</font><br><br>';
                        }
                    ?>
                        <a href="javascript:void(0);" id="forgot_action">Quên mật khẩu?</a>
                        <input class="ui blue button" type="submit" name="user_check" value="Đăng nhập">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
if (window.location.search.includes('success=1')) {
    alert('Đăng ký thành công!');
}

</script>