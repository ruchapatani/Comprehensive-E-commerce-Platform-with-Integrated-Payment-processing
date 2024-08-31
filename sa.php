<?php
require("includes\common.php");
$email = $_SESSION['email'];
 $order_no =  $_SESSION['order_no'];
$query1="SELECT *  from orders where email='$email'";
			
    $result = mysqli_query($con, $query1)or die($mysqli_error($con));
  
	

$query2="SELECT *  from payments where email='$email'";
			
    $result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
    $row2 = mysqli_fetch_array($result2);
    $date_ordered=$row2['date_ordered'];
	$status=$row2['status'];
	
 while ($row = mysqli_fetch_array($result)) { 
 $item_id=$row['item_id'];
$item_name=$row['item_name'];
$quantity=$row['frequency_ordered'];
$amount=$row['amount'];
	$query3="INSERT INTO history(order_no,email,item_id,item_name,quantity,amount,date_ordered,status) VALUES('$order_no','$email','$item_id','$item_name','$quantity','$amount','$date_ordered','$status')";
    mysqli_query($con, $query3) or die(mysqli_error($con));
 }
 
 $paydel="DELETE from payments";
	mysqli_query($con, $paydel) or die(mysqli_error($con));
	$del="DELETE FROM orders";
mysqli_query($con, $del) or die(mysqli_error($con));

header('location: index.php');
?>