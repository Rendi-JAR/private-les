<!DOCTYPE html>
<html>
<head>
    <title>Halaman REGISTER</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>
    <div class="login-container">
        <h1>REGISTER</h1>
        <form>
            <img class="add-apps-perspective" src="./logo figma/pad_lock.png" />
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email">
            <label for="password">Password</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email">
            <label for="password">Konfirmasi Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password">
            <button type="submit" onclick="myFunction()"><a class="name" href="dash.php">REGISTER</a></button>
            <script>
                function myFunction() {
                  alert("Welcome back");
                }
              </script>          
        </form>
    </div>
</body>
</html>