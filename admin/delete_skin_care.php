<?php

include('config.php');
$ID = $_GET['id'];
mysqli_query($con, "DELETE FROM insert_skin_care WHERE id=$ID");
header('location: products_skin_care.php')

?>