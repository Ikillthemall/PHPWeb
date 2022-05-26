<?php
    session_start();
    require_once 'model/function.php';
    require_once 'model/product.php';
    require_once './model/category.php';
    require_once './model/user.php';
    require_once './model/cart.php';
    require_once './global.php';
    require_once './view/header.php';
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }

    $loadProd = loadProductUser();
    $loadCate = loadCate();
    $loadTop = loadTopProduct();
    if(isset($_GET['view']) && ($_GET['view'] != "")){
        $view = $_GET['view'];
        switch($view){
            case 'home':
                require_once 'view/home.php';
                break;
            case 'gioithieu':
                require_once 'view/gioithieu.php';
                break;
            case 'lienhe':
                require_once 'view/lienhe.php';
                break;           
            case 'proddetail':
                if(isset($_GET['id_product']) && ($_GET['id_product']>0)){
                    $idProduct = $_GET['id_product'];                 
                    $loadOneProd= loadOneProductUser($idProduct);
                    extract($loadOneProd);
                    $prodSame = loadProductSameUser($idProduct, $id_ctgr);
                    require_once 'view/product.php';
                }else{
                    require_once 'view/home.php';
                }
                break;
            case 'productcate':
                if(isset($_POST['keyword']) && $_POST['keyword']!=""){
                    $keyWord = $_POST['keyword'];
                }else{
                    $keyWord = "";
                }
                if(isset($_GET['id_ctgr']) && ($_GET['id_ctgr']>0)){
                    $idCate = $_GET['id_ctgr'];                          
                }else{
                    $idCate = 0;             
                }
                $loadCateProd = loadProduct($keyWord, $idCate);
                $cateName = loadCateName($idCate);
                require_once './view/product-cate.php';
                break;
            case 'register':
                if(isset($_POST['register']) && ($_POST['register'])){
                    $userName = trim(strip_tags($_POST['username']));
                    $pass = trim(strip_tags($_POST['pass']));        
                    $email = trim(strip_tags($_POST['email']));
                    $address = trim(strip_tags($_POST['address']));
                    $phone =$_POST['phone'];
                    $gender = $_POST['gender'];
                    $repass = trim(strip_tags($_POST['repass']));
                    if(isset($_FILES['image'])){
                        $errors= array();
                        $img = $_FILES['image']['name'];
                        $file_size =$_FILES['image']['size'];
                        $file_tmp =$_FILES['image']['tmp_name'];
                        $file_type=$_FILES['image']['type'];
                        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
                        
                        $extensions= array("jpeg","jpg","png");
                        
                        if(in_array($file_ext,$extensions)=== false){
                           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                        }
                        
                        if($file_size > 5097152){
                           $errors[]='File size too big';
                        }
                        
                        if(empty($errors)==true){
                           move_uploaded_file($file_tmp,"upload/".$img);
                           echo "Success";
                        }else{
                           print_r($errors);
                        }
                     }
                    // $error = "";
                    // if($gender!=0 && $gender!=1){
                    //     $error ="Bạn chưa chọn giới tính <br>";
                    // }
                    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    //     echo "<span style='color:red;'>Error: Email nhập chưa đúng.</span>";
                    //     $error = "Email chưa đúng";
                    // }
                    // if(strlen($pass<=8)){
                    //     $error = "Mật khẩu quá ngắn, ít nhất phải 8 kí tự trở lên <br>";
                    // }
                    // if($pass!=$repass){
                    //     $error ="Mật khẩu không trùng nhau <br>";
                    // }
                    addAcc($userName,$pass,$email,$address,$gender, $phone,$img);
                    $alert = "Đăng kí thành công! Hãy đăng nhập để tiếp tục!...";
                }
                header('refresh: 3;url=login.php');
                require_once './view/register.php';
                break;
            case 'login': 
                if(isset($_POST['login']) && ($_POST['login'])){
                    $userName = $_POST['name'];
                    $pass = $_POST['password'];
                    $userExist = userExist($userName, $pass);
                    if(is_array($userExist)){
                        $_SESSION['user'] = $userExist;                     
                        header('location: index.php?view=home');                
                    }else{
                        $alert = "Tài khoản không tồn tại!";
                    }
                }     
                require_once './view/login.php';
                break;
            case 'edituser':
                if(isset($_POST['update']) && ($_POST['update'])){
                    $idUser = $_POST['iduser'];
                    $userName = $_POST['name'];
                    $pass = $_POST['password'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    updateUser($idUser, $userName, $pass, $email, $address, $phone);
                    $_SESSION['user'] = userExist($userName, $pass);
                    // header('location: index.php?view=edituser');
                    require_once './index.php?view=home';
                }     
                require_once './view/edituser.php';
                break;
            case 'forgetpass':
                if(isset($_POST['send']) && ($_POST['send'])){                   
                    $email = $_POST['email'];
                    $userEmail = userEmail($email);
                    if(is_array($userEmail)){
                        $alert = "Mật khẩu =".$userEmail['pass'];
                    }else{
                        $alert = "Email không tồn tại!";
                    }      
                    // header('location: index.php?view=forgetpass');
                }     
                require_once './view/forgetpass.php';
                break;
            case 'logout':
                unset($_SESSION['user']);
                header('location: index.php?view=home');
                break;
            case 'addcom':
                require_once './view/comment.php';
                break;
            case 'addtocart':
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                        $id_product = $_POST['idproduct'];
                        $name_product = $_POST['name'];
                        $img = $_POST['img'];
                        $price = $_POST['price'];
                        $quantity = 1;
                        $total = $quantity * $price;
                        $cart = [$id_product, $name_product, $img, $price, $quantity, $total];
                        array_push($_SESSION['cart'], $cart);
                }
                require_once './view/cartview.php';
                break;
            case 'delecart':
                if(isset($_GET['id'])){
                    array_splice($_SESSION['cart'],$_GET['id'],1);
                }else{
                    $_SESSION['cart'] = [];
                }
                require_once 'view/cartview.php';
                break;
            case 'cartview':
                require_once 'view/cartview.php';
                break;
            case 'cartbill':
                require_once 'view/cartbill.php';
                break;
            case 'cartcomfirm':
                // create a bill
                if(isset($_POST['cartcomfirm']) && ($_POST['cartcomfirm'])){
                    if(isset($_SESSION['user'])){
                        $idUser = $_SESSION['user']['id_user'];
                    }else{
                        $id = 0;
                    }
                        $billName = $_POST['username'];
                        $address = $_POST['address'];
                        $email = $_POST['email'];
                        $phone = $_POST['phone'];
                        $pay = $_POST['pay'];
                        $dateOrder = date('H:i:s d-m-Y');
                        $totalOrder = cartTotalOrder();
                        $idBill = addBill($idUser, $billName, $address, $email, $phone,$pay, $dateOrder, $totalOrder);                  
                        // add into cart session
                        foreach ($_SESSION['cart'] as $cart){
                            addCart($_SESSION['user']['id_user'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idBill);
                        }
                        $_SESSION['cart'] = [];
                }
                        $oneBill = loadOneBill($idBill);
                        $bills = loadAllCart($idCart);
                        require_once 'view/cartcomfirm.php';
                        break;
            case 'mybill':
                $listBill = loadAllBillView($_SESSION['user']['id_user']);
                require_once 'view/mybill.php';
                break;
            default:
                require_once './view/home.php';
                break;
        }
    }else{
        require_once './view/home.php';
    }
    require_once './view/footer.php';
?>