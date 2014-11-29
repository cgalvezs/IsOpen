<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 24-11-14
 * Time: 11:31
 */

require 'Dao/BranchDAO.php';

include_once 'ConexionSQL.php';

$branch = new BranchDAO();

$regist = $branch->getAll();

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

    <body>

        <?php $connection = mysql_connect("localhost", "root", "root") ;
            mysql_select_db("IsOpenDB") ;


            $query = "select id_country, name from IsOpenDB.country;";
            $result = mysql_query($query);
            if (!$result) {
                die('Consulta no v��lida: ' . mysql_error());
            }else{
                echo "Consulta valida \n";
            }


                while($row = mysql_fetch_array($result)){
                    echo $row["id_country"];
                }

        mysql_close($connection);
        ?>



        <?php

            for($i = 0 ; $i<(count($regist));$i++){
                echo "ID BRANCH: ".($regist[$i]["branch_id"]);
                echo "";
            }



        ?>

        <?php

        for($i = 0 ; $i<(count($listCountry));$i++){
            echo "Nombre pais: ".($listCountry[$i]["name"]);
            echo "";
        }



        ?>





    </body>

</html>