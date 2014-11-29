<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 28/11/14
 * Time: 20:11
 */

include_once '../Dao/StoreDAO.php';
require_once '../includes/functions.php';
require_once '../Dao/TimelineDAO.php';

$timelineDao = new TimelineDAO();

$branchId = $_POST['branch'];
$comment  = $_POST['comment'];
$date     = date('Y-m-d H:m');

$arrayNewTimeline = array(

    'branch_id' => $branchId,
    'comment'   => $comment,
    'date'      => $date
);

$idPk = $timelineDao->addTimeline($arrayNewTimeline);

if($idPk !== 0){
    echo '<script> location.href = "../Dashboard/401.php"; </script>';
}