<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 25-11-14
 * Time: 13:17
 */

require_once 'ConexionSQL.php';

class CountryDAO {


    function getCountrys(){

        $conexionSQL = new ConexionSQL();

        $db = $conexionSQL->conectar();

        $query = "SELECT * FROM country";

        $result = mysql_query($query, $db);

        $arrayResult = array();

        while($row = mysql_fetch_array($result)){
            array_push($arrayResult, $row);
        }

        mysql_close($db);

        return $arrayResult;

    }

} 