<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Trung Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <link rel="stylesheet" href="./public/assets/css/reset.css">
    <link rel="stylesheet" href="./public/assets/css/grid.css">
    <link rel="stylesheet" href="./public/assets/css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>
<?php
    require_once './model/user.php';
?>
<?php
    // if(is_array($addAcc)){
    //     extract($addAcc);
    // }
    // $listUsers = loadListUser();
    // if(is_array($listUsers)){
    // extract($listUsers);
    // }
    // $imgPath = "../upload/".$image;
    // if(is_file($imgPath)){
    //     $img = "<img src='".$imgPath."' style='border-radius:100rem; width: 20px; height: 20px;'>";
    // }
?>
<body>
    <div class="main">
        <header class="header">
            <div class="wrapper__top">
                <div class="grid width container__top">
                    <div class="header__top">
                        <nav class="header__menu">
                            <ul class="header__menu-list">
                                <li class="header__menu-item header__menu--line header__menu-qrcode">
                                    <span>Tải ứng dụng LeTrungShop tại đây</span>
                                    <div class="header__menu-logo">
                                        <img src="./public/assets/images/logo/qrcode.png" alt="qrcode" class="header__menu-logoimg">
                                        <div class="header__menu-logoapp">
                                            <a href="#" class="header__menu-logoapp__link"><img src="./public/assets/images/logo/qrappstore.png" alt=""></a>
                                            <a href="#" class="header__menu-logoapp__link"><img src="./public/assets/images/logo/qrgoole.png" alt=""></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="header__menu-item">
                                    <span>Kết nối</span>
                                    <a href="#" class="header__menu-link"><i class="header__menu-icon fa fa-facebook-square"></i></a>
                                    <a href="" class="header__menu-link"><i class="header__menu-icon fa fa-instagram"></i></a>
                                </li>
                            </ul>
                            <ul class="header__menu-list">
                                <li class="header__menu-item header__menu-language">
                                    <span>Ngôn ngữ</span>
                                    <i class="header__menu-icon fa fa-caret-down"></i>
                                    <ul class="header__menu-language__list">
                                        <li class="header__menu-language__list-item">
                                            <a class="header__menu-language__list-link" href="#">
                                                <img src="./public/assets/images/logo/english.png" alt="english">
                                                <span> English</span>
                                            </a>
                                            <a class="header__menu-language__list-link" href="#">
                                                <img src="./public/assets/images/logo/vietnam.png" alt="vietnam">
                                                <span>Tiếng Việt</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li class="header__menu-item header__menu-user">
                                    <a href="index.php?view=register" class="header__menu-link  header__menu--line" style="font-size: 1.4rem;">Đăng kí</a>
                                </li>
                                <li class="header__menu-item header__menu-user">
                                    <a href="index.php?view=login" class="header__menu-link" style="font-size: 1.4rem;">Đăng nhập</a>
                                </li> -->
                                <?php
                                    if(isset($_SESSION['user'])){
                                        extract($_SESSION['user']);
                                ?>
                                <li class="header__menu-item header__menu-user">
                                    <a href="#">
                                    <?php 
                                         if($img !=""){
                                             echo $img;
                                         }else{
                                             echo $img = '<img src="./public/assets/images/logo/login.png" alt="login">';
                                        }
                                     ?>
                                        <!-- <img  src="./public/assets/images/logo/login.png" alt="login"> -->
                                        <span style="margin-left: 1rem;"><?=$username?></span>
                                    </a>
                                    <ul class="header__menu-user__list">
                                        <li class="header__menu-user__list-item">
                                            <a class="header__menu-user__list-link" href="index.php?view=edituser">Tài khoản của tôi</a>
                                        </li>
                                        <li class="user__list-item">
                                            <a class="header__menu-user__list-link" href="index.php?view=mybill">Đơn mua</a>
                                        </li>
                                        <?php 
                                            if($role == 1){
                                        ?>
                                        <li class="user__list-item">
                                            <a class="header__menu-user__list-link" href="../design-template/admin/index.php">Tài khoản Admin</a>
                                        </li>
                                        <?php
                                            }
                                        ?>
                                        <li class="user-__list-item">
                                            <a class="header__menu-user__list-link" href="index.php?view=logout">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </li>
                                <?php
                                    }else{
                                ?> 
                                <li class="header__menu-item header__menu-user">
                                    <a href="index.php?view=register" class="header__menu-link  header__menu--line" style="font-size: 1.4rem;">Đăng kí</a>
                                </li>
                                <li class="header__menu-item header__menu-user">
                                    <a href="index.php?view=login" class="header__menu-link" style="font-size: 1.4rem;">Đăng nhập</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="wrapper__bottom">
                <div class="grid width container__bottom">
                    <div class="header__bottom">
                        <a href="./index.php?view=home" class="header__bottom-logo">
                            <svg class="header__bottom-logo-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 493.728 493.728" style="enable-background:new 0 0 493.728 493.728;" xml:space="preserve">
                            <path style="fill:#fff;" d="M404.936,92.136c-1.768-0.168-39.52-2.968-39.52-2.968S339.176,63,336.304,60.12  c-2.88-2.896-8.504-2.032-10.696-1.368c-0.312,0.088-5.72,1.776-14.672,4.536c-8.768-25.336-24.216-48.616-51.408-48.616  c-0.752,0-1.528,0.032-2.312,0.08C249.488,4.488,239.904,0,231.624,0C168.272,0,138,79.608,128.512,120.064  c-24.624,7.648-42.128,13.104-44.336,13.824c-13.768,4.336-14.192,4.768-15.976,17.776c-1.376,9.848-37.336,289.312-37.336,289.312  l280.176,52.752l151.824-33.016c0,0-53.288-362.088-53.624-364.576C408.904,93.656,406.728,92.28,404.936,92.136z M255.136,77.904  c0,0.952-0.016,1.848-0.016,2.752c-15.424,4.808-32.16,10.008-48.968,15.248c9.432-36.56,27.096-54.24,42.56-60.904  C252.592,44.808,255.136,58.904,255.136,77.904z M229.872,17.088c2.768,0,5.504,0.928,8.144,2.76  c-20.312,9.592-42.064,33.792-51.264,82.088c-13.432,4.176-26.552,8.272-38.704,12.048  C158.816,77.128,184.368,17.088,229.872,17.088z M240.792,232.384c0,0-16.4-8.792-36.488-8.792  c-29.488,0-30.976,18.592-30.976,23.264c0,25.56,66.296,35.36,66.296,95.224c0,47.104-29.712,77.424-69.808,77.424  c-48.096,0-72.704-30.088-72.704-30.088l12.872-42.76c0,0,25.28,21.832,46.64,21.832c13.92,0,19.592-11.04,19.592-19.096  c0-33.344-54.392-34.832-54.392-89.624c0-46.088,32.928-90.728,99.424-90.728c25.592,0,38.264,7.384,38.264,7.384L240.792,232.384z   M271.744,75.488c0-1.688,0.016-3.336,0.016-5.152c0-15.728-2.184-28.408-5.672-38.456c14.016,1.752,23.352,17.784,29.36,36.224  C288.416,70.312,280.416,72.792,271.744,75.488z"/>
                            <path style="fill:#fff;" d="M404.936,92.136c-1.768-0.168-39.52-2.968-39.52-2.968S339.176,63,336.304,60.12  c-2.88-2.896-8.504-2.032-10.696-1.368c-0.312,0.088-5.72,1.776-14.672,4.536c-8.768-25.336-24.216-48.616-51.408-48.616  c-0.752,0-1.528,0.032-2.312,0.08C249.488,4.488,239.904,0,231.624,0c-63.352,0-78.984,79.608-88.472,120.064  c-24.624,7.648-43.52,49.752-45.752,50.456c-13.752,4.336-14.176,4.768-15.968,17.784c-1.384,9.84-50.568,252.672-50.568,252.672  l280.176,52.752l151.824-33.016c0,0-53.288-362.088-53.624-364.576C408.904,93.656,406.728,92.28,404.936,92.136z M255.136,77.904  c0,0.952-0.016,1.848-0.016,2.752c-15.424,4.808-32.16,10.008-48.968,15.248c9.432-36.56,27.096-54.24,42.56-60.904  C252.592,44.808,255.136,58.904,255.136,77.904z M229.872,17.088c2.768,0,5.504,0.928,8.144,2.76  c-20.312,9.592-42.064,33.792-51.264,82.088c-13.432,4.176-26.552,8.272-38.704,12.048  C158.816,77.128,184.368,17.088,229.872,17.088z M240.792,232.384c0,0-16.4-8.792-36.488-8.792  c-29.488,0-30.976,18.592-30.976,23.264c0,25.56,66.296,35.36,66.296,95.224c0,47.104-29.712,77.424-69.808,77.424  c-48.096,0-72.704-30.088-72.704-30.088l12.872-42.76c0,0,25.28,21.832,46.64,21.832c13.92,0,19.592-11.04,19.592-19.096  c0-33.344-54.392-34.832-54.392-89.624c0-46.088,32.928-90.728,99.424-90.728c25.592,0,38.264,7.384,38.264,7.384L240.792,232.384z   M271.744,75.488c0-1.688,0.016-3.336,0.016-5.152c0-15.728-2.184-28.408-5.672-38.456c14.016,1.752,23.352,17.784,29.36,36.224  C288.416,70.312,280.416,72.792,271.744,75.488z"/>
                            <path style="fill:#fff;" d="M311.04,493.72l151.824-33.008c0,0-53.288-362.088-53.624-364.576c-0.336-2.488-2.504-3.856-4.304-4  c-1.768-0.168-39.52-2.968-39.52-2.968S339.176,63,336.304,60.12c-1.536-1.552-3.832-1.992-6-2.008  c-5.76,9.76-4.568,28.296-4.568,28.296L307.88,493.12L311.04,493.72z"/>
                            <path style="fill:#fff;" d="M259.528,14.68c-0.752,0-1.528,0.032-2.312,0.08c-7.728-10.264-17.312-14.752-25.592-14.752  c-63.096,0-93.392,78.984-103,119.576l19.576-6.072c10.832-36.872,36.36-96.424,81.672-96.424c2.768,0,5.504,0.928,8.144,2.76  c-20.256,9.56-41.952,33.672-51.184,81.704l19.44-6C215.728,59.224,233.32,41.64,248.728,35c3.872,9.816,6.424,23.904,6.424,42.904  c0,0.864,0,1.688-0.016,2.512l16.624-5.144c0-1.6,0.016-3.2,0.016-4.936c0-15.728-2.184-28.408-5.672-38.456  c13.968,1.744,23.296,17.704,29.296,36.064l15.504-4.808C302.112,37.872,286.672,14.68,259.528,14.68z"/>
                            <path style="fill:#fff;" d="M371.752,89.648c-3.792-0.296-6.344-0.48-6.344-0.48S339.168,63,336.296,60.12  c-1.536-1.552-3.832-1.992-6-2.008c-5.76,9.76-4.568,28.296-4.568,28.296L307.872,493.12l3.168,0.6l80.784-17.568L371.752,89.648z"/>
                            </svg>
                        </a>
                        <form class="header__bottom-search" action="index.php?view=productcate" method="post">
                            <!-- <div class="header__bottom-search"> -->
                            <input name="keyword" type="text" class="header__bottom-search-input" placeholder="Nhập sản phẩm tìm kiếm">
                            <div class="header__bottom-search-menu">
                                <span class="header__bottom-search-menu-label">All</span>
                                <i class="header__bottom-search-menu-icon fa fa-caret-down"></i>
                                <!-- <ul class="header__bottom-search-menu-list">
                                    <li class="header__bottom-search-menu-list-item header__bottom-search-menu-list-item--active">
                                        <span>Máy tính</span>
                                        <i class="header__bottom-search-menu-icon fa fa-check"></i>
                                    </li>
                                    <li class="header__bottom-search-menu-list-item">
                                        <span>Điện thoại</span>
                                        <i class="header__bottom-search-menu-icon fa fa-check"></i>
                                    </li>
                                    <li class="header__bottom-search-menu-list-item">
                                        <span>Đồng hồ</span>
                                        <i class="header__bottom-search-menu-icon fa fa-check"></i>
                                    </li>
                                    <li class="header__bottom-search-menu-list-item">
                                        <span>Máy in</span>
                                        <i class="header__bottom-search-menu-icon fa fa-check"></i>
                                    </li>
                                    <li class="header__bottom-search-menu-list-item">
                                        <span>Loa</span>
                                        <i class="header__bottom-search-menu-icon fa fa-check"></i>
                                    </li>
                                    <li class="header__bottom-search-menu-list-item">
                                        <span>Tivi</span>
                                        <i class="header__bottom-search-menu-icon fa fa-check"></i>
                                    </li>
                                    <li class="header__bottom-search-menu-list-item">
                                        <span>Chuột</span>
                                        <i class="header__bottom-search-menu-icon fa fa-check"></i>
                                    </li>
                                    <li class="header__bottom-search-menu-list-item">
                                        <span>Linh kiện</span>
                                        <i class="header__bottom-search-menu-icon fa fa-check"></i>
                                    </li>
                                </ul> -->
                            </div>
                            <!-- </div> -->
                            <button class="header__bottom-btn" name="search" type="submit">
                                <i class="header__bottom-btn-icon fa fa-search"></i>
                            </button>
                        </form>
                        <a href="./index.php?view=cartview" class="header__bottom-cart">
                            <svg class="header__bottom-cart-logo" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="395.025px" height="395.025px" viewBox="0 0 395.025 395.025" style="enable-background:new 0 0 395.025 395.025;"
                                xml:space="preserve">
                                <g>
                                 <path style="fill: #fff;" d="M357.507,380.982L337.914,82.223c-0.431-6.572-5.887-11.682-12.473-11.682h-54.69V62.5c0-34.462-28.038-62.5-62.5-62.5
                                            h-21.495c-34.462,0-62.5,28.038-62.5,62.5v8.041h-54.69c-6.586,0-12.042,5.11-12.473,11.682L37.45,381.709
                                            c-0.227,3.449,0.986,6.838,3.35,9.361c2.364,2.525,5.666,3.955,9.124,3.955h295.159c0.007,0,0.013,0,0.02,0
                                            c6.903,0,12.5-5.596,12.5-12.5C357.601,382.004,357.57,381.488,357.507,380.982z M149.255,62.5c0-20.678,16.822-37.5,37.5-37.5
                                            h21.495c20.678,0,37.5,16.822,37.5,37.5v8.041h-96.495V62.5z M63.27,370.025L81.272,95.542h42.983v11.154
                                            c-8.895,4.56-15,13.818-15,24.482c0,15.164,12.336,27.5,27.5,27.5s27.5-12.336,27.5-27.5c0-10.664-6.105-19.922-15-24.482V95.542
                                            h96.495v11.154c-8.896,4.56-15,13.818-15,24.482c0,15.164,12.336,27.5,27.5,27.5s27.5-12.336,27.5-27.5
                                            c0-10.664-6.105-19.922-15-24.482V95.542h42.983l18.002,274.483H63.27z"/>
                                </g>
                            </svg>
                            <span class="header__bottom-cart-text">Giỏ hàng</span>
                            <div class="header__bottom-cart-list header__bottom-cart-list--nocart">
                                <img src="./public/assets/images/logo/empty-product.png" alt="" class="header__botom-cart-img">
                                <p class="header__bottom-cart-list--text">Chưa có sản phẩm</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <ul class="header__sort">
                <li class="header__sort-item header__sort-bar-item--link-active">
                    <a href="" class="header__sort-item-link">Phổ biến</a>
                </li>
                <li class="header__sort-bar-item">
                    <a href="" class="header__sort-item-link">Mới nhất</a>
                </li>
                <li class="header__sort-bar-item">
                    <a href="" class="header__sort-item-link">Bán chạy</a>
                </li>
                <li class="header__sort-bar-item">
                    <a href="" class="header__sort-item-link">Giá</a>
                </li>
            </ul>
        </header>