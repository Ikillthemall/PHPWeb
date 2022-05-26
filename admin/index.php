<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị admin</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <div class="main">
    <?php
    require_once '../model/function.php';
    require_once '../model/category.php';
    require_once '../model/product.php';
    require_once '../model/user.php';
    require_once '../model/comment.php';
    require_once '../model/cart.php';
    require_once '../model/stats.php';
    require_once 'menu.php';
    if(isset($_GET['exec'])){
        $execute = $_GET['exec'];
        switch($execute){
            case 'addcate':
                // check is the user click on the button or not
                if(isset($_POST['addNew']) && ($_POST['addNew'])){
                    $nameType = $_POST['nameType'];
                    addCate($nameType);
                    $alert = 'Successful!!!';
                }
                require_once './product__type-add.php';
                break;
            case 'listcate':
                $typeList = loadCate();
                require_once './product__type-list.php';
                break;
            case 'delelist':
                // check the exist id_ctgr or not
                if(isset($_GET['id_ctgr']) && ($_GET['id_ctgr'])>0){
                    deleCate($_GET['id_ctgr']);
                }
                // get a new list
                $typeList = loadCate();
                require_once './product__type-list.php';
                break;
            case 'editlist':
                if(isset($_GET['id_ctgr']) && ($_GET['id_ctgr'])>0){
                    $list=loadOneCate($_GET['id_ctgr']);
                 }
                 require_once './product__type-edit.php';
                 break;
            case 'updateTypeList':
                   // check is the id_ctgr exist or not
                   if(isset($_POST['upTypeList'])){
                    $nameType = $_POST['nameType'];
                    $id_ctgr = $_POST['id_ctgr'];
                    listUpdate($id_ctgr, $nameType);
                    $alert = "Successful!!!";
                }
                // get a new list
                $sql = "SELECT * FROM category ORDER BY id_ctgr DESC";
                $typeList = pdo_query($sql);
                require_once './product__type-list.php';
                break;
           
         
            // end controller category
            // cotroller product
            case 'addpro':
            // check is the user click on the button or not
              if(isset($_POST['addNew']) && ($_POST['addNew'])){
                  $idList = $_POST['idlist'];
                  $nameProd = $_POST['nameprod'];
                  $price = $_POST['price'];
                  $priceSale = $_POST['pricesale'];
                  $dateIn = $_POST['datein'];
                  $desc = $_POST['desc'];
                  $targetDir = "../upload/";
                  $img = $_FILES['image']['name'];
                  $targetFile = $targetDir .basename($_FILES["image"]["name"]);
                  $upload = 1;
                  $imageFileType =  strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                  if($imageFileType == "jpg" && $imageFileType == "png" && $imageFileType == "jpeg"){
                      echo "exactly";
                      $upload = 1;
                  }
                  if ($upload == 0) {
                    echo "Sorry, your file was not uploaded.";
                  } else {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.Successfully!";
                    } else {
                      echo "Sorry, there was an error uploading your file.";
                    }
                  }
                  addProduct($nameProd, $price, $priceSale,$img,$dateIn,$desc, $idList);
                  $alert = 'Successful!!!';
              }
              $typeList = loadCate();
              require_once './product__add.php';
              break;
            case 'listpro';
                 if(isset($_POST['testok']) && ($_POST['testok'])){
                      $loadKeyWord = $_POST['loadkeyword'];
                      $idList = $_POST['idlist'];
                 }else{
                    $loadKeyWord ='';
                    $idList = 0;
                 }
                $typeList = loadCate();
                $prodList = loadProduct($loadKeyWord,$idList);
                require_once './product__list.php';
                break;
      
            case 'editpro':
                if(isset($_GET['id_product']) && ($_GET['id_product'])>0){
                    $listProd=loadOneProduct($_GET['id_product']);
                 }
                 $typeList = loadCate();
                 require_once './product__edit.php';
                 break;
            case 'delepro':
                  // check the exist id_product or not
                if(isset($_GET['id_product']) && ($_GET['id_product'])>0){
                    deleProduct($_GET['id_product']);
                }
                // get a new list
                $sql = "SELECT * FROM product ORDER BY id_product DESC";
                $prodList = loadProduct("",0);
                require_once './product__list.php';
                break;         
            case 'updatepro';
                // check click the button submit to send the data or not
                if(isset($_POST['updateprod'])){
                  $idList = $_POST['idlist'];
                  $idProduct = $_POST['idprod'];
                  $nameProd = $_POST['nameprod'];
                  $price = $_POST['price'];
                  $priceSale = $_POST['pricesale'];
                  $dateIn = $_POST['datein'];
                  $desc = $_POST['desc'];
                  $targetDir = "../upload/";
                  $img = $_FILES['image']['name'];
                  $targetFile = $targetDir .basename($_FILES["image"]["name"]);
                  $upload = 1;
                  $imageFileType =  strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                  if($imageFileType == "jpg" && $imageFileType == "png" && $imageFileType == "jpeg"){
                      echo "exactly";
                      $upload = 1;
                  }
                  if ($upload == 0) {
                    echo "Sorry, your file was not uploaded.";
                  // if everything is ok, try to upload file
                  } else {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.Successfully!";
                    } else {
                      echo "Sorry, there was an error uploading your file.";
                    }
                  }
                 listUpdateProduct($idList, $idProduct, $nameProd, $price, $priceSale, $dateIn, $img,$desc);
                 $alert = "Successful!!!";
             }
             // get a new list
             $prodList = loadProduct("",0);
             require_once './product__list.php';
             break;
            // end controler product
            // cotroller user
            case 'listuser':
                $listUsers = loadListUser();
                require_once './client__list.php';
                break;
            case 'deleuser':
                // check the exist id_user or not
                if(isset($_GET['id_user']) && ($_GET['id_user'])){
                    deleUser($_GET['id_user']);
                }
                // get a new list
                $listUsers = loadListUser();
                require_once './client__list.php';
                break;  
            case 'adduser':
             // check is the user click on the button or not
             if(isset($_POST['addNew']) && ($_POST['addNew'])){
                // $idUser = $_POST['iduser'];
                $userName = $_POST['username'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $role = $_POST['role'];
                $gender = $_POST['gender'];
                $phone = $_POST['phone'];
                $targetDir = "../upload/";
                $img = $_FILES['image']['name'];
                $targetFile = $targetDir .basename($_FILES["image"]["name"]);
                $upload = 1;
                $imageFileType =  strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                if($imageFileType == "jpg" && $imageFileType == "png" && $imageFileType == "jpeg"){
                    echo "exactly";
                    $upload = 1;
                }
                if ($upload == 0) {
                  echo "Sorry, your file was not uploaded.";
                } else {
                  if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.Successfully!";
                  } else {
                    echo "Sorry, there was an error uploading your file.";
                  }
                }
                addAccAdmin($userName,$pass,$email,$address, $role, $gender, $phone,$img);
                $alert = 'Successful!!!';
            }
                require_once './client__add.php';
                break;
            case 'edituser':
                if(isset($_GET['id_user']) && ($_GET['id_user'])>0){
                    $listUsers=loadOneUser($_GET['id_user']);
                 }
                //$typeList = loadCate();
                require_once './client__edit.php';
                break;
            case 'updateuser':
               // check click the button submit to send the data or not
               if(isset($_POST['updateuser'])){
                $idUser = $_POST['iduser'];
                $userName = $_POST['username'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $role = $_POST['role'];
                $phone = $_POST['phone'];
                $targetDir = "../upload/";
                $img = $_FILES['image']['name'];
                $targetFile = $targetDir .basename($_FILES["image"]["name"]);
                $upload = 1;
                $imageFileType =  strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
                if($imageFileType == "jpg" && $imageFileType == "png" && $imageFileType == "jpeg"){
                    echo "exactly";
                    $upload = 1;
                }
                if ($upload == 0) {
                  echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                  if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.Successfully!";
                  } else {
                    echo "Sorry, there was an error uploading your file.";
                  }
                }
               updateUserAdmin($idUser, $userName, $pass, $email, $address, $role, $phone, $img);
               $alert = "Successful!!!";
           }
           // get a new list
                $listUsers = loadListUser();
                require_once './client__list.php';
                break;
            case 'listcom':
                $listCom = loadComUser(0);
                require_once './comment__list.php';
                break;
            case 'delecom':
                if(isset($_GET['id_com']) && ($_GET['id_com'])){
                    deleCom($_GET['id_com']);
                }
                $listCom = loadComUser(0);
                require_once './comment__list.php';
                break;
            case 'cart':
                if(isset($_POST['keyword']) && ($_POST['keyword']!="")){
                    $keyWords = $_POST['keyword'];
                }else{
                    $keyWords = "";
                }
                $list = loadAllBillAdmin($keyWords, 0);
                require_once './carts__list.php';
                break;
            case 'delebill':
                if(isset($_GET['idbill']) && ($_GET['idbill'])>0){
                    deleBill($_GET['idbill']);
                }
                // get a new list
                $sql = "SELECT * FROM cartbill ORDER BY idBill DESC";
                $list = loadAllBillAdmin("",0);
                require_once './carts__list.php';
                break;
            case 'stat':
                $listStat = loadAllStat();
                require_once './statistic__list.php';
                break;
            case 'chart':
                $chartList = loadAllStat();
                require_once './stats__chart.php';
                break;
            default:
                require_once './home.php';
                break;
        }
    }
    require_once 'footer.php';
?>
    </div>
</body>
</html>
