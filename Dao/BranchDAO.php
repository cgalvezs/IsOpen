<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 24-11-14
 * Time: 10:22
 */


require_once 'ConexionSQL.php';

class BranchDAO {


    function getAll(){

        $conexionSQL = new ConexionSQL();

        $db = $conexionSQL->conectar();

        $query = "SELECT * FROM branch";

        $result = mysql_query($query, $db);

        $array = array();

        while($row = mysql_fetch_array($result)){
            array_push($array, $row);
        }

        return $array;

    }


    function createBranch($array){

        $conexionSQL = new ConexionSQL();

        $db = $conexionSQL->conectar();

        $query = "INSERT INTO branch () VALUES ()";

    }

}

