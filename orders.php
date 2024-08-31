<?php
require("includes\common.php");
$email = $_SESSION['email'];
$query1="SELECT cust_id from customer where email='$email'";
			
    $result = mysqli_query($con, $query1)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $cust_id=$row['cust_id'];
$query = "SELECT * from history where email= '$email' order by (sl) desc"; 
 $result2 = mysqli_query($con, $query) or die($mysqli_error($con));
 ?>
 
 <!DOCTYPE html>
<html>
    <head>
        <title>your orders</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
                 <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
</head>
<body style="background-color:#FFFFFF">
    <?php
      
        function doNewColor(){
        $color= dechex(rand(0x000000,0xFFFFFF));
        return $color;
        }
        ?>
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
          <li><a href="saree.php">Sarees</a></li>
          <li><a href="kurtas.php">Kurtas & Kurtis</a></li>
          <li><a href="lehenga.php">Lehenga Choli</a></li>
           <p style="color: blue">Western Wear</p>
          <li><a href="dresses.php">Dresses</a></li>
          <li><a href="toptis.php">Tops,T-shirts & Shirts</a></li>
          <li><a href="jeanslegs.php">Jeans & Leggings</a></li>
           <li><a href="skirts.php">Skirts</a></li>
            <li><a href="sweats.php">Sweaters</a></li>
           <p style="color: blue">Sports Wear</p>
          <li><a href="tracks.php">Trackpants & Joggers</a></li>
          <li><a href="sports.php">Sweatshirts & T-shirts</a></li>
          
        
        </ul>
      </li>
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#000000">Kids<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <p style="color: blue">Boy's Clothing</p>
         <li><a href="bshirts.php">Shirts</a></li>
           <li><a href="btshirts.php">T-Shirts</a></li>
           <li><a href="bpants.php">Trousers & Pants</a></li>
          <li><a href="bjeans.php">Jeans</a></li>
           <li><a href="bindian.php">Indian Wear</a></li>
           <p style="color:blue">Girl's Clothing</p>
         <li><a href="gdresses.php">Dresses & Tops</a></li>
          <li><a href="gtops.php">T-shirts </a></li>
          <li><a href="gjeans.php">Jeans</a></li>
           <li><a href="gskirts.php">Shorts & Skirts</a></li>
           <li><a href="gindian.php">Indian Wear</a></li>
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
 <div style="background-image: url(img/rucha11.jpg)">
    <div class="container" style="margin-top: 10px; " >
	
         <div class="row">
             <div class="col-lg-12"><h2><strong>Your Orders     <span class="glyphicon glyphicon-time"style="color:#000000"></span></strong></h2></div>
          </div>
        <?php while ($row1 = mysqli_fetch_array($result2)) { ?>
        <div class="row text-center" id="hi">
                <div class="col-md-12 col-sm-6 home-feature">
          <div class="thumbnail"style="background-color: rgba(255, 255, 255 ,0.7 )">
                        
          <div class="row">
              <div class="col-xs-2">Item id</div>
              <div class="col-xs-10"><?php echo $row1['item_id']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">Item Name</div>
              <div class="col-xs-10"><?php echo $row1['item_name']; ?></div>
          </div>
          
          <div class="row">
              <div class="col-xs-2">Quantity</div>
              <div class="col-xs-10"><?php echo $row1['quantity']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">Amount</div>
              <div class="col-xs-10"><?php echo "Rs "; echo $row1['amount']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">Date Ordered</div>
              <div class="col-xs-10"><?php echo $row1['date_ordered']; ?></div>
          </div>
        
               <div class="row">
              <div class="col-xs-2">Status</div>
              <div class="col-xs-10"><?php echo $row1['status']; ?></div>
          </div>
        
          </div>
                </div>
        </div>
          <hr/>
        <?php } ?>
    </div>
     </div>
	 
</body>
<footer style="background-color:#dcdcdc ; height:50px" > 
        <center> <h4 style="padding-top:15px"><b>Copyright &copy;Macha Online Shopping Store. All Rights Reserved | Contact Us: +91 90000 00000</h4> </center>  </footer>
</html>

