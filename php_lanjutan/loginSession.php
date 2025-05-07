<?php
session_start();

try {
    // Jika sudah login, langsung ke dashboard
    if (isset($_SESSION['username'])) {
        header("Location: dashboard.php");
        exit;
    }

    // Proses form hanya jika POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            throw new Exception("Username dan password tidak boleh kosong.");
        }

        $username = $_POST['username'];
        $password = $_POST['password'];

        // Data login statis
        $valid_username = 'admin';
        $valid_password = '12345';

        // Validasi login
        if ($username === $valid_username && $password === $valid_password) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit;
        } else {
            throw new Exception("Username atau password salah!");
        }
    }

} catch (Exception $e) {
    $error = $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
