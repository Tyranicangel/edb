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

			$('.sel_dv_abt').click(function(){
				$('.data-tab').hide();
				$('.activated').removeClass('activated');
				$(this).addClass('activated');
				$('#'+$(this).attr('id')+'-data').show();
			});
		});
	</script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="shortcut icon" type="image/x-icon" href="images/ssel_logo.ico">
	<META NAME="keywords" CONTENT="">
		<META NAME="description" CONTENT="">
		</head>

		<body>
			<div class="main">
				<?php include('header.php');?>

				<div class="about_cls"> 
					<img src="images/dis_profile.jpg" style="width:100%;" />
					<div class="desc_txt_img">

					</div>
					<div class="ap_image_map">
						<img src="images/ap.png" alt="" style="width:360px;" />
					</div>
					<div class="singl_sl">Single Window Clearance for all Investors</div>
					<div class="single_wind_desc">
						Andhra Pradesh is committed to work closely with our investors and get all clearances through a single platform. We are committed to make things efficient and hassle free for you
					</div>
				</div>
				<div class="abt_cont">
					<div class="abt_inner_cont">
						<h3 class="abt_edbh2" style="width:40%;">District Profiles</h3>
						<div class="abt_desc_ttl_dv">
							<div class="abt_left">
								<div class="sel_dv_abt activated" id="anathapur">
									Ananthapur
								</div>
								<div class="sel_dv_abt" id="chittor">
									Chittor
								</div>
								<div class="sel_dv_abt" id="egodavari">
									East Godavari
								</div>
								<div class="sel_dv_abt" id="guntur">
									Guntur
								</div>
								<div class="sel_dv_abt" id="cuddapah">
									Cuddapah
								</div>
								<div class="sel_dv_abt" id="krishna">
									Krishna
								</div>
								<div class="sel_dv_abt" id="kurnool">
									Kurnool
								</div>
								<div class="sel_dv_abt" id="prakasam">
									Prakasam
								</div>
								<div class="sel_dv_abt" id="nellore">
									Nellore
								</div>
								<div class="sel_dv_abt" id="srikakulam">
									Srikakulam
								</div>
								<div class="sel_dv_abt" id="vizag">
									Vishakapatnam
								</div>
								<div class="sel_dv_abt" id="vijay">
									Vizianagaram
								</div>
								<div class="sel_dv_abt" id="wgodavari">
									West Godavari
								</div>
							</div>
							<div class="abt_centr" style="width:600px;">
								<div id="wgodavari-data" style="float:left;display:none" class="data-tab">
									<h3 class="obj_edb_h">West Godavari</h3>
									<div class="dis_desc_div">
										<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
											<li role="presentation" class="active"><a href="#wgodavari_home" aria-controls="wgodavari_home" role="tab" data-toggle="tab">Details</a></li>
											<li role="presentation"><a href="#wgodavari_profile" aria-controls="wgodavari_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
											<li role="presentation"><a href="#wgodavari_crops" aria-controls="wgodavari_crops" role="tab" data-toggle="tab">Major Crops</a></li>
											<li role="presentation"><a href="#wgodavari_minerals" aria-controls="wgodavari_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
										</ul>
										<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
											<div role="tabpanel" class="tab-pane active" id="wgodavari_home" style="font-weight:500;">
												Eluru is the headquarters of West Godavari district. The district is located in delta region of the Krishna and Godavari rivers. The district was situated between 80º 50′ and 81º 55’E, of the eastern longitudes and 16º 15′ and 17º 30’N, of northern latitudes. Khammam District lies to the north, East Godavari District to the east, the Bay of Bengal to the south, and Krishna District to the west. The district has population of 39,34,782 as per the 2011 census which accounts for 4.64% of the total population of the State with 3.45% decadal growth.
											</div>
											<div role="tabpanel" class="tab-pane" id="wgodavari_profile">
												<table class="table table-striped">
													<tbody>
														<tr>
															<td>
																<div><strong>Item</strong></div>
															</td>
															<td>
																<div><strong>Units</strong></div>
															</td>
															<td>
																<div><strong>Figure</strong></div>
															</td>
															<td>
																<div><strong>Source</strong></div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Area</div>
															</td>
															<td>
																<div>In 000 Sq.Km</div>
															</td>
															<td>
																<div>7.7</div>
															</td>
															<td>
																<div>Census 2011</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Population</div>
															</td>
															<td>
																<div>In Persons</div>
															</td>
															<td>
																<div>39,34,782</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Male</div>
															</td>
															<td>
																<div>In Persons</div>
															</td>
															<td>
																<div>19,63,184</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Female</div>
															</td>
															<td>
																<div>In Persons</div>
															</td>
															<td>
																<div>19,71,598</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Urban</div>
															</td>
															<td>
																<div>In Persons</div>
															</td>
															<td>
																<div>8,08,591</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Rural</div>
															</td>
															<td>
																<div>In Persons</div>
															</td>
															<td>
																<div>31,26,191</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Population Growth (decadal)</div>
															</td>
															<td>
																<div>%</div>
															</td>
															<td>
																<div>3.45</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Population Density (Person/Sq.Km)</div>
															</td>
															<td>
																<div>Ratio</div>
															</td>
															<td>
																<div>508</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Literacy</div>
															</td>
															<td>
																<div>%</div>
															</td>
															<td>
																<div>74.32</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Male</div>
															</td>
															<td>
																<div>%</div>
															</td>
															<td>
																<div>77.63</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Female</div>
															</td>
															<td>
																<div>%</div>
															</td>
															<td>
																<div>71.05</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Urbanisation</div>
															</td>
															<td>
																<div>%</div>
															</td>
															<td>
																<div>20.55</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Workers as % of total population</div>
															</td>
															<td>
																<div>%</div>
															</td>
															<td>
																<div>44.12</div>
															</td>
															<td>
																<div>2001</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Workers % of main Workers</div>
															</td>
															<td>
																<div>%</div>
															</td>
															<td>
																<div>84.94</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Household industries</div>
															</td>
															<td>
																<div>%</div>
															</td>
															<td>
																<div>2.67</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Area under Food &amp; Non-Food crops</div>
															</td>
															<td>
																<div>Area in Hectares</div>
															</td>
															<td>
																<div>6,94,812</div>
															</td>
															<td>
																<div>2012</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Mining &amp; Quarrying (Ball Clay – Top)</div>
															</td>
															<td>
																<div>Qty in tonnes</div>
															</td>
															<td>
																<div>2,30,913</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>
																	Forest Area under the control of<br>
																	Forest Department
																</div>
															</td>
															<td>
																<div>Area in Hectares</div>
															</td>
															<td>
																<div>81,166</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>
																	Gross irrigated area as % of gross<br>
																	cropped area
																</div>
															</td>
															<td>
																<div>%</div>
															</td>
															<td>
																<div>60.89</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Value of output of major crops</div>
															</td>
															<td>
																<div>%</div>
															</td>
															<td>
																<div>–</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Per capita food grain production</div>
															</td>
															<td>
																<div>%</div>
															</td>
															<td>
																<div>2.18</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Road Length per 100 sq.km.</div>
															</td>
															<td>
																<div>In Sq.km</div>
															</td>
															<td>
																<div>78.91</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Post offices per 100,000 persons</div>
															</td>
															<td>
																<div>Ratio</div>
															</td>
															<td>
																<div>19.23</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Bank branches per 100,000 persons</div>
															</td>
															<td>
																<div>Ratio</div>
															</td>
															<td>
																<div>9.78</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Population per bank</div>
															</td>
															<td>
																<div>In Thousands</div>
															</td>
															<td>
																<div>10.25</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Per capita bank deposits</div>
															</td>
															<td>
																<div>Rs. In Crores</div>
															</td>
															<td>
																<div>19977.98</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Per capita bank credit</div>
															</td>
															<td>
																<div>In Rs.</div>
															</td>
															<td>
																<div>30720.38</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Per capita bank credit to agriculture</div>
															</td>
															<td>
																<div>In Rs.</div>
															</td>
															<td>
																<div>101.83</div>
															</td>
															<td>
																<div>2010</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Per ha. bank credit to agriculture</div>
															</td>
															<td>
																<div>In Rs.</div>
															</td>
															<td>
																<div>57.67</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Per capita bank credit to Industries</div>
															</td>
															<td>
																<div>In Rs.</div>
															</td>
															<td>
																<div>10.29</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div role="tabpanel" class="tab-pane" id="wgodavari_crops">
												<table class="table table-striped">
													<tbody>
														<tr>
															<td>
																<div><strong>Crop</strong></div>
															</td>
															<td>
																<div><strong>Area in hectares</strong></div>
															</td>
															<td>
																<div>
																	<strong>Out-turn in tonnes<br>
																	</strong>
																</div>
															</td>
															<td>
																<div><strong>Source</strong></div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Rice</div>
															</td>
															<td>
																<div>3,63,785</div>
															</td>
															<td>
																<div>13,08,467</div>
															</td>
															<td>
																<div>2011-12</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Maize</div>
															</td>
															<td>
																<div>48,359</div>
															</td>
															<td>
																<div>3,24,637</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Black gram(Mash)</div>
															</td>
															<td>
																<div>52,767</div>
															</td>
															<td>
																<div>16,770</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Green gram(Moong)</div>
															</td>
															<td>
																<div>10,610</div>
															</td>
															<td>
																<div>9,253</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Coconut</div>
															</td>
															<td>
																<div>20,351</div>
															</td>
															<td>
																<div>3,43,423</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Groundnut</div>
															</td>
															<td>
																<div>6,477</div>
															</td>
															<td>
																<div>14,387</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Sugar cane</div>
															</td>
															<td>
																<div>27,054</div>
															</td>
															<td>
																<div>2,54,324</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
														<tr>
															<td>
																<div>Tobacco</div>
															</td>
															<td>
																<div>25,908</div>
															</td>
															<td>
																<div>47,275</div>
															</td>
															<td>
																<div>“</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div role="tabpanel" class="tab-pane" id="wgodavari_minerals">
												<table class="table table-striped">
													<tbody>
														<tr>
															<td>
																<div><strong>Mineral</strong></div>
															</td>
															<td>
																<div>
																	<strong>Quantity<br>
																		(Tonnes)</strong>
																	</div>
																</td>
																<td>
																	<div>
																		<strong>Value<br>
																			(‘000 Rs.)</strong>
																		</div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Ball Clay</div>
																	</td>
																	<td>
																		<div>2,30,913</div>
																	</td>
																	<td>
																		<div>30,434</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Fireclay</div>
																	</td>
																	<td>
																		<div>16,271</div>
																	</td>
																	<td>
																		<div>3,219</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div id="vijay-data" style="float:left;display:none" class="data-tab">
											<h3 class="obj_edb_h">Vizianagaram</h3>
											<div class="dis_desc_div">
												<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
													<li role="presentation" class="active"><a href="#vijay_home" aria-controls="vijay_home" role="tab" data-toggle="tab">Details</a></li>
													<li role="presentation"><a href="#vijay_profile" aria-controls="vijay_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
													<li role="presentation"><a href="#vijay_crops" aria-controls="vijay_crops" role="tab" data-toggle="tab">Major Crops</a></li>
													<li role="presentation"><a href="#vijay_minerals" aria-controls="vijay_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
												</ul>
												<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
													<div role="tabpanel" class="tab-pane active" id="vijay_home" style="font-weight:500;">
														If India is a land of precious stones, one such jewel embedded on the Indian soils is the district Vizianagaram. The Pusapatis of Vizianagaram, the Ravus of Bobbili, Varicharlas of Kurupam, the Satrucharlas of Merangi and the aristocrats of salur were all the exalted Luminaries and multi-facial personalities. The battle of Bobbili and the battle of Padmanabham are unforgettable and make the area the land of pride and valour. The district was situated between 83º 0′ and 83º 45’E, of the eastern longitudes and 17º 15′ and 19º 15’N, of northern latitudes. The Boundaries of this district are Srikakulum district in the East, Vijayanagaram district in the South, Orissa state and Vishakapatnam district in the West and Orissa state in the North directions. The district has population of 23,42,868 as per the 2011 census which accounts for 2.76% of the total population of the State with 4.16% decadal growth.
													</div>
													<div role="tabpanel" class="tab-pane" id="vijay_profile">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Item</strong></div>
																	</td>
																	<td>
																		<div><strong>Units</strong></div>
																	</td>
																	<td>
																		<div><strong>Figure</strong></div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area</div>
																	</td>
																	<td>
																		<div>In 000 Sq.Km</div>
																	</td>
																	<td>
																		<div>6.5</div>
																	</td>
																	<td>
																		<div>Census 2011</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>23,42,868</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>11,61,913</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>11,80,955</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urban</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>4,90,422</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rural</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>18,52,446</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Growth (decadal)</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>4.16</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Density (Person/Sq.Km)</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>358</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Literacy</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>59.49</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>69.04</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>50.16</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urbanisation</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>20.93</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers as % of total population</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>52.2</div>
																	</td>
																	<td>
																		<div>2001</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers % of main Workers</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>77.7</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Household industries</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>3.7</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area under Food &amp; Non-Food crops</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>3,79,235</div>
																	</td>
																	<td>
																		<div>2012</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Mining &amp; Quarrying (Manganese- Top)</div>
																	</td>
																	<td>
																		<div>Qty in tonnes</div>
																	</td>
																	<td>
																		<div>2,64,252</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>
																			Forest Area under the control of<br>
																			Forest Department
																		</div>
																	</td>
																	<td>
																		<div>Area in hectares</div>
																	</td>
																	<td>
																		<div>1,19,303</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>
																			Gross irrigated area as % of gross<br>
																			cropped area
																		</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>43.82</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Value of output of major crops</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>–</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita food grain production</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>3.3</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Road Length per 100 sq.km.</div>
																	</td>
																	<td>
																		<div>In Sq.km</div>
																	</td>
																	<td>
																		<div>58.41</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Post offices per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>32.31</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Bank branches per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>8.1</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population per bank</div>
																	</td>
																	<td>
																		<div>In Thousands</div>
																	</td>
																	<td>
																		<div>12.38</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank deposits</div>
																	</td>
																	<td>
																		<div>Rs. In Crores</div>
																	</td>
																	<td>
																		<div>13,065.18</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>10,266.47</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>22.88</div>
																	</td>
																	<td>
																		<div>2010</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per ha. bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>14.14</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to Industries</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>14.47</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="vijay_crops">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Crop</strong></div>
																	</td>
																	<td>
																		<div><strong>Area in hectares</strong></div>
																	</td>
																	<td>
																		<div><strong>Out-turn in tonnes</strong></div>
																	</td>
																	<td>
																		<div><strong>&nbsp;Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rice</div>
																	</td>
																	<td>
																		<div>1,24,569</div>
																	</td>
																	<td>
																		<div>2,67,745</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Maize</div>
																	</td>
																	<td>
																		<div>20,619</div>
																	</td>
																	<td>
																		<div>91,624</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Green gram(Moong)</div>
																	</td>
																	<td>
																		<div>15,566</div>
																	</td>
																	<td>
																		<div>7,898</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Black gram(Mash)</div>
																	</td>
																	<td>
																		<div>15,192</div>
																	</td>
																	<td>
																		<div>8,348</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Groundnut</div>
																	</td>
																	<td>
																		<div>19,443</div>
																	</td>
																	<td>
																		<div>23,798</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Sesamum</div>
																	</td>
																	<td>
																		<div>19,741</div>
																	</td>
																	<td>
																		<div>3,381</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Mesta</div>
																	</td>
																	<td>
																		<div>19,164</div>
																	</td>
																	<td>
																		<div>1,52,247</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Sugarcane</div>
																	</td>
																	<td>
																		<div>16,185</div>
																	</td>
																	<td>
																		<div>1,07,050</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="vijay_minerals">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Mineral</strong></div>
																	</td>
																	<td>
																		<div>
																			<strong>Quantity<br>
																			</strong><strong>(Tonnes)</strong>
																		</div>
																	</td>
																	<td>
																		<div>
																			<strong>Value<br>
																			</strong><strong>(‘000 Rs.)</strong>
																		</div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Manganese Ore</div>
																	</td>
																	<td>
																		<div>2,64,252</div>
																	</td>
																	<td>
																		<div>4,59,149</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Zircon/Quartzite</div>
																	</td>
																	<td>
																		<div>98,793</div>
																	</td>
																	<td>
																		<div>13,471</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div id="vizag-data" style="float:left;display:none" class="data-tab">
											<h3 class="obj_edb_h">Vishakapatnam</h3>
											<div class="dis_desc_div">
												<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
													<li role="presentation" class="active"><a href="#vizag_home" aria-controls="vizag_home" role="tab" data-toggle="tab">Details</a></li>
													<li role="presentation"><a href="#vizag_profile" aria-controls="vizag_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
													<li role="presentation"><a href="#vizag_crops" aria-controls="vizag_crops" role="tab" data-toggle="tab">Major Crops</a></li>
													<li role="presentation"><a href="#vizag_minerals" aria-controls="vizag_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
												</ul>
												<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
													<div role="tabpanel" class="tab-pane active" id="vizag_home" style="font-weight:500;">
														Visakhapatnam is a coastal, port city, often called “The Jewel of the East Coast”, situated in the Andhra Pradesh, located on the eastern shore of India, and nestled among the hills of the Eastern Ghats and facing the Bay of Bengal to the east. It is the second largest city in Andhra Pradesh with an area of 550 km²; it is primarily an industrial city, apart from being a port city. It is also home to the Eastern Naval Command. The district was situated between 81º 06′ and 83º 31’E, of the eastern longitudes and 17º 15′ and 18º 32’N, of northern latitudes. The boundaries of this district are Bay of Bengal in the East, East Godavari district in the South, Orissa state in the West and North directions. The district has population of 42, 88,113 as per the 2011 census which accounts for 5.06% of the total population of the State with 11.89% decadal growth.
													</div>
													<div role="tabpanel" class="tab-pane" id="vizag_profile">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Item</strong></div>
																	</td>
																	<td>
																		<div><strong>Units</strong></div>
																	</td>
																	<td>
																		<div><strong>Figure</strong></div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area</div>
																	</td>
																	<td>
																		<div>In 000 Sq.Km</div>
																	</td>
																	<td>
																		<div>11.2</div>
																	</td>
																	<td>
																		<div>Census 2011</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>42,88,113</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>21,40,872</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>21,47,241</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urban</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>20,37,458</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rural</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>22,50,655</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Growth (decadal)</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>11.89</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Density (Person/Sq.Km)</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>384</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Literacy</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>67.7</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>75.47</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>60</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urbanisation</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>47.51</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers as % of total population</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>41.82</div>
																	</td>
																	<td>
																		<div>2001</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers % of main Workers</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>81.45</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Household industries</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>3.19</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area under Food &amp; Non-Food crops</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>3,60,473</div>
																	</td>
																	<td>
																		<div>2012</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Mining &amp; Quarrying (Quartz – Top)</div>
																	</td>
																	<td>
																		<div>Qty in tonnes</div>
																	</td>
																	<td>
																		<div>35,130</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>
																			Forest Area under the control of<br>
																			Forest Department
																		</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>4,41,166</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>
																			Gross irrigated area as % of gross<br>
																			cropped area
																		</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>26.91</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Value of output of major crops</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>–</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita food grain production</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>1.99</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Road Length per 100 sq.km.</div>
																	</td>
																	<td>
																		<div>In Sq.km</div>
																	</td>
																	<td>
																		<div>80.57</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Post offices per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>15.83</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Bank branches per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>10.82</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population per bank</div>
																	</td>
																	<td>
																		<div>In Thousands</div>
																	</td>
																	<td>
																		<div>9.35</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank deposits</div>
																	</td>
																	<td>
																		<div>Rs. In Crores</div>
																	</td>
																	<td>
																		<div>55138.47</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>44328.35</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>30.19</div>
																	</td>
																	<td>
																		<div>2010</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per ha. bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>35.91</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to Industries</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>10.5</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="vizag_crops">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Crop</strong></div>
																	</td>
																	<td>
																		<div><strong>Area in hectares</strong></div>
																	</td>
																	<td>
																		<div>
																			<strong>Out-turn in tonnes<br>
																			</strong>
																		</div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rice</div>
																	</td>
																	<td>
																		<div>1,12,122</div>
																	</td>
																	<td>
																		<div>1,69,739</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Ragi</div>
																	</td>
																	<td>
																		<div>25,002</div>
																	</td>
																	<td>
																		<div>18,059</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Black gram(Mash)</div>
																	</td>
																	<td>
																		<div>5,300</div>
																	</td>
																	<td>
																		<div>3,358</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Green gram(Moong)</div>
																	</td>
																	<td>
																		<div>3,950</div>
																	</td>
																	<td>
																		<div>2,342</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Coconut</div>
																	</td>
																	<td>
																		<div>6,227</div>
																	</td>
																	<td>
																		<div>72,295</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Sesamum</div>
																	</td>
																	<td>
																		<div>6,652</div>
																	</td>
																	<td>
																		<div>1,193</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Sugarcane</div>
																	</td>
																	<td>
																		<div>37,862</div>
																	</td>
																	<td>
																		<div>2,17,502</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Mangoes</div>
																	</td>
																	<td>
																		<div>10,044</div>
																	</td>
																	<td>
																		<div>75,089</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="vizag_minerals">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Mineral</strong></div>
																	</td>
																	<td>
																		<div>
																			<strong>Quantity<br>
																			</strong><strong>(Tonnes)</strong>
																		</div>
																	</td>
																	<td>
																		<div>
																			<strong>Value<br>
																			</strong><strong>(‘000 Rs.)</strong>
																		</div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Quartz/Quarzite</div>
																	</td>
																	<td>
																		<div>35,130</div>
																	</td>
																	<td>
																		<div>5,772</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Laterite</div>
																	</td>
																	<td>
																		<div>34,200</div>
																	</td>
																	<td>
																		<div>1,246</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div id="srikakulam-data" style="float:left;display:none" class="data-tab">
											<h3 class="obj_edb_h">Srikakulam</h3>
											<div class="dis_desc_div">
												<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
													<li role="presentation" class="active"><a href="#srikakulam_home" aria-controls="srikakulam_home" role="tab" data-toggle="tab">Details</a></li>
													<li role="presentation"><a href="#srikakulam_profile" aria-controls="srikakulam_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
													<li role="presentation"><a href="#srikakulam_crops" aria-controls="srikakulam_crops" role="tab" data-toggle="tab">Major Crops</a></li>
													<li role="presentation"><a href="#srikakulam_minerals" aria-controls="srikakulam_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
												</ul>
												<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
													<div role="tabpanel" class="tab-pane active" id="srikakulam_home" style="font-weight:500;">
														Srikakulam district has the longest coast line in the state of Andhra Pradesh. Two of the rivers that pass through Srikakulam district are River Nagavali and River Vamsadhara. Srikakulam District was created out of part of Vishakhapatnam District on August 15, 1950. The district was situated between 83º 25′ and 84º 50’E, of the eastern longitudes and 18º 20′ and 19º 10’N, of northern latitudes. The boundaries of this district are Bay of Bengal in the East, Vijayanagaram district in the South and Orissa state borders in the West and North directions. The district has population of 26,99,471 as per the 2011 census which accounts for 3.18% of the total population of the State with 6.38% decadal growth.
													</div>
													<div role="tabpanel" class="tab-pane" id="srikakulam_profile">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Item</strong></div>
																	</td>
																	<td>
																		<div><strong>Units</strong></div>
																	</td>
																	<td>
																		<div><strong>Figure</strong></div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area</div>
																	</td>
																	<td>
																		<div>In 000 Sq.Km</div>
																	</td>
																	<td>
																		<div>5.8</div>
																	</td>
																	<td>
																		<div>Census 2011</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>26,99,471</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>13,40,430</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>13,59,041</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urban</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>4,36,347</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rural</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>22,63,124</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Growth (decadal)</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>6.38</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Density (Person/Sq.Km)</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>462</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Literacy</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>62.3</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>72.25</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>52.56</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urbanisation</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>16.16</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers as % of total population</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>47.36</div>
																	</td>
																	<td>
																		<div>2001</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers % of main Workers</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>72.44</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Household industries</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>4.22</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area under Food &amp; Non-Food crops</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>4,28,261</div>
																	</td>
																	<td>
																		<div>2012</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Mining &amp; Quarrying (Illiminite – Top)</div>
																	</td>
																	<td>
																		<div>Qty in tonnes</div>
																	</td>
																	<td>
																		<div>2,71,130</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>
																			Forest Area under the control of<br>
																			Forest Department
																		</div>
																	</td>
																	<td>
																		<div>Area in hectares</div>
																	</td>
																	<td>
																		<div>68,641</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>
																			Gross irrigated area as % of gross<br>
																			cropped area
																		</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>54.61</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Value of output of major crops</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>–</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita food grain production</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>3.1</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Road Length per 100 sq.km.</div>
																	</td>
																	<td>
																		<div>In Sq.km</div>
																	</td>
																	<td>
																		<div>60.74</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Post offices per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>18.11</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Bank branches per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>7.18</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population per bank</div>
																	</td>
																	<td>
																		<div>In Thousands</div>
																	</td>
																	<td>
																		<div>14</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank deposits</div>
																	</td>
																	<td>
																		<div>Rs. In Crores</div>
																	</td>
																	<td>
																		<div>12323.15</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>11224.42</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>1.1</div>
																	</td>
																	<td>
																		<div>2010</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per ha. bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>18.8</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to Industries</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>11.53</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="srikakulam_crops">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Crop</strong></div>
																	</td>
																	<td>
																		<div><strong>Area in hectares</strong></div>
																	</td>
																	<td>
																		<div><strong>Out-turn in tonnes</strong></div>
																	</td>
																	<td>
																		<div><strong>&nbsp;Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rice</div>
																	</td>
																	<td>
																		<div>2,10,417</div>
																	</td>
																	<td>
																		<div>4,03,833</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Maize</div>
																	</td>
																	<td>
																		<div>11,417</div>
																	</td>
																	<td>
																		<div>63,776</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Black gram(Mash)</div>
																	</td>
																	<td>
																		<div>41,075</div>
																	</td>
																	<td>
																		<div>23,844</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Green gram(Moong)</div>
																	</td>
																	<td>
																		<div>28,067</div>
																	</td>
																	<td>
																		<div>16,939</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Groundnut</div>
																	</td>
																	<td>
																		<div>21,337</div>
																	</td>
																	<td>
																		<div>29,861</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Coconut</div>
																	</td>
																	<td>
																		<div>13,468</div>
																	</td>
																	<td>
																		<div>1,69,697</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Mesta</div>
																	</td>
																	<td>
																		<div>5,465</div>
																	</td>
																	<td>
																		<div>39,014</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Sugarcane</div>
																	</td>
																	<td>
																		<div>7,862</div>
																	</td>
																	<td>
																		<div>55,451</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="srikakulam_minerals">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Mineral</strong></div>
																	</td>
																	<td>
																		<div>
																			<strong>Quantity<br>
																			</strong><strong>(Tonnes)</strong>
																		</div>
																	</td>
																	<td>
																		<div>
																			<strong>Value<br>
																			</strong><strong>(‘000 Rs.)</strong>
																		</div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Illiminite</div>
																	</td>
																	<td>
																		<div>2,71,130</div>
																	</td>
																	<td>
																		<div>25,75,627</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Zircon/Quartzite</div>
																	</td>
																	<td>
																		<div>23,989</div>
																	</td>
																	<td>
																		<div>13,67,421</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div id="nellore-data" style="float:left;display:none" class="data-tab">
											<h3 class="obj_edb_h">Nellore</h3>
											<div class="dis_desc_div">
												<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
													<li role="presentation" class="active"><a href="#nellore_home" aria-controls="nellore_home" role="tab" data-toggle="tab">Details</a></li>
													<li role="presentation"><a href="#nellore_profile" aria-controls="nellore_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
													<li role="presentation"><a href="#nellore_crops" aria-controls="nellore_crops" role="tab" data-toggle="tab">Major Crops</a></li>
													<li role="presentation"><a href="#nellore_minerals" aria-controls="nellore_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
												</ul>
												<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
													<div role="tabpanel" class="tab-pane active" id="nellore_home" style="font-weight:500;">
														Sri Potti Sriramulu Nellore District is famous for high paddy yield, and so it got its name from “nelli”, an equivalent word for paddy in Tamil. It was earlier known as Nellore district. In June 2008, the government of Andhra Pradesh officially renamed the district as Potti Sri Ramulu Nellore District after the freedom fighter and revolutionary Potti Sri Ramulu, who died fasting in an attempt to achieve the formation of a separate state for the Telugu people. The district was situated between 79º 9′ and 80º 14’E, of the eastern longitudes and 13º 25′ and 15º 55’N, of northern latitudes. The district is bounded on the north by the Prakasam District, on the south by Tamil Nadu state and Chittor District, on the east by the Bay of Bengal, and on the west by YSR District. The district has population of 29,66,082 as per the 2011 census which accounts for 3.50% of the total population of the State with 11.15% decadal growth.
													</div>
													<div role="tabpanel" class="tab-pane" id="nellore_profile">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Item</strong></div>
																	</td>
																	<td>
																		<div><strong>Units</strong></div>
																	</td>
																	<td>
																		<div><strong>Figure</strong></div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area</div>
																	</td>
																	<td>
																		<div>In 000 Sq. Km</div>
																	</td>
																	<td>
																		<div>13.1</div>
																	</td>
																	<td>
																		<div>Census 2011</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>29,66,082</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>14,93,254</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>14,72,828</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urban</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>8,62,309</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rural</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>21,03,773</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Growth (decadal)</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>11.15</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Density (Person/Sq.Km)</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>227</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Literacy</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>69.15</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>75.93</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>62.3</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urbanisation</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>29.07</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers as % of total population</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>45.4</div>
																	</td>
																	<td>
																		<div>2001</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers % of main Workers</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>81.31</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Household industries</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>4.01</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area under Food &amp; Non-Food crops</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>4,48,592</div>
																	</td>
																	<td>
																		<div>2012</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Mining &amp; Quarrying (Feldspar – More)</div>
																	</td>
																	<td>
																		<div>Qty in tonnes</div>
																	</td>
																	<td>
																		<div>1,24,510</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>
																			Forest Area under the control of<br>
																			Forest Department
																		</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>2,62,787</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Gross irrigated area as % of gross cropped area</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>28.78</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Value of output of major crops</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>–</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita food grain production</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>–</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Road Length per 100 sq.km.</div>
																	</td>
																	<td>
																		<div>In Sq.km</div>
																	</td>
																	<td>
																		<div>89.88</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Post offices per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>26.19</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Bank branches per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>9.64</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population per bank</div>
																	</td>
																	<td>
																		<div>In Thousands</div>
																	</td>
																	<td>
																		<div>10.48</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank deposits</div>
																	</td>
																	<td>
																		<div>Rs. In Crores</div>
																	</td>
																	<td>
																		<div>19721.97</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>29076.74</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>67.67</div>
																	</td>
																	<td>
																		<div>2010</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per ha. bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>44.74</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to Industries</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>41.41</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="nellore_crops">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Crop</strong></div>
																	</td>
																	<td>
																		<div><strong>Area in hectares</strong></div>
																	</td>
																	<td>
																		<div>
																			<strong>Out-turn in tonnes<br>
																			</strong>
																		</div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rice</div>
																	</td>
																	<td>
																		<div>2,54,572</div>
																	</td>
																	<td>
																		<div>10,31,426</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Maize</div>
																	</td>
																	<td>
																		<div>1,426</div>
																	</td>
																	<td>
																		<div>10,222</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Black gram(Mash)</div>
																	</td>
																	<td>
																		<div>41,660</div>
																	</td>
																	<td>
																		<div>23,718</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Bengal gram</div>
																	</td>
																	<td>
																		<div>11,944</div>
																	</td>
																	<td>
																		<div>16,339</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Groundnut</div>
																	</td>
																	<td>
																		<div>11,401</div>
																	</td>
																	<td>
																		<div>30,781</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Sunflower</div>
																	</td>
																	<td>
																		<div>2,862</div>
																	</td>
																	<td>
																		<div>1,983</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Cotton</div>
																	</td>
																	<td>
																		<div>14,681</div>
																	</td>
																	<td>
																		<div>34,716</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Tobacco</div>
																	</td>
																	<td>
																		<div>10,882</div>
																	</td>
																	<td>
																		<div>17,531</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="nellore_minerals">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Mineral</strong></div>
																	</td>
																	<td>
																		<div>
																			<strong>Quantity<br>
																			</strong><strong>(Tonnes)</strong>
																		</div>
																	</td>
																	<td>
																		<div>
																			<strong>Value<br>
																			</strong><strong>(‘000 Rs.)</strong>
																		</div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Silica Sand</div>
																	</td>
																	<td>
																		<div>21,39,623</div>
																	</td>
																	<td>
																		<div>1,03,708</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Feldspar</div>
																	</td>
																	<td>
																		<div>1,24,510</div>
																	</td>
																	<td>
																		<div>36,059</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div id="prakasam-data" style="float:left;display:none" class="data-tab">
											<h3 class="obj_edb_h">Prakasam</h3>
											<div class="dis_desc_div">
												<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
													<li role="presentation" class="active"><a href="#prakasam_home" aria-controls="prakasam_home" role="tab" data-toggle="tab">Details</a></li>
													<li role="presentation"><a href="#prakasam_profile" aria-controls="prakasam_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
													<li role="presentation"><a href="#prakasam_crops" aria-controls="prakasam_crops" role="tab" data-toggle="tab">Major Crops</a></li>
													<li role="presentation"><a href="#prakasam_minerals" aria-controls="prakasam_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
												</ul>
												<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
													<div role="tabpanel" class="tab-pane active" id="prakasam_home" style="font-weight:500;">
														The region was named as Prakasam District on 12 May 1972 in memory of Tanguturi Prakasam, also known as Andhra Kesari (Lion of Andhra). The district was situated between 79º and 80º E, of the eastern longitudes and 15º 30′ and 16ºN, of northern latitudes. The Boundaries of Prakasam district are Bay of Bengal in the East, Cuddapah and Nellore districts in the South, Kurnool district in the West and Guntur district in the North directions. The district headquarters are located at Ongole. The district has population of 33,92,764 as per the 2011 census which accounts for 4.00% of the total population of the State with 10.90% decadal growth.
													</div>
													<div role="tabpanel" class="tab-pane" id="prakasam_profile">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Item</strong></div>
																	</td>
																	<td>
																		<div><strong>Units</strong></div>
																	</td>
																	<td>
																		<div><strong>Figure</strong></div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area</div>
																	</td>
																	<td>
																		<div>In 000 Sq. Km</div>
																	</td>
																	<td>
																		<div>17.6</div>
																	</td>
																	<td>
																		<div>Census 2011</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>33,92,764</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>17,12,735</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>16,80,029</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urban</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>6,62,116</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rural</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>27,30,648</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Growth (decadal)</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>10.9</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Density (Person/Sq.Km)</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>192</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Literacy</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>63.53</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>73.53</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>53.4</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urbanisation</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>19.52</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers as % of total population</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>50.25</div>
																	</td>
																	<td>
																		<div>2001</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers % of main Workers</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>84.99</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Household industries</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>3.74</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area under Food &amp; Non-Food crops</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>6,36,433</div>
																	</td>
																	<td>
																		<div>2012</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Mining &amp; Quarrying (Silica Sand – Top)</div>
																	</td>
																	<td>
																		<div>Qty in tonnes</div>
																	</td>
																	<td>
																		<div>53,378</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>
																			Forest Area under the control of<br>
																			Forest Department
																		</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>4,61,983</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>
																			Gross irrigated area as % of gross<br>
																			cropped area
																		</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>34.47</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Value of output of major crops</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>–</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita food grain production</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>–</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Road Length per 100 sq.km.</div>
																	</td>
																	<td>
																		<div>In Sq.km</div>
																	</td>
																	<td>
																		<div>118.33</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Post offices per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>26.7</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Bank branches per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>8.98</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population per bank</div>
																	</td>
																	<td>
																		<div>In Thousands</div>
																	</td>
																	<td>
																		<div>11.24</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank deposits</div>
																	</td>
																	<td>
																		<div>Rs. In Crores</div>
																	</td>
																	<td>
																		<div>15238.9</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>27430.14</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>88.29</div>
																	</td>
																	<td>
																		<div>2010</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per ha. bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>47.07</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to Industries</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>14.6</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="prakasam_crops">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Crop</strong></div>
																	</td>
																	<td>
																		<div><strong>Area in hectares</strong></div>
																	</td>
																	<td>
																		<div>
																			<strong>Out-turn in tonnes<br>
																			</strong>
																		</div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rice</div>
																	</td>
																	<td>
																		<div>1,18,518</div>
																	</td>
																	<td>
																		<div>4,27,030</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Maize</div>
																	</td>
																	<td>
																		<div>13,538</div>
																	</td>
																	<td>
																		<div>1,03,271</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Red gram(Tuar)</div>
																	</td>
																	<td>
																		<div>38,173</div>
																	</td>
																	<td>
																		<div>12,444</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Bengal gram</div>
																	</td>
																	<td>
																		<div>94,684</div>
																	</td>
																	<td>
																		<div>1,38,996</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Sunflower</div>
																	</td>
																	<td>
																		<div>17,007</div>
																	</td>
																	<td>
																		<div>18,623</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Castor</div>
																	</td>
																	<td>
																		<div>12,329</div>
																	</td>
																	<td>
																		<div>5,105</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Tobacco</div>
																	</td>
																	<td>
																		<div>62,776</div>
																	</td>
																	<td>
																		<div>1,09,504</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Chillies</div>
																	</td>
																	<td>
																		<div>31,984</div>
																	</td>
																	<td>
																		<div>1,06,589</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="prakasam_minerals">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Mineral</strong></div>
																	</td>
																	<td>
																		<div>
																			<strong>Quantity<br>
																			</strong><strong>(Tonnes)</strong>
																		</div>
																	</td>
																	<td>
																		<div>
																			<strong>Value<br>
																			</strong><strong>(‘000 Rs.)</strong>
																		</div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Silica Sand</div>
																	</td>
																	<td>
																		<div>53,378</div>
																	</td>
																	<td>
																		<div>2,587</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Quartz/Quarzite</div>
																	</td>
																	<td>
																		<div>14,597</div>
																	</td>
																	<td>
																		<div>2,398</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div id="kurnool-data" style="float:left;display:none" class="data-tab">
											<h3 class="obj_edb_h">Kurnool</h3>
											<div class="dis_desc_div">
												<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
													<li role="presentation" class="active"><a href="#kurnool_home" aria-controls="kurnool_home" role="tab" data-toggle="tab">Details</a></li>
													<li role="presentation"><a href="#kurnool_profile" aria-controls="kurnool_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
													<li role="presentation"><a href="#kurnool_crops" aria-controls="kurnool_crops" role="tab" data-toggle="tab">Major Crops</a></li>
													<li role="presentation"><a href="#kurnool_minerals" aria-controls="kurnool_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
												</ul>
												<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
													<div role="tabpanel" class="tab-pane active" id="kurnool_home" style="font-weight:500;">
														This district derives its name from its chief town Kurnool the capital of former Nawabs, Capital of Andhra Pradesh State from 1st October 1953 to 1st November, 1956 and at present the headquarters of the district. The name Kurnool is said to have been derived from “Kandanavolu”. The district was situated between 77º 24′ and 79º 40’E, of the eastern longitudes and 14º 54′ and 16º 18’N, of northern latitudes. The Boundaries of Kurnool district are Guntur and Nellore districts in the East, Ballary district in the West, Mahaboobnagar district in the North, Cuddapah and Anantapur districts in the South directions. The district has population of 40,46,601 as per the 2011 census which accounts for 4.77% of the total population of the State with 14.65% decadal growth.
													</div>
													<div role="tabpanel" class="tab-pane" id="kurnool_profile">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Item</strong></div>
																	</td>
																	<td>
																		<div><strong>Units</strong></div>
																	</td>
																	<td>
																		<div><strong>Figure</strong></div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area</div>
																	</td>
																	<td>
																		<div>In 000 Sq. Km</div>
																	</td>
																	<td>
																		<div>17.7</div>
																	</td>
																	<td>
																		<div>Census 2011</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>40,46,601</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>20,40,101</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>20,06,500</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urban</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>11,43,724</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rural</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>29,02,877</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Growth (decadal)</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>14.65</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Density (Person/Sq.Km)</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>229</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Literacy</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>61.13</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>71.36</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>50.81</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urbanisation</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>28.26</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers as % of total population</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>49.44</div>
																	</td>
																	<td>
																		<div>2001</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers % of main Workers</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>85.98</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Household industries</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>3.54</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area under Food &amp; Non-Food crops</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>9,62,190</div>
																	</td>
																	<td>
																		<div>2012</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Mining &amp; Quarrying (Limestone – Top)</div>
																	</td>
																	<td>
																		<div>Qty in tonnes</div>
																	</td>
																	<td>
																		<div>92,26,439</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>
																			Forest Area under the control of<br>
																			Forest Department
																		</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>3,40,669</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>
																			Gross irrigated area as % of gross<br>
																			cropped area
																		</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>49.57</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Value of output of major crops</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>–</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita food grain production</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>–</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Road Length per 100 sq.km.</div>
																	</td>
																	<td>
																		<div>In Sq.km</div>
																	</td>
																	<td>
																		<div>114.38</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Post offices per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>18.85</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Bank branches per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>7.36</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population per bank</div>
																	</td>
																	<td>
																		<div>In Thousands</div>
																	</td>
																	<td>
																		<div>13.77</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank deposits</div>
																	</td>
																	<td>
																		<div>Rs. In Crores</div>
																	</td>
																	<td>
																		<div>16052.73</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>17347.89</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>51.72</div>
																	</td>
																	<td>
																		<div>2010</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per ha. bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>21.75</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to Industries</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>13.53</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="kurnool_crops">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Crop</strong></div>
																	</td>
																	<td>
																		<div><strong>Area in hectares</strong></div>
																	</td>
																	<td>
																		<div>
																			<strong>Out-turn in tonnes<br>
																			</strong>
																		</div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rice</div>
																	</td>
																	<td>
																		<div>1,06,722</div>
																	</td>
																	<td>
																		<div>3,79,924</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Jowar</div>
																	</td>
																	<td>
																		<div>84,670</div>
																	</td>
																	<td>
																		<div>1,75,060</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Bengal gram</div>
																	</td>
																	<td>
																		<div>2,01,034</div>
																	</td>
																	<td>
																		<div>1,53,188</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Red gram(Tuar)</div>
																	</td>
																	<td>
																		<div>49,021</div>
																	</td>
																	<td>
																		<div>12,990</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Groundnut</div>
																	</td>
																	<td>
																		<div>1,01,318</div>
																	</td>
																	<td>
																		<div>47,263</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Castor</div>
																	</td>
																	<td>
																		<div>1,15,092</div>
																	</td>
																	<td>
																		<div>7,021</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Cotton</div>
																	</td>
																	<td>
																		<div>96,323</div>
																	</td>
																	<td>
																		<div>1,22,387</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Onions</div>
																	</td>
																	<td>
																		<div>26,909</div>
																	</td>
																	<td>
																		<div>4,26,397</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="kurnool_minerals">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Mineral</strong></div>
																	</td>
																	<td>
																		<div><strong>Quantity (Tonnes)</strong></div>
																	</td>
																	<td>
																		<div><strong>Value (millions)</strong></div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Limestone</div>
																	</td>
																	<td>
																		<div>92,26,439</div>
																	</td>
																	<td>
																		<div>11,82,184</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Iron Ore</div>
																	</td>
																	<td>
																		<div>5,79,252</div>
																	</td>
																	<td>
																		<div>1,74,337</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div id="krishna-data" style="float:left;display:none" class="data-tab">
											<h3 class="obj_edb_h">Krishna</h3>
											<div class="dis_desc_div">
												<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
													<li role="presentation" class="active"><a href="#krishna_home" aria-controls="krishna_home" role="tab" data-toggle="tab">Details</a></li>
													<li role="presentation"><a href="#krishna_profile" aria-controls="krishna_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
													<li role="presentation"><a href="#krishna_crops" aria-controls="krishna_crops" role="tab" data-toggle="tab">Major Crops</a></li>
													<li role="presentation"><a href="#krishna_minerals" aria-controls="krishna_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
												</ul>
												<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
													<div role="tabpanel" class="tab-pane active" id="krishna_home" style="font-weight:500;">
														Krishna District is a district of India’s Andhra Pradesh state. It is named after the Krishna River which flows through the district. Machilipatnam is the administrative headquarters of the district. The district was situated between 80º 01′ and 81º 33’E, of the eastern longitudes and 15º 45′ and 17º 10’N, of northern latitudes. The Boundaries of this district are West Godavari district in the East, Bay of Bengal in the South, Guntur and Nalgonda districts in the West and Khammam district in the North directions. The district has population of 45,29,009 as per the 2011 census which accounts for 5.34% of the total population of the State with 8.15% decadal growth.
													</div>
													<div role="tabpanel" class="tab-pane" id="krishna_profile">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Item</strong></div>
																	</td>
																	<td>
																		<div><strong>Units</strong></div>
																	</td>
																	<td>
																		<div><strong>Figure</strong></div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area</div>
																	</td>
																	<td>
																		<div>In 000 Sq.Km</div>
																	</td>
																	<td>
																		<div>8.7</div>
																	</td>
																	<td>
																		<div>Census 2011</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>45,29,009</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>22,68,312</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>22,60,697</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urban</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>18,57,291</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rural</div>
																	</td>
																	<td>
																		<div>In Persons</div>
																	</td>
																	<td>
																		<div>26,71,718</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Growth (decadal)</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>8.15</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population Density (Person/Sq.Km)</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>519</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Literacy</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>74.37</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Male</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>79.13</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Female</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>69.62</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Urbanisation</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>41.01</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers as % of total population</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>43.97</div>
																	</td>
																	<td>
																		<div>2001</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Workers % of main Workers</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>85.54</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Household industries</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>2.9</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Area under Food &amp; Non-Food crops</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>7,26,436</div>
																	</td>
																	<td>
																		<div>2012</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Mining &amp; Quarrying (Limestone – Top)</div>
																	</td>
																	<td>
																		<div>Qty in tonnes</div>
																	</td>
																	<td>
																		<div>42,12,734</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Forest Area under the control of Forest Department</div>
																	</td>
																	<td>
																		<div>Area in Hectares</div>
																	</td>
																	<td>
																		<div>76,186</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Gross irrigated area as % of gross cropped area</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>58.51</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Value of output of major crops</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>–</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita food grain production</div>
																	</td>
																	<td>
																		<div>%</div>
																	</td>
																	<td>
																		<div>–</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Road Length per 100 sq.km.</div>
																	</td>
																	<td>
																		<div>In Sq.km</div>
																	</td>
																	<td>
																		<div>80.73</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Post offices per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>18.06</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Bank branches per 100,000 persons</div>
																	</td>
																	<td>
																		<div>Ratio</div>
																	</td>
																	<td>
																		<div>11.68</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Population per bank</div>
																	</td>
																	<td>
																		<div>In Thousands</div>
																	</td>
																	<td>
																		<div>8.63</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank deposits</div>
																	</td>
																	<td>
																		<div>Rs. In Crores</div>
																	</td>
																	<td>
																		<div>32836.1</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>36927.28</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>64.27</div>
																	</td>
																	<td>
																		<div>2010</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per ha. bank credit to agriculture</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>40.07</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Per capita bank credit to Industries</div>
																	</td>
																	<td>
																		<div>In Rs.</div>
																	</td>
																	<td>
																		<div>42.86</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="krishna_crops">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Crop</strong></div>
																	</td>
																	<td>
																		<div><strong>Area in hectares</strong></div>
																	</td>
																	<td>
																		<div><strong>Out-turn in tonnes</strong></div>
																	</td>
																	<td>
																		<div><strong>Source</strong></div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Rice</div>
																	</td>
																	<td>
																		<div>2,72,029</div>
																	</td>
																	<td>
																		<div>10,11,542</div>
																	</td>
																	<td>
																		<div>2011-12</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Maize</div>
																	</td>
																	<td>
																		<div>24,687</div>
																	</td>
																	<td>
																		<div>1,64,906</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Black gram(Mash)</div>
																	</td>
																	<td>
																		<div>1,74,857</div>
																	</td>
																	<td>
																		<div>1,56,052</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Green gram(Moong)</div>
																	</td>
																	<td>
																		<div>12,843</div>
																	</td>
																	<td>
																		<div>9,190</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Groundnut</div>
																	</td>
																	<td>
																		<div>4,234</div>
																	</td>
																	<td>
																		<div>8,710</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Coconut</div>
																	</td>
																	<td>
																		<div>1,847</div>
																	</td>
																	<td>
																		<div>27,513</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Sugarcane</div>
																	</td>
																	<td>
																		<div>16,024</div>
																	</td>
																	<td>
																		<div>1,64,424</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div>Mangoes</div>
																	</td>
																	<td>
																		<div>57,382</div>
																	</td>
																	<td>
																		<div>3,73,557</div>
																	</td>
																	<td>
																		<div>“</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div role="tabpanel" class="tab-pane" id="krishna_minerals">
														<table class="table table-striped">
															<tbody>
																<tr>
																	<td>
																		<div><strong>Mineral</strong></div>
																	</td>
																	<td>
																		<div><strong>Quantity<br>
																			(Tonnes)</strong></div>
																		</td>
																		<td>
																			<div><strong>Value<br>
																				(‘000 Rs.)</strong></div>
																			</td>
																			<td>
																				<div><strong>Source</strong></div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Limestone</div>
																			</td>
																			<td>
																				<div>42,12,734</div>
																			</td>
																			<td>
																				<div>5,39,778</div>
																			</td>
																			<td>
																				<div>2011-12</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Quartz</div>
																			</td>
																			<td>
																				<div>13,444</div>
																			</td>
																			<td>
																				<div>2,209</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div id="cuddapah-data" style="float:left;display:none" class="data-tab">
													<h3 class="obj_edb_h">Cuddapah</h3>
													<div class="dis_desc_div">
														<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
															<li role="presentation" class="active"><a href="#cuddapah_home" aria-controls="cuddapah_home" role="tab" data-toggle="tab">Details</a></li>
															<li role="presentation"><a href="#cuddapah_profile" aria-controls="cuddapah_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
															<li role="presentation"><a href="#cuddapah_crops" aria-controls="cuddapah_crops" role="tab" data-toggle="tab">Major Crops</a></li>
															<li role="presentation"><a href="#cuddapah_minerals" aria-controls="cuddapah_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
														</ul>
														<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
															<div role="tabpanel" class="tab-pane active" id="cuddapah_home" style="font-weight:500;">Dr.Y.S.Rajasekhara Reddy District (Cuddapah) is situated in the south-central part of the Andhra Pradesh State. Located 8 km south of the Penna River, the city is surrounded on three sides by the Nallamala and Palakonda hills. The name Kadapa is derived from the Telugu word Gadapa (threshold). The city is so named because it is the gateway from the north to the sacred hill Pagoda of Shri Venkateshvara (also spelt as Venkateswara) of Tirupati. The district was situated between 77º 51º and 79º 29ºE, of the eastern longitudes and 13º 43º and 15º 14ºN, of northern latitudes. The district is bounded on the north by the Prakasam and Kurnool Districts, on the south by Chittor District, on the east by Nellore District, and on the west by Anantapur District. The district has population of 28,84,524 as per the 2011 census which accounts for 3.40% of the total population of the State with 10.87% decadal growth.
															</div>
															<div role="tabpanel" class="tab-pane" id="cuddapah_profile">
																<table class="table table-striped">
																	<tbody>
																		<tr>
																			<td>
																				<div><strong>Item</strong></div>
																			</td>
																			<td>
																				<div>Units</div>
																			</td>
																			<td>
																				<div>Figure</div>
																			</td>
																			<td>
																				<div>Source</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Area</div>
																			</td>
																			<td>
																				<div>In 000 Sq. Km</div>
																			</td>
																			<td>
																				<div>15.4</div>
																			</td>
																			<td>
																				<div>Census 2011</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Population</div>
																			</td>
																			<td>
																				<div>In Persons</div>
																			</td>
																			<td>
																				<div>28,84,524</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Male</div>
																			</td>
																			<td>
																				<div>In Persons</div>
																			</td>
																			<td>
																				<div>14,54,136</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Female</div>
																			</td>
																			<td>
																				<div>In Persons</div>
																			</td>
																			<td>
																				<div>14,30,388</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Urban</div>
																			</td>
																			<td>
																				<div>In Persons</div>
																			</td>
																			<td>
																				<div>9,83,736</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Rural</div>
																			</td>
																			<td>
																				<div>In Persons</div>
																			</td>
																			<td>
																				<div>19,00,788</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Population Growth (decadal)</div>
																			</td>
																			<td>
																				<div>%</div>
																			</td>
																			<td>
																				<div>10.87</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Population Density (Person/Sq.Km)</div>
																			</td>
																			<td>
																				<div>Ratio</div>
																			</td>
																			<td>
																				<div>188</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Literacy</div>
																			</td>
																			<td>
																				<div>%</div>
																			</td>
																			<td>
																				<div>67.88</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Male</div>
																			</td>
																			<td>
																				<div>%</div>
																			</td>
																			<td>
																				<div>78.41</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Female</div>
																			</td>
																			<td>
																				<div>%</div>
																			</td>
																			<td>
																				<div>57.26</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Urbanisation</div>
																			</td>
																			<td>
																				<div>%</div>
																			</td>
																			<td>
																				<div>34.1</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Workers as % of total population</div>
																			</td>
																			<td>
																				<div>%</div>
																			</td>
																			<td>
																				<div>44.79</div>
																			</td>
																			<td>
																				<div>2001</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Workers % of main Workers</div>
																			</td>
																			<td>
																				<div>%</div>
																			</td>
																			<td>
																				<div>79.94</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Household industries</div>
																			</td>
																			<td>
																				<div>%</div>
																			</td>
																			<td>
																				<div>5.25</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Area under Food &amp; Non-Food crops</div>
																			</td>
																			<td>
																				<div>Area in Hectares</div>
																			</td>
																			<td>
																				<div>4,32,970</div>
																			</td>
																			<td>
																				<div>2012</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Mining &amp; Quarrying (Limestone ? Top)</div>
																			</td>
																			<td>
																				<div>Qty in tonnes</div>
																			</td>
																			<td>
																				<div>89,25,320</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Forest Area under the control of Forest Department</div>
																			</td>
																			<td>
																				<div>Area in Hectares</div>
																			</td>
																			<td>
																				<div>5,00,961</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Gross irrigated area as % of gross cropped area</div>
																			</td>
																			<td>
																				<div>%</div>
																			</td>
																			<td>
																				<div>22.96</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Value of output of major crops</div>
																			</td>
																			<td>
																				<div>%</div>
																			</td>
																			<td>
																				<div>–</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Per capita food grain production</div>
																			</td>
																			<td>
																				<div>%</div>
																			</td>
																			<td>
																				<div>–</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Road Length per 100 sq.km.</div>
																			</td>
																			<td>
																				<div>In Sq.km</div>
																			</td>
																			<td>
																				<div>118.45</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Post offices per 100,000 persons</div>
																			</td>
																			<td>
																				<div>Ratio</div>
																			</td>
																			<td>
																				<div>28.63</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Bank branches per 100,000 persons</div>
																			</td>
																			<td>
																				<div>Ratio</div>
																			</td>
																			<td>
																				<div>8.7</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Population per bank</div>
																			</td>
																			<td>
																				<div>In Thousands</div>
																			</td>
																			<td>
																				<div>11.61</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Per capita bank deposits</div>
																			</td>
																			<td>
																				<div>Rs. In Crores</div>
																			</td>
																			<td>
																				<div>18991</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Per capita bank credit</div>
																			</td>
																			<td>
																				<div>In Rs.</div>
																			</td>
																			<td>
																				<div>19841.4</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Per capita bank credit to agriculture</div>
																			</td>
																			<td>
																				<div>In Rs.</div>
																			</td>
																			<td>
																				<div>51.03</div>
																			</td>
																			<td>
																				<div>2010</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Per ha. bank credit to agriculture</div>
																			</td>
																			<td>
																				<div>In Rs.</div>
																			</td>
																			<td>
																				<div>34</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Per capita bank credit to Industries</div>
																			</td>
																			<td>
																				<div>In Rs.</div>
																			</td>
																			<td>
																				<div>11.72</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div role="tabpanel" class="tab-pane" id="cuddapah_crops">
																<table class="table table-striped">
																	<tbody>
																		<tr>
																			<td>
																				<div><strong>Crop</strong></div>
																			</td>
																			<td>
																				<div><strong>Area in hectares</strong></div>
																			</td>
																			<td>
																				<div><strong>Out- turn in tonnes<br>
																				</strong></div>
																			</td>
																			<td>
																				<div><strong>Source</strong></div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Rice</div>
																			</td>
																			<td>
																				<div>53,896</div>
																			</td>
																			<td>
																				<div>1,58,660</div>
																			</td>
																			<td>
																				<div>2011-12</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Jowar</div>
																			</td>
																			<td>
																				<div>13,154</div>
																			</td>
																			<td>
																				<div>5,941</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Bengal gram</div>
																			</td>
																			<td>
																				<div>90,366</div>
																			</td>
																			<td>
																				<div>74,913</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Red gram(Tuar)</div>
																			</td>
																			<td>
																				<div>9,079</div>
																			</td>
																			<td>
																				<div>2,270</div>
																			</td>
																			<td>
																				<div>?</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Sunflower</div>
																			</td>
																			<td>
																				<div>62,079</div>
																			</td>
																			<td>
																				<div>39,749</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Groundnut</div>
																			</td>
																			<td>
																				<div>57,057</div>
																			</td>
																			<td>
																				<div>60,517</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Cotton</div>
																			</td>
																			<td>
																				<div>28,819</div>
																			</td>
																			<td>
																				<div>48,314</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Mangoes</div>
																			</td>
																			<td>
																				<div>19,212</div>
																			</td>
																			<td>
																				<div>1,11,583</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div role="tabpanel" class="tab-pane" id="cuddapah_minerals">
																<table class="table table-striped">
																	<tbody>
																		<tr>
																			<td>
																				<div><strong>Mineral</strong></div>
																			</td>
																			<td>
																				<div><strong>Quantity (Tonnes)</strong></div>
																			</td>
																			<td>
																				<div><strong>Value (?000 Rs.)</strong></div>
																			</td>
																			<td>
																				<div><strong>Source</strong></div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Limestone</div>
																			</td>
																			<td>
																				<div>89,25,320</div>
																			</td>
																			<td>
																				<div>11,43,601</div>
																			</td>
																			<td>
																				<div>2011-12</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Barytes</div>
																			</td>
																			<td>
																				<div>23,85,428</div>
																			</td>
																			<td>
																				<div>27,66,142</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
												<div id="guntur-data" style="float:left;display:none" class="data-tab">
													<h3 class="obj_edb_h">Guntur</h3>
													<div class="dis_desc_div">
														<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
															<li role="presentation" class="active"><a href="#guntur_home" aria-controls="guntur_home" role="tab" data-toggle="tab">Details</a></li>
															<li role="presentation"><a href="#guntur_profile" aria-controls="guntur_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
															<li role="presentation"><a href="#guntur_crops" aria-controls="guntur_crops" role="tab" data-toggle="tab">Major Crops</a></li>
															<li role="presentation"><a href="#guntur_minerals" aria-controls="guntur_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
														</ul>
														<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
															<div role="tabpanel" class="tab-pane active" id="guntur_home" style="font-weight:500;">
																Guntur is a centre of education and learning and is home of historically significant Amaravati, Bhattiprolu and Sitanagaram monuments. The district was situated between 79º 10′ and 80º 55’E, of the eastern longitudes and 15º 18′ and 16º 50’N, of northern latitudes. The district is bounded on the southeast by the Bay of Bengal, on the south by Prakasam District, on the west by Mahabubnagar District, and on the northwest by Nalgonda District. The district has population of 48,89,230 as per the 2011 census which accounts for 5.77% of the total population of the State with 9.50% decadal growth.
															</div>
															<div role="tabpanel" class="tab-pane" id="guntur_profile">
																<table class="table table-striped">
																	<tr>
																		<td><b>Item</b></td>
																		<td><b>Units</b></td>
																		<td><b>Figure</b></td>
																		<td><b>Source</b></td>
																	</tr>
																	<tr>
																		<td >
																			Area
																		</td>
																		<td >
																			In 000 Sq. Km
																		</td>
																		<td >
																			11.4
																		</td>
																		<td >
																			Census 2011
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Population
																		</td>
																		<td >
																			In Persons
																		</td>
																		<td >
																			48,89,230
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Male
																		</td>
																		<td >
																			In Persons
																		</td>
																		<td >
																			24,41,128
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Female
																		</td>
																		<td >
																			In Persons
																		</td>
																		<td >
																			24,48,102
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Urban
																		</td>
																		<td >
																			In Persons
																		</td>
																		<td >
																			16,56,745
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Rural
																		</td>
																		<td >
																			In Persons
																		</td>
																		<td >
																			32,32,485
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Population Growth (decadal)
																		</td>
																		<td >
																			%
																		</td>
																		<td >
																			9.5
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Population Density (Person/Sq.Km)
																		</td>
																		<td >
																			Ratio
																		</td>
																		<td >
																			429
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Literacy
																		</td>
																		<td >
																			%
																		</td>
																		<td >
																			67.99
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Male
																		</td>
																		<td >
																			%
																		</td>
																		<td >
																			75.4
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Female
																		</td>
																		<td >
																			%
																		</td>
																		<td >
																			60.64
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Urbanisation
																		</td>
																		<td >
																			%
																		</td>
																		<td >
																			33.89
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Workers as % of total population
																		</td>
																		<td >
																			%
																		</td>
																		<td >
																			49.05
																		</td>
																		<td >
																			2001
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Workers % of main Workers
																		</td>
																		<td >
																			%
																		</td>
																		<td >
																			85.37
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Household industries
																		</td>
																		<td >
																			%
																		</td>
																		<td >
																			2.37
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Area under Food &amp; Non-Food crops
																		</td>
																		<td >
																			Area in Hectares
																		</td>
																		<td >
																			8,29,312
																		</td>
																		<td >
																			2012
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Mining &amp; Quarrying (Limestone – Top)
																		</td>
																		<td >
																			Qty in tonnes
																		</td>
																		<td >
																			45,43,928
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Forest Area under the control of Forest Department
																		</td>
																		<td >
																			Area in Hectares
																		</td>
																		<td >
																			1,61,941
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Gross irrigated area as % of gross cropped area
																		</td>
																		<td >
																			%
																		</td>
																		<td >
																			55.98
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Value of output of major crops
																		</td>
																		<td >
																			%
																		</td>
																		<td >
																			&#8211;
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Per capita food grain production
																		</td>
																		<td >
																			%
																		</td>
																		<td >
																			&#8211;
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Road Length per 100 sq.km.
																		</td>
																		<td >
																			In Sq.km
																		</td>
																		<td >
																			114.17
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Post offices per 100,000 persons
																		</td>
																		<td >
																			Ratio
																		</td>
																		<td >
																			17.44
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Bank branches per 100,000 persons
																		</td>
																		<td >
																			Ratio
																		</td>
																		<td >
																			9.75
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Population per bank
																		</td>
																		<td >
																			In Thousands
																		</td>
																		<td >
																			10.34
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Per capita bank deposits
																		</td>
																		<td >
																			Rs. In Crores
																		</td>
																		<td >
																			22725.66
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Per capita bank credit
																		</td>
																		<td >
																			In Rs.
																		</td>
																		<td >
																			37003.57
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Per capita bank credit to agriculture
																		</td>
																		<td >
																			In Rs.
																		</td>
																		<td >
																			78.42
																		</td>
																		<td >
																			2010
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Per ha. bank credit to agriculture
																		</td>
																		<td >
																			In Rs.
																		</td>
																		<td >
																			46.23
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																	<tr>
																		<td >
																			Per capita bank credit to Industries
																		</td>
																		<td >
																			In Rs.
																		</td>
																		<td >
																			69.83
																		</td>
																		<td >
																			“
																		</td>
																	</tr>
																</table>
															</div>
															<div role="tabpanel" class="tab-pane" id="guntur_crops">
																<table class="table table-striped">
																	<tbody>
																		<tr>
																			<td>
																				<div><strong>Crop</strong></div>
																			</td>
																			<td>
																				<div><strong>District Total</strong></div>
																			</td>
																			<td>
																				<div><strong>Quantity (In Thousand Tonnes)</strong></div>
																			</td>
																			<td>
																				<div><strong>Source</strong></div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Rice</div>
																			</td>
																			<td>
																				<div>2,92,802</div>
																			</td>
																			<td>
																				<div>11,19,981</div>
																			</td>
																			<td>
																				<div>2011-12</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Maize</div>
																			</td>
																			<td>
																				<div>71,757</div>
																			</td>
																			<td>
																				<div>6,30,253</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Black gram(Mash)</div>
																			</td>
																			<td>
																				<div>55,458</div>
																			</td>
																			<td>
																				<div>60,948</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Green gram(Moong)</div>
																			</td>
																			<td>
																				<div>18,185</div>
																			</td>
																			<td>
																				<div>15,333</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Sesamum</div>
																			</td>
																			<td>
																				<div>3,844</div>
																			</td>
																			<td>
																				<div>1,435</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Groundnut</div>
																			</td>
																			<td>
																				<div>5,091</div>
																			</td>
																			<td>
																				<div>14,252</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Cotton</div>
																			</td>
																			<td>
																				<div>1,62,714</div>
																			</td>
																			<td>
																				<div>3,46,485</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div>Chillies</div>
																			</td>
																			<td>
																				<div>76,124</div>
																			</td>
																			<td>
																				<div>3,26,833</div>
																			</td>
																			<td>
																				<div>“</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div role="tabpanel" class="tab-pane" id="guntur_minerals">
																<table class="table table-striped">
																	<tr>
																		<td>
																			<div><strong>Mineral</strong></div>
																		</td>
																		<td>
																			<div>
																				<strong>Quantity<br>
																					(Tonnes)</strong>
																				</div>
																			</td>
																			<td>
																				<div>
																					<strong>Value<br>
																						(‘000 Rs.)</strong>
																					</div>
																				</td>
																				<td>
																					<div><strong>Source</strong></div>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<div>Limestone</div>
																				</td>
																				<td>
																					<div>45,43,928</div>
																				</td>
																				<td>
																					<div>5,82,213</div>
																				</td>
																				<td>
																					<div>2011-12</div>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<div>Quartz</div>
																				</td>
																				<td>
																					<div>19,750</div>
																				</td>
																				<td>
																					<div>3,245</div>
																				</td>
																				<td>
																					<div>“</div>
																				</td>
																			</tr>
																		</table>
																	</div>
																</div>
															</div>
														</div>
														<div id="egodavari-data" style="float:left;display:none" class="data-tab">
															<h3 class="obj_edb_h">East Godavari</h3>
															<div class="dis_desc_div">
																<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
																	<li role="presentation" class="active"><a href="#egodavari_home" aria-controls="egodavari_home" role="tab" data-toggle="tab">Details</a></li>
																	<li role="presentation"><a href="#egodavari_profile" aria-controls="egodavari_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
																	<li role="presentation"><a href="#egodavari_crops" aria-controls="egodavari_crops" role="tab" data-toggle="tab">Major Crops</a></li>
																	<li role="presentation"><a href="#egodavari_minerals" aria-controls="egodavari_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
																</ul>
																<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
																	<div role="tabpanel" class="tab-pane active" id="egodavari_home" style="font-weight:500;">
																		The District is known as rice bowl of Andhra Pradesh with lush paddy fields and coconut groves. It is also known as another Kerala. Its district headquarters is in Kakinada. The district was situated between 81º 29′ and 82º 37’E, of the eastern longitudes and 16º 30′ and 18’N, of northern latitudes. The Boundaries of East Godavari are Bay of Bengal in the East and South, Khammam district in the West and Visakhapatnam district in the North directions. The district has population of 51,51,549 as per the 2011 census which accounts for 6.08% of the total population of the State with 5.10% decadal growth.
																	</div>
																	<div role="tabpanel" class="tab-pane" id="egodavari_profile">
																		<table class="table table-striped">
																			<tr>
																				<td><b>Item</b></td>
																				<td><b>Units</b></td>
																				<td><b>Figure</b></td>
																				<td><b>Source</b></td>
																			</tr>
																			<tr>
																				<td >
																					Area
																				</td>
																				<td >
																					In 000 Sq. Km
																				</td>
																				<td >
																					10.8
																				</td>
																				<td >
																					Census 2011
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					51,51,549
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Male
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					25,69,419
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Female
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					25,82,130
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Urban
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					13,14,597
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Rural
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					38,36,952
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population Growth (decadal)
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					5.1
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population Density (Person/Sq.Km)
																				</td>
																				<td >
																					Ratio
																				</td>
																				<td >
																					477
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Literacy
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					71.35
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Male
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					74.91
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Female
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					67.82
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Urbanisation
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					25.52
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Workers as % of total population
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					39.58
																				</td>
																				<td >
																					2001
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Workers % of main Workers
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					83.22
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Household industries
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					3.86
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Area under Food &amp; Non-Food crops
																				</td>
																				<td >
																					Area in Hectares
																				</td>
																				<td >
																					6,36,364
																				</td>
																				<td >
																					2012
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Mining &amp; Quarrying (Limestone – Top)
																				</td>
																				<td >
																					Qty in tonnes
																				</td>
																				<td >
																					9,69,324
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Forest Area under the control of Forest Department
																				</td>
																				<td >
																					Area in Hectares
																				</td>
																				<td >
																					3,23,244
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Gross irrigated area as % of gross cropped area
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					20.6
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Value of output of major crops
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					&#8211;
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita food grain production
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					1.65
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Road Length per 100 sq.km.
																				</td>
																				<td >
																					In Sq.km
																				</td>
																				<td >
																					99.54
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Post offices per 100,000 persons
																				</td>
																				<td >
																					Ratio
																				</td>
																				<td >
																					16.55
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Bank branches per 100,000 persons
																				</td>
																				<td >
																					Ratio
																				</td>
																				<td >
																					9.22
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population per bank
																				</td>
																				<td >
																					In Thousands
																				</td>
																				<td >
																					10.9
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank deposits
																				</td>
																				<td >
																					Rs. In Crores
																				</td>
																				<td >
																					21880.99
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank credit
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					28013.12
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank credit to agriculture
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					60.97
																				</td>
																				<td >
																					2010
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per ha. bank credit to agriculture
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					49.36
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank credit to Industries
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					72.58
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																		</table>
																	</div>
																	<div role="tabpanel" class="tab-pane" id="egodavari_crops">
																		<table class="table table-striped">
																			<tbody>
																				<tr >
																					<td >
																						<div><strong>Crop</strong></div>
																					</td>
																					<td>
																						<div><strong>Area in hectares</strong></div>
																					</td>
																					<td >
																						<div><strong>Out-turn in tonnes<br>
																						</strong></div>
																					</td>
																					<td >
																						<div><strong>Source</strong></div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Rice</div>
																					</td>
																					<td >
																						<div>3,37,094</div>
																					</td>
																					<td >
																						<div>11,76,825</div>
																					</td>
																					<td >
																						<div>2011-12</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Maize</div>
																					</td>
																					<td >
																						<div>8,535</div>
																					</td>
																					<td >
																						<div>55,744</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Green gram(Moong)</div>
																					</td>
																					<td >
																						<div>33,559</div>
																					</td>
																					<td >
																						<div>13,265</div>
																					</td>
																					<td >
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Black gram(Mash)</div>
																					</td>
																					<td >
																						<div>31,179</div>
																					</td>
																					<td >
																						<div>4,342</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Coconut</div>
																					</td>
																					<td >
																						<div>47,585</div>
																					</td>
																					<td >
																						<div>7,19,961</div>
																					</td>
																					<td >
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Sesamum</div>
																					</td>
																					<td >
																						<div>798</div>
																					</td>
																					<td >
																						<div>174</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Sugar cane</div>
																					</td>
																					<td >
																						<div>12,618</div>
																					</td>
																					<td >
																						<div>1,08,685</div>
																					</td>
																					<td >
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Mangoes</div>
																					</td>
																					<td >
																						<div>13,759</div>
																					</td>
																					<td >
																						<div>91,016</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																	<div role="tabpanel" class="tab-pane" id="egodavari_minerals">
																		<table class="table table-striped">
																			<tr>
																				<td>Mineral</td>
																				<td>Quantity(in Tonnes)</td>
																				<td>Figure (‘000 Rs.)</td>
																				<td>Source</td>
																			</tr>
																			<tr>
																				<td>Laterite</td>
																				<td>9,69,324</td>
																				<td>35,322</td>
																				<td>2011-12</td>
																			</tr>
																			<tr>
																				<td>Crude Oil</td>
																				<td>3,03,584</td>
																				<td>50,77,445</td>
																				<td>“</td>
																			</tr>
																		</table>
																	</div>
																</div>
															</div>
														</div>
														<div id="chittor-data" style="float:left;display:none" class="data-tab">
															<h3 class="obj_edb_h">Chittor</h3>
															<div class="dis_desc_div">
																<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
																	<li role="presentation" class="active"><a href="#chittor_home" aria-controls="chittor_home" role="tab" data-toggle="tab">Details</a></li>
																	<li role="presentation"><a href="#chittor_profile" aria-controls="chittor_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
																	<li role="presentation"><a href="#chittor_crops" aria-controls="chittor_crops" role="tab" data-toggle="tab">Major Crops</a></li>
																	<li role="presentation"><a href="#chittor_minerals" aria-controls="chittor_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
																</ul>
																<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
																	<div role="tabpanel" class="tab-pane active" id="chittor_home" style="font-weight:500;">
																		The district was situated between 78º 30′ and 79º 55E, of the eastern longitudes and 12º 37′ and 14ºN, of northern latitudes. It is bounded on the north by Anantapur and Cuddapah districts, on the east by Nellore and Chengai-Anna districts of Tamilnadu, on the south by North Arcot Ambedkar and Dharmapuri district of Tamilnadu and on the west by Kolar District of Karnataka state. The district has population of 41,70,468 as per the 2011 census which accounts for 4.92% of the total population of the State with 11.33% decadal growth.
																	</div>
																	<div role="tabpanel" class="tab-pane" id="chittor_profile">
																		<table class="table table-striped">
																			<tr>
																				<td><b>Item</b></td>
																				<td><b>Units</b></td>
																				<td><b>Figure</b></td>
																				<td><b>Source</b></td>
																			</tr>
																			<tr>
																				<td >
																					Area
																				</td>
																				<td >
																					In 000 Sq. Km
																				</td>
																				<td >
																					15.2
																				</td>
																				<td >
																					Census 2011
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					41,70,468
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Male
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					20,83,505
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Female
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					20,86,963
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Urban
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					12,28,887
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Rural
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					29,41,581
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population Growth (decadal)
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					11.33
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population Density (Person/Sq.Km)
																				</td>
																				<td >
																					Ratio
																				</td>
																				<td >
																					275
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Literacy
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					72.36
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Male
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					81.15
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Female
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					63.65
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Urbanisation
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					29.47
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Workers as % of total population
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					46.79
																				</td>
																				<td >
																					2001
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Workers % of main Workers
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					83.44
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Household industries
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					3.72
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Area under Food &amp; Non-Food crops
																				</td>
																				<td >
																					Area in Hectares
																				</td>
																				<td >
																					4,08,348
																				</td>
																				<td >
																					2012
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Mining &amp; Quarrying (Limestone – Top)
																				</td>
																				<td >
																					Qty in tonnes
																				</td>
																				<td >
																					25,746
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Forest Area under the control of Forest Department
																				</td>
																				<td >
																					Area in Hectares
																				</td>
																				<td >
																					4,52,018
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Gross irrigated area as % of gross cropped area
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					23.41
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Value of output of major crops
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					&#8211;
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita food grain production
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					&#8211;
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Road Length per 100 sq.km.
																				</td>
																				<td >
																					In Sq.km
																				</td>
																				<td >
																					122.9
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Post offices per 100,000 persons
																				</td>
																				<td >
																					Ratio
																				</td>
																				<td >
																					21.41
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Bank branches per 100,000 persons
																				</td>
																				<td >
																					Ratio
																				</td>
																				<td >
																					8.56
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population per bank
																				</td>
																				<td >
																					In Thousands
																				</td>
																				<td >
																					11.81
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank deposits
																				</td>
																				<td >
																					Rs. In Crores
																				</td>
																				<td >
																					37970.31
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank credit
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					23545.07
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank credit to agriculture
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					55.87
																				</td>
																				<td >
																					2010
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per ha. bank credit to agriculture
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					57.07
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank credit to Industries
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					29.47
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																		</table>
																	</div>
																	<div role="tabpanel" class="tab-pane" id="chittor_crops">
																		<table class="table table-striped">
																			<tbody>
																				<tr >
																					<td >
																						<div><strong>Crop</strong></div>
																					</td>
																					<td>
																						<div><strong>Area in hectares</strong></div>
																					</td>
																					<td >
																						<div><strong>Out-turn in tonnes<br>
																						</strong></div>
																					</td>
																					<td >
																						<div><strong>Source</strong></div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Rice</div>
																					</td>
																					<td >
																						<div>51,106</div>
																					</td>
																					<td >
																						<div>1,68,930</div>
																					</td>
																					<td >
																						<div>2011-12</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Ragi</div>
																					</td>
																					<td >
																						<div>7,301</div>
																					</td>
																					<td >
																						<div>8,601</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Red gram(Tuar)</div>
																					</td>
																					<td >
																						<div>8,031</div>
																					</td>
																					<td >
																						<div>1,205</div>
																					</td>
																					<td >
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Horse gram(Kulthi)</div>
																					</td>
																					<td >
																						<div>5,015</div>
																					</td>
																					<td >
																						<div>2,955</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Groundnut</div>
																					</td>
																					<td >
																						<div>1,46,159</div>
																					</td>
																					<td >
																						<div>1,28,436</div>
																					</td>
																					<td >
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Coconut</div>
																					</td>
																					<td >
																						<div>3,448</div>
																					</td>
																					<td >
																						<div>29,377</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Sugar cane</div>
																					</td>
																					<td >
																						<div>28,405</div>
																					</td>
																					<td >
																						<div>2,60,953</div>
																					</td>
																					<td >
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Mangoes</div>
																					</td>
																					<td >
																						<div>57,713</div>
																					</td>
																					<td >
																						<div>4,05,145</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																	<div role="tabpanel" class="tab-pane" id="chittor_minerals">
																		<table class="table table-striped">
																			<tr>
																				<td>Mineral</td>
																				<td>Quantity(in Tonnes)</td>
																				<td>Figure (‘000 Rs.)</td>
																				<td>Source</td>
																			</tr>
																			<tr>
																				<td>Quartz/Quarzite</td>
																				<td>1,700</td>
																				<td>279</td>
																				<td>2011-12</td>
																			</tr>
																		</table>
																	</div>
																</div>
															</div>
														</div>
														<div id="ananthapur-data" style="float:left;display:block" class="data-tab">
															<h3 class="obj_edb_h">Ananthapur</h3>
															<div class="dis_desc_div">
																<ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
																	<li role="presentation" class="active"><a href="#ananthapur_home" aria-controls="ananthapur_home" role="tab" data-toggle="tab">Details</a></li>
																	<li role="presentation"><a href="#ananthapur_profile" aria-controls="ananthapur_profile" role="tab" data-toggle="tab">Geographic Profile</a></li>
																	<li role="presentation"><a href="#anathapur_crops" aria-controls="anathapur_crops" role="tab" data-toggle="tab">Major Crops</a></li>
																	<li role="presentation"><a href="#ananthapur_minerals" aria-controls="ananthapur_minerals" role="tab" data-toggle="tab">Major Mineral Production</a></li>
																</ul>
																<div class="tab-content" style="font-family:iceland;font-size:16px;font-weight:900;">
																	<div role="tabpanel" class="tab-pane active" id="ananthapur_home" style="font-weight:500;">
																		Anantapur got its name from ‘Anaatasagaram’, a big tank, which means “Endless Ocean”. The villages of Anaantasagaram and Bukkarayasamudram were constructed by Anantaras Chilkkavodeya, the minister of Bukka-I, a Vijayanagar ruler. Some authorities assert that Anaantasagaram was named after Bukka’s queen, while some contend that it must have been known after Anantarasa Chikkavodeya himself, as Bukka had no queen by that name. Anantapur District was formed in the year 1882 having been separated from Bellary district. The district was situated between 76º 47′ and 78º 26’E, of the eastern longitudes and 13º 41′ and 15º 14’N, of northern latitudes. The district is bounded on the north by the Kurnool District, on the southeast by Chittor District, on the east by YSR District, and on the west and southwest by Karnataka state. The district has population of 40,83,315 as per the 2011 census which accounts for 4.82% of the total population of the State with 12.16% decadal growth.
																	</div>
																	<div role="tabpanel" class="tab-pane" id="ananthapur_profile">
																		<table class="table table-striped">
																			<tr>
																				<td><b>Item</b></td>
																				<td><b>Units</b></td>
																				<td><b>Figure</b></td>
																				<td><b>Source</b></td>
																			</tr>
																			<tr>
																				<td >
																					Area
																				</td>
																				<td >
																					In 000 Sq. Km
																				</td>
																				<td >
																					19.1
																				</td>
																				<td >
																					Census 2011
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					40,83,315
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Male
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					20,64,928
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Female
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					20,18,387
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Urban
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					11,46,956
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Rural
																				</td>
																				<td >
																					In Persons
																				</td>
																				<td >
																					29,36,359
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population Growth (decadal)
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					12.16
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population Density (Person/Sq.Km)
																				</td>
																				<td >
																					Ratio
																				</td>
																				<td >
																					213
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Literacy
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					64.28
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Male
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					74.09
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Female
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					54.31
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Urbanisation
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					28.09
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Workers as % of total population
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					48.82
																				</td>
																				<td >
																					2001
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Workers % of main Workers
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					82.76
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Household industries
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					5.84
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Area under Food &amp; Non-Food crops
																				</td>
																				<td >
																					Area in Hectares
																				</td>
																				<td >
																					11,14,083
																				</td>
																				<td >
																					2012
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Mining &amp; Quarrying (Limestone – Top)
																				</td>
																				<td >
																					Qty in tonnes
																				</td>
																				<td >
																					13,76,672
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Forest Area under the control of Forest Department
																				</td>
																				<td >
																					Area in Hectares
																				</td>
																				<td >
																					1,96,978
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Gross irrigated area as % of gross cropped area
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					54.84
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Value of output of major crops
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					&#8211;
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita food grain production
																				</td>
																				<td >
																					%
																				</td>
																				<td >
																					&#8211;
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Road Length per 100 sq.km.
																				</td>
																				<td >
																					In Sq.km
																				</td>
																				<td >
																					120.96
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Post offices per 100,000 persons
																				</td>
																				<td >
																					Ratio
																				</td>
																				<td >
																					23.09
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Bank branches per 100,000 persons
																				</td>
																				<td >
																					Ratio
																				</td>
																				<td >
																					7.54
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Population per bank
																				</td>
																				<td >
																					In Thousands
																				</td>
																				<td >
																					13.41
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank deposits
																				</td>
																				<td >
																					Rs. In Crores
																				</td>
																				<td >
																					21699.28
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank credit
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					17518.11
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank credit to agriculture
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					54.43
																				</td>
																				<td >
																					2010
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per ha. bank credit to agriculture
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					19.95
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																			<tr>
																				<td >
																					Per capita bank credit to Industries
																				</td>
																				<td >
																					In Rs.
																				</td>
																				<td >
																					7.19
																				</td>
																				<td >
																					“
																				</td>
																			</tr>
																		</table>
																	</div>
																	<div role="tabpanel" class="tab-pane" id="anathapur_crops">
																		<table class="table table-striped">
																			<tbody>
																				<tr >
																					<td >
																						<div><strong>Crop</strong></div>
																					</td>
																					<td>
																						<div><strong>Area in hectares</strong></div>
																					</td>
																					<td >
																						<div><strong>Out-turn in tonnes<br>
																						</strong></div>
																					</td>
																					<td >
																						<div><strong>Source</strong></div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Rice</div>
																					</td>
																					<td >
																						<div>48,668</div>
																					</td>
																					<td >
																						<div>1,20,073</div>
																					</td>
																					<td >
																						<div>2011-12</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Maize</div>
																					</td>
																					<td >
																						<div>31,655</div>
																					</td>
																					<td >
																						<div>1,11,633</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Bengal gram</div>
																					</td>
																					<td >
																						<div>68,483</div>
																					</td>
																					<td >
																						<div>38,008</div>
																					</td>
																					<td >
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Red gram(Tuar)</div>
																					</td>
																					<td >
																						<div>51,745</div>
																					</td>
																					<td >
																						<div>4,294</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Groundnut</div>
																					</td>
																					<td >
																						<div>7,53,836</div>
																					</td>
																					<td >
																						<div>2,07,378</div>
																					</td>
																					<td >
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Sunflower</div>
																					</td>
																					<td >
																						<div>13,277</div>
																					</td>
																					<td >
																						<div>12,094</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Banana (for harvest)</div>
																					</td>
																					<td >
																						<div>8,000</div>
																					</td>
																					<td >
																						<div>5,05,176</div>
																					</td>
																					<td >
																						<div>“</div>
																					</td>
																				</tr>
																				<tr >
																					<td>
																						<div>Mangoes</div>
																					</td>
																					<td >
																						<div>6,138</div>
																					</td>
																					<td >
																						<div>41,229</div>
																					</td>
																					<td>
																						<div>“</div>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																	<div role="tabpanel" class="tab-pane" id="ananthapur_minerals">
																		<table class="table table-striped">
																			<tr>
																				<td>Mineral</td>
																				<td>Quantity(in Tonnes)</td>
																				<td>Figure (‘000 Rs.)</td>
																				<td>Source</td>
																			</tr>
																			<tr>
																				<td>Limestone</td>
																				<td>13,76,672</td>
																				<td>1,76,393</td>
																				<td>2011-12</td>
																			</tr>
																			<tr>
																				<td>Quartz</td>
																				<td>1,70,044</td>
																				<td>27,937</td>
																				<td>-</td>
																			</tr>
																		</table>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<?php include('footer.php');?>
											</div>
										</div>
									</div>
								</body>
								</html>