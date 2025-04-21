<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'citizen') {
    header('Location: ../login.php');
    exit();
}
require_once '../config/db.php';
$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $request_id = $_POST['request_id'];
    $rating = $_POST['rating'];
    $comment = trim($_POST['comment']);
    $stmt = $conn->prepare('INSERT INTO feedback (user_id, request_id, rating, comment) VALUES (?, ?, ?, ?)');
    $stmt->bind_param('iiis', $user_id, $request_id, $rating, $comment);
    if ($stmt->execute()) {
        $success = 'Feedback submitted.';
    } else {
        $error = 'Failed to submit feedback.';
    }
    $stmt->close();
}
// Get user's approved requests for feedback
$stmt = $conn->prepare('SELECT id, subtype FROM service_requests WHERE user_id = ? AND status = "approved"');
$stmt->bind_param('i', $user_id);
$stmt->execute();
$stmt->bind_result($req_id, $subtype);
$approved = [];
while ($stmt->fetch()) {
    $approved[] = ['id' => $req_id, 'subtype' => $subtype];
}
$stmt->close();
?>
<?php include '../includes/header.php'; ?>
<main>
<h2>Submit Feedback</h2>
<?php if (!empty($success)) echo '<p style="color:green">'.$success.'</p>'; ?>
<?php if (!empty($error)) echo '<p style="color:red">'.$error.'</p>'; ?>
<form method="post">
    <label for="request_id">Select Approved Request:</label>
    <select name="request_id" required>
        <?php foreach ($approved as $a): ?>
        <option value="<?= $a['id'] ?>">#<?= $a['id'] ?> - <?= htmlspecialchars($a['subtype']) ?></option>
        <?php endforeach; ?>
    </select>
    <label for="rating">Rating (1-5):</label>
    <input type="number" name="rating" min="1" max="5" required>
    <label for="comment">Comment:</label>
    <textarea name="comment" rows="3"></textarea>
    <button type="submit">Submit Feedback</button>
</form>
</main>
<?php include '../includes/footer.php'; ?>
