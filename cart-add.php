

<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $email = $_SESSION['email'];
    $query1="SELECT price from products where id=".$item_id;
    $result = mysqli_query($con, $query1)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $price=$row['price'];
    
     $query2="SELECT count(item_id) AS freq from orders_temp where item_id=".$item_id;
    $result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result2);
   $num=$row['freq'];
    if ($num == 0) {
    
        
    $sql1="SELECT name from products where id=".$item_id;
    
    $res2 = mysqli_query($con, $sql1)or die($mysqli_error($con));
    $row4 = mysqli_fetch_array($res2);
    $item_name=$row4['name'];
    $query = "INSERT INTO orders_temp(email, item_id,item_name,frequency_ordered,amount,status) VALUES('$email', '$item_id','$item_name','1','$price','Added to cart')";
    
    mysqli_query($con, $query) or die(mysqli_error($con));
	
	$query = "INSERT INTO orders(email, item_id,item_name,frequency_ordered,amount,status) VALUES('$email', '$item_id','$item_name','1','$price','Added to cart')";
    
    mysqli_query($con, $query) or die(mysqli_error($con));

   }
   else{
        
        $sql12="UPDATE orders_temp set frequency_ordered=frequency_ordered+1 where item_id=".$item_id;
        mysqli_query($con, $sql12) or die(mysqli_error($con));
		
		$sql12="UPDATE orders set frequency_ordered=frequency_ordered+1 where item_id=".$item_id;
        mysqli_query($con, $sql12) or die(mysqli_error($con));
        
        
         $sql21="UPDATE orders_temp set amount=".$price."*frequency_ordered where item_id=".$item_id;
        mysqli_query($con, $sql21) or die(mysqli_error($con));
       
            
         $sql21="UPDATE orders set amount=".$price."*frequency_ordered where item_id=".$item_id;
        mysqli_query($con, $sql21) or die(mysqli_error($con));
   }
     
   
   
   
}
header('location: cart.php');
?>   