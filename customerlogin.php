<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0" >

    <title>LAWANYA mobiles</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="./style.css" >
	<script type="text/javascript">
	function validate_form(){
	var valid= true;
		if (document.Clogin_form.username.value=="")
			{
				alert("please enter your username!");
				document.Clogin_form.username.focus();
				valid= false;
			}
		else if(document.Clogin_form.password.value=="")
			{
				alert("please fill brand field!");
				document.Clogin_form.password.focus();
				valid= false;
			}
		
		
		return valid;	
	}
	</script>
</head>
<body>
    <section id="header">
        <a href="#"><img src="website pics/logo 2.png" class="logo" height="100" alt="" ></a>
		<div class="form">
			<form action="searchphn.php" method="post">
			<input type="text" name="seinput" placeholder="Search for products">
			<button type="submit" name="sebut" class="normal">Search</button></form>
		</div>
        <div>
			
            <ul id="navbar">               
                <li id="lg-bag"><a href=""><i class="fas fa-cart-arrow-down"></i></a></li>                 
				<a href="#" id="close"><i class="fa fa-times"></i></a>
            </ul>
        </div>
		<div id="mobile">
			<a href=""><i class="fas fa-cart-arrow-down"></i></a>
			<i id="bar" class="fas fa-outdent"></i>	
	    </div>	
    </section>	
	<section id="header2">
	         <ul id="category"> <li ><a href="#">Shop by category <i class="fas fa-caret-down"></i></a>
		  <ul>
			<li><a href="phone.php">Smart Phones</a></li>
		    <li><a href="accesories.php">Mobile Accesories</a></li>
			<li><a href="headphones.php">Headphones & Earphones</a></li>
			<li><a href="ipads.php">ipads & Tablets</a></li>
			<li><a href="smartwatch.php">Smart Watches</a></li>
			<li><a href="powerbanks.php">Power Banks</a></li>
		  </ul>
		</li></ul>
        <div>
            <ul id="navbar2">
                <li><a href="Index.html">Home</a></li>
                <li><a class="active" href="customerlogin.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="newarrival.php">New Arrivals</a></li>                
				<a href="#" id="close2"><i class="fa fa-times"></i></a>
            </ul>
        </div>
		<div id="mobile2">
			<a href=""><i class="fas fa-cart-arrow-down"></i></a>
			<i id="bar2" class="fas fa-outdent"></i>	
	    </div>	
	
	</section>
	<section id="logform">
	<div class="container">
	<div class="contact-box">
		<div class="left"></div>
		<div class="right">
			<form name="Clogin_form" method="POST" action="" onSubmit="return validate_form(); ">
			<h4>CUSTOMER LOGIN</h4>
			<h5>USERNAME</h5>
		<input type="text" name="username" class="field" placeholder="Enter your Username">
			<h5>PASSWORD</h5>
		<input type="password" name="password"  class="field" placeholder="Enter your Password">
			<button class="btn">Submit</button>
		   </form>
	</div>
	</div>	
	</div>
</section>
	<footer class="section-p1">
		<div class="col">
			<img src="website pics/website logo 3.png" class="logo " height="100" alt="" >
			
		<h4>About</h4>
		<a href="#">About us</a>
		<a href="#">Privacy policy</a>
		<a href="#">Contact us</a>
		<a href="#">About us</a>
	</div>
		<div class="col">
		<h4>Find it fast</h4>
		<a href="#">Home</a>
		<a href="#">Login</a>
		<a href="#">Register</a>
		<a href="#">About us</a>
		<a href="#">New arrivals</a>
	</div>
		<div class="col">
			<h4>Contact</h4>
			<p><strong>Address:</strong>23,Colombo road, ratnapura</p>
			<p><strong>Phone:</strong>+90909009</p>
			<p><strong>Hours:</strong>10.00-18.00,Mon-Sat</p>
			
		</div>
		<div class="col">
		<div class="follow">
				<h4>Follow us</h4>
				<div class="icon">
					<i class="fab fa-facebook-f"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-instergram"></i>
					<i class="fab fa-pinterest-p"></i>
					<i class="fab fa-youtube"></i>
				</div>
			</div>
	
		</div>
	
		<div class="copyright">
			<p>2022 <strong>Lawanya Mobiles </strong>all rights reserved</p>
		
		</div>
	</footer>
	
    <script src="script.js"></script>
	
	
	
	
</body>
</html>