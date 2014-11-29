<?php

session_start();

unset($_SESSION['user_logged']);

echo '<script> location.href = "Dashboard/pages/user/login.php"; </script>';