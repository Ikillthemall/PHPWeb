<?php
                    $sum = 0;
                    foreach ($_SESSION['cart'] as $cart){
                        $img = $imgPath.$cart[2];
                        $total = $cart[3] * $cart[4];
                        $sum += $total;
                        echo '<div class="content__body-mid2">
                                 <div class="content__body-mid2-item">
                                     <div class="mid2__item flex">
                                <div class="mid2__item-checkbox flex">
                                    <div class="mid2__item-checkbox--label">
                                        Còn hàng
                                    </div>
                                </div>
                                <div class="mid2__item-content-product flex">
                                    <div class="mid2__item-content-product-img flex">
                                        <a href="product.html" class="mid2__item--detail">
                                            <div class="mid2__item--img">
                                                <img src="'.$img.'" alt="">
                                            </div>
                                        </a>
                                        <div class="mid2__item-text flex">
                                            <a href="product.html" class="mid2__item-text--link">
                                                '.$cart[1].';
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mid2__item-content-price">
                                    <div class="item-content-price">
                                        <span class="item-content-price--old">
                                        13.550.000đ                           
                                        </span>
                                        <span class="item-content-price--new">
                                            '.$cart[3].'
                                        </span>
                                    </div>
                                </div>
                                <div class="mid2__item-content-quantity">
                                    '.$cart[4].'
                                    <div class="mid2__item-content-quantity--stock">
                                        Còn 32 sản phẩm
                                    </div>
                                </div>
                                <div class="mid2__item-content-totalprice">
                                    <span>'.$total.'</span>
                                </div>
                                 <div class="mid2__item-content-remove flex">
                                     <input type="submit" value="Xóa" class="button__item-remove button__item-remove--active">
                                 </div>
                                </div>
                               </div>
                            </div>
                                         
                    </div>';
                    }
                    echo '<div class="content__body-bottom1" style="background-color: #fff; height: 10rem; display:flex; align-items:center;">
                            <div class="row5__total flex">
                             <div class="row5__total-content">
                                <div class="row5__total-content-text flex">
                                    <div class="row5__total-content-text--detail">
                                        Tổng thanh toán: 
                                    </div>
                                    <div class="row5__total-content-text--price">
                                    '.$sum.'
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row5__checkout">                    
                            <input value="Mua hàng" type="submit" class="row5__checkout-button btn__buy btn__dis">
                        </div>
                    </div>';
                ?>