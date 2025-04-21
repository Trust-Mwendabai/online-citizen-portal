<?php include $_SERVER['DOCUMENT_ROOT'] . '/Online_Citizen_Service_Portal/includes/header.php'; ?>
<!-- Font Awesome CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="/Online_Citizen_Service_Portal/public/dashboard-enhanced.css">
<main>
    <h2>User Dashboard</h2>
    <p>Welcome, <b><?php echo htmlspecialchars($_SESSION['name'] ?? 'User'); ?></b>!</p>
    <div class="dashboard-summary">
        <div class="summary-item"><i class="fa-solid fa-file-lines"></i><br>Requests: <span>3</span></div>
        <div class="summary-item"><i class="fa-solid fa-comment-dots"></i><br>Feedback: <span>1</span></div>
        <div class="summary-item"><i class="fa-solid fa-circle-check"></i><br>Last Status: <span class="status-approved">Approved</span></div>
    </div>
    <div class="dashboard-container">
        <div class="dashboard-card">
            <div class="icon"><i class="fa-solid fa-plus-circle"></i></div>
            <h3>Submit New Request</h3>
            <a href="../user/submit_request.php" class="button">Start</a>
        </div>
        <div class="dashboard-card">
            <div class="icon"><i class="fa-solid fa-list"></i></div>
            <h3>View My Requests</h3>
            <a href="../user/view_requests.php" class="button">View</a>
        </div>
        <div class="dashboard-card">
            <div class="icon"><i class="fa-solid fa-comment-alt"></i></div>
            <h3>Submit Feedback</h3>
            <a href="/Online_Citizen_Service_Portal/user/feedback.php" class="button">Feedback</a>
        </div>
        <div class="dashboard-card">
            <div class="icon"><i class="fa-solid fa-right-from-bracket"></i></div>
            <h3>Logout</h3>
            <a href="/Online_Citizen_Service_Portal/logout.php" class="button">Logout</a>
        </div>
    </div>
    <h3 style="margin-top:2em;">Recent Requests</h3>
    <ul class="recent-list">
        <li>Business Permit <span class="status status-approved">Approved</span></li>
        <li>Birth Certificate <span class="status status-processing">Processing</span></li>
        <li>Event Permit <span class="status status-rejected">Rejected</span></li>
    </ul>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Online_Citizen_Service_Portal/includes/footer.php'; ?>
