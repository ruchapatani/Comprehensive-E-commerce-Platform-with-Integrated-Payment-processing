<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $email = $_SESSION['email'];
    $query = "INSERT INTO users_items(email, item_id, status) VALUES('$email', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: kurta.php');
}
?>   