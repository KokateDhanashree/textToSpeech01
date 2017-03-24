<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Search Result</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
							<!--	<li><a href="index.html">ABOUT</a></li>
								<li><a href="index-1.html">HOT TOURS</a></li>
								<li class="current"><a href="index-2.html">SPECIAL OFFERS</a></li>
								<li><a href="index-3.html">BLOG</a></li>
								<li><a href="index-4.html">CONTACTS</a></li> -->
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content"><div class="ic"> </div>
			<div class="container_12">
				<div class="grid_8">



<?php

if(isset($_POST['submit']))
{
 $Location = $_POST['Location'] ;

   $dbhost = '127.0.0.1';
   $dbuser = 'root';
   $dbpass = '';
   $database = 'TourGuide';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$database);

   echo"<br>";
  
 if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   
 //  echo 'Connected successfully';

$result=$conn->query("SELECT * FROM Location WHERE (`locationname` LIKE '%".$Location."%')") ;

		echo "<h3>" ;
		if(mysqli_num_rows($result) == 1) 
			echo "Place<br><br>" ; 
		else 
			echo "Places<br><br>"	;
		echo "</h3>"	;

 if (mysqli_num_rows($result)<=0)
	echo "<center>No results found!</center>";
 else
	{
		while ($row = mysqli_fetch_array($result))
		{
				echo	'<div class="block2">'	;
					echo	'<div class="text1 col1">'.$row['locationname'] ;  	echo '</div>'	;
					echo	'<img src ="' .$row['locationimage']. '".alt = "" class="img_inner" />'	;
					echo	'<div class="extra_wrapper">'	;
						//echo	'<div class="text1 col1">'.$row['locationname'] ;  	echo '</div>'	;
						echo	"<p>". $row['locationdescription'] ."</p>" ;
						//echo	"<br>"	;
						echo	"<a href="."#"." class="."link1".">Text To Speech</a> "	;
						echo	"<br><br><br><br><br><br><br><br><br>"	;
					echo	"</div>" ;
				echo	"</div> " ;
		}	
	}
}	

?>

		</script>
	</body>
</html>