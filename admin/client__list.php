<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Useruct List</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<style>
    .content__container .list__table-firstRow5 th:nth-child(1) {
  padding: 1.4rem;
  width: 30%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow5 th:nth-child(2) {
  width: 10%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow5 th:nth-child(3) {
  width: 15%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow5 th:nth-child(4) {
  width: 15%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow5 th:nth-child(5) {
  width: 15%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow5 th:last-child {
  width: 15%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow6 th:nth-child(1) {
  padding: 1.4rem;
  width: 5%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow6 th:nth-child(2) {
  width: 10%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow6 th:nth-child(3) {
  width: 10%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow6 th:nth-child(4) {
  width: 10%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow6 th:nth-child(5) {
  width: 15%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow6 th:nth-child(6) {
  width: 15%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow6 th:nth-child(7) {
  width: 15%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow6 th:nth-child(8) {
  width: 15%;
  background-color: #d4d4d4;
}

.content__container .list__table-firstRow6 th:last-child {
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
            alert("Vui l??ng ch???n ??t nh???t m???t m???c!");
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
                <h1>Danh s??ch t??i kho???n</h1>
            </div>
            <div class="content__container row">
                <div class="row">

                </div>
                <div class="row content__container-list">
                    <table class="list__table row">
                        <tr class="list__table-firstRow list__table-firstRow2 list__table-firstRow6">
                            <th>Ch???n</th>
                            <th>M?? kh</th>
                            <th>Username</th>
                            <th>?????a ch??? email</th>
                            <th>Gi???i t??nh</th>
                            <th>??ia ch??? ???</th>
                            <th>H??nh ???nh</th>
                            <th>Vai tr??</th>
                            <th>N??t</th>
                        </tr>
                        <?php
                            foreach ($listUsers as $list){
                                extract($list);
                                $editListUser = "index.php?exec=edituser&id_user=".$id_user;
                                $deleListUser = "index.php?exec=deleuser&id_user=".$id_user;
                                $imgPath = "../upload/".$image;
                                if(is_file($imgPath)){
                                    $img = "<img src='".$imgPath."' width= '50px'>";
                                }else{
                                    $img = "No image";
                                }
                                echo '<tr class="list__table-nextRow">
                                         <td> <input type="checkbox" name=""> </td>
                                         <td><span>'.$id_user.'</span></td>   
                                         <td>'.$username.'</td>
                                         <td>'.$email.'</td>
                                         <td>'.$gender.'</td>
                                         <td>'.$address.'</td>
                                         <td>'.$img.'</td>
                                         <td>'.$role.'</td>
                                         <td>
                                         <a href="'.$editListUser.'"><input type="button" class="list__table-nextRow-button" value="S???a"></a>
                                         <a href="'.$deleListUser.'"><input type="button" class="list__table-nextRow-button" value="X??a"></a>
                                         </td>
                                      </tr>';                                                        
                            }
                        ?>

                    </table>
                    <div class="form__button row">
                        <input id="check-all" value="Ch???n t???t c???" type="submit" class="form__group-btn form__group-btn--active">
                        <input id="clear-all" value="B??? ch???n t???t c???" type="submit" class="form__group-btn">
                        <input id="btn-all" value="X??a m???c ???? ch???n" type="submit" class="form__group-btn">
                        <a href="./index.php?exec=adduser"><input value="Th??m" type="submit" class="form__group-btn"></a>
                    </div>
                </div>
            </div>
        </section>
      <?php require_once './footer.php' ?>
    </div>
</body>

</html>