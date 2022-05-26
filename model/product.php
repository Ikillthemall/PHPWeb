<?php
    // add product for admin
    function addProduct($nameProduct, $price,$priceSale, $img, $dateIn,$desc, $idList){
        $sql = "INSERT INTO product (name_product, price,price_sale, image, date_in, description,id_ctgr) VALUES ('$nameProduct','$price','$priceSale','$img', '$dateIn','$desc','$idList')";
        pdo_execute($sql);
    }
    // delete product for admin
    function deleProduct($idProduct){
        $sql = "DELETE FROM product WHERE id_product = ".$idProduct;
        pdo_execute($sql);
    }
    // load product for admin
    function loadProduct($loadKeyWord, $idList){
        // to connect 2 sql: .= cách chuỗi
        $sql ="SELECT * FROM product WHERE 1";
        if($loadKeyWord !=""){
            $sql .=" AND name_product LIKE '%".$loadKeyWord."%'";
        }
        else{
            echo "<p>Không tìm thấy sản phẩm</p>";
            $loadKeyWord = 0;
        }
        if($idList > 0){
            $sql .=" AND id_ctgr='".$idList."'";
        }
        $sql .=" ORDER BY id_product DESC";
        $prodList = pdo_query($sql);
        return $prodList;
    }
    // load name of category
    function loadCateName($idCate){
        if($idCate > 0){
            $sql = "SELECT *FROM category WHERE id_ctgr=".$idCate;
            $cate = pdo_query_one($sql);
            extract($cate);
            return $name;
        }else{
            return "";
        }
    }
    // load products for home user
    function loadProductUser(){
        $sql = "SELECT * FROM product WHERE 1 ORDER BY id_product DESC LIMIT 0,24";
        $prodList = pdo_query($sql);
        return $prodList;
    }
    // load top 10 products
    function loadTopProduct(){
        $sql = "SELECT * FROM product WHERE 1 ORDER BY view DESC LIMIT 0,10";
        $prodList = pdo_query($sql);
        return $prodList;
    }
    // load one product for amdin
    function loadOneProduct($idProduct){
        $sql = "SELECT * FROM product WHERE id_product = ".$idProduct;
        $list=pdo_query_one($sql);
        return $list;
    }
    // load one product for users
    function loadOneProductUser($idProduct){
        $sql = "SELECT * FROM product WHERE id_product = ".$idProduct;
        $prod=pdo_query_one($sql);
        return $prod;
    }
    // load the sam product for users
    function loadProductSameUser($idProduct, $idCate){
        $sql = "SELECT * FROM product WHERE id_ctgr=".$idCate." AND id_product <> ".$idProduct;
        $prodSame=pdo_query($sql);
        return $prodSame;
    }
    // update list for admin
    function listUpdateProduct($idList,$idProduct, $nameProd, $price, $priceSale, $dateIn, $img, $desc){
        if($img !=""){
            $sql = "UPDATE product SET id_ctgr='".$idList."', name_product='".$nameProd."',price='".$price."',price_sale='".$priceSale."',date_in='".$dateIn."',image='".$img."',description='".$desc."' where id_product=".$idProduct;
        }else{
            $sql = "UPDATE product SET id_ctgr='".$idList."', name_product='".$nameProd."',price='".$price."',price_sale='".$priceSale."',date_in='".$dateIn."',description='".$desc."' where id_product=".$idProduct;
        }
        pdo_execute($sql);
    }
?>