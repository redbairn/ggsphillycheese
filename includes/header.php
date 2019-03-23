<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <title><?php if(isset($title)){ echo $title; }?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1000, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="css/styles.css">
    <script charset="utf-8" src="js/main.js"></script>
  </head>
  <body>
  
	<nav id="main_nav">
		<ul class="navigation">
			<li><a class="<?php if(isset($home)){ echo $home; } ?>" href="index.php">Home</a></li>
			<li class="dropdown"><a class="<?php if(isset($shop)){ echo $shop; } ?> href="javascript:void(0)" class="dropbtn">Shop</a>
				<div class="dropdown-content">
				  <a href="merch.php">Merchandise</a>
				  <a href="menu.php">Menu</a>
				</div>
			</li>
		</ul>	
		<img id="logo" src="img/GGs_transparent.png" />
		<ul class="navigation">
			<li><a class="<?php if(isset($about)){ echo $about; } ?>" href="about.php">About Us</a></li>
			<li><a class="<?php if(isset($contact)){ echo $contact; } ?>" href="contact.php">Contact</a></li>
		</ul>
	</nav>