<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h1>LOGIN</h1>
        <form action="login_proses.php" method="post">
            <img class="add-apps-perspective" src="./logo figma/addplus.png" />
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            <button type="submit">LOGIN</button>
        </form>
    </div>
    <div id="toast"></div>

<script>
    function showToast() {
        var toast = document.getElementById("toast");
        toast.className = "show";
        toast.innerText = "Login berhasil!"; 

        setTimeout(function() {
            toast.className = toast.className.replace("show", "");
            window.location.href = "dash.php"; // Redirect ke halaman dashboard setelah 3 detik
        }, 3000);
    }
</script>

</body>
</html>
