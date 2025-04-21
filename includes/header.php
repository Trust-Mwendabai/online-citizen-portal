<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Citizen Service Portal</title>
    <link rel="stylesheet" href="/Online_Citizen_Service_Portal/public/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        .navbar { display: flex; align-items: center; justify-content: space-between; padding: 0.5em 2em; background: #003366; border-radius: 0 0 12px 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.04); }
        .navbar .logo { display: flex; align-items: center; }
        .navbar .logo img { height: 48px; margin-right: 0.7em; }
        .navbar .logo span { font-family: 'Montserrat', Arial, sans-serif; font-size: 1.5em; font-weight: 700; color: #fff; letter-spacing: 1px; }
        .navbar nav a { color: #fff; text-decoration: none; margin-left: 2em; font-family: 'Roboto', Arial, sans-serif; font-size: 1.08em; font-weight: 500; transition: color 0.2s; }
        .navbar nav a:hover { color: #ffcc00; }
        @media (max-width: 700px) {
            .navbar { flex-direction: column; align-items: flex-start; padding: 1em; }
            .navbar nav { margin-top: 1em; }
            .navbar nav a { margin-left: 1em; }
        }
    </style>
</head>
<body style="background:#f6f8fa; margin:0; padding:0; font-family: 'Roboto', Arial, sans-serif;">
<header>
    <div class="navbar">
        <div class="logo">
            <img src="/Online_Citizen_Service_Portal/public/logo.png" alt="Portal Logo" onerror="this.style.display='none'">
            <span>Citizen Service Portal</span>
        </div>
        <nav>
            <a href="/Online_Citizen_Service_Portal/index.php">Home</a>
            <a href="/Online_Citizen_Service_Portal/register.php">Register</a>
            <a href="/Online_Citizen_Service_Portal/login.php">Login</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <?php if ($_SESSION['role'] === 'admin'): ?>
                    <a href="/Online_Citizen_Service_Portal/admin/admin_panel.php">Admin Panel</a>
                <?php else: ?>
                    <a href="/Online_Citizen_Service_Portal/user/dashboard.php">Dashboard</a>
                <?php endif; ?>
                <a href="/Online_Citizen_Service_Portal/logout.php">Logout</a>
            <?php endif; ?>
        </nav>
    </div>
</header>

