<style>
    .forget__form-action{
        height: 100%;
    }
</style>
<?php
    // if(is_array($addAcc)){
    //     extract($addAcc);
    // }
    $imgPath = "./upload/".$image;
    if(is_file($imgPath)){
        $img = "<img src='".$imgPath."' style='border-radius:1rem; width: 31rem; height: 40rem;'>";
    }else{
        $img = "No img";
    }
?>
<div class="container">
            <div class="grid width">
                <div class="content row">
                    <div class="l-4 m-4 c-4 col__loginright">
                        <div class="login__bgc">
                        <?php 
                                if($img !=""){
                                    echo $img;
                                }
                        ?>
                            <!-- <img src="./public/assets/images/logo/girl.jpg" alt="" class="login__bgc-img" style="border-radius:1rem;width: 50rem; height: 40rem; object-fit:cover;"> -->
                        </div>
                    </div>
                    <div class="l-8 m-4 c-4 col__loginleft">
                        <div class="forget__form login__form">
                            <h2 class="forget__title login__title">Cập nhật tài khoản</h2>
                            <?php
                                if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                                    extract($_SESSION['user']);
                                }
                            ?>
                            <form action="index.php?view=edituser" class="forget__form-action login__form-action" method="post">
                                <div class="forget__form-action-group">
                                    <!-- <img src="./public/assets/images/logo/jisoo.jfif" alt=""> -->
                                </div>
                                <div class="forget__form-action-group">
                                    <label for="">Tên tài khoản</label>
                                    <input value="<?=$username?>" type="text" placeholder="Nhập tên tài khoản" name="name">
                                </div>
                                <div class="forget__form-action-group">
                                    <label for="">Mật khẩu</label>
                                    <input value="<?=$pass?>" type="password" placeholder="Nhập mật khẩu" name="password">
                                </div>
                                <div class="forget__form-action-group">
                                    <label for="">Địa chỉ email</label>
                                    <input value="<?=$email?>" type="email" placeholder="Nhập email" name="email">
                                </div>
                                <div class="forget__form-action-group">
                                    <label for="">Số điện thoại</label>
                                    <input value="<?=$tel?>" type="text" placeholder="Nhập số điện thoại" name="phone">
                                </div>
                                <div class="forget__form-action-group">
                                    <label for="">Địa chỉ</label>
                                    <input value="<?=$address?>" type="text" placeholder="Nhập địa chỉ" name="address">
                                </div>
                                <div class="forget__form-action-group">
                                    <label for="">Hình ảnh</label>
                                    <input  type="file" placeholder="Chèn hình đại diện" name="image">
                                </div>
                                <div class="forget__form-action-button">
                                    <input type="hidden" name="iduser" value="<?=$id_user?>">
                                    <input value="Gửi yêu cầu" name="update" class="button button--forget" type="submit">
                                    <!-- Gửi yêu cầu</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>