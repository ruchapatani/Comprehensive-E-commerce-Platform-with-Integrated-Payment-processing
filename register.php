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
   
       
    </head>
    
    <body>
      
            <div class="header">
            <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #DCDCDC">
  <div class="container-fluid">
    <div class="navbar-header">
	<div  class="navbar-brand" style="padding-top:5px"><img src="img/macha.png" height="45" width="60" > </div>
      <DIV  class="navbar-brand" ><b style="color:#000000"> MACHA.com</DIV>
    </div>
    <ul class="nav navbar-nav">
      <li  ><a href="index.php" style="color:#000000">Home</a></li> </ul>
    <ul class="nav navbar-nav navbar-right"> 
	
		 <li><a href="#"><i class="fa fa-shopping-cart fa-2x"></i> <span class="glyphicon glyphicon-shopping-cart" style="color:#000000"></span> <span class="icon-text" style="color:#000000">Cart </span><span class="badge">0</span></a></li>
      
       <li><a data-toggle="modal" href='#modal-id'><i class="fa fa-user fa-2x"></i><span class="icon-text"> <span class="glyphicon glyphicon-user" style="color:#000000"></span><span class="icon-text" style="color:#000000">  LogIn/SignUp  </span> </a></li>
    </ul>
  </div>
</nav>
            </div>
			<!-- Start of modal window -->
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="text-center">Login or <a href="register.php">Sign up</a></h3>
                       
                        <div class="row ">
                            <div class="col-xs-12">
                                <hr class="hrStyle">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 ">
                                <form action="" class="form-horizontal" method="POST" role="form">
								
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="email" class="form-control" placeholder="E-mail" aria-describedby="basic-addon1">
                                    </div>
                                    <span class="help-block"></span>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password"name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2">
                                    </div>
                                    <span class="help-block"></span>
                                    <a href="#" class="btn btn-success btn-block btn-lg">Login</a>
                                </form>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-xs-6 text-left">
                                <label><input type="checkbox" value="rememberMe"> Remember Me</label>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
			  <div class="container" >
        <section id="login-content" >
            <div class="container-fluid">
                <div class="row form-content">
                    <div class="container-fluid">
                     
                            <form action="" method="POST" role="form" >
							 <h1 style="padding-top:20px ; padding-bottom:20px"> SIGN UP </h1>
                                <div class="form-group form-inline" >
								
                                   <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" name="fname" class="form-control" placeholder="First Name *" aria-describedby="basic-addon1" required>
                                </div>
								
								  
								  <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1" required>
                                </div>
                                </div>
								  <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" name="username" class="form-control" placeholder="Enter your username*" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input type="text" name="email" class="form-control" placeholder="Enter your email address*" aria-describedby="basic-addon1" required>
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" name="pwd1" class="form-control" placeholder="Enter password*"  aria-describedby="basic-addon2" required>
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon3"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" name="pwd2" class="form-control"  placeholder="Re-Enter password*" onclick="check(pwd1)" aria-describedby="basic-addon3" required>
                                </div>
								
								
									
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon4"><i class=" glyphicon glyphicon-phone"></i></span>
                                   
                                    <input type="text" name="phone" class="form-control" placeholder="Enter your phone number*" onclick="checkForm(pwd1,pwd2)" aria-describedby="basic-addon4" required>
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon5"><i class="glyphicon glyphicon-home"></i></span>
                                    <textarea rows="4" cols="50" name="address" class="form-control" placeholder="Enter your address*" onclick="checkForm(pwd1,pwd2)" aria-describedby="basic-addon5"></textarea required>
                                </div>
                                <div class="input-group form-group form-inline">
                                    <label>Date Of Birth: </label>
                                     <div class="form-group" style="padding-left:5px">
	                            <input type="date"  class="form-control" name="dob"  > 
	                        </div><div>
                                    <label class="gender-text" >Gender </label>
                                    <span class="gender-radiobuttons">
                                    <input type="radio" name="gender" value="male"> Male
                                    <input type="radio" name="gender" value="female"> Female
                                    </span>
                                </div></div>
                                 
								   <a href="index.php" ><button type="submit" name="submit" class="btn btn-primary" onclick="alert('You have signed up successfully')">Sign Up</button><br><br></a>
								 
								 <?php 
		
		
			if(isset($_POST['submit']))
    {
		$username=$_POST['username'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
      $gender='';
	  $dob='';
        $email=$_POST['email'];
        $pwd1=$_POST['pwd1'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
		
		
		if(isset($_POST['dob'])){
		 $dob=$_POST['dob'];
		  
		}
		
		if(isset($_POST['gender'])){
		 $gender=$_POST['gender']; 
		 
		 }
	
		
		 $query="INSERT INTO customer VALUES ('','$fname','$lname','$username','$email','$pwd1','$phone','$address','$dob','$gender')";
       $data=mysqli_query($con,$query);
        
    //echo("Error description: " . mysqli_error($name));
         
    }
	
	
	?>
                            </form>
                        
                    </div>
                </div>
            </div>
        </section>
            </div>