<?php
    function addCate($nameType){
        $sql = "INSERT INTO category (name) VALUES ('$nameType')";
        pdo_execute($sql);
    }
    // delete cate
    function deleCate($idCate){
        $sql = "DELETE FROM category where id_ctgr = ".$idCate;
        pdo_execute($sql);
    }
    // load cate
    function loadCate(){
        $sql = "SELECT * FROM category ORDER BY id_ctgr DESC";
        $typeList = pdo_query($sql);
        return $typeList;
    }
    // load one cate 
    function loadOneCate($idCate){
        $sql = "SELECT * FROM category where id_ctgr = ".$idCate;
        $list=pdo_query_one($sql);
        return $list;
    }
    // update list
    function listUpdate($idCate, $nameType){
        $sql = "UPDATE category SET name='".$nameType."' where id_ctgr=".$idCate;
        pdo_execute($sql);
    }
?>