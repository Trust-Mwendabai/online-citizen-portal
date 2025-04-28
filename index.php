<?php
require_once 'config/db.php';

// Get total users count
$result = $conn->query('SELECT COUNT(*) as total FROM users WHERE role = "citizen"');
$users_count = $result->fetch_assoc()['total'];

// Get total requests count
$result = $conn->query('SELECT COUNT(*) as total FROM service_requests');
$requests_count = $result->fetch_assoc()['total'];

include 'includes/header.php';
?>

<!-- Hero Section with Animation -->
<section class="hero-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 animate__animated animate__fadeInLeft">
                <h1 class="display-3 fw-bold text-white mb-4">Welcome to the Online Citizen Service Portal</h1>
                <p class="lead text-white mb-4">Your one-stop platform to request, track, and manage government services with ease and transparency.</p>
                <div class="d-flex gap-3">
                    <a href="register.php" class="btn btn-light btn-lg px-4 animate__animated animate__pulse animate__infinite">
                        <i class="fa-solid fa-user-plus me-2"></i>Get Started
                    </a>
                    <a href="login.php" class="btn btn-outline-light btn-lg px-4">
                        <i class="fa-solid fa-right-to-bracket me-2"></i>Login
                    </a>
                </div>
            </div>
            <div class="col-lg-6 animate__animated animate__fadeInRight">
                <img src="/Online_Citizen_Service_Portal/public/images/hero-illustration.svg" alt="Service Portal" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section with Counter Animation -->
<section class="stats-section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp">
                    <div class="card-body text-center p-4">
                        <div class="display-4 text-primary mb-3">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <h3 class="display-6 fw-bold counter"><?= number_format($users_count) ?>+</h3>
                        <p class="text-muted">Citizens Served</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                    <div class="card-body text-center p-4">
                        <div class="display-4 text-primary mb-3">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <h3 class="display-6 fw-bold counter"><?= number_format($requests_count) ?>+</h3>
                        <p class="text-muted">Requests Processed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                    <div class="card-body text-center p-4">
                        <div class="display-4 text-primary mb-3">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <h3 class="display-6 fw-bold">24/7</h3>
                        <p class="text-muted">Online Access</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section with Hover Effects -->
<section class="features-section py-5">
    <div class="container">
        <h2 class="text-center display-4 mb-5 animate__animated animate__fadeIn">Our Services</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon mb-3">
                            <i class="fa-solid fa-file-pen display-4 text-primary"></i>
                        </div>
                        <h4>Easy Applications</h4>
                        <p class="text-muted">Apply for permits and certificates online in minutes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon mb-3">
                            <i class="fa-solid fa-chart-line display-4 text-primary"></i>
                        </div>
                        <h4>Track Progress</h4>
                        <p class="text-muted">Monitor the status of your requests in real time.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon mb-3">
                            <i class="fa-solid fa-bell display-4 text-primary"></i>
                        </div>
                        <h4>Instant Notifications</h4>
                        <p class="text-muted">Receive email or SMS alerts for every update.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100 feature-card animate__animated animate__fadeInUp" style="animation-delay: 0.6s">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon mb-3">
                            <i class="fa-solid fa-star display-4 text-primary"></i>
                        </div>
                        <h4>Feedback & Support</h4>
                        <p class="text-muted">Rate services and share your experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Section with Timeline -->
<section class="how-it-works-section py-5">
    <div class="container">
        <h2 class="text-center display-4 mb-5 animate__animated animate__fadeIn">How It Works</h2>
        <div class="row">
            <div class="col-12">
                <div class="timeline">
                    <div class="timeline-item animate__animated animate__fadeInLeft">
                        <div class="timeline-icon">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>
                        <div class="timeline-content">
                            <h4>Register</h4>
                            <p>Create your free account</p>
                        </div>
                    </div>
                    <div class="timeline-item animate__animated animate__fadeInRight">
                        <div class="timeline-icon">
                            <i class="fa-solid fa-right-to-bracket"></i>
                        </div>
                        <div class="timeline-content">
                            <h4>Login</h4>
                            <p>Access your dashboard</p>
                        </div>
                    </div>
                    <div class="timeline-item animate__animated animate__fadeInLeft">
                        <div class="timeline-icon">
                            <i class="fa-solid fa-file-pen"></i>
                        </div>
                        <div class="timeline-content">
                            <h4>Submit Request</h4>
                            <p>Apply for permits/certificates</p>
                        </div>
                    </div>
                    <div class="timeline-item animate__animated animate__fadeInRight">
                        <div class="timeline-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="timeline-content">
                            <h4>Track Progress</h4>
                            <p>Get real-time updates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section with Accordion -->
