<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'citizen') {
    header('Location: ../login.php');
    exit();
}
require_once '../config/db.php';
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare('SELECT id, type, subtype, status, submission_date, last_update, document_path FROM service_requests WHERE user_id = ? ORDER BY submission_date DESC');
$stmt->bind_param('i', $user_id);
$stmt->execute();
$stmt->bind_result($id, $type, $subtype, $status, $submission_date, $last_update, $document_path);
$requests = [];
while ($stmt->fetch()) {
    $requests[] = compact('id', 'type', 'subtype', 'status', 'submission_date', 'last_update', 'document_path');
}
$stmt->close();
?>
<?php include '../includes/header.php'; ?>
<main>
<h2>My Service Requests</h2>
<table border="1" cellpadding="8" style="width:100%;background:#fff;">
    <tr><th>ID</th><th>Type</th><th>Subtype</th><th>Status</th><th>Submitted</th><th>Last Update</th><th>Document</th></tr>
    <?php foreach ($requests as $r): ?>
    <tr>
        <td><?= $r['id'] ?></td>
        <td><?= htmlspecialchars($r['type']) ?></td>
        <td><?= htmlspecialchars($r['subtype']) ?></td>
        <td><?= htmlspecialchars($r['status']) ?></td>
        <td><?= $r['submission_date'] ?></td>
        <td><?= $r['last_update'] ?></td>
        <td><?php if ($r['status'] === 'approved' && $r['document_path']): ?>
            <a href="<?= htmlspecialchars($r['document_path']) ?>" download>Download</a>
            <?php else: ?>-
            <?php endif; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</main>
<?php include '../includes/footer.php'; ?>
