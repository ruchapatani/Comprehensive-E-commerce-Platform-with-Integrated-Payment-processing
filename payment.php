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
      
       <li><a data-toggle="modal" href='#modal-id'><i class="fa fa-user fa-2x"></i><span class="icon-text"> <span class="glyphicon glyphicon-user"style="color:#000000"></span><span class="icon-text" style="color:#000000">  <?PHP print_r($_SESSION['username']) ?> </span> </a></li>
    </ul>
  </div>
</nav>
            </div>
        
 <div class="row text-center" id="cards">
                <div class="col-md-4 col-sm-6 col-md-offset-4 home-feature">
                    <h2><strong>MAKE PAYMENT</strong></h2>
                    <div class="thumbnail">
                        
                        <img src="img/cards.jpg" alt="">
                        
                    </div>
                </div>
 </div>
        <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                       
                        <form  action="payment_script.php" method="post">
						 <div class="form-group" >
            <h4 > Select Payment Method</h4>
            <select name="payment_type" class="form-control" >
            	  <option value="">Select</option>
				  <option value="credit">Credit</option>
				  <option value="debit">Debit</option>
			</select> 
			
        </div>
                            <div class="form-group">
                             Cardno:   <input class="form-control" type="number" placeholder="cardno" name="card_no"  required = "true" >
                            </div>
                            <div class="form-group">
                               Name on the  card: <input type="text" class="form-control"  placeholder="Name on card" name="cardname" required = "true">
                            </div>
                            <div class="form-group">
                           Card type:  <br><select name="card_type"><option value="VISA">VISA</option>
                                    <option value="MasterCard">MasterCard</option>
                                     <option value="AmericanExpress">American Express</option>
                                      <option value="DiscoverNetwork">Discover Network</option>
                                       
                                </select>
                            </div>
                            <div class="form-group">
                              Expiry Month:  <select name="expiry_month"><option value="Jan">Jan</option><option value="Feb">Feb</option><option value="Mar">Mar</option><option value="Apr">Apr</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="Aug">Aug</option><option value="Sep">Sep</option><option value="Oct">Oct</option><option value="Nov">Nov</option><option value="Dec">Dec</option></select>
                               Expiry Year:  <select name="expiry_year"><option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                     <option value="2021">2021</option>
                                      <option value="2022">2022</option>
                                       <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                </select>
                            </div>
                            <div class="form-group">
                               CVV No: <input  type="number" class="form-control"  placeholder="CVV NO" name="cvv" required = "true">
                            </div>
                            <div class="form-group">
                             
							     <div class="form-group">
                         Enter Delivery address:  <input type="text"  class="form-control" name="address" placeholder="Address" required = "true">
                        </div>
						
							  </div>
                     <button type="submit"  name="submit" class="btn btn-primary" >Confirm Order</button><br><br></div>
               </form>
                    </div>
                </div>
 </body>
 <footer style="background-color:#dcdcdc ; height:50px" > 
        <center> <h4 style="padding-top:15px"><b>Copyright &copy;Macha Online Shopping Store. All Rights Reserved | Contact Us: +91 90000 00000</h4> </center>  </footer>
		</html>