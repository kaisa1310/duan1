<main class="bg-body">
    <div class="container p-5">
        <div class="row shadow-lg p-3 mb-5 bg-body rounded">
            <div class="col-md-6">
                <img src="./image/banner_login.jpg" alt="ảnh" style="max-width:100%">
            </div>
            <div class="col-md-6 text-center mt-5">
                <h3 class="text-primary">Quên Mật Khẩu</h3>
                <p>Vui lòng điền đầy đủ thông tin</p>
                <form action="" method="post">
                    <div class="input_login">
                        <p class="text-primary text-start">Mật khẩu mới</p>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <div class="input_login">
                        <p class="text-primary text-start">Nhập lại mật khẩu mới</p>
                        <input type="text" class="form-control" name="passwords">
                    </div>
                    <!-- <a href="index.php?act=otp"> -->
                        <input type="submit" value="Tiếp Tục" class="btn btn-primary mt-4 w-100" name="pass">
                    <!-- </a> -->
                </form>
                <div class="btn-login">
                    <p class="text-secondary mt-3">hoặc</p>
                    <a href="index.php?act=login"><input type="button" value="Quay Lại Trang Đăng Nhập"
                            class="btn btn-outline-primary w-100"></a>
                </div>
                <?php
                if(isset($message)&&$message!=""){
                    echo $message;
                }
                if(isset($er)&&$er!=""){
                    foreach($er as $e){
                        echo $e.'</br>';
                    }
                }
            ?>
            </div>
        </div>
    </div>
</main>