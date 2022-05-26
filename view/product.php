<?php
    require_once 'header.php';
?>
   <div class="container">
            <div class="grid width">
                <div class="row row__margin gutter">
                    <?php
                        extract($loadOneProd);
                        echo '<div class="col l-12 m-12 c-12 product__top">
                                    <div class="product__top-heading">
                                         <h2>
                                             '.$name_product.' - Chính hãng
                                         </h2>
                                    </div>
                              </div>';
                    ?>
                    <!-- <div class="col l-12 m-12 c-12 product__top">
                        <div class="product__top-heading">
                            <h2>
                                Iphone 13 Pro Max 128GB - Chính hãng
                            </h2>
                        </div>
                    </div> -->
                </div>
                <div class="row row__margin gutter">      
                    <!-- <div class="col l-6 m-6 c-6">
                        <div class="product__image">
                            <div class="col l-4 m-4 c-4">
                                <div class="product__silder-item">
                                    <div class="product__slider-item-img">
                                        <img style="width: 6rem; height: 6rem;" src="./public/assets/images/product/samsung2.jpg" alt="">
                                    </div>
                                    <div class="product__slider-item-img">
                                        <img style="width: 6rem; height: 6rem;" src="./public/assets/images/product/samsung2.jpg" alt="">
                                    </div>
                                    <div class="product__slider-item-img">
                                        <img style="width: 6rem; height: 6rem;" src="./public/assets/images/product/samsung2.jpg" alt="">
                                    </div>
                                    <div class="product__slider-item-img">
                                        <img style="width: 6rem; height: 6rem;" src="./public/assets/images/product/samsung2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col l-8 m-4 c-4 product__gallery">
                                <div class="product__gallery-item">
                                    <img style="width: 36rem;height:35rem;" src="./public/assets/images/product/iphone13.png" alt="" class="prodcut__gallery-item-img">
                                </div>
                        
                                <div class="arrow__left">
                                    <span class="arrow__content">
                                        <i class="fa fa-angle-left arrow__content-icon"></i>
                                    </span>
                                </div>
                                <div class="arrow__right">
                                    <span class="arrow__content">
                                        <i class="fa fa-angle-right arrow__content-icon"></i>
                                    </span>
                                </div>
                          
                            </div>
                        </div>
                    </div> -->
                    <?php
                        extract($loadOneProd);
                        $img = $imgPath.$image;
                        echo '<div class="col l-6 m-6 c-6">
                        <div class="product__image">
                            <div class="col l-4 m-4 c-4">
                                <div class="product__silder-item">
                                    <div class="product__slider-item-img">
                                        <img style="width: 6rem; height: 6rem;" src="./public/assets/images/product/samsung2.jpg" alt="">
                                    </div>
                                    <div class="product__slider-item-img">
                                        <img style="width: 6rem; height: 6rem;" src="./public/assets/images/product/samsung2.jpg" alt="">
                                    </div>
                                    <div class="product__slider-item-img">
                                        <img style="width: 6rem; height: 6rem;" src="./public/assets/images/product/samsung2.jpg" alt="">
                                    </div>
                                    <div class="product__slider-item-img">
                                        <img style="width: 6rem; height: 6rem;" src="./public/assets/images/product/samsung2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col l-8 m-4 c-4 product__gallery">
                                <div class="product__gallery-item">
                                    <img style="width: 36rem;height:35rem; object-fit: contain;" src="'.$img.'" alt="" class="prodcut__gallery-item-img">
                                </div>
                                <div class="arrow__left">
                                    <span class="arrow__content">
                                        <i class="fa fa-angle-left arrow__content-icon"></i>
                                    </span>
                                </div>
                                <div class="arrow__right">
                                    <span class="arrow__content">
                                        <i class="fa fa-angle-right arrow__content-icon"></i>
                                    </span>
                                </div>
                          
                            </div>
                        </div>
                         </div> <div class="col l-6 m-6 c-6">
                         <div class="product__infor">
                             <div class="product__price">
                                 <h3 class="product__price-new">'.$price.'&nbsp;₫</h3>
                                 <span class="product__price-old">11.900.000&nbsp;₫</span>
                             </div>
                             <div class="product__ratting">
                                   <div class="product__ratting-box">
                                        <i class="product__ratting-box-icon--gold fa fa-star" aria-hidden="true"></i>
                                        <i class="product__ratting-box-icon--gold fa fa-star" aria-hidden="true"></i>
                                        <i class="product__ratting-box-icon--gold fa fa-star" aria-hidden="true"></i>
                                        <i class="product__ratting-box-icon--gold fa fa-star" aria-hidden="true"></i>
                                        <i class="product__ratting-box-icon--nogold fa fa-star" aria-hidden="true"></i>
                                <span class="product__ratting-box-icon--text">
                                                        40 đánh giá
                                                    </span>
                            </div>
                                  <span class="product__ratting-box-view">
                                                 '.$view.' Lượt xem  
                                                </span>
                        </div>
                        <div class="product__color">
                            <div class="product__color-title">
                                <p>Chọn màu để xem giá và chi nhánh có hàng</p>
                            </div>
                            <div class="product__color-box">
                                <div class="product__color-box-item">
                                    <a href="#" class="product__color-box-item-link">
                                        <img src="./public/assets/images/product/samsung2.jpg" alt="" class="">
                                        <p>
                                            <span class="link__heading">
                                                                    Xám
                                                                </span>
                                            <span class="">
                                                                    10.500.000 &nbsp;₫
                                                                </span>
                                        </p>
                                    </a>
                                </div>
                                <div class="product__color-box-item">
                                    <a href="#" class="product__color-box-item-link">
                                        <img class="" src="./public/assets/images/product/samsung2.jpg" alt="">
                                        <p>
                                            <span class="link__heading">
                                                                    Trắng
                                                                </span>
                                            <span class="">
                                                                    10.500.000 &nbsp;₫
                                                                </span>
                                        </p>
                                    </a>
                                </div>
                                <div class="product__color-box-item">
                                    <a href="#" class="product__color-box-item-link">
                                        <img class="" src="./public/assets/images/product/samsung2.jpg" alt="">
                                        <p>
                                            <span class="link__heading">
                                                                    Đen
                                                                </span>
                                            <span class="">
                                                                    10.500.000 &nbsp;₫
                                                                </span>
                                        </p>
                                    </a>
                                </div>
                                <div class="product__color-box-item">
                                    <a href="#" class="product__color-box-item-link">
                                        <img class="" src="./public/assets/images/product/samsung2.jpg" alt="">
                                        <p>
                                            <span class="link__heading">
                                            Hồng
                                            </span>
                                            <span class="">
                                            10.500.000 &nbsp;₫
                                            </span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product__quantity">
                            <span class="product__quantity-text">Số lượng</span>
                            <button class="product__quantity-button">
                                                    <i class="product__quantity-button-icon fa fa-minus"></i>
                                                </button>
                            <input type="text" class="product__quantity-fill">
                            <button class="product__quantity-button">
                                                    <i class="product__quantity-button-icon fa fa-plus"></i>
                                                </button>
                        </div>
                        <div class="product__button">
                            <div class="product__button-heading">
                                <a href="#" class="button button--buy">
                                    <strong>
                                        Mua ngay
                                    </strong>
                                    <span>
                                        ( giao hàng tận nơi hoặc tại của hàng )
                                    </span>
                                </a>
                            </div>
                            <div class="product__button-bottom">
                                <a href="#" class="button button--pay">
                                    <strong>Trả góp</strong>
                                    <span>(Xét duyệt qua điện thoại)</span>
                                </a>
                                <a href="#" class="button button--pay">
                                    <strong>Trả góp bằng thẻ</strong>
                                    <span>(Thẻ visa, mastercard, jcb)</span>
                                </a>
                            </div>
                        </div>
                         </div>
                    </div>';
                    ?>
                    <!-- <div class="col l-6 m-6 c-6">
                        <div class="product__infor">
                            <div class="product__price">
                                <h3 class="product__price-new">10.450.000&nbsp;₫</h3>
                                <span class="product__price-old">11.900.000&nbsp;₫</span>
                            </div>
                            <div class="product__ratting">
                                <div class="product__ratting-box">
                                    <i class="product__ratting-box-icon--gold fa fa-star" aria-hidden="true"></i>
                                    <i class="product__ratting-box-icon--gold fa fa-star" aria-hidden="true"></i>
                                    <i class="product__ratting-box-icon--gold fa fa-star" aria-hidden="true"></i>
                                    <i class="product__ratting-box-icon--gold fa fa-star" aria-hidden="true"></i>
                                    <i class="product__ratting-box-icon--nogold fa fa-star" aria-hidden="true"></i>
                                    <span class="product__ratting-box-icon--text">
                                                            40 đánh giá
                                                        </span>
                                </div>
                                <span class="product__ratting-box-view">
                                                        20 lượt xem
                                                    </span>
                            </div>
                            <div class="product__color">
                                <div class="product__color-title">
                                    <p>Chọn màu để xem giá và chi nhánh có hàng</p>
                                </div>
                                <div class="product__color-box">
                                    <div class="product__color-box-item">
                                        <a href="#" class="product__color-box-item-link">
                                            <img src="./public/assets/images/product/samsung2.jpg" alt="" class="">
                                            <p>
                                                <span class="link__heading">
                                                                        Xám
                                                                    </span>
                                                <span class="">
                                                                        10.500.000 &nbsp;₫
                                                                    </span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="product__color-box-item">
                                        <a href="#" class="product__color-box-item-link">
                                            <img class="" src="./public/assets/images/product/samsung2.jpg" alt="">
                                            <p>
                                                <span class="link__heading">
                                                                        Trắng
                                                                    </span>
                                                <span class="">
                                                                        10.500.000 &nbsp;₫
                                                                    </span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="product__color-box-item">
                                        <a href="#" class="product__color-box-item-link">
                                            <img class="" src="./public/assets/images/product/samsung2.jpg" alt="">
                                            <p>
                                                <span class="link__heading">
                                                                        Đen
                                                                    </span>
                                                <span class="">
                                                                        10.500.000 &nbsp;₫
                                                                    </span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="product__color-box-item">
                                        <a href="#" class="product__color-box-item-link">
                                            <img class="" src="./public/assets/images/product/samsung2.jpg" alt="">
                                            <p>
                                                <span class="link__heading">
                                                Hồng
                                                </span>
                                                <span class="">
                                                10.500.000 &nbsp;₫
                                                </span>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product__quantity">
                                <span class="product__quantity-text">Số lượng</span>
                                <button class="product__quantity-button">
                                                        <i class="product__quantity-button-icon fa fa-minus"></i>
                                                    </button>
                                <input type="text" class="product__quantity-fill">
                                <button class="product__quantity-button">
                                                        <i class="product__quantity-button-icon fa fa-plus"></i>
                                                    </button>
                            </div>
                            <div class="product__button">
                                <div class="product__button-heading">
                                    <a href="#" class="button button--buy">
                                        <strong>
                                            Mua ngay
                                        </strong>
                                        <span>
                                            ( giao hàng tận nơi hoặc tại của hàng )
                                        </span>
                                    </a>
                                </div>
                                <div class="product__button-bottom">
                                    <a href="#" class="button button--pay">
                                        <strong>Trả góp</strong>
                                        <span>(Xét duyệt qua điện thoại)</span>
                                    </a>
                                    <a href="#" class="button button--pay">
                                        <strong>Trả góp bằng thẻ</strong>
                                        <span>(Thẻ visa, mastercard, jcb)</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row row__margin gutter">
                    <div class="col l-8 m-12 c-12">
                        <?php
                            extract($loadOneProd);
                            echo '
                            <div class="product__right">
                                <div class="product__right-content">
                                    <p style="font-size: 1.4rem;">'.$description.'</p>
                                </div>
                            </div>';
                        ?>
                        <!-- <div class="product__right">
                            <div class="product__right-content">
                                <h2>Đánh giá Samsung Galaxy Z Fold 3 (5G) - Khẳng định đẳng cấp</h2>
                                <p>Với sự thành công đáng kinh ngạc và luôn cháy hàng từ lúc ra mắt đến thời điểm hiện tại của hai thế hệ trước là Fold 1 và Z Fold 2. Galaxy Z Fold 3 lần này được ra mắt với độ hoàn thiện cao về thiết kế và hiệu năng. Mang
                                    đến cho người dùng một trải nghiệm cực kỳ thú vị hơn.
                                </p>
                                <h3>Thiết kế độc đáo tiện lợi, chất liệu cao cấp</h3>
                                <p>Là sản phẩm mang đến độ hoàn thiện cao hơn nhiều so với hai phiên bản trước, điện thoại Samsung Galaxy Fold 3 được thiết kế kích thước hài hòa hơn. Giúp bạn có thể dễ dàng cầm khi đóng hoặc mở màn hình đều dễ sử dụng nhất.
                                    Bộ khớp nối bản lề mới giúp kết nối bộ khung của Galaxy Z Fold3 hoàn hảo hơn. Tăng cao độ bền khi đóng mở liên tục và cố định cực kỳ chắc chắn.
                                </p>
                                <h3>Cấu hình khủng với Snapdragon 888 kết hợp RAM 12GB</h3>
                                <p>
                                    Là thế hệ mới nhất nổi bật nhất giống như một bước khẳng định mới về dòng điện thoại nắp gập. Samsung đã rất ưu ái và trang bị cho chiếc điện thoại này một cấu hình cực kỳ mạnh mẽ với sự tối ưu cao về hiệu năng. Cụ thể, Galaxy Z Fold3 được trang bị con
                                    chip Snapdragon 888 cho xung nhịp xử lý nằm ở mức khá cao. Giúp mọi thao tác mọi ứng dụng đều được xử lý nhanh chóng trên cả 2 màn hình rất hiệu quả và mượt mà. Bộ nhớ ram của máy cũng cho dung lượng lên đến 12GB ngang
                                    mới một một chiếc laptop cao cấp. Thế hệ ram là loại DDR5 tối ưu đa nhiệm cực tốt, hầu hết mọi ứng dụng nặng nhất đều có thể sử dụng cùng lúc mượt mà. Samsung cũng cung cấp đến cho người dùng nhiều sự lựa chọn về bộ
                                    nhớ máy với dung lượng chuẩn là 256GB, một không gian lớn giúp lưu trữ dễ dàng hơn hàng ngày.
                                </p>
                            </div>
                        </div> -->
                    </div>
                    <div class="col l-4 m-12 c-12">
                        <div class="product__left">
                            <div class="product__left-content">
                                <div class="product__left-content-title">
                                    <h2>Thông số kỹ thuật</h2>
                                </div>
                                <div class="product__left-content-body">
                                    <p class="display">
                                        <span>Kích thước màn hình:</span>
                                        <span>7.6 inches</span>
                                    </p>
                                    <p class="display-tech">
                                        <span>Công nghệ màn hình:</span>
                                        <span>Super Amoled</span>
                                    </p>
                                    <p class="camera-infront">
                                        <span>Camera trước:</span>
                                        <span>48MP</span>
                                    </p>
                                    <p class="camera-behind">
                                        <span>Camera trước:</span>
                                        <span>4MP</span>
                                    </p>
                                    <p class="cpu">
                                        <span>CPU:</span>
                                        <span>Snapdragon 888 5G (5 nm)</span>
                                    </p>
                                    <p class="ram">
                                        <span>Dung lượng RAM:</span>
                                        <span>12GB</span>
                                    </p>
                                    <p class="storage">
                                        <span>Bộ nhớ trong:</span>
                                        <span>256GB</span>
                                    </p>
                                    <p class="pin">
                                        <span>Pin:</span>
                                        <span>5000mAh</span>
                                    </p>
                                    <div class="more__detail">
                                        <a href="#" class="more__detail-link">
                                            <span>Xem thêm cấu hình chi tiết
                                                <i class="fa fa-chevron-down"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row__margin gutter">
                    <div class="col l-8 m-12 c-12">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script>
                            $(document).ready(function(){                     
                                $("#comment").load("view/comment.php", {idPro: <?=$id_product?>});                             
                            });
                        </script>
                        <div class="comment__content" id="comment">
                            <div class="comment__title">
                                <h2>Phần bình luận của khách hàng</h2>
                            </div>
                            <!-- <form name="" method="post" action="#" class="comment__form">
                                <div class="comment__form-input">
                                    <textarea name="" id="" placeholder="Xin hãy để lại bình lại đánh giá sản phẩm của bạn!">
    
                                    </textarea>
                                </div>
                                <div class="comment__form-submit">
                                    <button class="button button--comment">
                                        <i class="fa fa-paper-plane"></i>
                                        <span>&nbsp;&nbsp;Gửi bình luận</span>
                                    </button>
                                </div>
                            </form>
                            <div class="comment__review">
                                <ul class="comment__list">
                                    <li class="comment__list-item">
                                        <div class="comment__list-item-avatar">
                                            <img src="./public/assets/images/product/watch__apple-6.jpg" alt="">
                                        </div>
                                        <div class="comment__list-item-infor">
                                            <p class="name">
                                                <strong>Lê Trung</strong>
                                            </p>
                                            <p class="date">
                                                <label for=""><i>Hôm qua</i></label>
                                            </p>
                                            <p class="content">
                                                Còn hàng không ạ???
                                            </p>
                                        </div>
                                    </li>
                                    <li class="comment__list-item">
                                        <div class="comment__list-item-avatar">
                                            <img src="./public/assets/images/product/watch__apple-6.jpg" alt="">
                                        </div>
                                        <div class="comment__list-item-infor">
                                            <p class="name">
                                                <strong>Lê Trung</strong>
                                            </p>
                                            <p class="date">
                                                <label for=""><i>Hôm qua</i></label>
                                            </p>
                                            <p class="content">
                                                Còn hàng không ạ???
                                            </p>
                                        </div>
                                    </li>
                                    <li class="comment__list-item">
                                        <div class="comment__list-item-avatar">
                                            <img src="./public/assets/images/product/watch__apple-6.jpg" alt="">
                                        </div>
                                        <div class="comment__list-item-infor">
                                            <p class="name">
                                                <strong>Lê Trung</strong>
                                            </p>
                                            <p class="date">
                                                <label for=""><i>Hôm qua</i></label>
                                            </p>
                                            <p class="content">
                                                Còn hàng không ạ???
                                            </p>
                                        </div>
                                    </li>
                                    <li class="comment__list-item">
                                        <div class="comment__list-item-avatar">
                                            <img src="./public/assets/images/product/watch__apple-6.jpg" alt="">
                                        </div>
                                        <div class="comment__list-item-infor">
                                            <p class="name">
                                                <strong>Lê Trung</strong>
                                            </p>
                                            <p class="date">
                                                <label for=""><i>Hôm qua</i></label>
                                            </p>
                                            <p class="content">
                                                Còn hàng không ạ???
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="col l-4 m-12 c-12">
                        <div class="product__type">
                            <div class="row gutter">
                            <div class="col l-12 m-12">
                                        <div class="product__type-heading">
                                            <h3>Sản phẩm cùng loại</h3>
                                        </div>
                                    </div>
                                <?php
                                    foreach ($prodSame as $prod){
                                        extract($prod);
                                        $img = $imgPath.$image;
                                        $linkProd= "index.php?view=proddetail&id_product=".$id_product;
                                        echo 
                                    '<div class="col l-4 m-12 c-12">
                                        <a class="product__item" href="'.$linkProd.'">
                                            <div class="product__item-img" style="background-image: url('.$img.');"></div>
                                            <h4 class="product__item-name">
                                                '.$name_product.'
                                            </h4>
                                            <div class="product__item-price">
                                                <span class="product__item-price-old">15.550.000đ</span>
                                                <span class="product__item-price-curr">'.$price.'</span>
                                            </div>
                                        </a>
                                    </div>
                                    ';
                                    }
                                ?>
                                <!-- The same products -->
                                <!-- <div class="col l-12 m-12">
                                    <div class="product__type-heading">
                                        <h3>Sản phẩm cùng loại</h3>
                                    </div>
                                </div>
                                <div class="col l-4 m-12 c-12">
                                    <a class="product__item" href="./product.html">
                                        <div class="product__item-img" style="background-image: url(./public/assets/images/product/iphone12.jpg);"></div>
                                        <h4 class="product__item-name">
                                            IPhone 12 64GB
                                        </h4>
                                        <div class="product__item-price">
                                            <span class="product__item-price-old">15.550.000đ</span>
                                            <span class="product__item-price-curr">13.550.000đ</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col l-4 m-12 c-12">
                                    <a class="product__item" href="./product.html">
                                        <div class="product__item-img" style="background-image: url(./public/assets/images/product/iphone12.jpg);"></div>
                                        <h4 class="product__item-name">
                                            IPhone 12 64GB
                                        </h4>
                                        <div class="product__item-price">
                                            <span class="product__item-price-old">15.550.000đ</span>
                                            <span class="product__item-price-curr">13.550.000đ</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col l-4 m-12 c-12">
                                    <a class="product__item" href="./product.html">
                                        <div class="product__item-img" style="background-image: url(./public/assets/images/product/iphone12.jpg);"></div>
                                        <h4 class="product__item-name">
                                            IPhone 12 64GB
                                        </h4>
                                        <div class="product__item-price">
                                            <span class="product__item-price-old">15.550.000đ</span>
                                            <span class="product__item-price-curr">13.550.000đ</span>
                                        </div>
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <?php
    require_once 'footer.php';
?>