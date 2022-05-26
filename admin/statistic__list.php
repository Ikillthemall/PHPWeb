<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistic List</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="main">
        <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Thống kê sản phẩm từng loại</h1>
            </div>
            <div class="content__container-title row">

            </div>
            <div class="content__container row">
                <div class="row content__container-list">
                    <table class="list__table row">
                        <tr class="list__table-firstRow list__table-firstRow2 list__table-firstRow3 list__table-firstRow4 list__table-firstRow5">
                            <th>Mã</th>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                        </tr>
                        <?php
                            foreach ($listStat as $list){
                                extract($list);
                                echo '<tr class="list__table-nextRow list__table-nextRow2 list__table-nextRow3 list__table-nextRow4 list__table-nextRow5">
                                        <td>
                                            <span>'.$cateid.'</span>
                                        </td>
                                        <td>
                                            <span>'.$catename.'</span>
                                        </td>
                                        <td>
                                            <span>'.$countprod.'</span>
                                        </td>
                                        <td>
                                            <span>'.$maxprice.'</span>
                                        </td>
                                        <td>
                                            <span>'.$minprice.'</span>
                                        </td>
                                        <td>
                                            <span>'.$avgprice.'</span>
                                        </td>
                                    </tr>';
                                    }
                        ?>
                        <!-- 
                        <tr class="list__table-nextRow list__table-nextRow2 list__table-nextRow3 list__table-nextRow4 list__table-nextRow5">
                            <td>
                                <span>Điện thoại di động</span>
                            </td>
                            <td>
                                <span>14</span>
                            </td>
                            <td>
                                <span>$515</span>
                            </td>
                            <td>
                                <span>$414</span>
                            </td>
                            <td>
                                <span>$44</span>
                            </td>
                        </tr>
                        <tr class="list__table-nextRow list__table-nextRow2 list__table-nextRow3 list__table-nextRow4 list__table-nextRow5">
                            <td>
                                <span>Máy tính bảng</span>
                            </td>
                            <td>
                                <span>14</span>
                            </td>
                            <td>
                                <span>$1015</span>
                            </td>
                            <td>
                                <span>$414</span>
                            </td>
                            <td>
                                <span>$50</span>
                            </td>
                        </tr> -->
                    </table>
                    <div class="form__button row">
                         <a href="./index.php?exec=chart"><input value="Biểu đồ" type="submit" class="form__group-btn"></a>
                    </div>
                </div>
            </div>
        </section>
    <?php require_once './footer.php' ?>
    </div>
</body>

</html>