<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'citizen') {
    header('Location: ../login.php');
    exit();
}
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'];
    $subtype = $_POST['subtype'];
    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare('INSERT INTO service_requests (user_id, type, subtype) VALUES (?, ?, ?)');
    $stmt->bind_param('iss', $user_id, $type, $subtype);
    if ($stmt->execute()) {
        $success = 'Request submitted successfully.';
    } else {
        $error = 'Failed to submit request.';
    }
    $stmt->close();
}
?>
<?php include '../includes/header.php'; ?>
<main>
<h2>Submit Service Request</h2>
<?php if (!empty($success)) echo '<p style="color:green">'.$success.'</p>'; ?>
<?php if (!empty($error)) echo '<p style="color:red">'.$error.'</p>'; ?>
<form method="post">
    <label for="type">Type:</label>
    <select name="type" id="type" required>
        <option value="permit">Permit</option>
        <option value="certificate">Certificate</option>
    </select>
    <label for="subtype">Subtype:</label>
    <select name="subtype" id="subtype" required>
        <option value="Business Permit">Business Permit</option>
        <option value="Construction Permit">Construction Permit</option>
        <option value="Event Permit">Event Permit</option>
        <option value="Birth Certificate">Birth Certificate</option>
        <option value="Marriage Certificate">Marriage Certificate</option>
        <option value="Police Clearance Certificate">Police Clearance Certificate</option>
    </select>
    <button type="submit">Submit Request</button>
</form>
</main>
<?php include '../includes/footer.php'; ?>
