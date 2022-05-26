<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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
                <h1>Danh sách sản phẩm</h1>
            </div>
            <div class="content__container row">
                <div class="row">

                </div>
                <div class="row content__container-list">
                    <form class="row" action="index.php?exec=listpro" method="post" style="display:flex; flex-direction: column; width: 40rem;">
                        <input type="text" class="form__group-name" name="loadkeyword" placeholder="Nhập từ khóa tìm kiếm">
                        <div class="form__filter">
                            <select name="idlist" id="" class="form__group-name" style="width: 20rem;">
                                <option value="0" selected>Danh mục</option>
                                 <?php
                                     foreach ($typeList as $list){
                                         extract($list);
                                         echo '<option value="'.$id_ctgr.'">'.$name.'</option>';
                                }
                                 ?>        
                             </select>
                            <input value="Lọc" name="testok" type="submit" class="form__group-btn" style="margin: 0 0 0 2rem; font-weight: 600 ;">
                        </div>
                    </form>
                    <table class="list__table row">
                        <tr class="list__table-firstRow list__table-firstRow2">
                            <th>Chọn</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>                     
                            <th>Đơn giá</th>
                            <th>Hình</th>
                            <th>Lượt xem</th>
                            <th>Nút</th>
                        </tr>
                        <?php
                            foreach ($prodList as $prod){
                                extract($prod);
                                $editListProd = "index.php?exec=editpro&id_product=".$id_product;
                                $deleListProd = "index.php?exec=delepro&id_product=".$id_product;
                                $imgPath = "../upload/".$image;
                                if(is_file($imgPath)){
                                    $img = "<img src='".$imgPath."' width= '50px'>";
                                }else{
                                    $img = "No image";
                                }
                                echo '<tr class="list__table-nextRow">
                                         <td> <input type="checkbox" name=""> </td>
                                         <td><span>'.$id_product.'</span></td>   
                                         <td>'.$name_product.'</td>
                                         <td>'.$price.'</td>
                                         <td>'.$img.'</td>
                                         <td>'.$view.'</td>
                                         <td>
                                         <a href="'.$editListProd.'"><input class="list__table-nextRow-button" type="button" value="Sửa"></a>
                                         <a href="'.$deleListProd.'"><input type="button" class="list__table-nextRow-button" value="Xóa"></a>
                                         </td>
                                      </tr>';                                                        
                            }
                        ?>
                    </table>
                    <div class="form__button row">
                        <input id="check-all" value="Chọn tất cả" type="submit" class="form__group-btn form__group-btn--active">
                        <input id="clear-all" value="Bỏ chọn tất cả" type="submit" class="form__group-btn">
                        <input id="btn-delete" value="Xóa mục đã chọn" type="submit" class="form__group-btn">
                        <a href="./index.php?exec=addpro"><input value="Nhập thêm" type="submit" class="form__group-btn"></a>
                    </div>
                </div>
            </div>
        </section>
    <?php require_once './footer.php'?>
    </div>
</body>

</html>