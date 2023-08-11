<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>نسيت كلمة المرور</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Cairo', sans-serif;
      background-color: #f8f8f8;
    }

    .container {
      margin-top: 100px;
      text-align: center;
    }

    h1 {
      font-size: 30px;
      color: #3498db;
    }

    .form-container {
      width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .form-container label {
      color: #3498db;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .form-container input[type="email"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .form-container button {
      width: 100%;
      padding: 10px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .form-container button:hover {
      background-color: #207ab0;
    }
  </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
  <div class="container">
    <div class="form-container">
      <h1>نسيت كلمة المرور</h1>
      <form action="forgot_password.php" method="post">
        <div class="form-group">
          <label for="email">عنوان البريد الإلكتروني:</label>
          <input type="email" id="email" name="email" required class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">إرسال رمز إعادة التعيين</button>
      </form>
    </div>
  </div>
</body>
</html>
