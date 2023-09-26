<?php
// Mulai session
session_start();

// Membuat session
$_SESSION['npm'] = 2226250001;
$_SESSION['nama'] = "Agus";
$_SESSION['login'] = true;

// Cara panggil session
echo $_SESSION['npm'];
