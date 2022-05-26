<style>
    :root {
        --white-color: #fff;
        --black-color: #000;
        --text-color: #333;
        --primarytext-color: rgba(0, 0, 0, .54);
        --primary-color: #005D4F;
        --border-color: #bdbdbdbd;
        --star-color: #FFCE3D;
        --brand-color: #D7202C;
        --background-color: #f5f5f5;
        --button-hover: #dd5a40;
        --header-height: 120px;
        --navbar-height: 32px;
        --header-search-height: calc(var(--header-height) - var(--navbar-height));
        --header-bar: 46px;
        --height-button: 48px;
        --width-buttonbuy: 180px;
        --fontsize-default: 1.4rem;
    }
    
    .content {
        background-color: var(--background-color);
    }
    
    .content__heading {
        text-decoration: none;
        display: flex;
        padding-left: 18px;
    }
    
    .content__heading-logo {
        text-decoration: none;
        color: var(--primary-color);
        position: relative;
        max-width: 300px;
    }
    
    .content__heading-logo-img {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 80px;
        height: 28px;
    }
    
    .content__headding-text {
        margin-top: 4px;
        margin-left: 80px;
        font-size: 1.8rem;
        font-weight: 400;
        line-height: 56px;
    }
    
    .content__headding-text::before {
        content: "";
        border-right: 1px solid var(--primary-color);
        margin-left: 20px;
        margin-right: 20px;
    }
    
    .content__body-heading {
        border: 1px solid rgba(224, 168, 0, 0.4);
        margin: 10px 0px 10px 0px;
        padding: 10px 20px;
        border-radius: 3px;
        background-color: #FFFEFB;
    }
    
    .content__body-heading>img {
        width: 23px;
        height: 14px;
        margin-right: 12px;
    }
    
    .content__body-heading>span {
        font-size: 1.4rem;
        color: var(--text-color);
    }
    
    .content__body-mid1 {
        align-items: center;
        border-radius: 3px;
        background-color: #fff;
        text-transform: capitalize;
        margin-bottom: 12px;
        color: #888;
        padding: 0 20px;
        font-size: 1.4rem;
        overflow: hidden;
        height: 50px;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.05);
    }
    
    .mid1__checkbox-cell {
        flex-direction: row-reverse;
        min-width: 58px;
    }
    
    input[type=checkbox] {
        padding: 0px;
    }
    
    input {
        line-height: normal;
    }
    
    .stardust-checkbox {
        max-width: 380px;
        position: relative;
        font-weight: 300;
        font-size: 1.2rem;
        color: var( --primarytext-color);
        display: flex;
        align-items: center;
    }
    
    .stardust-checkbox-input {
        position: absolute;
        top: -6px;
        left: 0;
    }
    .content__body-mid1-text1 {
        color: rgba(0, 0, 0, .8);
        width: 46%;
    }
    
    .content__body-mid1-text2 {
        text-align: center;
        width: 15.8%;
    }
    
    .content__body-mid1-text3 {
        width: 15.4%;
        text-align: center;
    }
    
    .content__body-mid1-text4 {
        width: 12%;
        text-align: center;
    }
    
    .content__body-mid1-text5 {
        width: 12%;
        text-align: center;
    }
    
    .content__body-mid2 {
        /* padding-top: 12px; */
        color: 1px solid rgba(0, 0, 0, .09);
        background-color: #fff;
        border-radius: 3px;
        padding: 15px 20px 20px;
    }
    
    .content__body-mid2-item {
        color: rgba(0, 0, 0, .8);
        margin-top: 10px;
    }
    
    .mid2__item {
        align-items: center;
    }
    
    .mid2__item-checkbox {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: reverse;
        flex-direction: row-reverse;
        min-width: 60px;
    }
    
    .mid2__item-checkbox--label {
        border-radius: 24px;
        background-color: var(--primary-color);
        height: 16px;
        line-height: 16px;
        padding: 1px 5px;
        text-transform: uppercase;
        color: var(--white-color);
        margin-right: 5px;
        flex-shrink: 0;
    }
    
    .mid2__item-content-product {
        width: 29%;
        position: relative;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
    }
    
    .mid2__item-content-product-img {
        text-decoration: none;
        justify-content: space-between;
        align-items: center;
    }
    
    .mid2__item--img {
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat no-repeat;
        width: 14rem;
        height: 14rem;
        border: 1px solid #f5f5f5;
        border-radius: 5px;
    }
    .mid2__item--img img{
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat no-repeat;
        width: 14rem;
        height: 14rem;
        border: 1px solid #f5f5f5;
        border-radius: 5px;
    }
    
    .mid2__item-text {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        padding: 6px;
        line-height: 1rem;
        max-width: 150px;
        overflow: hidden;
        flex-direction: column;
     
    }
    
    .mid2__item-text--link {
        font-size: 1.4rem;
        font-weight: 600;
        text-decoration: none;
        color: rgba(0, 0, 0, .8);
        margin-bottom: 6px;
        margin-top: 6px;
        line-height: 1.6rem;
        text-overflow: ellipsis;
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 5;
    }
    
    .blank__content {
        width: 15.2%;
        justify-content: center;
        align-items: center;
    }
    
    .mid2__item-content-price {
        display: flex;
        align-items: center;
        width: 15.8%;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
    }
    
    .item-content-price--old {
        text-decoration: line-through;
        color: var(--primarytext-color);
        margin-right: 5px;
        font-size: 1.3rem;
    }
    
    .item-content-price--new {
        color: var(--primary-color);
        font-size: 1.4rem;
    }
    
    .mid2__item-content-quantity {
        font-size: 1.4rem;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        width: 15.4%;
    }
    
    .mid2__item-content-quantity--stock {
        color: var(--primary-color);
        font-size: 1.4rem;
    }
    
    .mid2__item-content-totalprice {
        width: 10.4%;
        text-align: center;
        font-size: 1.4rem;
        font-weight: 400;
    }
    
    .mid2__item-content-remove {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 12.7%;
        flex-direction: column;
        -webkit-box-align: center;
    }
    
    .button__item-remove {
        cursor: pointer;
        border: none;
        background: none;
        font-size: 1.4rem;
        color: #757575;
    }
    
    .button__item-remove:hover {
        color: var(--primary-color);
    }
    
    .relative__text {
        z-index: 2;
        width: 100%;
    }
    
    .button__relative-text {
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: none;
        background: none;
        font-size: 1.4rem;
        color: var(--primary-color);
    }
    
    .button__relative-text i {
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        margin-left: 4px;
    }
    
    .content__body-bottom1 {
        z-index: 3;
        display: grid;
        grid-template-columns: 1fr 20.3rem 11.8rem;
        background: var(--white-color);
        width: 100%;
        flex: 1;
        font-size: 1.3rem;
        margin-top: 10px;
        position: relative;
        bottom: 0;
        padding-bottom: 12px;
        background-color: #fff; height: 10rem; 
        display:flex; 
        align-items:center;
    }
    
    .body__bottom1-row1 {
        grid: 2/4;
        display: flex;
        padding: 8px 0px 8px 20px;
        margin-left: 5px;
    }
    
    .row1__voucher-icon {
        width: 3rem;
        height: 2.5rem;
    }
    
    .row1__voucher-text {
        font-size: 1.4rem;
        font-weight: 400;
        flex-shrink: 0;
    }
    
    .row1__voucher-second {
        flex: 1;
    }
    
    .row1__voucher-third {
        color: #05a;
        margin-right: 18px;
        text-transform: capitalize;
        font-size: 1.4rem;
        white-space: nowrap;
        cursor: pointer;
    }
    
    .body__bottom1-row2 {
        grid: 1/4;
        /* border-top: 1px dashed rgba(0, 0, 0, .09); */
    }
    
    .body__bottom1-row3 {
        flex: 0 0 auto;
        padding: 10px 8px 10px 12px;
    }
    
    .body__bottom1-row5 {
        grid: 1/4;
    }
    
    .body__bottom1-row5-footerrow {
        display: flex;
        align-items: center;
        flex: 1;
        width: 100%;
        padding: 8px 0px;
    }
    
    .row5__checkbox {
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: reverse;
        flex-direction: row-reverse;
        min-width: 58px;
        padding: 0px 12px 0px 20px;
    }
    
    .row5__button-checkbox {
        font-size: 1.5rem;
        padding: 1px 8px;
        cursor: pointer;
        text-transform: capitalize;
    }
    
    .row5__button-remove {
        cursor: pointer;
        font-size: 1.5rem;
        margin: 0px 6px;
        padding: 1px 8px;
    }
    
    .row5__button-save {
        font-size: 1.5rem;
        margin: 0 6px;
        max-width: 10.5rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: var(--primary-color);
    }
    
    .row5__checkbox-gap {
        flex: 1;
    }
    
    .row5__total {
        position: absolute;
        right: 25%;
    }
    
    .row5__total-content-text--detail {
        font-size: 1.6rem;
        padding: 1px 8px;
    }
    
    .row5__total-content-text--price {
        font-size: 2.4rem;
        line-height: 28px;
        margin-left: 5px;
        color: #ee4d2d;
    }
    
    .row5__checkout-button {
        background-color: var(--primary-color);
        border-radius: 3px;
        position: absolute;
        top: 20%;
        transform: translateY(-30%);
        right: 7%;
    }
    
    .row5__checkout-button:hover {
        cursor: pointer;
        
    }
    .row5__checkout{
        margin-right: 5rem;
    }
    .row5__checkout:hover{
       color:#00917a;
    }
    .content__body-bottom2 {
        padding-top: 70px;
        background-color: #f5f5f5;
        width: 100%;
    }
    
    .flex {
        display: flex;
    }
    
    .grid {
        width: 1200px;
        max-width: 100%;
        margin: 0 auto;
    }
    /* .grid__full-width {
    width: 100%;
} */
    
    .grid__row {
        display: flex;
        flex-wrap: wrap;
        margin-left: -5px;
        margin-right: -5px;
    }
    
    .grid__col-2 {
        padding-left: 5px;
        padding-right: 5px;
        width: 16.6667%;
    }
    
    .grid__col-4 {
        padding: 15px;
        width: 33.3334%;
    }
    
    .grid__col-4-left {
        background-color: var(--white-color);
    }
    
    .grid__col-8 {
        padding: 20px 35px 0px 35px;
        width: 66.6666%;
    }
    
    .grid__col-8-right {
        background-color: var(--white-color);
    }
    
    .grid__col-12 {
        width: 100%;
    }
    
    .grid__col-2-4 {
        padding-left: 5px;
        padding-right: 5px;
        width: 20%;
    }
    /* chứa sản phẩm */
    
    .grid__col-10 {
        padding-left: 5px;
        padding-right: 5px;
        width: 83.3334%;
    }
    /* BTN */
    
    .btn {
        text-decoration: none;
        min-width: 140px;
        height: 36px;
        font-size: 1.5rem;
        border: none;
        outline: none;
        border-radius: 3px;
        cursor: pointer;
        padding: 0 12px;
        color: var(--text-color);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: var(--white-color);
    }
    
    .button__cart-text {
        cursor: pointer;
        background-color: none;
        border: none;
    }
    /* Css nút giỏ hàng */
    
    .button {
        text-decoration: none;
        min-width: 140px;
        height: 36px;
        font-size: 1.5rem;
        border: none;
        outline: none;
        border-radius: 3px;
        cursor: pointer;
        padding: 0 12px;
        color: var(--text-color);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: var(--white-color);
    }
    
    .btn.btn-hover:hover {
        background-color: rgba(0, 0, 0, 0.2);
    }
    
    .btn__back {
        color: var(--text-color);
        margin-right: 8px;
    }
    
    .btn.btn__regist:hover {
        /* background-color: #F05D40; */
        background: transparent linear-gradient(180deg, #00483d 0%, #00917a 100%) 0% 0% no-repeat padding-box;
    }
    
    .btn.btn__dis {
        cursor: pointer;
        color: var(--text-color);
        background-color: var(--primary-color);
    }
    
    .btn-first,
    .btn-second {
        font-size: 14px;
        padding: 0 10px;
        height: 32px;
    }
    /* button buy */
    
    .btn__cart,
    .btn__buy {
        height: var(--height-button);
        border: 1px solid var(--primary-color);
        min-width: var(--width-buttonbuy);
        font-size: 1.6rem;
    }
    
    .btn__cart {
        color: var(--primary-color);
        margin: 12px 12px 0px 0px;
    }
    
    .btn__buy {
        color: var(--white-color);
        margin-top: 12px;
        background-color: #005D4F;
        cursor: pointer;
        border-radius: 4px;
    }
 
    .btn__buy:hover {
        background: transparent linear-gradient(180deg, #00483d 0%, #00917a 100%) 0% 0% no-repeat padding-box;
    }
</style>
<div class="container">
            <div class="grid">
                <div class="content__body-heading">
                    <img src="images/logo/transport__free.png" alt="">
                    <span style="font-size: 2rem; color:#333; font-weight: 500;">GIỎ HÀNG</span>
                </div>
                <div class="content__body-mid1 flex">
                    <div class="content__body-mid1-checkbox">
                        <div class="mid1__checkbox-cell">
                            <label for="" class="stardust-checkbox">
                                <input type="checkbox" class="stardust-checkbox-input">
                                <div class="stardust-checkbox-box flex"></div>
                            </label>
                        </div>
                    </div>
                    <div class="content__body-mid1-text1">Sản phẩm</div>
                    <div class="content__body-mid1-text2">Đơn giá</div>
                    <div class="content__body-mid1-text3">Số lượng</div>
                    <div class="content__body-mid1-text4">Số tiền</div>
                    <div class="content__body-mid1-text5">Thao tác</div>
                </div>
                <?php
                    cartview();
                ?>
                <div class="content__body-bottom1" style="background-color: #fff; height: 10rem; display:flex; align-items:center; justify-content:flex-end;">
                    <!-- <form action="" method="post"> -->
                        <div class="row5__checkout" style="margin-right: 1rem;">                    
                           <a href="index.php?view=cartbill" style="background-color: #005D4F;"><input value="Đặt hàng" type="submit" class="btn__buy btn__dis"></a>
                        </div>
                        <div class="row5__checkout">                    
                            <a href=""><input value="Xóa giỏ hàng" type="submit" class="btn__buy"></a>    
                        </div>
                    <!-- </form> -->
                </div>     
            </div>
        </div>