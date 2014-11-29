
<?php

require_once 'ConexionSQL.php';

class StoreDOA {

    function addStore($array) {
        
       
        $conexionSQL = new ConexionSQL();

        $db = $conexionSQL->conectar();

        $query = "INSERT INTO store (user_id,country_id,name) values (".$array['user_id'].",".$array['country_id'].",\"".$array['name']."\")";

        mysql_query($query, $db);

        return mysql_insert_id($db);

    }

    function getStoreByIdUser($id){


        $conexionSQL = new ConexionSQL();

        $db = $conexionSQL->conectar();

        $query = "SELECT * FROM store WHERE user_id = ".$id;

        $result = mysql_query($query, $db);

        $arrayResult = array();

        while($row = mysql_fetch_array($result)){
            array_push($arrayResult, $row);
        }

        $count = 0;

        if($arrayResult !== null){
            for ($i = 0; $i < (count($arrayResult)); $i++){

                $count++;

            }
        }

        return $count;

    }

}


