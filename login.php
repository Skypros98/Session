<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['info'])){
            echo $_SESSION['info'];
        }
    ?>
    <form action="" method="post">
        <input type="text" name="npm" placeholder="Nomor Pokok Mahasiswa" required> <br>
        <input type="password" name="password" placeholder="password" required> <br>
        <button type="submit">Login</button>
    </form>
    <?php
        // Cek apakah ada submit dari fore
        if(isset($_POST['npm'])) {
            // Cek apakah username == 2226250001 dan password = 123
            if($_POST['npm'] == "2226250001" && $_POST['password'] == 123) {
                // buat session username
                session_start();
                $_SESSION['npm'] = $_POST['npm'];
                // arahkan halaman ke dashboard.php
                header("Location: dashboard.php");
            } else {
                echo "Username atau password salah.";
            }
        }
    ?>
</body>
</html>