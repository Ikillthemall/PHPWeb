<style>
.container .product-item__navpage {
    margin: 50px 0px 34px 0px;
    padding-left: 0px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    }

.container .product-item__navpage .navpage-item {
    margin: 0 1.2rem;
    border-radius: 4px;
    }

.container .product-item__navpage .navpage-item__link {
    display: block;
    text-align: center;
    line-height: 30px;
    text-decoration: none;
    font-size: 1.9rem;
    font-weight: 400;
    min-width: 40px;
    height: 30px;
    color: #93939C;
    }

.container .product-item__navpage .navpage-item__link--active {
    color: #fff;
    background-color: rgba(238, 75, 43, 0.9);
}
  
.brand {
     display: flex;
     border-radius: 3px;
     background: transparent linear-gradient(180deg,
            #00483d 0%,
            #00917a 100%) 0% 0% no-repeat padding-box;;
    height: 40px;
    align-items: center;
    justify-content: space-between;
    margin-top: 1.4rem;       
            }
.brand__heading {
    color: #fff;
    margin-left: 12px;
    font-size: 1.4rem;
    font-weight: 400;
    text-transform: uppercase;
 }
 .brand__heading-left {
    margin-right: 20px;
    position: relative;
}
.brand__heading-icon {
    color: #fff;
    position: absolute;
    margin-left: 4px;
    top: 5px;
}
.brand__heading-icon::before {
    font-size: 1.4rem;
 }
.brand__heading-left--text {

    font-size: 1.2rem;
    color: #fff;
    font-weight: 400;
                }
.brand__heading-left--text:hover,
.fa-caret-right:hover {
    color: #bdbdbdbd;
    cursor: pointer;
    }
</style>
<?php
    // require_once '../global.php';
?>
<div class="container">
            <div class="grid width">
                <div class="content row">
                    <div class="col l-2 m-0 c-0">
                        <nav class="container__category">
                            <h3 class="category__heading">
                                Danh mục
                            </h3>
                            <ul class="category__list">
                            <li class="category__list-item">
                                    <a href="./index.php?view=home" class="category__list-item-link">
                                        <div class="category__list-item-link--right">
                                            <img class="category__list-item-link-img" src="./public/assets/images/logo/logo-home.png" alt="">
                                            <span>Home</span>
                                        </div>
                                    </a>
                                </li>
                                <?php
                                    foreach ($loadCate as $cate){
                                        extract($cate);
                                        $linkCate = "index.php?view=productcate&id_ctgr=".$id_ctgr;
                                        echo ' <li class="category__list-item">
                                        <a href="'.$linkCate.'" class="category__list-item-link">
                                            <div class="category__list-item-link--right">
                                                <img class="category__list-item-link-img" src="./public/assets/images/logo/logo-laptop.png" alt="">
                                                <span>'.$name.'</span>
                                            </div>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>';
                                    }
                                ?>
                               <!-- 
                                <li class="category__list-item">
                                    <a href="#" class="category__list-item-link">
                                        <div class="category__list-item-link--right">
                                            <img class="category__list-item-link-img" src="./public/assets/images/logo/logo-cellphone.png" alt="">
                                            <span>Điện thoại</span>
                                        </div>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                             
                                    <div class="category__submenu">
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Iphone</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                            <ul class="category__submenu-list">
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 10</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 11</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 12</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 13</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Samsung</h4>
                                                <i class="fa fa-angle-right"></i>
                                                <ul class="category__submenu-list">
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Samsung Galaxy S20</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 11</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 12</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 13</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Xiaomi</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Vivo</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Nokia</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Vsmart</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Asus</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                            
                                </li>
                                <li class="category__list-item">
                                    <a href="#" class="category__list-item-link">
                                        <div class="category__list-item-link--right">
                                            <img class="category__list-item-link-img" src="./public/assets/images/logo/logo-laptop.png" alt="">
                                            <span>Laptop</span>
                                        </div>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <div class="category__submenu">
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Asus</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                            <ul class="category__submenu-list">
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 10</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 11</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 12</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 13</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Samsung</h4>
                                                <i class="fa fa-angle-right"></i>
                                                <ul class="category__submenu-list">
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Samsung Galaxy S20</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 11</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 12</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 13</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Xiaomi</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Vivo</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Nokia</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Vsmart</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Asus</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="category__list-item">
                                    <a href="#" class="category__list-item-link">
                                        <div class="category__list-item-link--right">
                                            <img class="category__list-item-link-img" src="./public/assets/images/logo/logo-tablet.png" alt="">
                                            <span>Tablet</span>
                                        </div>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <div class="category__submenu">
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Asus</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                            <ul class="category__submenu-list">
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 10</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 11</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 12</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 13</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Samsung</h4>
                                                <i class="fa fa-angle-right"></i>
                                                <ul class="category__submenu-list">
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Samsung Galaxy S20</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 11</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 12</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 13</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Xiaomi</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Vivo</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Nokia</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Vsmart</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Asus</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="category__list-item">
                                    <a href="#" class="category__list-item-link">
                                        <div class="category__list-item-link--right">
                                            <img class="category__list-item-link-img" src="./public/assets/images/logo/logo-smartwatch.png" alt="">
                                            <span>Đồng hồ</span>
                                        </div>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <div class="category__submenu">
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Asus</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                            <ul class="category__submenu-list">
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 10</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 11</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 12</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 13</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Samsung</h4>
                                                <i class="fa fa-angle-right"></i>
                                                <ul class="category__submenu-list">
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Samsung Galaxy S20</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 11</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 12</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 13</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Xiaomi</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Vivo</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Nokia</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Vsmart</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Asus</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="category__list-item">
                                    <a href="#" class="category__list-item-link">
                                        <div class="category__list-item-link--right">
                                            <img class="category__list-item-link-img" src="./public/assets/images/logo/airpods.png" alt="">
                                            <span>Phụ kiện</span>
                                        </div>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <div class="category__submenu">
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Asus</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                            <ul class="category__submenu-list">
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 10</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 11</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 12</a>
                                                </li>
                                                <li class="category__submenu-list__item">
                                                    <a href="#" class="category__submenu-list__link">Iphone 13</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Samsung</h4>
                                                <i class="fa fa-angle-right"></i>
                                                <ul class="category__submenu-list">
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Samsung Galaxy S20</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 11</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 12</a>
                                                    </li>
                                                    <li class="category__submenu-list__item">
                                                        <a href="#" class="category__submenu-list__link">Iphone 13</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Xiaomi</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Vivo</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Nokia</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Vsmart</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                        <div class="category__submenu-item">
                                            <div class="category__submenu-item-box">
                                                <h4>Asus</h4>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                -->
                                <li class="category__list-item">
                                    <a href="./index.php?view=lienhe" class="category__list-item-link">
                                        <div class="category__list-item-link--right">
                                            <img class="category__list-item-link-img" src="./public/assets/images/logo/logo-contact.png" alt="">
                                            <span>Liên hệ</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="category__list-item">
                                    <a href="./index.php?view=gioithieu" class="category__list-item-link">
                                        <div class="category__list-item-link--right">
                                            <img class="category__list-item-link-img" src="./public/assets/images/logo/logo-introduce.png" alt="">
                                            <span>Giới thiệu</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="category__top">
                            <h3>Top 10 sản phẩm</h3>
                            <ul class="category__top-list">
                                <?php
                                    foreach ($loadTop as $top){
                                        extract($top);
                                        $img = $imgPath.$image;
                                        $linkProd = "index.php?view=proddetail&id_product=".$id_product;
                                        echo '<li class="category__top-list-item">
                                             <a href="'.$linkProd.'" class="category__top-list-item-link">
                                                 <img src="'.$img.'" alt="" style="width: 4rem; height: 4rem; margin-right: 5px;">
                                                <span>'.$name_product.'</span>
                                        </a>';
                                    }
                                ?>


                                <!-- <li class="category__top-list-item">
                                    <a href="#" class="category__top-list-item-link">
                                        <img src="./public/assets/images/product/iphone13.png" alt="" style="width: 4.5rem; height: 4.5rem">
                                        <span>SamSung Galaxy Ultra 5 SamSung Galaxy Ultra 5 SamSung Galaxy Ultra 5</span>
                                    </a>
                                </li>
                                <li class="category__top-list-item">
                                    <a href="#" class="category__top-list-item-link">
                                        <img src="./public/assets/images/product/iphone13.png" alt="" style="width: 4.5rem; height: 4.5rem">
                                        <span>SamSung Galaxy Ultra 5</span>
                                    </a>
                                </li>
                                <li class="category__top-list-item">
                                    <a href="#" class="category__top-list-item-link">
                                        <img src="./public/assets/images/product/iphone13.png" alt="" style="width: 4.5rem; height: 4.5rem">
                                        <span>SamSung Galaxy Ultra 5</span>
                                    </a>
                                </li>
                                <li class="category__top-list-item">
                                    <a href="#" class="category__top-list-item-link">
                                        <img src="./public/assets/images/product/iphone13.png" alt="" style="width: 4.5rem; height: 4.5rem">
                                        <span>SamSung Galaxy Ultra 5</span>
                                    </a>
                                </li>
                                <li class="category__top-list-item">
                                    <a href="#" class="category__top-list-item-link">
                                        <img src="./public/assets/images/product/iphone13.png" alt="" style="width: 4.5rem; height: 4.5rem">
                                        <span>SamSung Galaxy Ultra 5</span>
                                    </a>
                                </li>
                                <li class="category__top-list-item">
                                    <a href="#" class="category__top-list-item-link">
                                        <img src="./public/assets/images/product/iphone13.png" alt="" style="width: 4.5rem; height: 4.5rem">
                                        <span>SamSung Galaxy Ultra 5 SamSung Galaxy Ultra 5 SamSung Galaxy Ultra 5</span>
                                    </a>
                                </li>
                                <li class="category__top-list-item">
                                    <a href="#" class="category__top-list-item-link">
                                        <img src="./public/assets/images/product/iphone13.png" alt="" style="width: 4.5rem; height: 4.5rem">
                                        <span>SamSung Galaxy Ultra 5</span>
                                    </a>
                                </li>
                                <li class="category__top-list-item">
                                    <a href="#" class="category__top-list-item-link">
                                        <img src="./public/assets/images/product/iphone13.png" alt="" style="width: 4.5rem; height: 4.5rem">
                                        <span>SamSung Galaxy Ultra 5</span>
                                    </a>
                                </li>
                                <li class="category__top-list-item">
                                    <a href="#" class="category__top-list-item-link">
                                        <img src="./public/assets/images/product/iphone13.png" alt="" style="width: 4.5rem; height: 4.5rem">
                                        <span>SamSung Galaxy Ultra 5</span>
                                    </a>
                                </li>
                                <li class="category__top-list-item">
                                    <a href="#" class="category__top-list-item-link">
                                        <img src="./public/assets/images/product/iphone13.png" alt="" style="width: 4.5rem; height: 4.5rem">
                                        <span>SamSung Galaxy Ultra 5</span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col l-10 m-12 c-12">
                        <div class="slider__wrapper">
                            <i onclick="pushSlides(-1)" class="fa fa-angle-left slider__prev"></i>
                            <div class="slider__main">
                                <div class="slider__item active">
                                    <a href="#" class="slider__item-link">
                                        <img src="./public/assets/images/slides/1.jpg" alt="" class="slider__item-link-img">
                                    </a>
                                </div>
                                <div class="slider__item">
                                    <a href="#" class="slider__item-link">
                                        <img src="./public/assets/images/slides/2.png" alt="" class="slider__item-link-img">
                                    </a>
                                </div>
                                <div class="slider__item">
                                    <a href="#" class="slider__item-link">
                                        <img src="./public/assets/images/slides/3.jpg" alt="" class="slider__item-link-img">
                                    </a>
                                </div>
                                <div class="slider__item">
                                    <a href="#" class="slider__item-link">
                                        <img src="./public/assets/images/slides/4.jpg" alt="" class="slider__item-link-img">
                                    </a>
                                </div>
                                <div class="slider__item">
                                    <a href="#" class="slider__item-link">
                                        <img src="./public/assets/images/slides/5.jpg" alt="" class="slider__item-link-img">
                                    </a>
                                </div>
                                <div class="slider__item">
                                    <a href="#" class="slider__item-link">
                                        <img src="./public/assets/images/slides/6.jpg" alt="" class="slider__item-link-img">
                                    </a>
                                </div>
                                <div class="slider__item">
                                    <a href="#" class="slider__item-link">
                                        <img src="./public/assets/images/slides/7.jpg" alt="" class="slider__item-link-img">
                                    </a>
                                </div>
                                <div class="slider__item">
                                    <a href="#" class="slider__item-link">
                                        <img src="./public/assets/images/slides/8.jpg" alt="" class="slider__item-link-img">
                                    </a>
                                </div>
                                <div class="slider__item">
                                    <a href="#" class="slider__item-link">
                                        <img src="./public/assets/images/slides/9.jpg" alt="" class="slider__item-link-img">
                                    </a>
                                </div>
                            </div>
                            <i onclick="pushSlides(1)" class="fa fa-angle-right slider__next"></i>
                        </div>
                        <div class="home__filter">
                            <span class="home__filter-label">
                            Sắp xếp theo
                        </span>
                        <button class="btn home__filter-btn">
                            Phổ biến
                        </button>
                            <button class="btn home__filter-btn">
                            Mới nhất
                        </button>
                            <button class="btn home__filter-btn">
                            Bán chạy
                        </button>
                            <!-- Danh sách trang -->
                            <div class="select__input">
                                <span class="select__input-label">
                                Giá
                            </span>
                                <i class="select__input-label--icon fa fa-angle-down"></i>
                                <ul class="select__input-list">
                                    <li class="select__input-list-item">
                                        <a href="" class="select__input-list-item-link">Giá: Thấp đến cao</a>
                                    </li>
                                    <li class="select__input-item">
                                        <a href="" class="select__input-list-item-link">Giá: Cao đến thấp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Name of category -->
                        <div class="brand invisible-mobile-tablet invisible-tablet">
                            <h3 class="brand__heading"><?=$cateName;?></h3>
                            <h4 class="brand__heading-left"> <a href="" class="brand__heading-left--text">
                                Xem tất cả
                                <!-- <i class="brand__heading-icon fa fa-caret-right" aria-hidden="true"></i> -->
                            </a>
                            </h4>
                        </div>
                        <!-- end name of category -->
                        <!-- product -->
                        <div class="product">
                            <div class="row gutter">
                            <?php 
                                 foreach ($loadCateProd as $cateProd){
                                        extract($cateProd);
                                        $linkProd = "index.php?view=proddetail&id_product=".$id_product;
                                        $img = $imgPath.$image;
                                        echo '<div class="col l-3 m-4 c-4">
                                        <a class="product__item" href="'.$linkProd.'">
                                            <div class="product__item-img" style="background-image: url('.$img.');"></div>
                                            <h4 class="product__item-name">
                                                '.$name_product.'
                                            </h4>
                                            <div class="product__item-price">
                                                <span class="product__item-price-old">15.550.000đ</span>
                                                <span class="product__item-price-curr">'.$price.'đ</span>
                                            </div>
                                            <div class="product__item-saleoff">
                                                <span class="product__item-saleoff--label">GIẢM</span>
                                                <span class="product__item-saleoff--per">'.$price_sale.'</span>
                                            </div>
                                            <div class="product__item-icon ">
                                                <i class="product__item-icon--gold fa fa-star" aria-hidden="true"></i>
                                                <i class="product__item-icon--gold fa fa-star" aria-hidden="true"></i>
                                                <i class="product__item-icon--gold fa fa-star" aria-hidden="true"></i>
                                                <i class="product__item-icon--gold fa fa-star" aria-hidden="true"></i>
                                                <i class="product__item-icon--nogold fa fa-star" aria-hidden="true"></i>
                                                <span class="product__item-icon--text">40 đánh giá</span>
                                            </div>
                                            <div class="product__item-btn">
                                                <button href="#" class="product__item-btn--buy btn">Mua ngay</button>
                                                <button href="#" class="product__item-btn--compare btn">Thêm vào giỏ</button>
                                            </div>
                                        </a>
                                        </div>';
                                    }
                                ?>
                            </div>
                        </div>
                        <!-- end product -->
                        <!-- pagination -->
                        <ul class="navpage product-item__navpage">
                            <li class="navpage-item">
                                <a href="" class="navpage-item__link">
                                    <i class="navpage-item__link-icon fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="navpage-item navpage-item__link--active">
                                <a href="" class="navpage-item__link">
                                    1
                                </a>
                            </li>
                            <li class="navpage-item">
                                <a href="page2.html" class="navpage-item__link">
                                    2
                                </a>
                            </li>
                            <li class="navpage-item">
                                <a href="" class="navpage-item__link">
                                    3
                                </a>
                            </li>
                            <li class="navpage-item">
                                <a href="" class="navpage-item__link">
                                    4
                                </a>
                            </li>
                            <li class="navpage-item">
                                <a href="" class="navpage-item__link">
                                    5
                                </a>
                            </li>
                            <li class="navpage-item">
                                <a href="" class="navpage-item__link">
                                    ...
                                </a>
                            </li>
                            <li class="navpage-item">
                                <a href="" class="navpage-item__link">
                                    10
                                </a>
                            </li>
                            <li class="navpage-item">
                                <a href="" class="navpage-item__link">
                                    <i class="navpage-item__link-icon fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </div>