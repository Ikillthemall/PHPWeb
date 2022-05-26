<?php
                    if(isset($bill) && (is_array($bill))){
                        extract($bill);
                    }else{
                        echo 'error';
                    }
                ?>


<div class="login__form">
                            <h2 class="login__title">Cảm ơn quý khách đã đặt hàng</h2>
                            <div class="login__mainForm">
                                <!-- <div class="login__mainForm-error">
                                    <h2>Mã đơn hàng</h2>
                                </div> -->
                                <h2 class="login__title">Thông tin đơn hàng</h2>
                                <li class="login__title">- Mã đơn hàng: LT-<?=$bill['idBill']?></li>
                                <li class="login__title">- Ngày đặt hàng: <?=$bill['billDate']?></li>
                                <li class="login__title">- Tổng đơn hàng: <?=$bill['billTotal']?></li>
                                <li class="login__title">- Phương thức thanh toán: <?=$bill['billPay']?></li>
                                </div>
                            </div>
                        </div>


<div class="login__form">
                            <h2 class="login__title">Thông tin người đặt hàng</h2>
                            <div class="login__mainForm">
                                <div class="login__mainForm-error" style="display:none;">
                                    <h2>Mã đơn hàng</h2>
                                </div>
                                <div class="login__mainForm-action">                             
                                    <input name="#" type="hidden" class="login__mainForm-action-abc">
                                    <input name="#" type="hidden">
                                    <div class="login__mainForm-action-group">
                                        <label for="#">Người đặt hàng</label>
                                        <input value="<?=$bill['billName']?>" name="username" type="text" class="login__mainForm-action-group-input">
                                    </div>
                                    <div class="login__mainForm-action-group">
                                        <label for="#">Địa chỉ</label>
                                        <input value="<?=$bill['billAdress']?>" name="address" type="text" class="login__mainForm-action-group-input">
                                    </div>
                                    <div class="login__mainForm-action-group">
                                        <label for="#">Email người đặt</label>
                                        <input value="<?=$bill['billEmail']?>" name="email" type="email" class="login__mainForm-action-group-input">
                                    </div>
                                    <div class="login__mainForm-action-group">
                                        <label for="#">Số điện thoại</label>
                                        <input value="<?=$bill['billPhone']?>" name="phone" type="tel" class="login__mainForm-action-group-input">
                                    </div>
                                </div>
                                </div>
                            </div>