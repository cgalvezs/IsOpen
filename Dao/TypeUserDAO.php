<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 25-11-14
 * Time: 11:08
 */


require_once 'ConexionSQL.php';


class TypeUserDAO {

    function getTypeUser($id){

        $conexionSQL = new ConexionSQL();

        $db = $conexionSQL->conectar();

        $query = "SELECT * FROM type_user WHERE id_typeuser = \"".$id."\"";

        $result = mysql_query($query, $db);

        $arrayResult = array();

        while($row = mysql_fetch_array($result)){
            array_push($arrayResult, $row);
        }

        mysql_close($db);

        return $arrayResult;

    }

} 