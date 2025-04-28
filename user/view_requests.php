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

<main class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="display-5 mb-3">My Service Requests</h2>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Subtype</th>
                            <th>Status</th>
                            <th>Submitted</th>
                            <th>Last Update</th>
                            <th>Document</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($requests as $r): ?>
                        <tr>
                            <td><?= $r['id'] ?></td>
                            <td><?= htmlspecialchars($r['type']) ?></td>
                            <td><?= htmlspecialchars($r['subtype']) ?></td>
                            <td>
                                <?php
                                $statusClass = match($r['status']) {
                                    'approved' => 'success',
                                    'processing' => 'warning',
                                    'rejected' => 'danger',
                                    default => 'secondary'
                                };
                                ?>
                                <span class="badge bg-<?= $statusClass ?>"><?= htmlspecialchars($r['status']) ?></span>
                            </td>
                            <td><?= date('M d, Y', strtotime($r['submission_date'])) ?></td>
                            <td><?= date('M d, Y', strtotime($r['last_update'])) ?></td>
                            <td>
                                <?php if ($r['status'] === 'approved' && $r['document_path']): ?>
                                    <a href="<?= htmlspecialchars($r['document_path']) ?>" class="btn btn-sm btn-primary" download>
                                        <i class="fa-solid fa-download me-1"></i>Download
                                    </a>
                                <?php else: ?>
                                    <span class="text-muted">-</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>
