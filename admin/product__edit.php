<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí sản phẩm</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<?php
    if(is_array($listProd)){
        extract($listProd);
    }
    // image product
    $imgPath = "../upload/".$image;
    if(is_file($imgPath)){
        $img = "<img src='".$imgPath."' width= '50px'>";
    }else{
        $img = "No img";
    }
?>
<body>
    <div class="main">
    <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Quản lí sản phẩm</h1>
            </div>
            <div class="content__container content__container-manage row">
                <form action="index.php?exec=updatepro" method="post" enctype="multipart/form-data" class="content__container-form content__container-manage-form">
                    <!-- add attribute enctype="multipart/form-data to validate the input type file -->
                    <div class="form__group form__group-top row">
                        <div class="form__group-top-item">
                            <p>Mã sản phẩm</p>
                            <input value="<?=$id_product?>" placeholder="auto number" type="text" name="idprod" class="form__group-name" readonly>
                        </div>
                        <div class="form__group-top-item">
                            <p>Tên sản phẩm</p>
                            <input value="<?=$name_product?>" type="text" name="nameprod" class="form__group-name">
                        </div>
                        <div class="form__group-top-item">
                            <p>Đơn giá</p>
                            <input value="<?=$price?>" type="text" name="price" class="form__group-name">
                        </div>
                    </div>
                    <div class="form__group form__group-body row">
                        <div class="form__group-top-item">
                            <p>Giảm giá</p>
                            <input value="<?=$price_sale?>" type="text" name="pricesale" class="form__group-name">
                        </div>
                        <div class="form__group-top-item">
                            <p>Hình ảnh</p>
                            <?php 
                                if($img !=""){
                                    echo  $img;
                                }else{
                                    echo 'No file';
                                }
                            ?>
                            <input value="" type="file" name="image" class="form__group-name">
                        </div>
                        <div class="form__group-top-item">
                            <p>Loại sản phẩm</p>
                            <!-- <input type="text" name="nameType" class="form__group-name"> -->
                            <select name="idlist" id="" class="form__group-name" style="width: 100%;">
                            <option value="0" selected>Chọn loại sản phẩm</option>
                                <?php
                                    foreach ($typeList as $list){
                                        extract($list);
                                        if($id_ctgr === $id_ctgr){
                                            $select = "selected";
                                        }else{
                                            $select = "";
                                        }
                                        echo '<option value="'.$id_ctgr.'" '.$select.'>'.$name.'</option>';
                                        // echo '<option value="'.$id_ctgr.'">'.$name.'</option>';
                                    }
                                ?>                         
                            </select>
                        </div>
                    </div>
                    <div class="form__group form__group-bottom row">
                        <div class="form__group-top-item">
                            <p>Sản phẩm đặc biệt</p>
                            <div class="form__group-top-item--special">
                                <input type="radio" name="tenloai" class="form__group-name"><span>Đặc biệt</span>
                                <input type="radio" name="tenloai" class="form__group-name"><span>Bình thường</span>
                            </div>
                        </div>
                        <div class="form__group-top-item">
                            <p>Ngày nhập</p>
                            <input value="<?=$date_in?>" type="date" name="datein" class="form__group-name">
                        </div>
                        <div class="form__group-top-item">
                            <p>Số lượt xem</p>
                            <input type="text" name="view" class="form__group-name" disabled>
                        </div>
                    </div>
                    <div class="form__desc row">
                        <p style="font-size: 1.4rem; margin-bottom: 1rem;">Mô tả</p>
                        <textarea class="textarea" style="border: 1px solid #ccc;border-radius: 5px; padding: 1.4rem" name="desc" id="" cols="100" rows="10"><?=$description?></textarea>
                    </div>
                    <div class="form__button row">
                        <input name="idprod" type="hidden" class="form__group-btn" value="<?=$id_product?>">
                        <input value="Cập nhật" name="updateprod" type="submit" class="form__group-btn form__group-btn--active">
                        <input value="Nhập lại" type="reset" class="form__group-btn">
                        <a href="./index.php?exec=listpro"><input value="Danh sách" type="submit" class="form__group-btn"></a>
                    </div>
                    <?php
                        if(isset($alert) && ($alert!="")){
                            echo '<p style="color: #E35A38; font-size: 14px;">'.$alert.'</p>'; 
                        }
                    ?>
                </form>
            </div>
        </section>
      <?php require_once './footer.php' ?>
    </div>
</body>

</html>