<?php
// halaman ini bisa diakses jika session npm = 2226250062
session_start();
if ($_SESSION['npm'] == 2226250001) {
    echo "Selamat datang, " . $_SESSION['nama'];
} else {
    echo "Anda tidak diizinkan untuk mengakses halaman ini";
}
