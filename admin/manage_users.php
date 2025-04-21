<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit();
}
require_once '../config/db.php';
// Fetch all users
$result = $conn->query('SELECT id, name, email, role, created_at FROM users ORDER BY created_at DESC');
$users = $result->fetch_all(MYSQLI_ASSOC);
?>
<?php include '../includes/header.php'; ?>
<main>
<h2>Manage Users</h2>
<table border="1" cellpadding="8" style="width:100%;background:#fff;">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Registered</th></tr>
    <?php foreach ($users as $u): ?>
    <tr>
        <td><?= $u['id'] ?></td>
        <td><?= htmlspecialchars($u['name']) ?></td>
        <td><?= htmlspecialchars($u['email']) ?></td>
        <td><?= htmlspecialchars($u['role']) ?></td>
        <td><?= $u['created_at'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</main>
<?php include '../includes/footer.php'; ?>
