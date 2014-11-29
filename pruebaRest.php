<?php
/**
 * Created by PhpStorm.
 * User: fenRis
 * Date: 28-11-14
 * Time: 20:18
 */


ini_set('xdebug.var_display_max_depth', -1);
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);


$url = "https://maps.googleapis.com/maps/api/geocode/json?address=los+claveles+642,+el+bosque";
$response = file_get_contents($url);

var_dump($response);