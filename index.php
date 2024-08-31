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
    <script type="text/javascript">
  function check(pwd1)
  {
	  if(pwd1.value.length<4){
		  alert("Error: Password must contain at least four characters!");
       return false;
        
      }
  }
		  
  function checkForm(pwd1,pwd2)
  {
    

    if(pwd1.value !=pwd2.value) {
      
        alert("Error: Entered Password is not matching!! Try Again.");
       return false;
        
      }
      
      
     
      }
      
    
    
  

</script>
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
          
         
        
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/img10.jpg" alt="..." class="img-responsive">
      <div class="carousel-caption">
      
      </div>
    </div>
    <div class="item">
      <img src="img/img0.jpg" alt="..." class="img-responsive">
      <div class="carousel-caption">
      
      </div>
    </div>
       <div class="item" style="padding-left:150px">
      <img src="img/img7.jpg" alt="..." class="img-responsive">
      <div class="carousel-caption">
      
      </div>
    </div>
	 <div class="item">
      <img src="img/img6.png" alt="..." class="img-responsive">
      <div class="carousel-caption">
       
      </div>
    </div>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          </div>
<div style="background-color:#ffffff">		  
		  
		  
		  <img src="img/brands.jpg"
         > 
		  
		    <div class="container" >
                  <div class="row" style="padding-bottom:20px">
          <div class="col-md-3 col-sm-6">      
            <figure>
    <img src="img/adidas.jfif"
         height="350" width="250">
   
</figure>

        </div>
   
                 
          <div class="col-md-3 col-sm-6">      
             <figure>
    <img src="img/biba1.jfif"
         height="350" width="250">
   
</figure>

        </div>
                <div class="col-md-3 col-sm-6">      
            <figure>
    <img src="img/wetside.jfif"
         height="350" width="250">
   
</figure>

        </div>
                        <div class="col-md-3 col-sm-6">      
            <figure>
    <img src="img/puma.jfif"
        height="350" width="250">
    
</figure>

        </div>
  
                  </div> 
				   <div class="row">
          <div class="col-md-3 col-sm-6">      
            <figure>
    <img src="img/manyavar1.jfif"
         height="300" width="250">
        
   
</figure>

        </div>
   
                 
          <div class="col-md-3 col-sm-6">      
             <figure>
    <img src="img/all about u.jpg"
         height="350" width="250">
   
</figure>

        </div>
                <div class="col-md-3 col-sm-6">      
            <figure>
    <img src="img/dressberry.jpg"
         height="350" width="250">
   
</figure>

        </div>
                        <div class="col-md-3 col-sm-6">      
            <figure>
    <img src="img/roadster.jpg"
        height="350" width="250">
    
</figure>

        </div>
  
                  </div> </div></div>
				  <hr>
				  <div class="container">
				  <h3 style="color:#769CD3" >MACHA: THE ULTIMATE DESTINATION FOR ONLINE SHOPPING IN INDIA</h3>
<p>If you would like to experience the best of online shopping for men, women and kids in India, you are at the right place. Macha is the ultimate destination for fashion and lifestyle. It is time to redefine your style statement with our treasure-trove of trendy items. Our online store brings you the latest in designer products straight out of fashion houses. You can shop online at Macha from the comfort of your home and get your favourites delivered.

<br><h4 style="color:#769CD3"><b>BEST ONLINE SHOPPING SITE IN INDIA FOR FASHION</h4>
Macha offers you the ideal combination of fashion and functionality for men, women and kids. You will realise that the sky is the limit when it comes to the types of outfits that you can purchase for different occasions.
<ul style="circle">
<li >Smart men’s clothing - At Myntra you will find myriad options in smart formal shirts and trousers, cool T-shirts and jeans, or kurta a combinations for men. Wear your attitude with printed T-shirts. Create the back-to-campus vibe with varsity T-shirts and distressed jeans. Be it gingham, buffalo or window-pane style, checked shirts are unbeatably smart. Team them up with chinos, cuffed jeans or cropped trousers for a smart casual look. Opt for a stylish layered look .</li>
<li>Trendy women’s clothing - Online shopping for women at Macha is a mood-elevating experience. Look hip and stay comfortable with chinos and printed skirts this summer. Look hot on your date dressed in a little black dress, or opt for red dresses for a sassy vibe. Striped dresses and T-shirts represent the classic spirit of nautical fashion. Choose your favourites from among Bardot, off-shoulder, shirt-style, blouson, embroidered and peplum tops, to name a few. Team them up with skinny-fit jeans, skirts. Kurtis and jeans make the perfect fusion-wear combination for the cool urbanite. Our grand sarees and lehenga-choli selections are perfect to make an impression at big social events such as weddings. Our kurtas make comfortable options for regular wear.</li>
<li>Kid's clothing-Smart kids need clothes that speak their style! Featured in our kidswear collection is an exciting range of children’s clothing from Gini & Jony. Find trendy cotton boys’ shorts, cute infant clothes, pretty frocks, girls dresses and more.</li></ul>


<br><h4 style="color:#769CD3"><b>AFFORDABLE FASHION AT YOUR FINGERTIP</h4>
Macha is one of the unique online shopping sites in India where fashion is accessible to all. Check out our new arrivals to view the latest of designer clothing in the market. You can get your hands on the trendiest style every season in western wear. You can also avail the best of ethnic fashion during all Indian festive occasions. You are sure to be impressed with our seasonal discounts on footwear, trousers, shirts, backpacks and more. The end-of-season sale is the ultimate experience when fashion gets unbelievably affordable.

<br><h4 style="color:#769CD3"><b>SHOP ONLINE AT MYNTRA WITH COMPLETE CONVENIENCE</h4>
Another reason why Myntra is the best of all online stores is the complete convenience that it offers. You can view your favourite brands with price options for different products in one place. A user-friendly interface will guide you through your selection process.</p></div></body>
   <footer style="background-color:#dcdcdc ; height:50px" > 
        <center> <h4 style="padding-top:15px"><b>Copyright &copy;Macha Online Shopping Store. All Rights Reserved | Contact Us: +91 90000 00000</h4> </center>  </footer>
</html>


