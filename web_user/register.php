<?php
include 'head.php';
?>
<!-- Start Header -->
<div class="signin-header">
    <div class="row align-items-center">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <div class="singin-header-btn">
                <a href="fashionApp.php?act=login" class="axil-btn btn-bg-secondary sign-up-btn">Đăng ký</a>
            </div>
        </div>
    </div>
</div>
<!-- End Header -->
<div style="margin-top: 50px;">
    <div class="col-lg-6 offset-xl-3">
        <div style="text-align: center; margin-bottom: 30px;">
            <h3 class="title">Hãy bắt đầu mới ở đây!</h3>
            <p class="b2 mb--55">Hoàn thành thông tin bên dưới để hoàn tất</p>
        </div>
        <form action="fashionApp.php?act=insert_client_user" method="POST" class="singin-form">
            <div class="form-group">
                <label>Họ đệm<span class="redline" ;> *</span></label>
                <input placeholder="Nhập vào họ đệm" type="text" class="form-control" name="last_name_c">
            </div>
            <!-- 3 -->
            <div class="form-group">
                <label>Tên<span class="redline" ;> *</span></label>
                <input placeholder="Nhập vào tên" type="text" class="form-control" name="first_name_c">
            </div>
            <!-- 4 -->
            <div class="form-group">
                <label>Giới tính<span class="redline" ;> *</span></label>
                <select style="height: 50px;" name="sex_c" id="">
                    <option value="0">Chọn giới tính</option>
                    <option value="1">Nam</option>
                    <option value="2">Nữ</option>
                    <option value="3">Khác</option>
                </select>
            </div>
            <!-- 5 -->
            <div class="form-group">
                <label>Email<span class="redline" ;> *</span></label>
                <input placeholder="Nhập vào email" type="email" class="form-control" name="email_c">
            </div>
            <!-- ee -->
            <div class="form-group">
                <label>Địa chỉ<span class="redline" ;> *</span></label>
                <input placeholder="Nhập vào địa chỉ" type="text" class="form-control" name="address_c">
            </div>
            <!-- 6 -->
            <div class="form-group">
                <label>Số điện thoại<span class="redline" ;> *</span></label>
                <input placeholder="Nhập vào số điện thoại" type="text" class="form-control" name="phone_c">
            </div>
            <!-- 7 -->
            <div class="form-group">
                <label>Tên đăng nhập<span class="redline" ;> *</span></label>
                <input placeholder="Nhập tên dùng để đăng nhập" type="text" class="form-control" name="user_c" autocomplete="false">
            </div>
            <!-- 8 -->
            <div class="form-group">
                <label>Mật khẩu<span class="redline" ;> *</span></label>
                <input placeholder="Nhập vào mật khẩu" type="password" class="form-control" name="password_c" autocomplete="false">
            </div>
            <?php
            if(isset($_GET['act']))
            {
                if ($_GET['act'] == 'miss') {
                    echo "<font color='red'>Thông tin chưa chính xác!</font>";
                } elseif($_GET['act'] == 'sameus')
                {
                    echo "<font color='red'>Người dùng đã tồn tại!</font>";
    
                }
            }
            ?>
            <br><br>
            <div class="form-group">
                <input type="submit" class="form-control" name="submit" value="Đăng ký">
            </div>

        </form>
    </div>
</div>
</div>
</div>