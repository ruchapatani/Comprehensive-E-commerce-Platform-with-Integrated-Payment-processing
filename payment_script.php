<?php
        $con=mysqli_connect('localhost','root','','onlineshopping');
  session_start();
  
if(isset($_POST['submit']))
    {
	
		$email = $_SESSION['email'];
		//SELECT cust_id FROM customer WHERE email="mamt17cs@cmrit.ac.in"

	 $query1="SELECT cust_id from customer where email='$email'";
			
    $result = mysqli_query($con, $query1)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $cust_id=$row['cust_id'];
        $address= $_POST['address'];
		date_default_timezone_set('Asia/Kolkata');
		 $date_ordered= date("Y/m/d");
         $payment_type = $_POST['payment_type'];

		$query = "INSERT INTO payments(cust_id,email,payment_type,address,date_ordered,status) VALUES('$cust_id','$email','$payment_type','$address','$date_ordered','Successfull')";
 $result2 = mysqli_query($con, $query)or die($mysqli_error($con));


 header('location: su.php');
    
	}
    
?>