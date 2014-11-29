<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 24-11-14
 * Time: 17:25
 */


require_once 'ConexionSQL.php';

class UsersDAO {

    function getUser($email){

        $conexionSQL = new ConexionSQL();

        $db = $conexionSQL->conectar();

        $query = "SELECT * FROM users WHERE email = \"".$email."\"";

        $result = mysql_query($query, $db);

        $arrayResult = array();

        while($row = mysql_fetch_array($result)){
            array_push($arrayResult, $row);
        }

        mysql_close($db);

        return $arrayResult;

    }


    function createUser($array){


        $conexionSQL = new ConexionSQL();

        $db = $conexionSQL->conectar();

        $query = "INSERT INTO users (type_user_id, country_id, name, lastname, email, password, date) VALUES (".$array['type_user'].",".$array['country_id'].", \"".$array['name']." \", \"".$array['lastname']." \", \"".$array['email']." \", \"". $array['password']." \", CURDATE())";

        mysql_query($query, $db);

        return mysql_insert_id($db);


    }

    function getUserById($id){

        $conexionSQL = new ConexionSQL();

        $db = $conexionSQL->conectar();

        $query = "SELECT * FROM users WHERE id_user = \"".$id."\"";

        $result = mysql_query($query, $db);

        $arrayResult = array();

        while($row = mysql_fetch_array($result)){
            array_push($arrayResult, $row);
        }

        mysql_close($db);

        return $arrayResult;

    }

}