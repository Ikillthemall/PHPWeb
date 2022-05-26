<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product - Type</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function (){
        $("#check-all").click(function (){
            $(":checkbox").prop("checked", true);
        });
        $("#clear-all").click(function (){
            $(":checkbox").prop("checked", false);
        });
        $("#btn-delete").click(function (){
            if($(":checked").length === 0){
            alert("Vui lòng chọn ít nhất một mục!");
            return false;
            }
        });
    });
</script>
<body>
    <div class="main">
        <?php require_once './menu.php' ?>
        <section class="content row">
            <div class="content__heading row">
                <h1>Danh sách loại sản phẩm</h1>
            </div>
            <div class="content__container row">
                <div class="row">

                </div>
                <div class="row content__container-list">
                    <table class="list__table row">
                        <tr class="list__table-firstRow">
                            <th>Chọn</th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th>Nút</th>
                        </tr>
                        <?php
                            foreach ($typeList as $list){
                                extract($list);
                                $editList = "index.php?exec=editlist&id_ctgr=".$id_ctgr;
                                $deleList = "index.php?exec=delelist&id_ctgr=".$id_ctgr;
                                echo '<tr class="list__table-nextRow">
                                         <td> <input type="checkbox" name=""> </td>
                                         <td><span>'.$id_ctgr.'</span></td>   
                                         <td>'.$name.'</td>
                                         <td>
                                         <a href="'.$editList.'"><input class="list__table-nextRow-button" type="button" value="Sửa"></a>
                                         <a href="'.$deleList.'"><input type="button" class="list__table-nextRow-button" value="Xóa"></a>
                                         </td>
                                      </tr>';                                                        
                            }
                        ?>
                    </table>
                    <div class="form__button row">
                        <input id="check-all" value="Chọn tất cả" type="button" class="form__group-btn form__group-btn--active">
                        <input id="clear-all" value="Bỏ chọn tất cả" type="button" class="form__group-btn">
                        <input id="btn-delete" value="Xóa mục đã chọn" type="button" class="form__group-btn">
                        <a href="./index.php?exec=addcate"><input value="Nhập thêm" type="submit" class="form__group-btn"></a>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once './footer.php' ?>
    </div>
</body>

</html>