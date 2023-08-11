<?php
// استيراد ملف الاتصال بقاعدة البيانات
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];

  // التحقق من وجود البريد الإلكتروني في قاعدة البيانات
  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    // إرسال رمز إعادة التعيين عبر البريد الإلكتروني
    $resetCode = generateResetCode(); // توليد رمز إعادة التعيين العشوائي
    // تخزين رمز إعادة التعيين في قاعدة البيانات للمستخدم المعني
    $query = "UPDATE users SET reset_code = '$resetCode' WHERE email = '$email'";
    mysqli_query($conn, $query);

    // إرسال البريد الإلكتروني
    $subject = "إعادة تعيين كلمة المرور";
    $message = "قد تم إرسال هذا البريد الإلكتروني بناءً على طلب إعادة تعيين كلمة المرور الخاصة بك. يرجى استخدام الرمز التالي لإعادة تعيين كلمة المرور الخاصة بك: $resetCode";
    // قم بإرسال البريد الإلكتروني باستخدام دالة mail() أو حلول أخرى مثل مكتبة PHPMailer

    echo "تم إرسال رمز إعادة التعيين عبر البريد الإلكتروني";
  } else {
    echo "البريد الإلكتروني غير مسجل";
  }
}

// دالة لتوليد رمز إعادة التعيين العشوائي
function generateResetCode() {
  $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  $code = '';
  for ($i = 0; $i < 8; $i++) {
    $code .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $code;
}
?>
