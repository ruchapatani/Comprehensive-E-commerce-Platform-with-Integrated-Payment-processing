<?php
        $con=mysqli_connect('localhost','root','','onlineshopping');
  session_start();
  $email = $_SESSION['email'];
  mysqli_multi_query ($con, "CALL cancelorder('$email')") OR DIE (mysqli_error($con));
		
		echo "Your order has been cancelled.";
		header('location: su.php');
		?>