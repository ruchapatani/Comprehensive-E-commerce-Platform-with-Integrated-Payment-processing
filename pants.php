<?php 
 
  $con=mysqli_connect('localhost','root','','onlineshopping');
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
            <div class="jumbotron" style="background-image: url(img/rain.jpg);">
			 
				<h1 style="padding-bottom:10px">Trousers & Pants</h1></div>
				
            </div>
			
        </div>
        <div class="container">
            <div class="row" >
			 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/men/pants/Spykar-shorts.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Spykar-shorts</h4><p>Price:Rs.430.00</p></div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(59)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=59" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=59" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
               
                 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/men/pants/INVICTUS-Men-Blue-Slim-Fit-Checked-Formal-Trousers.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>INVICTUS-Trouser</h4><p>Price:Rs.774.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(60)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=60" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=60" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
                 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/men/pants/INVICTUS-Men-Grey-Slim-Fit-Checked-Formal.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>INVICTUS-Men-Grey-Formal</h4><p>Price:Rs.799.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(61)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=61" class="btn btn-block btn-success" >Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=61" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
		 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/men/pants/INVICTUS-Men-Navy-Blue-Slim-Fit-Checked-Formal-Trousers.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>INVICTUS-Formal-Trouser</h4><p>Price:Rs.900.00</p></div>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(62)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=62" class="btn btn-block btn-success" >Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=62" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <img src="img/men/pants/Louis-Philippe-Men-Beige-Slim-Fit-Solid-Formal-Trousers.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Louis-Philippe-Trouser</h4><p>Price:Rs.1200.00</p></div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(63)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=63" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=63" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
                 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/men/pants/Mast--Harbour-Men-Trousers.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Mast-Harbour-Men-Trouser</h4><p>Price:Rs.699.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(64)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=64" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=64" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
                 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/men/pants/Peter-England-Men-Trousers.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Peter-England-Trouser</h4><p>Price:Rs.1500.00</p></div>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(65)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=65" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=65" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
		 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/men/pants/Puma-Men-White-ESS-Active-Woven-5-Solid-Sports-Shorts.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Puma-White-Sports-Short</h4><p>Price:Rs.1600.00</p></div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(66)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=66" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=66" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
                        <img src="img/men/pants/Roadster-Men-Charcoal-Solid-Chinos.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Roadster-Charcoal-Chinos</h4><p>Price:Rs.674.00</p></div>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(67)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=67" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=67" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
                 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/men/pants/Roadster-Men-Olive-Brown-Printed-Regular-Fit-Chino-Shorts.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Roadster-Men-Chino-Short</h4><p>Price:Rs.670.00</p></div>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(68)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=68" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=68" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
		 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/men/pants/Roadster-men-trousers.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Roadster-men-trouser</h4><p>Price:Rs.400.00</p></div>
                           <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(69)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=69" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=69" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
            </div>     
        </div>
		 <div class="col-md-3 col-sm-6">
                    
                    <div class="thumbnail">
                        <img src="img/men/pants/Black-Coffee-Men-Olive-Green-Formal-Trousers.jpg" alt="responsive image">
                          <div class="caption" style="text-align: center"><h4>Black-Formal-Trousers</h4><p>Price:Rs.1059.00</p></div>
                             <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(70)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="cart-add.php?id=70" class="btn btn-block btn-success">Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=70" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
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
        <center> <h4 style="padding-top:15px"><b>Copyright &copy;Macha Online Shopping Store. All Rights Reserved | Contact Us: +91 90000 00000</h4> </center>  </footer>
		</html>