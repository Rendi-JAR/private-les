<!DOCTYPE html>
<html>
<head>
    <title>Halaman REGISTER</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>
    <div class="login-container">
        <h1>REGISTER</h1>
        <form method="POST" action="regis_proses.php">
            <img class="add-apps-perspective" src="./logo figma/pad_lock.png" />
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            <label for="confirm_password">Konfirmasi Password</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Konfirmasi password" required>
            <button type="submit">REGISTER</button>
        </form>
    </div>
</body>
</html>
