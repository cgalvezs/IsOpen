<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 28-11-14
 * Time: 9:44
 */

require_once "../Dao/StoreDAO.php";

    $storeDao = new StoreDOA();

    $storeInfo = $storeDao->getStoreByIdUser($id_user);

    $count = 0;

    if($storeInfo !== null){
        for ($i = 0; $i < (count($storeInfo)); $i++) {
            $count++;
        }
    }else{
        $count = 0;
    }


return $count;
