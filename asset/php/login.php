<?php
session_start();
$users = ['admin' => '123456']; // مستخدمين افتراضيين (username => password)

if (isset($_POST['register'])) {
    $new_user = $_POST['username'];
    $new_pass = $_POST['password'];
    if (!empty($new_user) && !empty($new_pass)) {
        $users[$new_user] = $new_pass;
        $message = "تم التسجيل بنجاح! الآن سجل دخول.";
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['user'] = $username;
        header("Location: start.php");
        exit();
    } else {
        $message = "اسم المستخدم أو كلمة المرور خاطئة!";
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول - موقع القطط</title>
    <style>
        body { font-family: Arial; background: #f0f8ff; text-align: center; padding: 50px; }
        .container { width: 300px; margin: auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { padding: 10px; background: #ff69b4; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h2>مرحبا بك في موقع القطط 🐱</h2>
        <?php if (isset($message)) echo "<p>$message</p>"; ?>
        
        <form method="post">
            <h3>تسجيل الدخول</h3>
            <input type="text" name="username" placeholder="اسم المستخدم" required>
            <input type="password" name="password" placeholder="كلمة المرور" required>
            <button type="submit" name="login">دخول</button>
        </form>
        
        <hr>
        
        <form method="post">
            <h3>تسجيل جديد</h3>
            <input type="text" name="username" placeholder="اسم المستخدم الجديد" required>
            <input type="password" name="password" placeholder="كلمة المرور" required>
            <button type="submit" name="register">تسجيل</button>
        </form>
    </div>
</body>
</html>