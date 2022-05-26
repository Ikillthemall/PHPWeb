<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment List</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<style>
.content__container .list__table-firstRow3 th:nth-child(1) {
  padding: 1.4rem;
  width: 5%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow3 th:nth-child(2) {
  width: 5%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow3 th:nth-child(3) {
  width: 40%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow3 th:nth-child(4) {
  width: 10%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow3 th:nth-child(5) {
  width: 10%;
  background-color: #d4d4d4;
}
.content__container .list__table-firstRow3 th:nth-child(6) {
  width: 20%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow3 th:last-child {
  width: 10%;
  background-color: #d4d4d4;
}
</style>
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
                <h1>Danh sách bình luận</h1>
            </div>
            <div class="content__container row">
                <div class="row content__container-list">
                    <table class="list__table row">
                        <tr class="list__table-firstRow list__table-firstRow2 list__table-firstRow3">
                            <th></th>
                            <th>id</th>
                            <th>Nội dung</th>
                            <th>idUser</th>
                            <th>idPro</th>
                            <th>Ngày bình luận</th>
                            <th>Nút</th>
                        </tr>
                        <?php
                            foreach ($listCom as $list){
                                extract($list);
                                $deleCom = "index.php?exec=delecom&id_com=".$id_com;
                                if(is_file($imgPath)){
                                    $img = "<img src='".$imgPath."' width= '50px'>";
                                }else{
                                    $img = "No image";
                                }
                                echo '<tr class="list__table-nextRow">
                                         <td> <input type="checkbox" name=""></td>
                                         <td><span>'.$id_com.'</span></td>   
                                         <td>'.$content.'</td>
                                         <td>'.$id_user.'</td>
                                         <td>'.$id_product.'</td>
                                         <td>'.$date_add.'</td>
                                         <td>
                                         <a href="'.$deleCom.'"><input type="button" class="list__table-nextRow-button" value="Xóa"></a>
                                         </td>
                                      </tr>';                                                        
                            }
                        ?>
                    </table>
                    <div class="form__button row">
                        <input id="check-all" value="Chọn tất cả" type="submit" class="form__group-btn form__group-btn--active">
                        <input id="clear-all" value="Bỏ chọn tất cả" type="submit" class="form__group-btn">
                        <input id="btn-all" value="Xóa mục đã chọn" type="submit" class="form__group-btn">
                    </div>
                </div>
            </div>
        </section>
        <?php require_once './footer.php' ?>
    </div>
</body>

</html>