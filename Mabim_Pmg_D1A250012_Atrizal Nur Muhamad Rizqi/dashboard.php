<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
echo "Selamat Berhasil Login<br>";
echo $_SESSION['session_username'];
?>