<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment List</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="main">
        <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Bình luận chi tiết</h1>
            </div>
            <div class="content__container-title row">
                <h3>Sản phẩm: <span>SamSung Note 5</span></h3>
            </div>
            <div class="content__container row">
                <div class="row content__container-list">
                    <table class="list__table row">
                        <tr class="list__table-firstRow list__table-firstRow2 list__table-firstRow3  list__table-firstRow4">
                            <th></th>
                            <th>Nội dung</th>
                            <th>Ngày bình luận</th>
                            <th>Người bình luận</th>
                            <th></th>
                        </tr>
                        <tr class="list__table-nextRow list__table-nextRow2 list__table-nextRow3 list__table-nextRow4">
                            <td>
                                <input type="checkbox" name="">
                            </td>
                            <td>
                                <span>Sản phẩm tuyệt vời</span>
                            </td>
                            <td>20-08-2021</td>
                            <td>TrungLV</td>
                            <td>
                                <input class="list__table-nextRow-button" type="button" value="Xóa">
                            </td>
                        </tr>
                        <tr class="list__table-nextRow list__table-nextRow2 list__table-nextRow3 list__table-nextRow4">
                            <td>
                                <input type="checkbox" name="">
                            </td>
                            <td>
                                Đã sử dụng và rất hài lòng
                            </td>
                            <td>20-08-2021</td>
                            <td>AnNV</td>
                            <td>
                                <input class="list__table-nextRow-button" type="button" value="Xóa">
                            </td>
                        </tr>
                        <tr class="list__table-nextRow list__table-nextRow2 list__table-nextRow3 list__table-nextRow4">
                            <td>
                                <input type="checkbox" name="">
                            </td>
                            <td>
                                Chất lượng sản phẩm quá tệ, không như kì vọng
                            </td>
                            <td>20-09-2021</td>
                            <td>LinhTV</td>
                            <td>
                                <input class="list__table-nextRow-button" type="button" value="Xóa">
                            </td>
                        </tr>
                    </table>
                    <div class="form__button row">
                        <input value="Chọn tất cả" type="submit" class="form__group-btn form__group-btn--active">
                        <input value="Bỏ chọn tất cả" type="submit" class="form__group-btn">
                        <input value="Xóa mục đã chọn" type="submit" class="form__group-btn">
                    </div>
                </div>
            </div>
        </section>
        <?php require_once './footer.php' ?>
    </div>
</body>

</html>