<?php
// halaman ini bisa diakses jika session npm = 2226250001
session_start();
if (isset($_SESSION['npm']) and $_SESSION['npm'] == 2226250001) {
    echo "Selamat datang, " . $_SESSION['nama'];
    echo "<br> <a href='logout.php>Logout</a>";
} else {
    echo "Anda tidak diizinkan untuk mengakses halaman ini";
    header("Location: session.php");
}
