<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'citizen') {
    header('Location: ../login.php');
    exit();
}
include '../templates/dashboard.php';
?>
