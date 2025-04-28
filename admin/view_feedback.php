<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit();
}
require_once '../config/db.php';

// Fetch all feedback with user and request details
$result = $conn->query('
    SELECT f.id, f.rating, f.comment, f.created_at, 
           u.name as user_name, 
           sr.subtype as request_type
    FROM feedback f
    JOIN users u ON f.user_id = u.id
    JOIN service_requests sr ON f.request_id = sr.id
    ORDER BY f.created_at DESC
');
$feedback = $result->fetch_all(MYSQLI_ASSOC);
?>
<?php include '../includes/header.php'; ?>

<main class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="display-5 mb-3">User Feedback</h2>
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
                            <th>Request Type</th>
                            <th>Rating</th>
                            <th>Comment</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($feedback as $f): ?>
                        <tr>
                            <td><?= $f['id'] ?></td>
                            <td><?= htmlspecialchars($f['user_name']) ?></td>
                            <td><?= htmlspecialchars($f['request_type']) ?></td>
                            <td>
                                <?php
                                $stars = '';
                                for ($i = 1; $i <= 5; $i++) {
                                    $stars .= '<i class="fa-solid fa-star ' . ($i <= $f['rating'] ? 'text-warning' : 'text-muted') . '"></i>';
                                }
                                echo $stars;
                                ?>
                            </td>
                            <td><?= htmlspecialchars($f['comment']) ?></td>
                            <td><?= date('M d, Y', strtotime($f['created_at'])) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?> 