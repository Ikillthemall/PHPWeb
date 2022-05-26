<?php
    // load all stats product
    function loadAllStat(){
        $sql = "SELECT category.id_ctgr as cateid, category.name as catename, COUNT(product.id_product) as countprod, MAX(product.price) as maxprice, MIN(product.price) as minprice, AVG(product.price) as avgprice";
        $sql .=" FROM product left join category on category.id_ctgr = product.id_ctgr";
        $sql .=" GROUP BY category.id_ctgr ORDER BY category.id_ctgr DESC";
        $listStat= pdo_query($sql);
        return $listStat;
    }

?>