<?php

require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET["id"]; 
    $email = $_SESSION['email'];
     $query3="SELECT price AS pr from products where id=".$item_id;
    $result3 = mysqli_query($con, $query3)or die($mysqli_error($con));
    $row1 = mysqli_fetch_array($result3);
   $pr=$row1['pr'];
    
   $query2="SELECT frequency_ordered AS freq from orders_temp where item_id=".$item_id;
 
    $result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result2);
   $num=$row['freq'];
   
  
  
   
   
   if($num>1){
        $query = "UPDATE  orders_temp set frequency_ordered=frequency_ordered-1,amount=amount-'$pr' where item_id='$item_id' AND email='$email' ";
        mysqli_query($con, $query) or die(mysqli_error($con));
   }
   else{
    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $query = "DELETE FROM orders_temp WHERE item_id='$item_id' AND email='$email' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    
   }
   header("location:cart.php");
}
?>