<section class="faq-section py-5">
    <div class="container">
        <h2 class="text-center display-4 mb-5 animate__animated animate__fadeIn">Frequently Asked Questions</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item border-0 mb-3 animate__animated animate__fadeInUp">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                <i class="fa-solid fa-question me-2"></i>How do I register?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Click the "Register" button at the top and fill in your details. You'll get instant access to your dashboard.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 animate__animated animate__fadeInUp" style="animation-delay: 0.2s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                <i class="fa-solid fa-question me-2"></i>What services can I request?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Permits (Business, Construction, Event) and Certificates (Birth, Marriage, Police Clearance).
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-3 animate__animated animate__fadeInUp" style="animation-delay: 0.4s">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                <i class="fa-solid fa-question me-2"></i>How do I track my application?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Login and go to "View My Requests" in your dashboard to see real-time updates and download documents.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section with Carousel -->
<section class="testimonials-section py-5">
    <div class="container">
        <h2 class="text-center display-4 mb-5 animate__animated animate__fadeIn">What Citizens Say</h2>
        <div class="row">
            <div class="col-12">
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial-card text-center p-4">
                                <div class="testimonial-icon mb-3">
                                    <i class="fa-solid fa-quote-left display-4 text-primary"></i>
                                </div>
                                <p class="lead mb-3">"Fast, transparent, and easy! I got my permit in days."</p>
                                <h5 class="text-primary">Jane M.</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-card text-center p-4">
                                <div class="testimonial-icon mb-3">
                                    <i class="fa-solid fa-quote-left display-4 text-primary"></i>
                                </div>
                                <p class="lead mb-3">"I love being able to track my requests online."</p>
                                <h5 class="text-primary">Samuel K.</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-card text-center p-4">
                                <div class="testimonial-icon mb-3">
                                    <i class="fa-solid fa-quote-left display-4 text-primary"></i>
                                </div>
                                <p class="lead mb-3">"The online system saved me so much time and hassle."</p>
                                <h5 class="text-primary">Maria L.</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-card text-center p-4">
                                <div class="testimonial-icon mb-3">
                                    <i class="fa-solid fa-quote-left display-4 text-primary"></i>
                                </div>
                                <p class="lead mb-3">"Excellent service! The staff was very helpful."</p>
                                <h5 class="text-primary">John D.</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-card text-center p-4">
                                <div class="testimonial-icon mb-3">
                                    <i class="fa-solid fa-quote-left display-4 text-primary"></i>
                                </div>
                                <p class="lead mb-3">"The portal made getting my documents so much easier."</p>
                                <h5 class="text-primary">Sarah P.</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-section py-5">
    <div class="container text-center">
        <h2 class="display-4 mb-4 animate__animated animate__fadeIn">Ready to get started?</h2>
        <a href="register.php" class="btn btn-primary btn-lg px-5 animate__animated animate__pulse animate__infinite">
            Create Your Account
        </a>
    </div>
</section>

<!-- Add Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- Custom CSS -->
<style>
    .hero-section {
        background: linear-gradient(135deg, rgba(0, 51, 102, 0.9) 0%, rgba(0, 85, 165, 0.85) 100%);
        padding: 100px 0;
    }
    .feature-card {
        transition: transform 0.3s ease;
    }
    .feature-card:hover {
        transform: translateY(-10px);
    }
    .feature-icon {
        transition: transform 0.3s ease;
    }
    .feature-card:hover .feature-icon {
        transform: scale(1.1);
    }
    .timeline {
        position: relative;
        padding: 20px 0;
    }
    .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        width: 2px;
        height: 100%;
        background: #003366;
    }
    .timeline-item {
        position: relative;
        margin-bottom: 50px;
    }
    .timeline-icon {
        width: 50px;
        height: 50px;
        background: #003366;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }
    .timeline-content {
        width: 45%;
        padding: 20px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .timeline-item:nth-child(odd) .timeline-content {
        margin-left: auto;
    }
    .testimonial-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 20px;
    }
    .carousel-control-prev,
    .carousel-control-next {
        width: 5%;
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #003366;
        border-radius: 50%;
        padding: 20px;
    }
</style>

<!-- Add jQuery and Counter Plugin -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<!-- Initialize Counter -->
<script>
    $(document).ready(function() {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
