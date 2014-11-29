<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 26-11-14
 * Time: 20:38
 */

include_once "../Dao/StoreDAO.php";
require_once '../includes/functions.php';

$storeDAO = new StoreDOA();
$user = get_user_info();

if(!empty($_POST['nameStore']) && $_POST['countryStore'] !== '0'){

	$nameStore = $_POST['nameStore'];
	$countryStore = $_POST["countryStore"];
    $userId = $user['id'];

	$arrayNewStore = array(

            'name'       => $nameStore,
            'country_id' => $countryStore,
            'user_id'    => $userId
            
        );

	$idPk = $storeDAO->addStore($arrayNewStore);

    if($idPk !== 0){
        echo '<script> location.href = "../Dashboard/index.php"; </script>';
    }

}
