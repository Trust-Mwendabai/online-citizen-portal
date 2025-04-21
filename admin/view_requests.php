<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit();
}
require_once '../config/db.php';
// Handle status update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['request_id'], $_POST['status'])) {
    $request_id = $_POST['request_id'];
    $status = $_POST['status'];
    $stmt = $conn->prepare('UPDATE service_requests SET status = ?, last_update = NOW() WHERE id = ?');
    $stmt->bind_param('si', $status, $request_id);
    $stmt->execute();
    $stmt->close();
}
// Fetch all requests
$result = $conn->query('SELECT sr.id, u.name, sr.type, sr.subtype, sr.status, sr.submission_date, sr.last_update FROM service_requests sr JOIN users u ON sr.user_id = u.id ORDER BY sr.submission_date DESC');
$requests = $result->fetch_all(MYSQLI_ASSOC);
?>
<?php include '../includes/header.php'; ?>
<main>
<h2>All Service Requests</h2>
<table border="1" cellpadding="8" style="width:100%;background:#fff;">
    <tr><th>ID</th><th>User</th><th>Type</th><th>Subtype</th><th>Status</th><th>Submitted</th><th>Last Update</th><th>Action</th></tr>
    <?php foreach ($requests as $r): ?>
    <tr>
        <td><?= $r['id'] ?></td>
        <td><?= htmlspecialchars($r['name']) ?></td>
        <td><?= htmlspecialchars($r['type']) ?></td>
        <td><?= htmlspecialchars($r['subtype']) ?></td>
        <td><?= htmlspecialchars($r['status']) ?></td>
        <td><?= $r['submission_date'] ?></td>
        <td><?= $r['last_update'] ?></td>
        <td>
            <form method="post" style="display:inline;">
                <input type="hidden" name="request_id" value="<?= $r['id'] ?>">
                <select name="status">
                    <option value="pending" <?= $r['status']=='pending'?'selected':'' ?>>Pending</option>
                    <option value="processing" <?= $r['status']=='processing'?'selected':'' ?>>Processing</option>
                    <option value="approved" <?= $r['status']=='approved'?'selected':'' ?>>Approved</option>
                    <option value="rejected" <?= $r['status']=='rejected'?'selected':'' ?>>Rejected</option>
                </select>
                <button type="submit">Update</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</main>
<?php include '../includes/footer.php'; ?>
