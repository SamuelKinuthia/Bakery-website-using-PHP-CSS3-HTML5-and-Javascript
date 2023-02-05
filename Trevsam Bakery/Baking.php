<?php
    $fname = $lname = $email = $phonenumber = $message = "";
    $fnameErr = $lnameErr = $emailErr = $phoneErr = $messageErr = "";
    
   if($_SERVER['REQUEST_METHOD']=="POST") {
       if(empty($_POST['firstname'])){
       	$fnameErr = "* Name is required";
       }
      else{
      	$fname = test_input($_POST['firstname']);
      }
      if(empty($_POST['lastname'])){
      	$lnameErr = "* Lastname is required";
      }
      else{
      	$lname = test_input($_POST['lastname']);
      }
      if(empty($_POST['email'])){
      	$emailErr = "* Email is required";
      }
      else{
      	$email = test_input($_POST['email']);
      }

      if(empty($_POST['phone'])){
      	$phoneErr = "* Phonenumber is required";
      }
      else{
      	$phonenumber = test_input($_POST['phone']);
      }
      if(empty($_POST['message'])){
      	$messageErr = "* Message is required";
      }
      else{
      	$message = test_input($_POST['message']);
      }
    }

    function test_input($data){
    	$data = htmlspecialchars($data);
    	$data = stripslashes($data);
    	$data = trim($data);
    	return $data;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Baking.css">
	<script defer src="Baking.js" type="text/javascript"></script>
	<title>Trevsam Bakery</title>
</head>
<body>
<header class="header">
	<span class="logo">Trevsam Bakery</span>
	<nav class="nav">
		<a href="#">Home</a>
		<a href="#about">About</a>
		<a href="#address">Address</a>
		<a href="#frm">Contact</a>
	</nav>
</header>
<span class="log">Trevsam Bakery</span>
<header class="head" id="head">
	<a href="#" class="close" onclick="document.getElementById('head').style.width='0%';">&times;</a>
	<nav class="menu">
		<a href="#">Home</a>
		<a href="#about">About</a>
		<a href="#">Address</a>
		<a href="#frm">Contact</a>
	</nav>
</header>
<span class="open" style="color: #010; font-size: 40px;padding: 8px 12px; float: right; cursor: pointer;" onclick="document.getElementById('head').style.width='50%';">&#9776;</span>
<div class="img">
	<img class="cake-intro" src="Cake.jpg" alt="cake">
	<div class="btn">
		<button class="btn-pic">Welcome All &raquo;</button>
	</div>
</div>
    <div class="bakes">
	<div class="orders">
		<img class="pics" src="Wedding.jpg" alt="wedd">
		<div class="content">
		<p>This is a perfect wedding cake from our bakery. Order yours today without hesitation</p>
		<button class="order-btn"><a href="Wedding.jpg">Order &raquo;</a></button>
	</div>
	</div>
	<div class="orders">
		<img class="pics" src="Birthday.jpg" alt="Birthday">
		<div class="content">
		<p>This is a very good example of our birthday cake. Feel free to order yours today with no hesitation.</p>
		<button class="order-btn"><a href="Birthday.jpg">Order &raquo;</a></button>
	</div>
</div>
	<div class="orders">
		<img class="pics" src="Graduation.jpg" alt="Graduation">
		<div class="content">
		<p>Now this is a perfect customized graduation cake. Don't forget to make your order</p>
		<button class="order-btn"><a href="Graduation.jpg">Order &raquo;</a></button>
	</div>
</div>
</div>
<div class="clearfix"></div>
<div class="dark-cont" id="about">
	<h2 style="text-align: center;">ABOUT</h2>
	<div class="abt">
		<img src="Trevsam.jpg" alt="Trevsam">
		<div class="desc">
		Samuel Kinuthia
		<p style="color:grey; font-size: 20px">C.E.O & Founder</p>
	    </div>
	</div>
	<div class="abt-bkry">
		<h2 class="hd" style="color:#fe0102">Our Bakery</h2>
		<p>Trevsam bakery was founded by Samuel Kinuthia in the year 2023 at the comfort of his house whereby he was trying out cooking as a hobby and he developed the interest of baking cakes which has really made him enough fortune to start his own Bakery. He was able to persuade his friend to invest in his company and she agreed and now she has been termed as a Co-founder.</p>
		<p> Trevsam Bakery has been able to employ over 30 other staffs working in different departments who assist in the daily operation of the Bakery and ensuring the success of the Bakery.</p>
		<p> We have been able to successfully open and launch 3 branches in Kiambu, Lavington and Kileleshwa respectively with ease and the branches are really doing fairly well. We still wish to open 2 more branches by the end of the year and provide more employment opportunities to youths and specialized graduates who are willing to grow careerwise.</p> 
	</div>
</div>
<div class="clearfix"></div>
<div class="add" id="address">
	<h2 style="text-align: center;">ADDRESS</h2>
<cite class="locate">
<pre>
<h2>Kiambu Bakery</h2>
P.O Box 1234-00800
Ruiru, Kiambu
0786367697
kinuskamzi@gmail.com
</pre>
</cite>
<cite class="locate">
<pre>
<h2>Kileleshwa Bakery</h2>
P.O Box 13678-00100
Nairobi, Kenya
0796900198
Skinuthiamacharia@gmail.com
</pre>
</cite>
<cite class="locate">
<pre>
<h2>Lavington Bakery</h2>
P.O Box 2213-00200
Nairobi, Kenya
0722316290
S.macharia.kinuthia@gmail.com
</pre>
</cite>
</div>
<div class="clearfix"></div>

<!-- Contact us container -->
<div class="frm" id="frm">
	<div id="cnt">
	<h2> CONTACT US</h2>
	<p> You can reach us via our phone number, email address or sending us a message as shown below</p>
	<pre style="font-weight: bold;"><i>
		Nairobi, Kenya.
		Phone: +254796900198.
		Email:Skinuthiamacharia@gmail.com
	</i></pre>
</div>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" name='myform' id="myform" method="POST">
	<div class="data">
		<h3 class="submit"></h3>
	<div class="inp">
	<label><b>FirstName:</b></label>
	<input type="text" name="firstname" value="<?php echo $fname;?>" id="fname" placeholder="Enter first name...">
	<span class="error"><?php echo $fnameErr;?></span>
    </div>
    <div class="inp">
	<label><b>LastName:</b></label>
	<input type="text" name="lastname" value="<?php echo $lname;?>" id="lname" placeholder="Enter last name...">
	<span class="error"><?php echo $lnameErr;?></span>
    </div>
    <div class="inp">
	<label><b>Email:</b></label>
	<input type="email" name="email" value="<?php echo $email;?>" id="email" placeholder="Enter your email...">
	<span class="error"><?php echo $emailErr;?></span>
    </div>
    <div class="inp">
	<label for="phone"><b>PhoneNumber:</b></label>
	<input type="tel" name="phone" value="<?php echo $phonenumber;?>" id="phone" pattern="+254[1,7]{1}[0-9]{7}" placeholder="+254...">
	<span class="error"><?php echo $phoneErr;?></span>
    </div>
    <div class="inp">
	<label><b>Message:</b></label>
	<textarea name="message" id="mess" rows='5' cols="40" placeholder="Write your message..."></textarea>
	<span class="error"><?php echo $messageErr;?></span>
    </div>
	<input type="submit" value="Send Message">
	</div>
	</form>
</div>
<div style="text-align: center; background: #010; padding: 30px; color: #f8f8f8;">
	<?php include 'Footer.php';?>
</div>
</body>
</html>