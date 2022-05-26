<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Add</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="main">
    <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Thêm tài khoản</h1>
            </div>
            <div class="content__container content__container-manage content__container-client row">
            <?php
                    if(isset($alert) && ($alert!="")){
                        echo '<p style="color: #E35A38; font-size: 14px;">'.$alert.'</p>'; 
                    }
                ?>
                <form enctype="multipart/form-data" action="index.php?exec=adduser" method="post" class="content__container-form content__container-manage-form content__container-client-form">
                    <div class="form__group form__group-top form__group-top-client row">
                        <div class="form__group-top-item">
                            <p>Mã khách hàng</p>
                            <input placeholder="auto number" type="text" name="iduser" class="form__group-name" readonly>
                        </div>
                        <div class="form__group-top-item">
                            <p>Username</p>
                            <input type="text" name="username" class="form__group-name">
                        </div>
                    </div>
                    <div class="form__group form__group-body form__group-top-body row">
                        <div class="form__group-top-item">
                            <p>Mật khẩu</p>
                            <input type="password" name="pass" class="form__group-name">
                        </div>
                        <div class="form__group-top-item">
                            <p>Địa chỉ</p>
                            <input type="text" name="address" class="form__group-name">
                        </div>
                    </div>
                    <div class="form__group form__group-body form__group-top-body row">
                        <div class="form__group-top-item">
                            <p>Email</p>
                            <input type="email" name="email" class="form__group-name">
                        </div>
                        <div class="form__group-top-item">
                            <p>Hình ảnh</p>
                            <div style="display: flex;">
                                <?php 
                                    if($img !=""){
                                        echo  $img;
                                    }else{
                                        echo 'No file';
                                    }
                                ?>
                                <input type="file" name="image" class="form__group-name">
                            </div>
                        </div>
                    </div>
                    <div class="form__group form__group-bottom form__group-top-bottom row">
                        <!-- <div class="form__group-top-item">
                            <p>Trạng thái</p>
                            <div class="form__group-top-item--special">
                                <input type="radio" name="status" class="form__group-name"><span>Kích hoạt</span>
                                <input type="radio" name="status" class="form__group-name"><span>Chưa kích hoạt</span>
                            </div>
                        </div> -->
                        <div class="form__group-top-item">
                            <p>Số điện thoại</p>
                            <input type="tel" name="phone" class="form__group-name">
                        </div>
                        <div class="form__group-top-item">
                            <p>Vai trò</p>
                            <div class="form__group-top-item--special">
                                <input value="0" type="radio" name="role" class="form__group-name"><span>Khách</span>
                                <input value="1" type="radio" name="role" class="form__group-name"><span>Quản trị viên</span>
                            </div>
                        </div>
                    </div>
                    <div class="form__group form__group-bottom form__group-top-bottom row">
                        <div class="form__group-top-item">
                                <p>Giới tính</p>
                                <div class="form__group-top-item--special" style="width: 585px;">
                                    <input value="0" type="radio" name="gender" class="form__group-name"><span>Nam</span>
                                    <input value="1" type="radio" name="gender" class="form__group-name"><span>Nữ</span>
                                </div>
                            </div>
                    </div>
                    <div class="form__button row">
                        <input value="Thêm mới" name="addNew" type="submit" class="form__group-btn form__group-btn--active">
                        <input value="Nhập lại" type="reset" class="form__group-btn">
                        <a href="./index.php?exec=listuser"><input value="Danh sách" type="button" class="form__group-btn"></a>
                    </div>
                </form>
            </div>
        </section>
        <?php require_once './footer.php'?>
    </div>
</body>

</html>