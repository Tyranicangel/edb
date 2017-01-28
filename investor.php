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
		<link href='https://fonts.googleapis.com/css?family=Teko:400,500' rel='stylesheet' type='text/css'>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

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
		<div class="main">
			<?php include('header.php');?>

			<div class="about_cls"> 
				<img src="images/inv.jpg" style="width:100%;" />
				<div class="desc_txt_img">
					
				</div>
				<div class="singl_sl">Write to us! We'll get in touch!</div>
				<div class="single_wind_desc">
					Andhra Pradesh is committed to work closely with our investors and get all clearances through a single platform. We are committed to make things efficient and hassle free for you
				</div>
			</div>
			<div class="abt_cont">
				<div class="abt_inner_cont">
					<h3 class="abt_edbh2">Investors</h3>
					<div class="abt_desc_ttl_dv">
						<div class="abt_left">
							<p class="intr_cls_p" style="margin-left:10px;">EDB stuff--!</p>
							<p style="margin-left:10px;">
								Andhra Pradesh is committed to work closely with our investors and get all clearances through a single platform. We are committed to make things efficient and hassle free for you
								<br /><br />
								Andhra Pradesh is committed to work closely with our investors and get all clearances through a single platform. We are committed to make things efficient and hassle free for you
							</p>
						</div>
						<div class="abt_centr">
							<!-- <h5 class="obj_edb_h">Write to EDB</h5> -->
							<div class="contact_form_cls" style="margin-top:0px;padding:20px;background:#f4f4f4;">
								<p class="intr_cls_p">Starts from here!</p>
								<p>Please register here if you are a Investor, our team will get in touch with you.</p>
								<div class="form-group">
								    <label for="exampleInputEmail1">Name</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
								</div>
								<div class="form-group">
								    <label for="exampleInputEmail1">Email address</label>
								    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
								</div>
								<div class="form-group">
								    <label for="exampleInputPassword1">Phone Number</label>
								    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone">
								</div>
								<div class="form-group">
								    <label for="exampleInputPassword1">Company Name</label>
								    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Company">
								</div>
								<div class="form-group">
								    <label for="exampleInputPassword1">Which industry are you intrested in ?</label>
								   	<select class="form-control">
									  <option>Energy</option>
									  
									</select>
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="3" placeholder="Message"></textarea>
								</div>
								<p style="text-align:Center;">
									<button type="button" class="btn btn-success">Register</button>
								</p>
							</div>
						</div>
						<div class="abt_right" style="width:280px;">
							<p class="abt_p_rhgt">TRUST IS KEY FOR ANY BUSINESS OPPORTUNITY IN AP</p>
							<p class="abt_rght_p_desc" style="margin-top:10px;">
								Businesses looking to set up in AP can expect integrity, adaptability and respect for intellectual capital to be emphasised upon by a strategic-minded administration, which is attuned to the needs of companies to protect invention and innovation.
							</p>
						</div>
					</div>
					<?php include('footer.php');?>
				</div>
			</div>
		</div>
	</body>
</html>