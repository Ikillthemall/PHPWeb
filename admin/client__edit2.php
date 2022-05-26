<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhập tài khoản</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="main">
        <?php
            require_once './menu.php';
        ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Cập nhập tài khoản</h1>
            </div>
            <form method="post" name="" class="content__container  content__container-user row">
                <div class="content__container-img">
                    <img src="./images/iconuser.png" alt="">
                </div>
                <div class="form__group">
                    <div class="form__group-item">
                        <p>Tên đăng nhập</p>
                        <input type="text" name="">
                    </div>
                    <div class="form__group-item">
                        <p>Số điện thoại</p>
                        <input type="text" name="">
                    </div>
                    <div class="form__group-item">
                        <p>Địa chỉ email</p>
                        <input type="email" name="">
                    </div>
                    <div class="form__group-item">
                        <label>VAI TRÒ</label>
                        <div>
                            <label><input name="vai_tro" value="0" type="radio">Khách hàng</label>
                            <label><input name="vai_tro" value="1" type="radio" checked>Nhân viên</label>
                        </div>
                    </div>
                    <div class="form__group-item">
                        <p>Hình ảnh</p>
                        <input type="file" name="">
                    </div>
                    <div class="form__button row">
                        <input value="Cập nhật" type="submit" class="form__group-btn">
                    </div>
                </div>
            </form>
        </section>
        <?php
            require_once './footer.php';
        ?>
    </div>
</body>

</html>