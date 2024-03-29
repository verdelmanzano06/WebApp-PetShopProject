<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>M&M - Animal Care: Dogs</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- If computer has running through internet
		<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="custom-css/custom.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	-->
	
	<!-- If computer doesn't access internet -->
	    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="custom-css/custom.css">
	    <script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
	    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #ECECEC;">
			<nav class="navbar navbar-inverse lewis-header">
		<div class="container">
			<!--logo -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-left"><img src="media/header.png"></a>
			</div>
			<!--menu-items -->
			<div class="collapse navbar-collapse" id="mainNavBar">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
				
					<!--drop down menu -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#contact" data-toggle="modal">Contact</a></li>
							<li><a href="#">Feedbacks</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Gallery</a></li>
						</ul>
					</li>

					<li><a href="#">Shop</a></li>

					<li><a href="#">Cart</a></li>
					<!--drop down menu -->
					<?php 
						if (!isset($_SESSION['cust_user'])) {
	    					echo "<li><a href='checkout.php''>Login/Register</a></li>";
						 } else {
						 	echo "<li class='dropdown'>
							<a href='#'' class='dropdown-toggle' data-toggle='dropdown'>My Account <span class='caret'></span></a>
							<ul class='dropdown-menu'>
							<li><a href='myaccount.php'>Account Page</a></li>
							<li><a href='logout.php'>Logout</a></li>
							</ul>
							</li>";
						 }
					 ?>
				</ul>

				<!--right align -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form role="search" class="navbar-form col-xs-12">
							<input type="search" class="form-control" placeholder="Search from shop"/>
							<input type="button" class="btn btn-danger" value="Search"/>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<div class="panel panel-default">
					
					<div class="panel-body">
						
						<ol class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li class="disabled">Animal Care</li>
							<li class="active">Dogs</li>						
						</ol>
						
						<div class="page-header">
							<h2>Proper Caring of Dogs</h2>
						</div>
					</div>
					<img class="featuredImg" src="media/dogs.jpg"/>
					<p>Their long association with humans has led dogs to be uniquely attuned to human behavior[12] 
					and they are able to thrive on a starch-rich diet that would be inadequate for other canid species.[13]
					Dogs vary widely in shape, size and colours.[14] Dogs perform many roles for people, such as hunting, herding, 
					pulling loads, protection, assisting police and military, companionship and, more recently, aiding handicapped 
					individuals. This influence on human society has given them the sobriquet "man's best friend".</p>
					<h4>Ten Caring Tips:</h4>
					<p>Their long association with humans has led dogs to be uniquely attuned to human behavior[12] 
					and they are able to thrive on a starch-rich diet that would be inadequate for other canid species.[13]
					Dogs vary widely in shape, size and colours.[14] Dogs perform many roles for people, such as hunting, herding, 
					pulling loads, protection, assisting police and military, companionship and, more recently, aiding handicapped 
					individuals. This influence on human society has given them the sobriquet "man's best friend".</p>
					<h4>Ten Caring Tips:</h4>
					<p>Their long association with humans has led dogs to be uniquely attuned to human behavior[12] 
					and they are able to thrive on a starch-rich diet that would be inadequate for other canid species.[13]
					Dogs vary widely in shape, size and colours.[14] Dogs perform many roles for people, such as hunting, herding, 
					pulling loads, protection, assisting police and military, companionship and, more recently, aiding handicapped 
					individuals. This influence on human society has given them the sobriquet "man's best friend".</p>
					<h4>Ten Caring Tips:</h4>
					<p>Their long association with humans has led dogs to be uniquely attuned to human behavior[12] 
					and they are able to thrive on a starch-rich diet that would be inadequate for other canid species.[13]
					Dogs vary widely in shape, size and colours.[14] Dogs perform many roles for people, such as hunting, herding, 
					pulling loads, protection, assisting police and military, companionship and, more recently, aiding handicapped 
					individuals. This influence on human society has given them the sobriquet "man's best friend".</p>
					<h4>Ten Caring Tips:</h4>
					<p>Their long association with humans has led dogs to be uniquely attuned to human behavior[12] 
					and they are able to thrive on a starch-rich diet that would be inadequate for other canid species.[13]
					Dogs vary widely in shape, size and colours.[14] Dogs perform many roles for people, such as hunting, herding, 
					pulling loads, protection, assisting police and military, companionship and, more recently, aiding handicapped 
					individuals. This influence on human society has given them the sobriquet "man's best friend".</p>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="list-group">
					<h3><strong>Animal Care</strong></h3>
					<a href="animal-care-dogs.php" class="list-group-item active">
						<h4 class="list-group-item-heading">Dogs</h4>
					</a>
					<a href="animal-care-cats.php" class="list-group-item">
						<h4 class="list-group-item-heading">Cats</h4>
					</a>
					<a href="animal-care-reptiles.php" class="list-group-item">
						<h4 class="list-group-item-heading">Reptiles</h4>
					</a>
				</div>
				<img src="media/ads.gif"/>
			</div>
		</div>
	</div>

	<?php /* Page Footer */ include("includes/footer.php"); ?>

	<?php /* Modal contact Form */ include("includes/contact_form.php"); ?>

</body>
</html>