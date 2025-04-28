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

<main class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="display-5 mb-3">Manage Users</h2>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Registered</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $u): ?>
                        <tr>
                            <td><?= $u['id'] ?></td>
                            <td><?= htmlspecialchars($u['name']) ?></td>
                            <td><?= htmlspecialchars($u['email']) ?></td>
                            <td>
                                <?php
                                $roleClass = match($u['role']) {
                                    'admin' => 'danger',
                                    'citizen' => 'primary',
                                    default => 'secondary'
                                };
                                ?>
                                <span class="badge bg-<?= $roleClass ?>"><?= htmlspecialchars($u['role']) ?></span>
                            </td>
                            <td><?= date('M d, Y', strtotime($u['created_at'])) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>
