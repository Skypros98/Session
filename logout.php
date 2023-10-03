<?php
session_start();
session_destroy();
session_start();
$_SESSION['info'] = "Anda telah logout.";
header("Location: login.php");
