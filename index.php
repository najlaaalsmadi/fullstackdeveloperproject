<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
};

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'المنتج أضيف بالفعل إلى عربة التسوق!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
      $message[] = 'المنتج يضاف الى عربة التسوق!';
   }

};

if(isset($_POST['update_cart'])){
   $update_quantity = $_POST['cart_quantity'];
   $update_id = $_POST['cart_id'];
   mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
   $message[] = 'تم تحديث كمية سلة التسوق بنجاح!';
}

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
   header('location:index.php');
}
  
if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
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
   <title>عربة التسوق</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
    <style>
    
        ul{
            background-color: black;
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
          <a  href="index.php" class="active">العناية بالشعر </a>
        </li>
        <li><a href="">العناية بالطفل</a></li>
        <li><a href="#">لعنايه بالبشره</a></li>
          <li><a href="contact.php">التواصل </a></li>
      </ul>
       
      <ul class="nav navbar-nav navbar-right">
        <li><span>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="profile.php">معلومات المستخدم<span class="caret"></span></a>
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
<div class="container">


   <?php
      $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select_user) > 0){
         $fetch_user = mysqli_fetch_assoc($select_user);
      };
   ?>

<div class="products">

   <h1 class="heading" style="color:#3498db;">
منتجات العناية بالشعر  

    </h1>

   <div class="box-container">

   <?php
   include('config.php');
   $result = mysqli_query($conn, "SELECT * FROM products");      
   while($row = mysqli_fetch_array($result)){
   ?>
      <form method="post" class="box" action="">
         <img src="admin/<?php echo $row['image']; ?>"  width="200">
         <div class="name"><?php echo $row['name']; ?></div>
         <div class="price"><?php echo $row['price']; ?></div>
         <input type="number" min="1" name="product_quantity" value="1">
         <input type="hidden" name="product_image" value="<?php echo $row['image']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $row['price']; ?>">
         <input type="hidden" name="Product_information" value="<?php echo $row['Product_details'];?>">

         <input type="submit" value="الاضافه الى العربة " name="add_to_cart" class='btn btn-primary'>
          <br>
         <input type="submit" value="معلومات المنتج" name="معلومات المنتج " class='btn btn-primary'>

      </form>
   <?php
      };
   ?>

   </div>

</div>



</div>

</body>
</html>