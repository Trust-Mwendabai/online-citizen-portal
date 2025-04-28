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

<main class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="display-5 mb-3">All Service Requests</h2>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Type</th>
                            <th>Subtype</th>
                            <th>Status</th>
                            <th>Submitted</th>
                            <th>Last Update</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($requests as $r): ?>
                        <tr>
                            <td><?= $r['id'] ?></td>
                            <td><?= htmlspecialchars($r['name']) ?></td>
                            <td><?= htmlspecialchars($r['type']) ?></td>
                            <td><?= htmlspecialchars($r['subtype']) ?></td>
                            <td>
                                <?php
                                $statusClass = match($r['status']) {
                                    'approved' => 'success',
                                    'processing' => 'warning',
                                    'rejected' => 'danger',
                                    'pending' => 'secondary',
                                    default => 'secondary'
                                };
                                ?>
                                <span class="badge bg-<?= $statusClass ?>"><?= htmlspecialchars($r['status']) ?></span>
                            </td>
                            <td><?= date('M d, Y', strtotime($r['submission_date'])) ?></td>
                            <td><?= date('M d, Y', strtotime($r['last_update'])) ?></td>
                            <td>
                                <form method="post" class="d-flex gap-2">
                                    <input type="hidden" name="request_id" value="<?= $r['id'] ?>">
                                    <select name="status" class="form-select form-select-sm">
                                        <option value="pending" <?= $r['status']=='pending'?'selected':'' ?>>Pending</option>
                                        <option value="processing" <?= $r['status']=='processing'?'selected':'' ?>>Processing</option>
                                        <option value="approved" <?= $r['status']=='approved'?'selected':'' ?>>Approved</option>
                                        <option value="rejected" <?= $r['status']=='rejected'?'selected':'' ?>>Rejected</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        <i class="fa-solid fa-check me-1"></i>Update
                                    </button>
                                </form>
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
