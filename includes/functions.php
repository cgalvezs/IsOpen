<?php
session_start();

function is_user_logged()
{
    if (isset($_SESSION['user_logged'])) {
        return true;
    }
    else {
        return false;
    }
}

function get_user_info()
{
    return $_SESSION['user_logged'];
}

function secured_area() 
{
    if (!is_user_logged()) {
        echo '<script> location.href = "../401.php"; </script>';
    }
}

function jsonParse(){

}