<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>EDB (Ecomonic Development Board,AP)</title>
		<link rel="stylesheet" type="text/css" href="style/style.css"/>
		<link href='http://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="script/jquery.js"></script>
		<script type="text/javascript" src="script/script.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<script type="text/javascript">
			$(document).ready(function(){
				$('.menu_button').click(function(){
					if($(this).hasClass('switched'))
					{
						$('.header_menu2').hide();
						$('.menu_button').removeClass('switched');
					}
					else
					{
						$('.header_menu2').show();
						$('.menu_button').addClass('switched');
					}
				});
			});
		</script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" type="image/x-icon" href="images/ssel_logo.ico">
		<META NAME="keywords" CONTENT="">
		<META NAME="description" CONTENT="">
	</head>

	<body>
		<div class="background">
			<div class="slider" id="slider">
				<div class="holder">
					<div class="slide" id="slide-0">
						
					</div>
					<div class="slide" id="slide-1">
						
					</div>
					<div class="slide" id="slide-2">
						
					</div>
				</div>
				
			</div>
		</div>
		<div class="main">
			<?php include('header.php');?>
		</div>
		<div class="enquire">
			<div class="ap_log">
				<img src="images/ap_logo.png" alt="" style="width:70px;"/>
			</div>
			<p class="inc_op_p">Incredible Opportunities</p>
			<div class="enq_hr">
				Investors Enquire Here...
			</div>
		</div>
		<div class="indcont1">
			<p class="exp_txt_p">
				Explore Opportunities
				<i class="fa fa-angle-double-right"></i>
			</p>
			<p class="exp_desc_p">
				Andhra Pradesh offers opportunity across sectors — notably infrastructure, pharma, automobiles, education and many more — in an investor-friendly environment.Read more to understand AP's sectors and their investment 
				potential.
			</p>
		</div>
		<div class="indcont2">
			<p class="exp_txt_p">
				Invest in the Future
				<i class="fa fa-angle-double-right"></i>
			</p>
			<p class="exp_desc_p">
				This is our comittment to make AP the best state to live in, it is more than a comittment it is a promise that we stand by every single day to make use of the best technology, the best practices in governance, be more efficient, to look ahead with a vision that we all are colelctively achieve
			</p>
		</div>
	</body>
</html>