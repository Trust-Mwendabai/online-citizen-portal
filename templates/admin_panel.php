<?php include $_SERVER['DOCUMENT_ROOT'] . '/Online_Citizen_Service_Portal/includes/header.php'; ?>
<!-- Font Awesome CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="/Online_Citizen_Service_Portal/public/dashboard-enhanced.css">
<main>
    <h2>Admin Panel</h2>
    <div class="dashboard-summary">
        <div class="summary-item"><i class="fa-solid fa-users"></i><br>Total Users: <span>12</span></div>
        <div class="summary-item"><i class="fa-solid fa-file-lines"></i><br>Requests: <span>27</span></div>
        <div class="summary-item"><i class="fa-solid fa-comment-dots"></i><br>Feedback: <span>6</span></div>
        <div class="summary-item"><i class="fa-solid fa-hourglass-half"></i><br>Pending: <span>3</span></div>
    </div>
    <div class="dashboard-container">
        <div class="dashboard-card">
            <div class="icon"><i class="fa-solid fa-list-check"></i></div>
            <h3>View All Requests</h3>
            <a href="/Online_Citizen_Service_Portal/admin/view_requests.php" class="button">View</a>
        </div>
        <div class="dashboard-card">
            <div class="icon"><i class="fa-solid fa-user-gear"></i></div>
            <h3>Manage Users</h3>
            <a href="/Online_Citizen_Service_Portal/admin/manage_users.php" class="button">Manage</a>
        </div>
        <div class="dashboard-card">
            <div class="icon"><i class="fa-solid fa-right-from-bracket"></i></div>
            <h3>Logout</h3>
            <a href="/Online_Citizen_Service_Portal/logout.php" class="button">Logout</a>
        </div>
    </div>
    <h3 style="margin-top:2em;">Recent Requests</h3>
    <ul class="recent-list">
        <li>John Doe - Construction Permit <span class="status status-processing">Processing</span></li>
        <li>Jane Smith - Marriage Certificate <span class="status status-approved">Approved</span></li>
        <li>Alex Lee - Business Permit <span class="status status-rejected">Rejected</span></li>
        <li>Mary Ann - Event Permit <span class="status status-processing">Processing</span></li>
        <li>Chris Paul - Birth Certificate <span class="status status-approved">Approved</span></li>
    </ul>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Online_Citizen_Service_Portal/includes/footer.php'; ?>
