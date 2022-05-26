<?php
    // if(is_array($listProd)){
    //     extract($listProd);
    // }
 
    // $imgPath = "../upload/".$image;
    // if(is_file($imgPath)){
    //     $img = "<img src='".$imgPath."' width= '50px'>";
    // }else{
    //     $img = "No img";
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    small{
        font-size: 1.4rem;
        color: red;
        margin-left: 1rem;
    }
    p{
        font-size: 1.4rem;
        color: red;
        margin-left: 1rem;
        margin-top: 4px;
    }
    .form-field{
        display: flex;
        flex-direction: column;
        position: relative;
    }
    label{
        position: absolute;
        left: -25%;
        top: 25%;
    }
    .register__mainform-action-group-text--gender{
        position: absolute;
        top: 30%;
        left: -25%;
        color: #3a3939;
        font-weight: 700;
        font-size: 1.4rem;
        white-space: nowrap;
    }
    .register__mainform-action-group-choose-border{
        border: 1px solid #ccc;
        border-radius: 0.6rem;
        padding: 1rem 5rem;
    }
    .register__mainform{
        margin-left: 4rem;
    }
</style>
<body>
<div class="container">
            <div class="grid width">
                <div class="content row">
                    <div class=" l-4 m-4 c-4 col__loginright">
                        <div class="login__bgc">
                            <!-- <img src="./public/assets/images/logo/login4.png" alt="" class="login__bgc-img"> -->
                    
                            <img src="./public/assets/images/logo/login4.png" alt="" class="login__bgc-img"> 
                        </div>
                    </div>
                    <div class=" l-8 m-4 c-4 col__loginleft">
                        <div class="register__form">
                            <h2 class="register__title">Đăng kí tài khoản</h2>
                            <div class="register__mainform">        
                            <?php
                                    if(isset($alert) && ($alert!="")){
                                        echo '     
                                        <div class="login__mainForm-error" style="display:flex; justify-content: center;">
                                                 <span style="color: red; font-size:1.4rem;">'.$alert.'</span>
                                        </div>';
                                    }
                                ?>                 
                                <form id="signup" action="index.php?view=register" method="post" enctype="multipart/form-data" class="register__mainform-action" onsubmit="">
                                    <!-- <input type="hidden" name="">
                                    <input type="hidden" name=""> -->                            
                                    <div class="register__mainform-action-group form-field">
                                        <!-- <div class="register__mainform-action-group-body"> -->
                                            <label for="#" class="register__mainform-action-group-text">
                                                Tài khoản
                                            </label>
                                            <input style="flex-basis: 200%;" autocomplete="off" id="username" name="username" type="text" class="register__mainform-action-group-input" placeholder="Nhập tên tài khoản">
                                        <!-- </div> -->
                                        <small></small>               
                                        <p></p>                                    
                                    </div>
                                    <div class="register__mainform-action-group form-field">
                                        <!-- <div class="register__mainform-action-group-body"> -->
                                            <label for="#" class="register__mainform-action-group-text">
                                                Email
                                            </label>
                                            <input autocomplete="off" id="email" name="email" type="email" class="register__mainform-action-group-input" placeholder="Nhập email">
                                        <!-- </div> -->
                                        <small></small>
                                        <p></p>
                                    </div>
                                    <div class="register__mainform-action-group form-field">
                                        <label for="#" class="register__mainform-action-group-text">
                                            Mật khẩu
                                        </label>
                                        <input autocomplete="off" id="pass" name="pass" type="password" class="register__mainform-action-group-input" placeholder="Nhập mật khẩu">
                                        <?php
                                            if(isset($error) && ($error!="")){
                                                echo '<p>'.$error.'</p>';
                                            }
                                            ?>
                                        <small></small>
                                        <p></p>
                                    </div>
                                    <div class="register__mainform-action-group form-field">
                                        <label for="#" class="register__mainform-action-group-text">
                                            Nhập lại mật khẩu
                                        </label>
                                        <input autocomplete="off" id="repass" name="repass" type="password" class="register__mainform-action-group-input" placeholder="Nhập lại mật khẩu">                          
                                        <small></small>
                                        <p></p>
                                    </div>
                                    <div class="register__mainform-action-group form-field">
                                        <label for="#" class="register__mainform-action-group-text">
                                            Số điện thoại
                                        </label>
                                        <input autocomplete="off" id="tel" name="phone" type="tel" class="register__mainform-action-group-input" placeholder="Nhập số điện thoại">                                   
                                        <small></small>
                                        <p></p>
                                    </div>
                                    <div class="register__mainform-action-group form-field">
                                        <label for="#" class="register__mainform-action-group-text">
                                           Địa chỉ
                                        </label>
                                        <input id="address" name="address" type="text" class="register__mainform-action-group-input" placeholder="Nhập địa chỉ">
                                        <small></small>
                                    </div>
                                    <div class="register__mainform-action-group form-field">
                                        <label for="#" class="register__mainform-action-group-text--gender">
                                            Giới tính
                                        </label>
                                        <div class="register__mainform-action-group-choose">
                                            <div class="register__mainform-action-group-choose-border">
                                                <span>Nam</span>
                                                <input id="male" value="0" type="radio" class="choose__gender" name="gender">
                                                <span> Nữ</span>
                                                <input id="female" value="1" type="radio" class="choose__gender" name="gender">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="register__mainform-action-group form-field">
                                        <label for="#" class="register__mainform-action-group-text">
                                            Hình
                                        </label>                              
                                        <input type="file" class="register__mainform-action-group-input" name="image">
                                    </div>
                                   
                                    <div class="register__mainform-action-groupsubmit">
                                        <input value="Đăng kí tài khoản" name="register" type="submit" class="button button--register">
                                        <!-- <button name="register" type="submit" class="button button--register">
                                          Đăng kí tài khoản
                                        </button> -->
                                    </div>                              
                                </form>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script>
        const userNameEle = document.querySelector('#username');
        const emailEle = document.querySelector('#email');
        const passEle = document.querySelector('#pass');
        const repassEle = document.querySelector('#repass');
        const addressEle = document.querySelector('#address');
        const telEle = document.querySelector('#tel');

        const form = document.querySelector('#signup');

        // check the email is valid or not
        const isEmailValid = (email) => {
            const reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return reg.test(email);
        };

        // check a password is strong or not
        const isPasswordStrong = (pass) => {
            const reg = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
            return reg.test(pass);
        };

        // check a tel is valid or not
        const isTelValid = (tel) => {
            const reg = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/;
            return reg.test(tel);
        };

        // the variables for checking
        const isRequire = value => value === '' ? false : true;
        const isBetween = (length, min, max) => length < min || length > max ? false : true;

        // validate the username field
        const checkUsername = () => {
            let validate = false;
            const min = 6;
            max = 25;
            const userName = userNameEle.value.trim();
            if (!isRequire(userName)) {
                errorShow(userNameEle, 'Tên đăng nhập không được bỏ trống!');
            } else if (!isBetween(userName.length, min, max)) {
                errorShow(userNameEle, `Tên đăng nhập phải chứa ít nhât ${min} kí tự và tối đa ${max} kí tự!`);
            } else {
                successShow(userNameEle);
                validate = true;
            }
            return validate;
        };

        // validate the email
        const checkEmail = () => {
            let validate = false;
            const email = emailEle.value.trim();
            if (!isRequire(email)) {
                errorShow(emailEle, 'Email không được bỏ trống');
            } else if (!isEmailValid(email)) {
                errorShow(emailEle, 'Email không hợp lệ!')
            } else {
                successShow(emailEle);
                validate = true;
            }
            return validate;
        };

        // validate the password
        const checkPass = () => {
            let validate = false;
            const pass = passEle.value.trim();
            if (!isRequire(pass)) {
                errorShow(passEle, 'Mật khẩu không được bỏ trống!');
            } else if (!isPasswordStrong(pass)) {
                errorShow(passEle, 'Mật khẩu phải chứa ít nhất 8 kí tự gồm 1 chữ viết thường, 1 chữ viết hoa, 1 số!');
            } else {
                successShow(passEle);
                validate = true;
            }
            return validate;
        };

        // validate confirm password 
        const checkConfirmPass = () => {
            let validate = false;
            // check confirm
            const repass = repassEle.value.trim();
            const pass = passEle.value.trim();
            if (!isRequire(repass)) {
                errorShow(repassEle, 'Hãy nhập lại mật khẩu!');
            } else if (pass !== repass) {
                errorShow(repassEle, 'Mật khẩu không khớp!');
            } else {
                successShow(repassEle);
                validate = true;
            }
            return validate;
        };

        // validate the tel
        const checkTel = () => {
            let validate = false;
            const tel = telEle.value.trim();
            if (!isTelValid(tel)) {
                errorShow(telEle, 'Số điện thoại không hợp lệ!');
            } else {
                successShow(telEle);
                validate = true;
            }
            return validate;
        };

        // show the function errors
        const errorShow = (input, message) => {
            // get the form-field
            const formF = input.parentElement;
            //  add erros class
            formF.classList.remove('success');
            formF.classList.add('error');
            // show the error alert
            const error = formF.querySelector('p');
            error.textContent = message;
        };

        // Show the fucntion success
        const successShow = (input) => {
            const formF = input.parentElement
            formF.classList.remove('error');
            // hide the error
            const error = formF.querySelector('p');
            error.textContent = '';
        };

        // ------------------------------------------------------------------------------ //
        // modifying the submit event handler: disabled it for submitting
        // form.addEventListener('submit', function(e) {
        //     e.preventDefault();
            // validate forms
            // let isUsernameValid = checkUsername();
            // isEmailValid = checkEmail();
            // isPassValid = checkPass();
            // isConfirmPassValid = checkConfirmPass();
            // isTelValid = checkTel();
            // let isFormValid = isUsernameValid && isEmailValid && isPassValid && isConfirmPassValid;
            // let isFormValid = isUsernameValid && isEmailValid && isPassValid && isConfirmPassValid && isTelValid;
            //  submit to server if the form correctly
        //     if (isFormValid) {

        //     }
        // });
        // ------------------------------------------------------------------------------- //
        const bounce = (fn, delay = 1500) => {
            let timeoutId;
            return (...args) => {
                if (timeoutId) {
                    clearTimeout(timeoutId);
                }
                // setup a new time
                timeoutId = setTimeout(() => {
                    fn.apply(null, args)
                }, delay);
            };
        };
        form.addEventListener('input', bounce(function(e) {
            switch (e.target.id) {
                case 'username':
                    checkUsername();
                    break;
                case 'email':
                    checkEmail();
                    break;
                case 'pass':
                    checkPass();
                    break;
                case 'repass':
                    checkConfirmPass();
                    break;
                case 'tel':
                    checkTel();
                    break;
            }
        }));
</script>
</html>
  