<?php
 $con=mysqli_connect('localhost','root','','onlineshopping');
  session_start();
		 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MACHA Online Store </title>
     <!--  <link rel="stylesheet" type="text/css" href="style.css" > 
       <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="style.css" > 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> </head>
        

    <body>
       <div class="header">
            <nav class="navbar  navbar-fixed-top" style="background-color: #DCDCDC">
  <div class="container-fluid">
    <div class="navbar-header">
	<div  class="navbar-brand" style="padding-top:5px"><img src="img/macha.png" height="45" width="60" > </div>
	<DIV  class="navbar-brand" ><b> MACHA.com</DIV>
    
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php"style="color:#000000">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#000000">Men <span class="caret"></span></a>
        <ul  class="dropdown-menu" >
              <p style="color: blue">Ethnic Wear</p>
          <li ><a href="kurta.php">Kurtas & Sherwani</a></li>
          <li><a href="dhoti.php">Dhoti</a></li>
           <p style="color: blue">Western Wear</p>
          <li ><a href="suits.php">Suits</a></li>
          <li><a href="shirts.php">Shirts</a></li>
           <li><a href="tshirts.php">T-Shirts</a></li>
           <li><a href="pants.php">Trousers & Pants</a></li>
          <li><a href="jeans.php">Jeans</a></li>
          <p style="color: blue">Sports Wear</p>
          <li><a href="trackpants.php">Trackpants & Joggers</a></li>
          <li><a href="ss.php">Sweatshirts</a></li>
		  
        </ul>
      </li>
       <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"style="color:#000000">Women<span class="caret"></span></a>
        <ul class="dropdown-menu">
            
            <p style="color: blue">Ethnic Wear</p>
          <li><a href="#">Sarees</a></li>
          <li><a href="#">Kurtas & Kurtis</a></li>
          <li><a href="#">Lehenga Choli</a></li>
           <p style="color: blue">Western Wear</p>
          <li><a href="#">Dresses</a></li>
          <li><a href="#">Tops,T-shirts & Shirts</a></li>
          <li><a href="#">Jeans & Leggings</a></li>
           <li><a href="#">Skirts</a></li>
            <li><a href="#">Sweaters & Jackets</a></li>
           <p style="color: blue">Sports Wear</p>
          <li><a href="#">Trackpants & Joggers</a></li>
          <li><a href="#">Sweatshirts & T-shirts</a></li>
          
        
        </ul>
      </li>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#000000">Kids<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <p style="color: blue">Boy's Clothing</p>
         <li><a href="#">Shirts</a></li>
           <li><a href="#">T-Shirts</a></li>
           <li><a href="#">Trousers & Pants</a></li>
          <li><a href="#">Jeans</a></li>
           <li><a href="#">Indian Wear</a></li>
           <p style="color:blue">Girl's Clothing</p>
         <li><a href="#">Dresses</a></li>
          <li><a href="#">Tops,T-shirts & Shirts</a></li>
          <li><a href="#">Jeans</a></li>
           <li><a href="#">Skirts</a></li>
           <li><a href="#">Indian Wear</a></li>
        </ul>
      </li>

      
    </ul>
    <ul class="nav navbar-nav navbar-right">
		 <li><a href="cart.php"><i class="fa fa-shopping-cart fa-2x"></i> <span class="glyphicon glyphicon-shopping-cart"style="color:#000000"></span> <span class="icon-text" style="color:#000000" >Cart </span></a></li>
      
       <li><a data-toggle="modal" href='#modal-id'><i class="fa fa-user fa-2x"></i><span class="icon-text"> <span class="glyphicon glyphicon-user"style="color:#000000"></span><span class="icon-text" style="color:#000000"><?PHP print_r($_SESSION['username']) ?> </span> </a></li>
	   <li><a href="logout.php"><i class="fa fa-shopping-cart fa-2x"></i> <span class="glyphicon glyphicon-log-out"style="color:#000000"></span> <span class="icon-text" style="color:#000000" >Log Out </span></a></li>
    </ul>
  </div>
</nav>
            </div>
<?php $rucha = 'MACHA' . strval((rand(100,10000))); 
		 $_SESSION['order_no'] = $rucha;
		?>
<div class="jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
  <div class="text-white text-center py-5 px-4">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Thankyou for Shopping with us!</strong></h2>
	  <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>You can track your order using: <?php echo $rucha  ;?></strong></h2>
      <p class="mx-5 mb-5">Your order will be delivered on your address within  <?php
	  date_default_timezone_set('Asia/Kolkata');
	  $date = date("Y/m/d");
    echo date('Y-m-d', strtotime($date. ' + 10 days')); ?>;
      </p> 
      <a href="sa.php" class="btn btn-outline-white btn-md"><i class="fas fa-clone left"></i>Shop Again</a>
	  <a href="cancel_order.php" class="btn btn-outline-white btn-md"><i class="fas fa-clone left"></i>Click here to cancel ur order</a>
    </div>
  </div>
</div>

</body>
 <footer style="background-color:#dcdcdc ; height:50px" > 
        <center> <h4 style="padding-top:15px"><b>Copyright &copy;Macha Online Shopping Store. All Rights Reserved | Contact Us: +91 90000 00000</h4> </center>  </footer>
</html>