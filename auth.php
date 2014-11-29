<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 24-11-14
 * Time: 17:02
 */

include("ConexionSQL.php");

include("Dao/UsersDAO.php");
include("Dao/TypeUserDAO.php");


session_start();

$usersDao = new UsersDAO();
$typeUserDao = new TypeUserDAO();


if (isset($_POST['email']) && $_POST['password']) {
    // Aca utilizar la técnica que más convenga, en este caso usé MD5
    $email = $_POST['email'];
    $pass =  $_POST['password'];


    $result = $usersDao->userLogin($email);


    if ($email == $result[0]["email"] && $pass == $result[0]["password"]) {

        $resultTypeUser = $typeUserDao->getTypeUser($result[0]["type_user_id"]);

        $_SESSION['user_logged'] = array(
            'id'        => $result[0]["id_user"],
            'logged_at' => date('Y-m-d H:i:s'),
            'name'      => $result[0]["name"],
            'lastname'  => $result[0]["lastname"],
            'type_user' => $resultTypeUser[0]["desc"],
            'date'      => $result[0]["date"],
            'avatar'    => $result[0]["photo_path"],
        );

        echo '<script> location.href = "Dashboard/index.php"; </script>';
    }
    else {
        echo '<script> location.href = "Dashboard/pages/user/login.php?error=1"; </script>';
    }
} else {
    echo '<script> location.href = "Dashboard/pages/user/login.php"; </script>';
}
