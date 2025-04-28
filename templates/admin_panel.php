<?php include $_SERVER['DOCUMENT_ROOT'] . '/Online_Citizen_Service_Portal/includes/header.php'; ?>
<!-- Font Awesome CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="/Online_Citizen_Service_Portal/public/dashboard-enhanced.css">
<main class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="display-5 mb-3 text-white animate__animated animate__fadeIn">Admin Panel</h2>
        </div>
    </div>

    <!-- Dashboard Summary -->
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3 class="display-6 fw-bold">12</h3>
                    <p class="text-muted">Total Users</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <h3 class="display-6 fw-bold">27</h3>
                    <p class="text-muted">Total Requests</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-comment-dots"></i>
                    </div>
                    <h3 class="display-6 fw-bold">6</h3>
                    <p class="text-muted">Feedback</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp" style="animation-delay: 0.6s">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-hourglass-half"></i>
                    </div>
                    <h3 class="display-6 fw-bold">3</h3>
                    <p class="text-muted">Pending</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Actions -->
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <h4>View All Requests</h4>
                    <a href="/Online_Citizen_Service_Portal/admin/view_requests.php" class="btn btn-primary w-100 mt-3">View</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-user-gear"></i>
                    </div>
                    <h4>Manage Users</h4>
                    <a href="/Online_Citizen_Service_Portal/admin/manage_users.php" class="btn btn-primary w-100 mt-3">Manage</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-comment-dots"></i>
                    </div>
                    <h4>View Feedback</h4>
                    <a href="/Online_Citizen_Service_Portal/admin/view_feedback.php" class="btn btn-primary w-100 mt-3">View</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp" style="animation-delay: 0.6s">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                    <h4>Logout</h4>
                    <a href="/Online_Citizen_Service_Portal/logout.php" class="btn btn-outline-danger w-100 mt-3">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Requests -->
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm animate__animated animate__fadeInUp">
                <div class="card-body p-4">
                    <h3 class="mb-4">Recent Requests</h3>
                    <div class="list-group">
                        <div class="list-group-item d-flex justify-content-between align-items-center animate__animated animate__fadeInRight">
                            <div>
                                <i class="fa-solid fa-file-lines text-primary me-2"></i>
                                John Doe - Construction Permit
                            </div>
                            <span class="badge bg-warning text-dark">Processing</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center animate__animated animate__fadeInRight" style="animation-delay: 0.2s">
                            <div>
                                <i class="fa-solid fa-file-lines text-primary me-2"></i>
                                Jane Smith - Marriage Certificate
                            </div>
                            <span class="badge bg-success">Approved</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center animate__animated animate__fadeInRight" style="animation-delay: 0.4s">
                            <div>
                                <i class="fa-solid fa-file-lines text-primary me-2"></i>
                                Alex Lee - Business Permit
                            </div>
                            <span class="badge bg-danger">Rejected</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center animate__animated animate__fadeInRight" style="animation-delay: 0.6s">
                            <div>
                                <i class="fa-solid fa-file-lines text-primary me-2"></i>
                                Mary Ann - Event Permit
                            </div>
                            <span class="badge bg-warning text-dark">Processing</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center animate__animated animate__fadeInRight" style="animation-delay: 0.8s">
                            <div>
                                <i class="fa-solid fa-file-lines text-primary me-2"></i>
                                Chris Paul - Birth Certificate
                            </div>
                            <span class="badge bg-success">Approved</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Add Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/Online_Citizen_Service_Portal/includes/footer.php'; ?>
