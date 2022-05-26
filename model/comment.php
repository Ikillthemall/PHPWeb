<?php
   // add a comment 
   function addComment($content, $idProduct, $idUser, $date){
    $sql = "INSERT INTO comment (content, id_product, id_user, date_add) VALUES (?,?,?,?)";
    pdo_execute($sql,$content, $idProduct, $idUser, $date);
}
// load list comment from admin
function loadComUser($idPro){
    $sql = "SELECT * FROM comment WHERE 1";
    if($idPro > 0){
        $sql .=" AND id_product ='".$idPro."'";
    }
    $sql .= " ORDER BY id_com DESC";
    $comList = pdo_query($sql);
    return $comList;
}
// delete a comment from admin
function deleCom($idCom){
    $sql = "DELETE FROM comment WHERE id_com = ".$idCom;
    pdo_execute($sql);
}
?>