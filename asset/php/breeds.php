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
    <title>أنواع القطط</title>
    <style>
        body { font-family: Arial; background: #fffacd; padding: 20px; }
        .breed { margin: 20px; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        img { max-width: 100%; border-radius: 10px; }
    </style>
</head>
<body>
    <h1>أنواع القطط الشهيرة </h1>
    <a href="home.php">عودة للرئيسية</a>

    <div class="breed">
        <h2>القط الشيرازي (Persian)</h2>
        <p>قطط لطيفة ذات فراء طويل ووجه مسطح، هادئة جداً.</p>

<grok-card data-id="884782" data-type="image_card"  data-arg-size="LARGE" ></grok-card>



<grok-card data-id="f01ca3" data-type="image_card"  data-arg-size="LARGE" ></grok-card>

    </div>

    <div class="breed">
        <h2>القط السيامي (Siamese)</h2>
        <p>نشيطة وكثيرة الكلام، عيون زرقاء مميزة.</p>

<grok-card data-id="0d61f7" data-type="image_card"  data-arg-size="LARGE" ></grok-card>



<grok-card data-id="375fd8" data-type="image_card"  data-arg-size="LARGE" ></grok-card>

    </div>

    <div class="breed">
        <h2>مين كون (Maine Coon)</h2>
        <p>أكبر سلالة منزلية، ذكية ولطيفة.</p>

<grok-card data-id="04c7cd" data-type="image_card"  data-arg-size="LARGE" ></grok-card>



<grok-card data-id="62be41" data-type="image_card"  data-arg-size="LARGE" ></grok-card>

    </div>

    <div class="breed">
        <h2>البنغال (Bengal)</h2>
        <p>مظهر بري مثل النمر، نشيطة جداً.</p>

<grok-card data-id="c64812" data-type="image_card"  data-arg-size="LARGE" ></grok-card>



<grok-card data-id="da6531" data-type="image_card"  data-arg-size="LARGE" ></grok-card>

    </div>

    <div class="breed">
        <h2>الاسكتلندي المطوي (Scottish Fold)</h2>
        <p>آذان مطوية لطيفة، شخصية حنونة.</p>

<grok-card data-id="bd9792" data-type="image_card"  data-arg-size="LARGE" ></grok-card>



<grok-card data-id="b5e9a3" data-type="image_card"  data-arg-size="LARGE" ></grok-card>

    </div>
</body>
</html>