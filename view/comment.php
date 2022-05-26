<?php
    require_once '../model/function.php';
    require_once '../model/comment.php';
    require_once '../model/user.php';
    require_once '../global.php';
    session_start();
    $idPro = $_REQUEST['idPro'];
    $comList = loadComUser($idPro);
    $userList = loadListUserID($idUser);
?>
<link rel="stylesheet" href="../public/assets/css/style.css">
<link rel="stylesheet" href="../public/assets/css/grid.css">
<link rel="stylesheet" href="../public/assets/css/base.css">;
<div class="comment__content">
    <div class="comment__title">
        <h2>Phần bình luận của khách hàng</h2>
    </div>
    <?php
        // echo ''.$idPro;
    ?>
     <form name="" method="post" action="<?=$_SERVER['PHP_SELF'];?>" class="comment__form">
        <input type="hidden" name="idPro" value="<?=$idPro?>"> 
        <div class="comment__form-input">
            <textarea name="content" id="" placeholder="Xin hãy để lại bình lại đánh giá sản phẩm của bạn!">
            </textarea>
        </div>
        <div class="comment__form-submit">
            <!-- <button name="comment" type="submit" class="button button--comment">
                <i class="fa fa-paper-plane"></i>
                    <span>&nbsp;&nbsp;Gửi bình luận</span>
                    Gửi bình luận
            </button> -->
         <input value="Gửi bình luận" name="comment" type="submit" class="button button--comment">
        </div>
        </form>
        <?php
            if(isset($_POST['comment']) && ($_POST['comment'])){
                $content = $_POST['content'];
                $idPro = $_POST['idPro'];
                $idUser = $_SESSION['user']['id_user'];
                $date = date('H:i:s d-m-Y');
                addComment($content, $idPro, $idUser, $date);
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }
        ?>
           <div class="comment__review">  
               <?php
               foreach($comList as $com){
                    extract($com);
                    $img = $imgPath.$image;
                    echo '<ul class="comment__list">
                    <li class="comment__list-item">
                        <div class="comment__list-item-avatar">
                            <img src="'.$img.'" alt="">
                        </div>
                            <div class="comment__list-item-infor">
                                <p class="name">
                                    <strong>'.$id_user.'</strong>
                                </p>
                                <p class="date">
                                    <label for=""><i>'.$date_add.'</i></label>
                                </p>
                                <p class="content">
                                    '.$content.'
                                </p>
                        </div>
                    </li>            
                </ul>';
                }
               ?>      
                <!-- <ul class="comment__list">
                    <li class="comment__list-item">
                        <div class="comment__list-item-avatar">
                            <img src="../public/assets/images/product/watch__apple-6.jpg" alt="">
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
                </ul> -->
        </div>
</div>