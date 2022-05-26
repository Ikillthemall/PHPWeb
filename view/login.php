<style>
    p{
        color: red;
        font-size: 1.4rem;
        margin-top: 4px;
    }
</style>
     <div class="container">
            <div class="grid width">
                <div class="content row">
                    <div class="l-4 m-4 c-4 col__loginright">
                        <div class="login__bgc">
                            <img src="./public/assets/images/logo/login4.png" alt="" class="login__bgc-img">
                        </div>
                    </div>
                    <div class="l-8 m-4 c-4 col__loginleft">
                        <div class="login__form">
                            <h2 class="login__title">Đăng nhập</h2>
                            <div class="login__social">
                                <form action="index.php?view=login" class="login__social-subForm">
                                    <button name="" value="" class="button login__social-subForm-facebook login__social-subForm-btn login__social-subForm-btn--facebook">
                                        <i class="fa fa-facebook login__social-subForm-facebook-icon login__social-subForm-btn--facebook"></i>
                                        <span class="login__social-subForm-facebook-text">
                                            Tiếp tục với facebook
                                        </span>
                                    </button>
                                    <button class="button login__social-subForm-google login__social-subForm-btn login__social-subForm-btn--google">
                                        <i class="fa fa-google login__social-subForm-google-icon login__social-subForm-btn--google"></i>
                                        <span class="login__social-subForm-google-text">
                                            Tiếp tục với google
                                        </span>
                                    </button>
                                </form>
                            </div>
                            <div class="login__line">
                                <p class="login__line-text">Hoặc</p>
                            </div>
                            <div class="login__mainForm">
                                <div class="login__mainForm-error" style="margin-bottom: 1.4rem; color: red; font-size:1.4rem;">
                                    <span><?=$alert?></span>
                                </div>
                                <form id="signin" action="index.php?view=login" method="post" class="login__mainForm-action" name="">
                                    <input name="#" type="hidden" class="login__mainForm-action-abc">
                                    <input name="#" type="hidden">
                                    <div class="login__mainForm-action-group form-field">
                                        <label for="#">Tài khoản</label>
                                        <input id="username" placeholder="Nhập tên đăng nhập" name="name" type="text" class="login__mainForm-action-group-input">
                                        <p></p>
                                    </div>
                                    <div class="login__mainForm-action-group form=field">
                                        <label for="#">Mật khẩu</label>
                                        <input id="pass" placeholder="Mật khẩu" name="password" type="password" class="login__mainForm-action-group-input">
                                        <p></p>
                                    </div>
                                    <div class="login__mainForm-action-group">
                                        <label class="login__mainForm-action-group-checkbox" for="#">
                                            <input name="remember" type="checkbox" class="login__mainForm-action-group-checkbox--tick">
                                            Ghi nhớ đăng nhập
                                        </label>
                                    </div>
                                    <div class="login__mainForm-action-button">
                                        <input value="Đăng nhập" name="login" type="submit" class="button button--login login__mainForm-action-button-login">
                                          <!-- Đăng nhập
                                        </button> -->
                                        <button class="button button--res login__mainForm-action-button-login"> 
                                            <a href="index.php?view=register">Đăng kí</a>
                                        </button>
                                    </div>
                                    <div class="login__mainForm-action-group">
                                        <p class="login__mainForm-action-group-text">
                                            <a href="./index.php?view=changepass">Đổi mật khẩu</a>
                                            <a href="./index.php?view=forgetpass">Quên mật khẩu ?</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const userNameEle = document.querySelector('#username');
            const passEle = document.querySelector('#pass');
            const form = document.querySelector('#signin');
            const isRequire  = value => value === '' ? false : true;

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
            const checkUsername = () =>{
                let validate = false;
                const userName = userNameEle.value.trim();
                if(!isRequire(userName)){
                    errorShow(userNameEle, 'Tên đăng nhập không được bỏ trống!');
                }else{
                    sucessShow(userNameEle);
                    validate = true;
                }
                return validate;
            };
            const checkPass = () =>{
                let validate = false;
                const pass = passEle.value.trim();
                if(!isRequire(pass)){
                    errorShow(passEle, 'Mật khẩu được bỏ trống!');
                }else{
                    sucessShow(passEle);
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
                    case 'username':
                        checkUsername();
                        break;
                    case 'pass':
                        checkPass();
                        break;
                }
            }));
        </script>
