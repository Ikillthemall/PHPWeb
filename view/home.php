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
                        <!-- product -->
                        <div class="product">
                            <div class="row gutter">
                            <?php 
                                 foreach ($loadProd as $list){
                                        extract($list);
                                        $linkProd = "index.php?view=proddetail&id_product=".$id_product;
                                        $img = $imgPath.$image;
                                        echo '<div class="col l-3 m-4 c-4">
                                        <a class="product__item" href="'.$linkProd.'">
                                            <div class="product__item-img" style="background-image: url('.$img.'); background-repeat: no-repeat;"></div>
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
                                        <form method="post" action="index.php?view=addtocart">
                                            <div class="product__item-btn">
                                                <input name="idproduct" type="hidden" value="'.$id_product.'">
                                                <input name="name" type="hidden" value="'.$name_product.'">
                                                <input name="img" type="hidden" value="'.$img.'">
                                                <input name="price" type="hidden" value="'.$price.'">
                                                <input style="text-align:center;" value="Mua ngay" class="product__item-btn--buy btn">
                                                <input style="text-align:center;" name="addtocart" type="submit" value="Thêm vào giỏ" class="product__item-btn--compare btn">
                                            </div>
                                        </form>
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
<script src="../public/assets/js/slider__main.js">
</script>
