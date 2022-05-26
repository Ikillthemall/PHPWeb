<div class="container">
            <div class="grid width">
                <div class="content row">
                    <div class="l-4 m-4 c-4 col__loginright">
                        <div class="login__bgc">
                            <img src="./public/assets/images/logo/login4.png" alt="" class="login__bgc-img">
                        </div>
                    </div>
                    <div class="l-8 m-4 c-4 col__loginleft">
                        <div class="forget__form login__form">
                            <h2 class="forget__title login__title">Cấp lại mật khẩu</h2>
                            <form action="index.php?view=forgetpass" class="forget__form-action login__form-action" method="post">
                                <!-- <div class="forget__form-action-group">
                                    <label for="">Tài khoản</label>
                                    <input type="text" placeholder="Nhập tên tài khoản">
                                </div> -->
                                <div class="forget__form-action-group" style="color: red; font-size: 1.4rem;">
                                    <?php
                                        if(isset($alert) && ($alert !="")){
                                            echo $alert;
                                        }
                                    ?>
                                </div>
                                <div class="forget__form-action-group">
                                    <label for="">Email</label>
                                    <input name="email" type="email" placeholder="Nhập email">
                                </div>
                                <div class="forget__form-action-button">
                                    <input value="Gửi yêu cầu" name="send" class="button button--forget" type="submit">
                                        <!-- Gửi yêu cầu</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>