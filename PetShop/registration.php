<?php
	require_once('dbinfo.inc.php');
echo <<<EOD
<!DOCTYPE html>
<html>
<head>
	<title>MnM Online Petshop - Best place to meet our best friends.</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
	<header>
		<a href="index.php"><img class="logo" src="media/header.png"/></a>
	</header>
		<nav>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="#">SHOP</a></li>
				<li><a href="#">INFO</a></li>
				<li><a href="feedback.php">FEEDBACK</a></li>
				<li><a href="account.php">ACCOUNT</a></li>
				<li><a href="#">CART</a></li>
				<input type="search" name="search-text" placeholder="Search a pet"/>
				<input type="button" name="search-button" value="Search"/>
			</ul>

		</nav><br>
	<div id="container">
		<div id="sidebar">
			<div class="category-head">
				<a href="#"><h2>ALL PETS</h2></a>
			</div>
			<div class="category-head">
				<a href="#"><h2>DOGS</h2></a>
			</div>
			<div class="category-head">
				<a href="#"><h2>CATS</h2></a>
			</div>
			<div class="category-head">
				<a href="#"><h2>REPTILES</h2></a>
			</div>
		</div>
		<div id="content">
			<div class="register-box">
				<h2>Sign up New Account</h2>
				<form action="registration.php" method="post">
					<label>Username: </label><br/>
						<input type="text" name="cust_user"/><br/>
					<label>Password: </label><br/>
						<input type="password" name="cust_pass"/><br/>
					<label>Confirm password: </label><br/>
						<input type="password" name="cpassword"/><br/>
					<label>E-mail address: </label><br/>
						<input type="email" name="cust_email"/><br/>
					<label>First name: </label><br/>
						<input type="text" name="cust_fname"/><br/>
					<label>Last: </label><br/>
						<input type="text" name="cust_lname"/><br/>
					<label>Gender: </label><br/>
						<select name="cust_gender">
							<option value="None"></option selected>
							<option value="Male" >Male</option>
							<option value="Female">Female</option>
						</select><br/>
					<input type="checkbox" name="agreement" value="accept"/> I have read and understand this agreement<br/><br/>
						<input type="submit" name="register" value="Register"/>
				</form>
EOD;
	if(!isset($_POST['register'])) {
			//No codes to run
		} else {
			$c = oci_pconnect(ORA_CON_UN,ORA_CON_PW,ORA_CON_DB);
			$s = oci_parse($c, 'INSERT INTO customer (cust_user, cust_pass, cust_email, cust_lname, cust_fname, cust_gender) VALUES (:cust_user, :cust_pass, :cust_email, :cust_lname, :cust_fname, :cust_gender)');

			oci_bind_by_name($s, ":cust_user", $_POST['cust_user']);
			oci_bind_by_name($s, ":cust_pass", $_POST['cust_pass']);
			oci_bind_by_name($s, ":cust_email", $_POST['cust_email']);
			oci_bind_by_name($s, ":cust_lname", $_POST['cust_lname']);
			oci_bind_by_name($s, ":cust_fname", $_POST['cust_fname']);
			oci_bind_by_name($s, ":cust_gender", $_POST['cust_gender']);

			oci_execute($s);

			echo "<script>alert('Registration Success!')</script>";

		} 

	echo <<<EOD
			</div>
			
		</div>
		<div id="ads">
			<img class="img-ads" src="media/ads.gif">
		</div>
	</div>

	<footer>
		<div class="footer-list">
			<ul>
				<li><i>ANIMAL CARE</i></li>
				<li><a href="#">Dogs</a></li>
				<li><a href="#">Cats</a></li>
				<li><a href="#">Reptiles</a></li>
			</ul>
			<ul>
				<li><i>CONTACT INFO</i></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Feedbacks</a></li>
				<li><a href="#">Gallery</a></li>
			</ul>
			<ul>
				<li><i>PHYSICAL STORE</i></li>
				<li>Location: UE Tech Road,</li>
				<li>Samson Road, Caloocan City</li>
			</ul>
			<ul>
				<li><i>FOLLOW US</i></li>
				<li>MnM Online PetShop</li>
				
					<a href="https://www.fb.com"><img class="icon" src="media/footer-fb.png"></a>
					<a href="https://www.twitter.com"><img class="icon" src="media/footer-twitter.png"></a>
					<a href="https://www.instagram.com"><img class="icon" src="media/footer-insta.png"></a>
					<a href="https://www.google.com"><img class="icon" src="media/footer-google.png"></a>
				
			</ul>
			<p class="copyright">&copy; 2017 MnM Online PetShop. All Rights Reserved</p>
	</footer>


</body>
</html>
EOD;
?>