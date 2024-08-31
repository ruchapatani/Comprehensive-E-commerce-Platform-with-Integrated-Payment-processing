 <?php $con=mysqli_connect('localhost','root','','onlineshopping');
  session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>MACHA Online Store </title>
     <!--  <link rel="stylesheet" type="text/css" href="style.css" > 
       <!--        Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="style.css" > 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
   
       
    </head>
    
    <body>
	  <?php
       
        include 'includes/check-if-added.php';
        ?>
      <div id="top">
           
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
      <?php if (!isset($_SESSION['email'])) { ?>
        <li><a href="login.php"><span class="icon-text"> <span class="glyphicon glyphicon-user"style="color:#000000"></span><span class="icon-text" style="color:#000000">LogIn/SignUp </span></a></li>
    </ul>
  </div>
</nav>
            </div>
			
			<!-- Start of modal window -->
       
                                <?php 
	  } else { 			  ?>
		
  
      
       <li><p style="padding-top:15px"><i class="fa fa-user fa-2x"></i><span class="icon-text"> <span class="glyphicon glyphicon-user"style="color:#000000" ></span><span class="icon-text" style="color:#000000" ><?php print_r($_SESSION['email'])  ?></span></p></li>
    <li><a href="logout.php"><i class="fa fa-user fa-2x"></i><span class="icon-text"> <span class="glyphicon glyphicon-log-out"style="color:#000000"></span><span class="icon-text" style="color:#000000">  Logout  </span> </a></li>
  </ul>
  </div>
  
</nav>
            </div>
		

						<?php 	} ?>
          
         
          <div class="container" style=" margin-top:30px">
            <div class="jumbotron" style="background-image: url(img/aaj2.jpg);">
			 
				<h1 style="padding-bottom:10px">Tops ,T-shirts & Shirts</h1></div>
				
            </div>
			
        </div>
        <div class="container">
            <div class="row" >
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tops/Harpa-Women-Tops (2).jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Harpa-Women-Shirt</h4><p>Price:Rs.599.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(152)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=152" class="btn btn-block btn-success" >Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=152" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
                 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tops/Harpa-Women-Tops.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Harpa-Women-Tops</h4><p>Price:Rs.774.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(153)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=153" class="btn btn-block btn-success" >Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=153" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
                 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tops/Harpa-Women-Tops-1.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Harpa-Women-Top</h4><p>Price:Rs.600.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(154)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=154" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=154" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
		 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tops/SASSAFRAS-Women-Olive-Green-Regular-Fit-Solid-Casual-Shirt-3-1.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>SASSAFRAS-Olive-Top</h4><p>Price:Rs.700.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(155)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=155" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=155" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
            </div>
               <div class="row">
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tshirts/Harpa-Women-Tops.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Harpa-Women-Tshirt</h4><p>Price:Rs.500.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(156)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=156" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=156" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
                 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tshirts/MANGO-Women-Tshirts.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>MANGO-Women-Tshirts</h4><p>Price:Rs.574.00</p></div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(157)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=157" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=157" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
                 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tshirts/Mast--Harbour-Women-Blue-Solid-Round-Neck-T-Shirt.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Mast&Harbour-Blue-T-Shirt </h4><p>Price:Rs.890.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(158)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=158" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=158" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
		 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tshirts/Roadster-Women-Grey-Melange-Solid-Round-Neck-T-shirt.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Roadster-Grey-T-shirt</h4><p>Price:Rs.800.00</p></div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(159)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=159" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=159" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
            </div>
			  <div class="row">
                <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tshirts/ONLY-Women-White--Beige-Printed-Round-Neck-T-shirt.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>ONLY-Women-White--Beige-Printed-Round-Neck-T-shirt </h4><p>Price:Rs.700.00</p></div>
                              <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(160)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=160" class="btn btn-block btn-success" >Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=160" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
                 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tshirts/Roadster-Women-Maroon-Solid-Round-Neck-T-shirt.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Roadster-Women-Maroon-Solid-Round-Neck-T-shirt</h4><p>Price:Rs.774.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(161)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=161" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=161" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
                 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tops/Style-Quotient-Women-Maroon-Solid-Top5-1.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Style-Quotient-Women-Maroon-Solid-Top5-1</h4><p>Price:Rs.600.00</p></div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(162)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=162" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=162" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
		 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/women/tops/Style-Quotient-Women-Tops.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Style-Quotient-black-Women-Tops</h4><p>Price:Rs.500.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(163)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=163" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=163" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
            </div>
            </div>
        </div>
		<footer style="background-color:#dcdcdc ; height:50px" > 
        <center> <h4 style="padding-top:15px"><b>Copyright &copy; Macha Online Shopping Store. All Rights Reserved | Contact Us: +91 90000 00000</h4> </center>  </footer>
		</html>