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
    <title>الصفحة الرئيسية - موقع القطط</title>
    <style>
        body { font-family: Arial; background: #f0fff0; text-align: center; }
        a { text-decoration: none; padding: 15px; background: #20b2aa; color: white; margin: 20px; display: inline-block; border-radius: 10px; }
    </style>
</head>
<body>
    <h1>الصفحة الرئيسية </h1>
    <p>اختر ما تريد استكشافه:</p>
    <a href="breeds.php">أنواع القطط (السلالات)</a><br><br>
    <a href="login.php?logout=1">تسجيل خروج</a>
</body>
</html>