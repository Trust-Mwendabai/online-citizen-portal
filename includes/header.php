<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Citizen Service Portal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/Online_Citizen_Service_Portal/public/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a73e8;
            --secondary-color: #34a853;
            --accent-color: #ea4335;
            --light-color: #f8f9fa;
            --dark-color: #202124;
            --gradient-start: #1a73e8;
            --gradient-end: #34a853;
            --success-color: #34a853;
            --warning-color: #fbbc05;
            --danger-color: #ea4335;
            --info-color: #4285f4;
        }
        
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            background-attachment: fixed;
            position: relative;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/Online_Citizen_Service_Portal/public/images/pattern.svg');
            background-size: 200px 200px;
            opacity: 0.1;
            z-index: -1;
        }
        
        .navbar {
            background: rgba(26, 115, 232, 0.95);
            padding: 1rem 2rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
            backdrop-filter: blur(10px);
        }
        
        .navbar-brand {
            font-family: 'Montserrat', Arial, sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff !important;
            letter-spacing: 1px;
        }
        
        .navbar-brand img {
            height: 48px;
            margin-right: 0.7rem;
        }
        
        .nav-link {
            color: #fff !important;
            font-family: 'Roboto', Arial, sans-serif;
            font-size: 1.08rem;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-left: 1.5rem;
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #fff;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .nav-link:hover {
            color: #fff !important;
            opacity: 0.9;
        }
        
        .navbar-toggler {
            border-color: rgba(255,255,255,0.5);
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        .card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }
        
        .table {
            background: rgba(255, 255, 255, 0.98);
        }
        
        .table-light {
            background: rgba(248, 249, 250, 0.95);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--gradient-end) 0%, var(--gradient-start) 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .btn-outline-primary {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }
        
        .btn-outline-primary:hover {
            background: var(--primary-color);
            color: #fff;
        }
        
        .badge {
            font-weight: 500;
            padding: 0.5em 0.8em;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(26, 115, 232, 0.25);
        }
        
        .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(26, 115, 232, 0.25);
        }
        
        main {
            position: relative;
            z-index: 1;
        }
        
        .icon-wrapper {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .card:hover .icon-wrapper {
            transform: scale(1.1) rotate(5deg);
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/Online_Citizen_Service_Portal/index.php">
                <img src="/Online_Citizen_Service_Portal/public/logo.png" alt="Portal Logo" onerror="this.style.display='none'">
                Citizen Service Portal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/Online_Citizen_Service_Portal/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Online_Citizen_Service_Portal/register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Online_Citizen_Service_Portal/login.php">Login</a>
                    </li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <?php if ($_SESSION['role'] === 'admin'): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/Online_Citizen_Service_Portal/admin/admin_panel.php">Admin Panel</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/Online_Citizen_Service_Portal/user/dashboard.php">Dashboard</a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/Online_Citizen_Service_Portal/logout.php">Logout</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

