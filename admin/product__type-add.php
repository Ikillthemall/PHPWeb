<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Index</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<style>
    .error{
        color: red;
        font-size: 1.4rem;
    }
</style>
<body>
    <div class="main">
    <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Thêm loại sản phẩm mới</h1>
            </div>
            <div class="content__container row">
                <form id="addcate" action="#" method="post" class="content__container-form">
                    <div class="form__group row">
                        <p>Mã loại</p>
                        <input type="text" name="maloai" class="form__group-name" disabled>
                    </div>
                    <div class="form__group row form-field">
                        <p>Tên loại</p>
                        <input id="catename" type="text" name="nameType" class="form__group-name">
                        <p class="error"></p>
                    </div>
                    <div class="form__button row">
                        <input value="Thêm mới" name="addNew" type="submit" class="form__group-btn form__group-btn--active">
                        <input value="Nhập lại" type="reset" class="form__group-btn">
                        <a href="./index.php?exec=listcate"><input value="Danh sách" type="button" class="form__group-btn"></a>
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
    <script>
            const cateNameEle = document.querySelector('#catename');
            const form = document.querySelector('#addcate');
            const isRequire  = value => value === '' ? false : true;
            const isBetween = (length, min, max) => length < min || length > max ? false : true;
            // show the function errors
            const errorShow = (input, message) =>{
                // get the form-field
                const formF = input.parentElement;
                formF.classList.remove('sucess');
                formF.classList.add('error');
                // show the errors alert
                const error = formF.querySelector('p');
                error.textContent = message;
            };
            // show the function success
            const sucessShow = (input, message) => {
                // get the form-field
                const formF = input.parentElement;
                formF.classList.remove('error');
                const error = formF.querySelector('p');
                error.textContent = "";
            };
            const checkCatename = () =>{
                let validate = false;
                const min = 6;
                max = 35;
                const cateName = cateNameEle.value.trim();
                if(!isRequire(cateName)){
                    errorShow(cateNameEle, 'Tên danh mục không được bỏ trống!');
                }else if(!isBetween(cateName.length, min, max)) {
                    errorShow(cateNameEle, `Tên danh mục phải chứa ít nhât ${min} kí tự và tối đa ${max} kí tự!`);
                }
                else{
                    sucessShow(cateNameEle);
                    validate = true;
                }
                return validate;
            };     
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
                    case 'catename':
                        checkCatename();
                        break;
                }
            }));
    </script>
</body>

</html>