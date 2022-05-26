<?php
function cartview(){
    $sum = 0;
    $temp = 0;
    foreach ($_SESSION['cart'] as $cart){
        $img = $cart[2];
        $total = $cart[3] * $cart[4];
        $sum += $total;
        $deleCart = '<a href="index.php?view=delecart&id='.$temp.'"><input type="button" value="Xóa" class="button__item-remove button__item-remove--active"></a>';
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
                                <a href="product.html" class="mid2__item-text--link">
                                    <div class="mid2__item-text flex">
                                        '.$cart[1].'
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blank__content flex">

                        </div>
                        <div class="mid2__item-content-price">
                            <div class="item-content-price">
                                <span class="item-content-price--old">
                                    15.550.000đ
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
                            '.$deleCart.'
                            <div class="relative__text">

                            </div>
                        </div>
                    </div>
                </div>
            </div>';
            $temp +=1;
     }
            echo '<div class="content__body-bottom1" style="background-color: #fff; height: 10rem; display:flex; align-items:center;">
                        <div class="row5__total flex">
                        <div class="row5__total-content">
                            <div class="row5__total-content-text flex">
                                <div class="row5__total-content-text--detail">
                                    Tổng thanh toán: 
                                </div>
                                <div class="row5__total-content-text--price">
                                <span> '.$sum.' đ </span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>';
    }
    // function for cartbill
function cartbill(){
    $sum = 0;
    $sumOne = 0;
    $temp = 0;
    foreach ($_SESSION['cart'] as $cart){
        $img = $cart[2];
        $total = $cart[3] * $cart[4];
        $sum += $total;
        $totalOne = $cart[3] * $cart[4];
        $sumOne += $totalOne;
                echo '<div class="content__body-mid2">
                <div class="content__body-mid2-item">
                    <div class="mid2__item flex">
                        <div class="mid2__item-checkbox flex">
                            <div class="mid2__item-checkbox--label">
                                Còn hàng
                            </div>
                        </div>
                        <div class="mid2__item-content-product flex">
                            <div class="mid2__item-content-product-img flex" style="align-items:center;>
                                <a href="product.html" class="mid2__item--detail">
                                    <div class="mid2__item--img">
                                        <img src="'.$img.'" alt="">
                                    </div>
                                </a>
                                <div class="mid2__item-text flex">
                                    <a href="product.html" class="mid2__item-text--link">
                                        '.$cart[1].'
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blank__content flex">

                        </div>
                        <div class="mid2__item-content-price">
                            <div class="item-content-price">
                                <span class="item-content-price--old">
                                    15.550.000đ
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
                        <div class="mid2__item-content-remove flex">
                        '.$sumOne.'
                    </div>
                    </div>
                </div>
            </div>';
            $temp +=1;
            }
            echo '<div class="content__body-bottom1" style="background-color: #fff; height: 10rem; display:flex; align-items:center;">
                        <div class="row5__total flex">
                        <div class="row5__total-content">
                            <div class="row5__total-content-text flex">
                                <div class="row5__total-content-text--detail">
                                    Tổng thanh toán: 
                                </div>
                                <div class="row5__total-content-text--price">
                                <span> '.$sum.' đ </span>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>';
}
// function show detail
function billDetail($bills){
    global $imgPath;
    $sum = 0;
    $sumOne = 0;
    $temp = 0;
    foreach ($bills as $c){
        $img = $imgPath.$c['image'];
        // $total = $c['price'] * $c['quantity'];
        $sum += $c['total'];
        $totalOne = $c['price'] * $c['quantity'];
        $sumOne += $totalOne;
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
                                '.$c['name'].'
                            </a>
                        </div>
                    </div>
                </div>
                <div class="blank__content flex">

                </div>
                <div class="mid2__item-content-price">
                    <div class="item-content-price">
                        <span class="item-content-price--old">
                            15.550.000đ
                        </span>
                        <span class="item-content-price--new">
                        '.$c['price'].'
                        </span>
                    </div>
                </div>
                <div class="mid2__item-content-quantity">
                '.$c['quantity'].'
                    <div class="mid2__item-content-quantity--stock">
                        Còn 32 sản phẩm
                    </div>
                </div>
                <div class="mid2__item-content-remove flex">
                '.$sumOne.'
            </div>
            </div>
        </div>
    </div>';
    $temp +=1;
    }
    echo '<div class="content__body-bottom1" style="background-color: #fff; height: 10rem; display:flex; align-items:center;">
                <div class="row5__total flex">
                <div class="row5__total-content">
                    <div class="row5__total-content-text flex">
                        <div class="row5__total-content-text--detail">
                            Tổng thanh toán: 
                        </div>
                        <div class="row5__total-content-text--price">
                        <span> '.$sum.' đ </span>
                        </div>
                    </div>
                </div>
            </div>
    </div>';

}
// Function Total order
function cartTotalOrder(){
        $sum = 0;
        foreach ($_SESSION['cart'] as $cart){
            $total = $cart[3] * $cart[4];
            $sum += $total;
    }
    return $sum;
}
// Function add bill
function addBill($idUser, $billName, $address, $email, $phone,$pay, $dateOrder, $totalOrder){
        $sql = "INSERT INTO cartbill (id_user, billName, billAddress, billEmail, billPhone, billPay, billDate, billTotal) VALUES ('$idUser','$billName','$address','$email','$phone','$pay', '$dateOrder','$totalOrder')";
        return pdo_execute_lastInsertId($sql);
}
function addCart($idUser, $idProduct, $image, $name, $price, $quantity, $total, $idBill){
        $sql = "INSERT INTO cartview (id_user, id_product, image, name, price, quantity, total, idBill) VALUES ('$idUser','$idProduct','$image','$name','$price', '$quantity','$total','$idBill')";
        return pdo_execute($sql);
}
// Function load one bill
function loadOneBill($idBill){
        $sql = "SELECT * FROM cartbill WHERE idBill='$idBill'";
        $oneBill=pdo_query_one($sql);
        return $oneBill;
}
// Function load all carts
function loadAllCart($idBill){
        $sql = "SELECT * FROM cartview WHERE idBill='$idBill'";
        $bill=pdo_query($sql);
        return $bill;
}
// load all bills for admin 
function loadAllBillAdmin($keyWords="", $idUser=0){

    $sql = "SELECT * FROM cartbill WHERE 1";
    if($idUser > 0){
        $sql .= " AND id_user =".$idUser;
    }
    if($keyWords != ""){
        $sql .= " AND idBill like '%".$keyWords."%'";
    }
    $sql .=" ORDER BY idBill DESC";
    $listBill=pdo_query($sql);
    return $listBill;
}
   // delete product for admin
function deleBill($idBill){
    $sql = "DELETE FROM cartbill WHERE idBill = ".$idBill;
    pdo_execute($sql);
}
// load all bill for view
function loadAllBillView($idUser){
    $sql = "SELECT * FROM cartbill WHERE id_user =".$idUser;
    $listBill=pdo_query($sql);
    return $listBill;
}
function loadCartCount($idBill){
    $sql = "SELECT * FROM cartview WHERE idBill =".$idBill;
    $bill=pdo_query($sql);
    return sizeof($bill);
}
// get status
function getStaBills($b){
    switch ($b){
        case '0':
            $status = 'Đơn hàng mới';
            break;
        case '1':
            $status = 'Đang xử lý';
            break;
        case '2':
            $status = 'Đang giao';
            break; 
        case '3':
            $status = 'Đã giao';
            break;
        default:
            $status = 'Đơn hàng mới';
            break;
    }
    return $status;
}
?>