<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Index</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <?php
        if(is_array($list)){
            extract($list);
        }
    ?>
    <div class="main">
    <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Cập nhật loại sản phẩm</h1>
            </div>
            <div class="content__container row">
                <form action="index.php?exec=updateTypeList" method="post" class="content__container-form">
                    <div class="form__group row">
                        <p>Mã loại</p>
                        <input type="text" value="<?=$id_ctgr?>" name="id_ctgr" class="form__group-name" readonly>
                    </div>
                    <div class="form__group row">
                        <p>Tên loại</p>
                        <input type="text" name="nameType" class="form__group-name" value="<?php if(isset($name) && ($name!="")) echo $name;?>">
                    </div>
                    <div class="form__button row">
                        <input name="id_ctgr" type="hidden" class="form__group-btn" value="<?php if(isset($id_ctgr) && ($id_ctgr>0)) echo $id_ctgr;?>">
                        <input value="Cập nhật" name="upTypeList" type="reset" class="form__group-btn form__group-btn--active">
                        <input value="Nhập lại" type="reset" class="form__group-btn">
                        <a href="./index.php?exec=listcate"><input value="Danh sách" type="button" class="form__group-btn"></a>
                    </div>
                </form>
            </div>
        </section>
        <?php require_once './footer.php' ?>
    </div>
</body>

</html>