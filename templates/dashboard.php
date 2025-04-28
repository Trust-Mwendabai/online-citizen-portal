<?php include $_SERVER['DOCUMENT_ROOT'] . '/Online_Citizen_Service_Portal/includes/header.php'; ?>
<!-- Font Awesome CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="/Online_Citizen_Service_Portal/public/dashboard-enhanced.css">
<main class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="display-5 mb-3 text-white animate__animated animate__fadeIn">User Dashboard</h2>
            <p class="lead text-white animate__animated animate__fadeIn">Welcome, <b><?php echo htmlspecialchars($_SESSION['name'] ?? 'User'); ?></b>!</p>
        </div>
    </div>

    <!-- Dashboard Summary -->
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-file-lines"></i>
                    </div>
                    <h3 class="display-6 fw-bold">3</h3>
                    <p class="text-muted">Total Requests</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-comment-dots"></i>
                    </div>
                    <h3 class="display-6 fw-bold">1</h3>
                    <p class="text-muted">Feedback Submitted</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <h3 class="display-6 fw-bold">Approved</h3>
                    <p class="text-muted">Last Status</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Actions -->
    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-plus-circle"></i>
                    </div>
                    <h4>Submit New Request</h4>
                    <a href="../user/submit_request.php" class="btn btn-primary w-100 mt-3">Start</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-list"></i>
                    </div>
                    <h4>View My Requests</h4>
                    <a href="../user/view_requests.php" class="btn btn-primary w-100 mt-3">View</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                <div class="card-body text-center p-4">
                    <div class="icon-wrapper">
                        <i class="fa-solid fa-comment-alt"></i>
                    </div>
                    <h4>Submit Feedback</h4>
                    <a href="/Online_Citizen_Service_Portal/user/feedback.php" class="btn btn-primary w-100 mt-3">Feedback</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
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
                                Business Permit
                            </div>
                            <span class="badge bg-success">Approved</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center animate__animated animate__fadeInRight" style="animation-delay: 0.2s">
                            <div>
                                <i class="fa-solid fa-file-lines text-primary me-2"></i>
                                Birth Certificate
                            </div>
                            <span class="badge bg-warning text-dark">Processing</span>
                        </div>
                        <div class="list-group-item d-flex justify-content-between align-items-center animate__animated animate__fadeInRight" style="animation-delay: 0.4s">
                            <div>
                                <i class="fa-solid fa-file-lines text-primary me-2"></i>
                                Event Permit
                            </div>
                            <span class="badge bg-danger">Rejected</span>
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
