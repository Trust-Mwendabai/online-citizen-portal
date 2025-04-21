<?php
session_start();
session_unset();
session_destroy();
header('Location: /Online_Citizen_Service_Portal/login.php');
exit();
?>
