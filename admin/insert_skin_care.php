<?php

include('config.php');

if(isset($_POST['upload'])){
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $Product_information = $_POST['Product_details'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'. $image_name);
    $image_up = "images/".$image_name;
    $insert = "INSERT INTO  insert_skin_care (name, price,Product_details ,image) VALUES ('$NAME','$PRICE',' $Product_information','$image_up')";
    mysqli_query($con, $insert);
    header('location: products_skin_care.php');
}
?>