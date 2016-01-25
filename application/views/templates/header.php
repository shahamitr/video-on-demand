<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Video on Demand</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/owl/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/owl/owl.theme.css">
	<script src="<?php echo base_url();?>assets/owl/owl.carousel.js"></script>

	<style>
		body {
			margin: 20px;
		}

		p.footer{
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container{
			margin: 10px;
			border: 1px solid #D0D0D0;
			-webkit-box-shadow: 0 0 8px #D0D0D0;
		}


		#owl-demo .item{
			background: #42bdc2;
			padding: 30px 0px;
			margin: 5px;
			color: #FFF;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			border-radius: 3px;
			text-align: center;
		}

	</style>

	<script>

		$(document).ready(function(){

			var owl = $("#owl-demo");

			owl.owlCarousel({
				items:2,
				nav:true,
				navigation : true,
				slideSpeed : 300,
				paginationSpeed : 400,
				pagination : true,
				paginationNumbers : true,
				lazyLoad: true,
				video: true
			});

			owl.on('mousewheel', '.owl-stage', function (e) {
				if (e.deltaY>0) {
					owl.trigger('next.owl');
				} else {
					owl.trigger('prev.owl');
				}
				e.preventDefault();
			});


		});

	</script>

</head>
<body>
<div id="container">
	<div id="body">
		<ul class="nav nav-tabs nav-justified">
			<li> <a href="<?php echo base_url();?>">Home</a></li>
			<li> <a href="<?php echo base_url();?>welcome/history">Watch History</a></li>
		</ul>