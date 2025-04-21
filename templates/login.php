<?php include $_SERVER['DOCUMENT_ROOT'] . '/Online_Citizen_Service_Portal/includes/header.php'; ?>
<main>
<h2>Login</h2>
<form action="/Online_Citizen_Service_Portal/login.php" method="post">
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
    <p>Don't have an account? <a href="/Online_Citizen_Service_Portal/register.php">Register</a></p>
</form>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/Online_Citizen_Service_Portal/includes/footer.php'; ?>
