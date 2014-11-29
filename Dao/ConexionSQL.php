<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 24-11-14
 * Time: 14:17
 */

 class ConexionSQL{

 var $db_name;
 var $server;
 var $user;
 var $pass;

     public function ConexionSQL(){

         $this->db_name = 'IsOpenDB';
         $this->server = 'localhost';
         $this->user = 'root';
         $this->pass = 'root';

     }


     public function conectar(){

         $conex = mysql_connect($this->server,$this->user,$this->pass) or die ("Fallo la conexion");

         mysql_select_db($this->db_name, $conex) or die ("No se abrio la BD");

         return $conex;

     }


}
