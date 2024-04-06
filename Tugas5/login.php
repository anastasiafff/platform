<?php
session_start();

// Cek jika user sudah login, redirect ke halaman to-do list jika sudah login
if (isset($_SESSION['username'])) {
    header("Location: todo_list.php");
    exit;
}

// Jika form login disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simpan username dan password yang diberikan oleh user
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan validasi login disini (misalnya, cek di database)
    // Contoh sederhana dengan satu user 'admin' dengan password 'nim-anda'
    if ($username === 'admin' && $password === 'nim-anda') {
        // Jika login berhasil, simpan username dalam session
        $_SESSION['username'] = $username;
        header("Location: todo_list.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        User Name : <input type="text" name="username" required><br><br>
        Password  : <input type="password" name="password" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
