<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí sản phẩm</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<style>
    small{
        font-size: 1.4rem;
        color: red;
    }
</style>
<body>
    <div class="main">
    <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Thêm sản phẩm</h1>
            </div>
            <div class="content__container content__container-manage row">
            <?php
                        if(isset($alert) && ($alert!="")){
                            echo '<p style="color: #E35A38; font-size: 14px;">'.$alert.'</p>'; 
                        }
                    ?>
                <form id="addprod" action="index.php?exec=addpro" method="post" enctype="multipart/form-data" class="content__container-form content__container-manage-form">
                    <!-- add attribute enctype="multipart/form-data to validate the input type file -->
                    <div class="form__group form__group-top row">
                        <div class="form__group-top-item">
                            <p>Mã sản phẩm</p>
                            <input placeholder="auto number" type="text" name="maSanPham" class="form__group-name" disabled>
                        </div>
                        <div class="form__group-top-item form-field">
                            <p>Tên sản phẩm</p>
                            <input id="prodname" type="text" name="nameprod" class="form__group-name">
                            <small class="show" style="color: red; font-size:1.4rem;">
                                
                            </small>
                        </div>
                        <div class="form__group-top-item form-field">
                            <p>Đơn giá</p>
                            <input id="price" type="text" name="price" class="form__group-name">
                            <small class="show" style="color: red; font-size:1.4rem;">
                            </small>
                        </div>
                    </div>
                    <div class="form__group form__group-body row">
                        <div class="form__group-top-item form-field">
                            <p>Giá giảm</p>
                            <input id="sale" type="text" name="pricesale" class="form__group-name">
                            <small></small>
                        </div>
                        <div class="form__group-top-item form-field">
                            <p>Hình ảnh</p>
                            <input type="file" name="image" class="form__group-name">
                            <small class="show" style="color: red; font-size:1.4rem;"></small>
                        </div>
                        <div class="form__group-top-item form-field">
                            <p>Loại sản phẩm</p>
                            <!-- <input type="text" name="nameType" class="form__group-name"> -->
                            <select name="idlist" id="" class="form__group-name" style="width: 100%;">
                            <option value="0" selected>Chọn loại sản phẩm</option>
                                <?php
                                    foreach ($typeList as $list){
                                        extract($list);
                                        echo '<option value="'.$id_ctgr.'">'.$name.'</option>';
                                    }
                                ?>                         
                            </select>
                        </div>
                    </div>
                    <div class="form__group form__group-bottom row">
                        <div class="form__group-top-item form-field">
                            <p>Sản phẩm đặc biệt</p>
                            <div class="form__group-top-item--special">
                                <input type="radio" name="tenloai" class="form__group-name"><span>Đặc biệt</span>
                                <input type="radio" name="tenloai" class="form__group-name"><span>Bình thường</span>
                            </div>
                            <p class="show"></p>
                        </div>
                        <div class="form__group-top-item form-field">
                            <p>Ngày nhập</p>
                            <input type="date" name="datein" class="form__group-name">
                            <small></small>
                        </div>
                        <div class="form__group-top-item form-field">
                            <p>Số lượt xem</p>
                            <input type="text" name="view" class="form__group-name" disabled>
                            <small></small>
                        </div>
                    </div>
                    <div class="form__desc row">
                        <p style="font-size: 1.4rem; margin-bottom: 1rem;">Mô tả</p>
                        <textarea style="border: 1px solid #ccc;border-radius: 5px; padding: 1.4rem" name="desc" id="" cols="100" rows="10"></textarea>
                    </div>
                    <div class="form__button row">
                        <input value="Thêm mới" name="addNew" type="submit" class="form__group-btn form__group-btn--active">
                        <input value="Nhập lại" type="reset" class="form__group-btn">
                        <a href="./index.php?exec=listpro"><input value="Danh sách" type="button" class="form__group-btn"></a>
                    </div>
                </form>
            </div>
        </section>
      <?php require_once './footer.php' ?>
    </div>
    <script>
            const prodNameEle = document.querySelector('#prodname');
            const priceEle = document.querySelector('#price');
            const priceSaleEle = document.querySelector('#sale');
            const form = document.querySelector('#addprod');

            // check the price is valid or not
            const isPriceValid = (price) => {
                const reg = /[0-9]+.[0-9]{2}/g;
                return reg.test(price);
            };
            // check the pricesale is valid or not
            const isPriceSaleValid = (priceSale) => {
                const reg = /[0-9]+.[0-9]{2}/g;
                return reg.test(price);
            };

            const isRequire  = value => value === '' ? false : true;
            const isBetween = (length, min, max) => length < min || length > max ? false : true;
            // show the function errors
            const errorShow = (input, message) =>{
                // get the form-field
                const formF = input.parentElement;
                formF.classList.remove('sucess');
                formF.classList.add('error');
                // show the errors alert
                const error = formF.querySelector('small');
                error.textContent = message;
            };
            // show the function success
            const sucessShow = (input, message) => {
                // get the form-field
                const formF = input.parentElement;
                formF.classList.remove('error');
                const error = formF.querySelector('small');
                error.textContent = "";
            };
            const checkProdname = () =>{
                let validate = false;
                const min = 5;
                max = 40;
                const prodName = prodNameEle.value.trim();
                if(!isRequire(prodName)){
                    errorShow(prodNameEle, 'Tên sản phẩm không được bỏ trống!');
                }else if(!isBetween(prodName.length, min, max)) {
                    errorShow(prodNameEle, `Tên sản phẩm phải chứa ít nhất ${min} kí tự và tối đa ${max} kí tự!`);
                }
                else{
                    sucessShow(prodNameEle);
                    validate = true;
                }
                return validate;
            };
           const checkPrice = () =>{
                let validate = false;
                const price = priceEle.value.trim();
                if(!isRequire(price)){
                    errorShow(priceEle, 'Giá không được để trống!');
                }else if(!isPriceValid(price)){
                    errorShow(priceEle, 'Giá không hợp lệ');
                }else{
                    sucessShow(priceEle);
                    validate = true;
                }
                return validate;
            }
            const checkPriceSale = () => {
                let validate = false;
                const priceSale = priceSaleEle.value.trim();
                if(!isPriceSaleValid(priceSale)){
                    errorShow(priceSaleEle, 'Giá giảm không hợp lệ');
                }else{
                    sucessShow(priceSaleEle);
                    validate = true;
                }
                return validate;
            }
            const bounce = (fn, delay = 1500) =>{
                let timeoutId;
                return (...args) =>{
                    if(timeoutId){
                        clearTimeout(timeoutId);
                    }
                    // setup a new time
                    timeoutId = setTimeout(() =>{
                        fn.apply(null, args)
                    },delay );
                };
            };
            form.addEventListener('input', bounce(function(e){
                switch (e.target.id){
                    case 'prodname':
                        checkProdname();
                        break;
                    case 'price':
                        checkPrice();
                        break;
                    case 'sale':
                        checkPriceSale();
                        break;
                };
            }));
    </script>
</body>

</html>