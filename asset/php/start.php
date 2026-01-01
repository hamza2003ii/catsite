<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ابدأ</title>
    <style>
        body { font-family: Arial; background: #ffe4e1; text-align: center; padding: 100px; }
        button { padding: 20px 40px; font-size: 24px; background: #ff1493; color: white; border: none; border-radius: 20px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>مرحبا <?= $_SESSION['user'] ?>! 🐾</h1>
    <p>اضغط على الزر للبدء في استكشاف عالم القطط</p>
    <a href="home.php"><button>Start</button></a>
</body>
</html>
