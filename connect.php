<?php
$servername = "192.168.30.23"; // عنوان الخادم
$username = "root"; // اسم المستخدم
$password = ""; // كلمة السر (قد تحتاج إلى تعديلها إذا كانت هناك كلمة مرور)
$dbname = "loginuser"; // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
echo "تم الاتصال بنجاح";

// إغلاق الاتصال بعد العملية
$conn->close();
?>
