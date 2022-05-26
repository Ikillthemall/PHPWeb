<?php
// add new account
function addAcc($userName,$pass,$email,$address, $gender, $phone,$img){
    $sql = "INSERT INTO users (username, pass, email, address, gender, tel, image) VALUES ('$userName','$pass','$email','$address','$gender','$phone','$img')";
    pdo_execute($sql);
}
// add new account for admin
function addAccAdmin($userName,$pass,$email,$address, $role, $gender, $phone,$img){
    $sql = "INSERT INTO users (username, pass, email, address, role, gender, tel, image) VALUES ('$userName','$pass','$email','$address','$role', '$gender','$phone','$img')";
    pdo_execute($sql);
}
// list user for admin
function loadListUser(){
    $sql = "SELECT *FROM users ORDER BY id_user DESC";
    $listUsers = pdo_query($sql);
    return $listUsers;
}
// delete user for admin
function deleUser($idUser){
    $sql = "DELETE FROM users WHERE id_user=".$idUser;
    pdo_execute($sql);
}
// load iduser
function loadListUserID($idUser){
    $sql = "SELECT *FROM users WHERE id_user='.$idUser'";
    $userList = pdo_query($sql);
    return $userList;
}
 // load one user for admin
function loadOneUser($idUser){
        $sql = "SELECT * FROM users WHERE id_user = ".$idUser;
        $listUser=pdo_query_one($sql);
        return $listUser;
}
// check user
function userExist($userName, $pass){
    $sql = "SELECT * FROM users WHERE username ='".$userName."' AND pass='".$pass."'";
    $user=pdo_query_one($sql);
    return $user;
}
// check email user
function userEmail($email){
    $sql = "SELECT * FROM users WHERE email='".$email."'";
    $user=pdo_query_one($sql);
    return $user;
}
// updateuser for user
function updateUser($idUser, $userName, $pass, $email, $address, $phone){
    // if($img !=""){
    //     $sql = "UPDATE product SET id_ctgr='".$idList."', name_product='".$nameProd."',price='".$price."',price_sale='".$priceSale."',date_in='".$dateIn."',image='".$img."',description='".$desc."' where id_product=".$idProduct;
    // }else{
    //     $sql = "UPDATE product SET id_ctgr='".$idList."', name_product='".$nameProd."',price='".$price."',price_sale='".$priceSale."',date_in='".$dateIn."',description='".$desc."' where id_product=".$idProduct;
    // }
    $sql = "UPDATE users SET username='".$userName."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$phone."' WHERE id_user=".$idUser;
    pdo_execute($sql);
}
// updateuser for admin
function updateUserAdmin($idUser, $userName, $pass, $email, $address, $role, $phone, $img){
    $sql = "UPDATE users SET username='".$userName."',pass='".$pass."',email='".$email."',address='".$address."', role='".$role."', tel='".$phone."', image='".$img."' WHERE id_user=".$idUser;
    pdo_execute($sql);
}

?>