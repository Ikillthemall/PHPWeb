<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carts list</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<style>
.content__container .list__table-firstRow5 th:nth-child(1) {
  padding: 1.4rem;
  width: 5%;
  background-color: #d4d4d4;
}
.content__container .list__table-firstRow5 th:nth-child(2) {
  padding: 1.4rem;
  width: 12%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow5 th:nth-child(3) {
  width: 25%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow5 th:nth-child(4) {
  width: 15%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow5 th:nth-child(5) {
  width: 10%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow5 th:nth-child(6) {
  width: 15%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow5 th:nth-child(7) {
  width: 15%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow5 th:last-child {
  width: 15%;
  background-color: #d4d4d4;
}

</style>
<body>
    <div class="main">
    <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Danh sách đơn hàng</h1>
            </div>
            <div class="content__container-title row">
                <form action="index.php?exec=cart" class="content__container-title-form" method="post">
                    <input type="text" id="cart__form" name="keyword" placeholder="Nhập mã đơn hàng">
                    <input type="submit" id="cart__button" name="" value="GO">
                </form>
            </div>
            <div class="content__container row">
                <div class="row content__container-list">
                    <table class="list__table row">
                        <tr class="list__table-firstRow list__table-firstRow2 list__table-firstRow3 list__table-firstRow4 list__table-firstRow5">
                            <th>Chọn</th>    
                            <th>Mã đơn hàng</th>
                            <th>Khách hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Số lượng</th>
                            <th>Tổng đơn hàng</th>
                            <th>Tình trạng đơn hàng</th>
                            <th>Thao tác</th>
                        </tr>
                        <?php
                            foreach ($list as $l){
                                extract($l);
                                $nameUser ='Tài khoản: ' .$l['billName']. '<br>Email: '.$l['billEmail']. '<br>Địa chỉ: '.$l['billAddress']. '<br>SĐT: '.$l['billPhone'];
                                $count = loadCartCount($l['idBill']);
                                $status = getStaBills($l['billStatus']);
                                $deleListBill = "index.php?exec=delebill&idbill=".$l['idBill'];
                                echo '  
                                    <tr class="list__table-nextRow list__table-nextRow2 list__table-nextRow3 list__table-nextRow4 list__table-nextRow5">
                                        <td> <input type="checkbox" name=""> </td>    
                                         <td>
                                            <span>LT-'.$l['idBill'].'</span>
                                        </td>
                                        <td>
                                            <span>'.$nameUser.'</span>
                                        </td>
                                        <td>
                                            <span>'.$l['billDate'].'</span>
                                        </td>
                                        <td>
                                            <span>'.$count.'</span>
                                        </td>
                                        <td>
                                            <span>'.$l['billTotal'].'</span>
                                        </td>
                                        <td>
                                            <span>'.$status.'</span>
                                        </td>
                                        <td>
                                            <a href="'.$deleListBill.'"><input type="button" class="list__table-nextRow-button" value="Xóa"></a>
                                        </td>
                                    </tr>';
                                }
                        ?>
                        <!-- <tr class="list__table-nextRow list__table-nextRow2 list__table-nextRow3 list__table-nextRow4 list__table-nextRow5">
                            <td>
                                <span>Máy tính xách tay</span>
                            </td>
                            <td>
                                <span>14</span>
                            </td>
                            <td>
                                <span>$515</span>
                            </td>
                            <td>
                                <span>$244</span>
                            </td>
                            <td>
                                <span>$44</span>
                            </td>
                        </tr> -->
                    </table>
                    <div class="form__button row">
                        <input value="Chọn tất cả" type="submit" class="form__group-btn form__group-btn--active">
                        <input value="Bỏ chọn tất cả" type="submit" class="form__group-btn">
                        <input value="Xóa mục đã chọn" type="submit" class="form__group-btn">
                    </div>
                </div>
                </div>
            </div>
        </section>
        <?php require_once './footer.php' ?>
    </div>
</body>

</html>