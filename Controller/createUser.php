<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 25-11-14
 * Time: 12:05
 */

require_once '../Dao/UsersDAO.php';
require_once '../Dao/TypeUserDAO.php';

session_start();

$usersDao = new UsersDAO();
$typeUserDao = new TypeUserDAO();


if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['password2']) && $_POST['country'] !== '0') {
   if($_POST['password'] === $_POST['password2']) {
       // Aca utilizar la técnica que más convenga, en este caso usé MD5
       $email = $_POST['email'];
       $pass = md5($_POST['password']);
       $name = $_POST['name'];
       $lastname = $_POST['lastname'];
       $date = date('Y-m-d');
       $country = $_POST["country"];


       $checkEmail = $usersDao->getUser($email);


       if ($checkEmail !== null) {


           $arrayNewUser = array(

               'type_user' => '1',
               'country_id' => $country,
               'name' => $name,
               'lastname' => $lastname,
               'email' => $email,
               'password' => $pass,
               'date' => $date

           );

           $idGen = $usersDao->createUser($arrayNewUser);

           if ($idGen !== 0) {

               $resultUser = $usersDao->getUserById($idGen);
               $resultTypeUser = $typeUserDao->getTypeUser($resultUser[0]['type_user_id']);

               $_SESSION['user_logged'] = array(
                   'id' => $resultUser[0]["id_user"],
                   'logged_at' => date('Y-m-d H:i:s'),
                   'name' => $resultUser[0]["name"],
                   'lastname' => $resultUser[0]["lastname"],
                   'type_user' => $resultTypeUser[0]["desc"],
                   'date' => $resultUser[0]["date"],
                   'avatar' => $resultUser[0]["photo_path"]
               );

               echo '<script> location.href = "../Dashboard/index.php"; </script>';
           }
       }
   }else{
       echo '<script> location.href = "../Dashboard/pages/user/register.php?error=1"; </script>';
   }
} else {
    echo '<script> location.href = "../Dashboard/pages/user/register.php"; </script>';
}
