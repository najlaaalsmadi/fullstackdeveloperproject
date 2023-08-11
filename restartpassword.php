<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الملف الشخصي</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

        .form-container input[type="password"] {
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
</head>
<body>
    <?php
    if(isset($message)){
        foreach($message as $message){
            echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
        }
    }
    ?>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#">جماليات بيوتي شوب</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php" class="active">العناية بالشعر</a>
                    </li>
                    <li><a href="">العناية بالطفل</a></li>
                    <li><a href="#">لعنايه بالبشره</a></li>
                    <li><a href="contact.php">التواصل</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <span>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="profile.php">معلومات المستخدم<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php">معلومات المستخدم</a></li>
                                    <li><a href="#">الاعدادات</a></li>
                                </ul>
                            </li>
                        </span>
                    </li>
                    <li><a href="index.php?logout=<?php echo $user_id; ?>"><span class="glyphicon glyphicon-log-in"></span>  تسجيل الخروج</a></li>
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> عربة التسوق</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>تغيير كلمة المرور</h1>
        <div class="form-container">
            <form action="change_password.php" method="post">
                <div class="form-group">
                    <label for="current-password">كلمة المرور الحالية:</label>
                    <input type="password" id="current-password" name="current_password" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="new-password">كلمة المرور الجديدة:</label>
                    <input type="password" id="new-password" name="new_password" required class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">تغيير</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
