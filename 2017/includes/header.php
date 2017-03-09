<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Mike&apos;s 2017 HCDE532 Website</title>
	
	<!-- Begin Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- End Meta -->
	
	<!-- Begin Styles -->
	<link href="styles.css" rel="stylesheet" type="text/css" media="all" />
	<link href="flexslider.css" rel="stylesheet" type="text/css" media="all">
	<!-- End Styles -->
	
	<!-- Begin Scripts -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="scripts/jquery.flexslider.js"></script>
	<!-- End Scripts -->
	
	<!-- Begin Flexslider -->
	<script type="text/javascript">
		
		$(window).load(function() { // when the window loads
			$('.flexslider').flexslider(); // access the element .flexslider and make it flexslide
		});
		
	</script>
	<!-- End Flexslider -->
	
	<!-- Begin Toggle -->
	<script type="text/javascript">
		
		$(window).load(function() {
			
			$('#toggle').click(function() {
				
				$('#navigation').slideToggle();
				
			});
			
			var loadWidth = window.innerWidth;
			
			$(window).resize(function() {
				
				if ( loadWidth !== window.innerWidth) {
					
					if (window.innerWidth < 601) {
					
						$('#navigation').hide();
					
					} else {
					
						$('#navigation').show();
					
					}
					
				}
				
				
				
			});
			
		});
		
	</script>
	<!-- End Toggle -->
	
</head>
<body>
	<!-- Begin Header -->
	<div id="header">
		<h1 id="logo"><a href="index.php">Mike Sinkula</a></h1>
		<span id="toggle">&#8801;</span>
	</div>
	<!-- End Header -->
	
	<?php include('includes/navigation.php'); ?>
	
	<!-- Begin Content -->
	<div id="content">