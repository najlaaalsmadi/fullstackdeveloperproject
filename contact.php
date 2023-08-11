<!DOCTYPE html>
<html>
<head>
<title>
contact
</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
       <link rel="stylesheet" href="css/style.css">

 <style>

input[type=submit] {
 width:50%;
 height:40%; 
 text-align: center;
 float:center; 
 font-size:20px;
 border-radius:12px; 
 background-color:#3498db;
 color:#fff;
}

input[type=submit]:hover {
  background-color:#fff;
  color:black;
}   
     
 .btn-btn-success-btn-xl-text-uppercase
{
 width:50%;
 height:40%; 
 text-align: center;
 float:center; 
 font-size:20px;
 border-radius:12px; 
 margin:20px 40px;
 background-color:#3498db;
 color:#fff;
}
.btn-btn-success-btn-xl-text-uppercase:hover
{
     background-color:#fff;
     color:black;

}
        .btn-btn-success-btn-xl-text-uppercase
{
 width:50%;
 height:40%; 
 text-align: center;
 float:center; 
 font-size:20px;
 border-radius:12px; 
 margin:20px 40px;
 background-color:#3498db;
 color:#fff;
}
.btn-btn-success-btn-xl-text-uppercase:hover
{
     background-color:#fff;
     color:black;

}
* {
  box-sizing: border-box;
}

input[type=text], textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
    resize: vertical;}
.form #email{
   width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
    resize: vertical;   
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
 width:50%;
 height:40%; 
 text-align: center;
 float:center; 
 font-size:20px;
 border-radius:12px; 
 background-color:#3498db;
 color:#fff;
}

input[type=submit]:hover {
  background-color:#fff;
  color:black;
}
.form label
{
    color: #3498db;
}

    h1
     {
         color:#3498db;
     }
     .navbar navbar-inverse
     {
         color:#3498db;
     }
</style>
</head>
<body>
  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li>
          <a  href="index.php" class="active">العناية بالشعر </a>
        </li>
        <li><a href="">العناية بالطفل</a></li>
        <li><a href="#">لعنايه بالبشره</a></li>
          <li><a href="contact.php">التواصل </a></li>
      </ul>
       
      <ul class="nav navbar-nav navbar-right">
        <li><span >
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">معلومات المستخدم<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">معلومات المستخدم</a></li>
            <li><a href="#">الاعدادات</a></li>
          </ul>
        </li>
            </span></li>
        <li><a href="index.php?logout=<?php echo $user_id; ?>"><span class="glyphicon glyphicon-log-in"></span>  تسجيل الخروج</a></li>
                      <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> عربة التسوق</a></li>

      </ul>
    </div>
  </div>
</nav>
    <div class="col-about">
    <h1>التواصل</h1> 
    
    <p style="color:#3498db;">
     التواصل مع صيدلانية 
    </p>
    <div class="Contact"> 
 
    <a href="https://api.whatsapp.com/send?phone=962777956583&amp;text=مرحبا_عندي_سؤال" >
    <button class="btn-btn-success-btn-xl-text-uppercase" type="submit" >  
    <img src="https://img.icons8.com/color/48/000000/whatsapp.png" width="70" hight="70">
    Whatsapp
    </button>
    </a>
           <a href="https://t.me/Najlaaalsmadi;text=مرحبا_عندي_سؤال">
                    <button class="btn-btn-success-btn-xl-text-uppercase" type="submit" > 
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/2048px-Telegram_logo.svg.png" width="70" hight="70">Telegram</button>
            </a>  

     <hr>
 <div class="form">
     <br><br>
     <h2 style="color:#3498db;">Gmail</h2>
     <form action="formphp.php" method="post">
       <br>
       <label for="FullName" >FullName:</label>
       <br>
       <input type="text" id="FullName" name="FullName" placeholder="Enter FullName">
       <br>
       <label for="email" >email:</label>
       <br>
       <input type="email" id="email" name="email" placeholder="Enter Email">
       <br>
       <label for="message" >message:</label>
       <br>
       <textarea rows="4" cols="50" id="message" name="message">Enter  message here...</textarea>
         <br>
       <input type="submit" value="Submit" class='btn btn-primary'>
       
       
     </form>  
     
</div>         
</div>      
</div>
</body>
</html>