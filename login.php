<?php
session_start();
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $errors = [];
    if (empty($email) || empty($password)) {
        $errors[] = 'All fields are required.';
    }
    if (empty($errors)) {
        $stmt = $conn->prepare('SELECT id, name, password_hash, role FROM users WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows === 1) {
            $stmt->bind_result($id, $name, $password_hash, $role);
            $stmt->fetch();
            if (password_verify($password, $password_hash)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['name'] = $name;
                $_SESSION['role'] = $role;
                if ($role === 'admin') {
                    header('Location: /Online_Citizen_Service_Portal/admin/admin_panel.php');
                } else {
                    header('Location: /Online_Citizen_Service_Portal/user/dashboard.php');
                }
                exit();
            } else {
                $errors[] = 'Invalid credentials.';
            }
        } else {
            $errors[] = 'Invalid credentials.';
        }
        $stmt->close();
    }
}
include 'templates/login.php';
?>
