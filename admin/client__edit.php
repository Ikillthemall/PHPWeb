<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Edit</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<?php
    if(is_array($listUsers)){
        extract($listUsers);
    }
    // image user
    $imgPath = "../upload/".$image;
    if(is_file($imgPath)){
        $img = "<img src='".$imgPath."' width= '60px' height= '60px' padding= '1rem'>";
    }else{
        $img = "No img";
    }   
?>
<body>
    <div class="main">
    <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Quản lí tài khoản</h1>
            </div>
            <div class="content__container content__container-manage content__container-client row">
                <form enctype="multipart/form-data" action="index.php?exec=updateuser" method="post" class="content__container-form content__container-manage-form content__container-client-form">
                    <div class="form__group form__group-top form__group-top-client row">
                        <div class="form__group-top-item">
                            <p>Mã khách hàng</p>
                            <input placeholder="auto number" type="text" name="iduser" value="<?=$id_user?>" class="form__group-name" readonly>
                        </div>
                        <div class="form__group-top-item">
                            <p>Username</p>
                            <input value="<?=$username?>" type="text" name="username" class="form__group-name">
                        </div>
                    </div>
                    <div class="form__group form__group-body form__group-top-body row">
                        <div class="form__group-top-item">
                            <p>Mật khẩu</p>
                            <input value="<?=$pass?>" type="password" name="pass" class="form__group-name">
                        </div>
                        <div class="form__group-top-item">
                            <p>Địa chỉ</p>
                            <input value="<?=$address?>" type="text" name="address" class="form__group-name">
                        </div>
                    </div>
                    <div class="form__group form__group-body form__group-top-body row">
                        <div class="form__group-top-item">
                            <p>Email</p>
                            <input value="<?=$email?>" type="email" name="email" class="form__group-name">
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
                            <input type="tel" name="phone" class="form__group-name" value="<?=$tel?>">
                        </div>
                        <div class="form__group-top-item">
                            <p>Vai trò</p>
                            <div class="form__group-top-item--special">
                                <input value="0" type="radio" name="role" class="form__group-name"><span>Khách</span>
                                <input value="1" type="radio" name="role" class="form__group-name"><span>Quản trị viên</span>
                            </div>
                        </div>
                    </div>
                    <div class="form__button row">
                        <input name="iduser" type="hidden" class="form__group-btn" value="<?=$id_user?>">
                        <input value="Cập nhật" name="updateuser" type="submit" class="form__group-btn form__group-btn--active">
                        <input value="Nhập lại" type="reset" class="form__group-btn">
                        <a href="./index.php?exec=listuser"><input value="Danh sách" type="submit" class="form__group-btn"></a>
                    </div>
                </form>
            </div>
        </section>
        <?php require_once './footer.php'?>
    </div>
</body>

</html>