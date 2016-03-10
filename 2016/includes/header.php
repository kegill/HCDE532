<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Mike's HCDE532 2016 Demo Webpage</title>

<!-- Begin Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- End Meta -->

<!-- Begin Styles -->
<link href="styles.css" rel="stylesheet" type="text/css" media="all" >
<link href="flexslider.css" rel="stylesheet" type="text/css" media="all" >
<!-- End Styles -->

<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="scripts/jquery.flexslider.js"></script>
<!-- End Scripts -->

<!-- Begin FlexSlider -->
<script type="text/javascript">

$(window).load(function() {
    $('.flexslider').flexslider();
  });

</script>
<!-- End FlexSlider -->

<!-- Begin Toggle -->
<script type="text/javascript">

$(window).load(function() {
	
	$('#toggle').click(function() {
		
		$('#navigation').slideToggle();
		
		});
	
	});

</script>
<!-- End Toggle -->

</head>

<body>


<!-- Begin Header -->
<div id="header">
	<h1 id="logo"><a href="index.php">Mike Sinkula</a></h1>
    <p id="toggle">Menu &#8801;</p>
</div>
<!-- End Header -->

<?php include('includes/navigation.php'); ?>

<!-- Begin Content -->
<div id="content">
