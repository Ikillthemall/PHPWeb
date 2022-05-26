<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="main">
        <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Control panel</h1>
            </div>
            <div class="content__container content__container-index row">
                <table class="content__container-index-new">
                    <tr>
                        <th>Sản phẩm mới</th>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <table class="content__container-index-new">
                    <tr>
                        <th>Sản phẩm xem nhiều</th>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <table class="content__container-index-new">
                    <tr>
                        <th>Bình luận mới</th>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
                <table class="content__container-index-new">
                    <tr>
                        <th>Đơn hàng mới</th>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div>
        </section>
    <?php require_once './footer.php' ?>
    </div>
</body>

</html>