<?php
// استيراد ملف الاتصال بقاعدة البيانات
require_once 'config.php';

// الحصول على قيمة المستخدم الحالي وكلمة المرور الجديدة من النموذج
session_start(); // إضافة session_start() لبدء الجلسة
$user_id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$current_password = isset($_POST['current_password']) ? $_POST['current_password'] : null; // التحقق من توافر المفتاح قبل استخدامه
$new_password = isset($_POST['new_password']) ? $_POST['new_password'] : null; // التحقق من توافر المفتاح قبل استخدامه

// التحقق من صحة المستخدم وتنفيذ استعلام التحديث إذا تم التحقق
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($user_id) && !empty($current_password) && !empty($new_password)) {
    if (validateUser($user_id, $current_password)) {
      // استعلام التحديث
      $query = "UPDATE users SET password = '$new_password' WHERE id = $user_id";

      // تنفيذ الاستعلام
      $result = mysqli_query($conn, $query);

      if ($result) {
        echo "تم تحديث كلمة المرور بنجاح!";
      } else {
        echo "حدث خطأ أثناء تحديث كلمة المرور.";
      }
    } else {
      echo "كلمة المرور الحالية غير صحيحة!";
    }
  } else {
    echo "برجاء إدخال كلمة المرور الحالية والجديدة!";
  }
}

// دالة للتحقق من صحة المستخدم وكلمة المرور الحالية
function validateUser($user_id, $current_password) {
  global $conn; // تأكد من استخدام المتغير $conn المستورد

  // استعلام SQL للتحقق من صحة المستخدم وكلمة المرور
  $query = "SELECT * FROM users WHERE id = $user_id AND password = '$current_password'";
  $result = mysqli_query($conn, $query);

  // التحقق من وجود صف واحد على الأقل يطابق المستخدم وكلمة المرور
  if (mysqli_num_rows($result) > 0) {
    return true; // كلمة المرور الحالية صحيحة
  } else {
    return false; // كلمة المرور الحالية غير صحيحة
  }
}
?>
