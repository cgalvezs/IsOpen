<?php
/**
 * Created by PhpStorm.
 * User: home
 * Date: 28/11/14
 * Time: 20:12
 */

require_once 'ConexionSQL.php';

class TimelineDAO {

    function addTimeline($array) {

        $conexionSQL = new ConexionSQL();

        $db = $conexionSQL->conectar();

        $query = "INSERT INTO time_line (branch_id,comment,date) values (".$array['branch_id'].",".$array['comment'].",\"".$array['date']."\")";

        mysql_query($query, $db);

        return mysql_insert_id($db);

    }

} 