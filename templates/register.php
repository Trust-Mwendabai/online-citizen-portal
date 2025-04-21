<?php include $_SERVER['DOCUMENT_ROOT'] . '/Online_Citizen_Service_Portal/includes/header.php'; ?>
<main>
<h2>Register</h2>
<form action="/Online_Citizen_Service_Portal/register.php" method="post">
    <label for="name">Full Name:</label>
    <input type="text" name="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <button type="submit">Register</button>
    <p>Already have an account? <a href="/Online_Citizen_Service_Portal/login.php">Login</a></p>
</form>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Online_Citizen_Service_Portal/includes/footer.php'; ?>
