<?php

include('config.php');

if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $Product_information = $_POST['Product_details'];

    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'.$image_name);
    $image_up = "images/".$image_name;
    $update = "UPDATE insert_skin_care SET name='$NAME' , price='$PRICE',Product_details='$Product_information', image='$image_up' WHERE id=$ID";
    mysqli_query($con, $update);

    header('location: insert_skin_care.php');
}
?>