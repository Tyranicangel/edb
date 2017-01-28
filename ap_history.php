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
				<img src="images/history.jpg" style="width:100%;" />
				<div class="desc_txt_img">
					
				</div>
				<div class="ap_image_map img_map_div_another_cls">
					<p><b>Introduction</b></p>
					<span style="font-size:10px;">
						The study of history reveals that major portion of the southern India (Dakshina Padham) was extended by Andhra region. Several dynasties ruled over this part of the country.
						<br /><br />
						Historically the earliest mention of the Andhras appeared in the Aitareya Brahmana (B.C.800).It was called Dakshina Padh during those days. Historians felt that Andhras, Pulindas, Sabaras, and many other sects lived in Dakshina Padh. But it is only in the Mauryan age that one gets historical evidence of the Andhras as a political power in the southeastern Deccan.
						<br /><br />
						Megasthenese,who visited the Court of Chandragupta Maurya (B.C.322–297), mentioned that Andhra country had 30 fortified towns and an army of 1,00,000 infantry, 2,000 cavalry and 1,000 elephants. Buddhist books reveal that Andhras established their kingdoms on the Godavari belt at that time. Asoka referred in his 13th rock edict that Andhras were his subordinates.
					</span>
				</div>
				<div class="singl_sl">Single Window Clearance for all Investors</div>
				<div class="single_wind_desc">
					Andhra Pradesh is committed to work closely with our investors and get all clearances through a single platform. We are committed to make things efficient and hassle free for you
				</div>
			</div>
			<div class="abt_cont">
				<div class="abt_inner_cont">
					<h3 class="abt_edbh2" style="width:40%;">AP History</h3>
					<div class="abt_desc_ttl_dv">
						<div class="abt_left">
							<div class="sel_dv_abt activated" id="ancient">
								Ancient Period
							</div>
							<div class="sel_dv_abt" id="medieval">
								Medieval Period
							</div>
							<div class="sel_dv_abt" id="modern">
								Modern Period
							</div>
							<div class="sel_dv_abt" id="independace">
								Post Independence Era
							</div>
							<div class="sel_dv_abt" id="governors">
								List Of Governors
							</div>
							<div class="sel_dv_abt" id="cms">
								List of Chief Ministers
							</div>
						</div>
						<div class="abt_centr" style="width:600px;">
							<div id="cms-data" style="float:left;display:none" class="data-tab">
								<h3 class="obj_edb_h">List of Chief Ministers</h3>
								<table class="table table-striped" style="color:#bababa">
									<tr>
										<td></td>
										<td>Name</td>
										<td>From</td>
										<td>To</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/Nara-Chandra-Babu-Naidu.jpg"/></td>
										<td>Sri Nara Chandrababu Naidu</td>
										<td>08/06/2014</td>
										<td>12/03/1962</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/N_KIRAN.jpg"/></td>
										<td>Sri N. Kiran Kumar Reddy</td>
										<td>25/11/2010</td>
										<td>01/03/2014</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/cm_Roshaiah_new.jpg"/></td>
										<td>Sri K. Rosaiah</td>
										<td>03/09/2009</td>
										<td>24/11/2010</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/ysr.jpg"/></td>
										<td>Dr. Y.S. Rajasekhara Reddy</td>
										<td>14/05/2004</td>
										<td>02/09/2009</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/cnb.jpg"/></td>
										<td>Sri N. Chandra Babu Naidu</td>
										<td>01/09/1995</td>
										<td>13/05/2004</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/njr.jpg"/></td>
										<td>Sri N.Janardhana Reddy</td>
										<td>17/12/1990</td>
										<td>09/10/1992</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/nbr.jpg"/></td>
										<td>Sri N.Bhaskara rao</td>
										<td>16/08/1984</td>
										<td>16/09/1984</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/ntr.jpg"/></td>
										<td>Sri N.T.Rama Rao</td>
										<td>12/12/1994<br>16/9/1984<br>9/1/1983</td>
										<td>01/09/1995<br>2/12/1989<br>16/8/1984</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/kbr.jpg"/></td>
										<td>Sri K.Vijaya Bhaskara Reddy</td>
										<td>9/10/1992<br>20/09/1982</td>
										<td>12/12/1994<br>09/01/1983</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/bvr.jpg"/></td>
										<td>Sri Bhavanam Venkataram Reddy</td>
										<td>24/02/1982</td>
										<td>20/09/1982</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/tan.jpg"/></td>
										<td>Sri Tanguturi Anjaiah</td>
										<td>11/10/1980</td>
										<td>24/02/1982</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/mcr.jpg"/></td>
										<td>Dr. Marri Chenna Reddy</td>
										<td>03/12/1989<br>06/03/1978</td>
										<td>17/12/1990<br>10/10/1980</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/jvr.jpg"/></td>
										<td>Sri. Jalagam Vengala Rao</td>
										<td>10/12/1973</td>
										<td>06/03/1978</td>
									</tr>
									<tr>
										<td></td>
										<td>President’s rule</td>
										<td>11/01/1973</td>
										<td>10/12/1973</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/pvr.jpg"/></td>
										<td>Sri P.V.Narasimha Rao</td>
										<td>30/09/1971</td>
										<td>10/01/1973</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/kbr1.jpg"/></td>
										<td>Sri Kasu Bramhananda Reddy</td>
										<td>21/02/1964</td>
										<td>30/09/1971</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/ds.jpg"/></td>
										<td>Sri Damodaram Sanjivaiah</td>
										<td>11/01/1960</td>
										<td>12/03/1962</td>
									</tr>
									<tr>
										<td><img style="width:100px;" src="images/nsr.jpg"/></td>
										<td>Sri (Dr.) Neelam Sanjeeva Reddy</td>
										<td>01/11/1956<br>12/03/1962</td>
										<td>11/01/1960<br>20/02/1964</td>
									</tr>
								</table>
							</div>
							<div id="governors-data" style="float:left;display:none" class="data-tab">
								<h3 class="obj_edb_h">List of Governors</h3>
								<table class="table table-striped" style="color:#bababa">
									<tr>
										<td>Sno</td>
										<td>Name</td>
										<td>From</td>
										<td>To</td>
									</tr>
									<tr>
										<td>22</td>
										<td>Sri.E.S.Lakshmi Narasimhan</td>
										<td>27/12/2009</td>
										<td>Present</td>
									</tr>
									<tr>
										<td>21</td>
										<td>Sri. Narayan Dutt Tiwari</td>
										<td>22/08/2007</td>
										<td>27/12/2009</td>
									</tr>
									<tr>
										<td>20</td>
										<td>Sri. Rameshwar Thakur</td>
										<td>29/01/2006</td>
										<td>22/08/2007</td>
									</tr>
									<tr>
										<td>19</td>
										<td>Sri. Sushil Kumar Shinde</td>
										<td>04/11/2004</td>
										<td>29/01/2006</td>
									</tr>
									<tr>
										<td>18</td>
										<td>Sri. Surjeet Singh Barnala</td>
										<td>03/01/2003</td>
										<td>04/11/2004</td>
									</tr>
									<tr>
										<td>17</td>
										<td>Dr. C. Rangarajan</td>
										<td>24/11/1997</td>
										<td>03/01/2003</td>
									</tr>
									<tr>
										<td>16</td>
										<td>Sri G. Ramanujam</td>
										<td>22/08/1997</td>
										<td>24/11/1997</td>
									</tr>
									<tr>
										<td>15</td>
										<td>Sri Krishan Kant</td>
										<td>07/02/1990</td>
										<td>22/08/1997</td>
									</tr>
									<tr>
										<td>14</td>
										<td>Smt. Kumudben Manishankar Joshi</td>
										<td>26/11/1985</td>
										<td>07/02/1990</td>
									</tr>
									<tr>
										<td>13</td>
										<td>Dr. Shanker Dayal Sharma</td>
										<td>29/08/1984</td>
										<td>26/11/1985</td>
									</tr>
									<tr>
										<td>12</td>
										<td>Sri Ramlal</td>
										<td>15/08/1983</td>
										<td>29/08/1984</td>
									</tr>
									<tr>
										<td>11</td>
										<td>Sri K.C. Abraham</td>
										<td>15/08/1978</td>
										<td>15/08/1983</td>
									</tr>
									<tr>
										<td>10</td>
										<td>Smt. Sharada Mukerjee</td>
										<td>05/05/1977</td>
										<td>15/08/1978</td>
									</tr>
									<tr>
										<td>9</td>
										<td>Sri Justice B.J. Diwan</td>
										<td>17/02/1977</td>
										<td>05/05/1977</td>
									</tr>
									<tr>
										<td>8</td>
										<td>Sri R.D. Bhandare</td>
										<td>16/06/1976</td>
										<td>17/02/1977</td>
									</tr>
									<tr>
										<td>7</td>
										<td>Sri Mohanlal Sukhadia</td>
										<td>10/01/1976</td>
										<td>16/06/1976</td>
									</tr>
									<tr>
										<td>6</td>
										<td>Sri Justice S. Obul Reddi</td>
										<td>25/01/1975</td>
										<td>10/01/1976</td>
									</tr>
									<tr>
										<td>5</td>
										<td>Sri Khandubai Kasanji Desai</td>
										<td>11/04/1968</td>
										<td>25/01/1975</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Sri P.A. Thanu Pillai</td>
										<td>04/05/1964</td>
										<td>11/04/1968</td>
									</tr>
									<tr>
										<td>3</td>
										<td>Genl. S.M. Shrinagesh</td>
										<td>08/09/1962</td>
										<td>04/05/1964</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Sri Bhimsen Sachar</td>
										<td>01/08/1957</td>
										<td>08/09/1962</td>
									</tr>
									<tr>
										<td>1</td>
										<td>Sri C.M. Trivedi</td>
										<td>01/10/1953</td>
										<td>01/08/1957</td>
									</tr>
									
								</table>
							</div>
							<div id="independace-data" style="float:left;display:none" class="data-tab">
								<h3 class="obj_edb_h">Post Independace Era</h3>
								<div class="dis_desc_div">
									  <ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
										    <li role="presentation" class="active"><a href="#struggle" aria-controls="struggle" role="tab" data-toggle="tab">Struggle for Andhra State</a></li>
										    <li role="presentation"><a href="#police" aria-controls="police" role="tab" data-toggle="tab">Police Action in Hyderabad State</a></li>
										    <li role="presentation" class="active"><a href="#emergence" aria-controls="emergence" role="tab" data-toggle="tab">Emergence of Andhra Pradesh</a></li>
										    <li role="presentation" class="active"><a href="#crisis" aria-controls="crisis" role="tab" data-toggle="tab">Political Crisis of 1969 and 1972</a></li>
									  </ul>
									  <div class="tab-content">
									  	<div role="tabpanel" class="tab-pane" id="struggle">
									    	<img src="images/ap-struggle-banner.png" style="margin-bottom:10px;" />
									    	<p>The Andhras were struggling for the formation of a separate Andhra Province since the period of British, but could not succeed. When India attained Independence on the 15th of August, 1947, Andhras hoped that their long-cherished desire would be realised soon. Inspite of several renewed efforts put forth by the Andhra leaders before the Prime Minister Jawaharlal Nehru and the Deputy Prime Minister Sardar Vallabhai Patel, the desire for a separate Andhra State remained as a dream itself.</p>
									    	<p>The Dar Commission, appointed by the Government of India under the Chairmanship of S.K.Dar did not recommend for the creation of States on the linguistic consideration. This report of the Commission created such an adverse reaction in Andhra that the Congress leaders felt it prudent to assuage the ruffled feelings of the Telugus. An unofficial Committee, consisting of Jawaharlal Nehru, Vallabhbhai Patel and Pattabhi Sitaramaiah, popularly known as the J.V.P. Committee, was constituted by the Congress. The Committee in its report submitted to the Working Committee of the Indian National Congress in April, 1949 recommended that the creation of linguistic provinces be postponed by few years. However, it suggested that Andhra Province could be formed provided the Andhras gave up their claim to the city of Madras (now Chennai). This report provoked violent reaction in Andhra as the Telugus were not prepared to forego their claims to the city of Madras.</p>
									    	<p>Under the prevailing situation, a Partition Committee was formed under the Chairmanship of Kumaraswami Raja, the then Chief Minister of Madras. Andhra was represented by Tanguturi Prakasam, B.Gopala Reddi, Kala Venkata Rao and N.Sanjiva Reddy. The Partition Committee could not arrive at an agreed settlement. Prakasam disagreed with the views of other members and gave a dissenting note. The Government of India, took advantage of the dissenting note of Prakasam and shelved the issue. To express the resentment of the Andhras, Swami Sitaram (Gollapudi Sitarama Sastry), a Gandhian, undertook a fast unto death, which created an explosive situation in Andhra. However, Swami gave up his 35-day fast on the 20th of September, 1951, on the appeal made by Vinoba Bhave. Nothing came out of this fast except the increasing distrust of the people of Andhra towards their own leaders and the Government of India.</p>
									    	<p>In the First General Elections of 1952, Andhras expressed their resentment towards the Congress leaders by defeating them at the polls. Out of the 140 seats from Andhra in the Madras Legislative Assembly, the Congress could secure only 43, while the Communist Party of India bagged as many as 40 seats out of the 60 it contested. In the Madras Legislative Assembly itself, the Congress could secure only 152. The non-Congress members in the legislature, numbering 164 formed themselves into a United Democratic Front (U.D.F.) and elected T.Prakasam as their leader. But the Governor nominated C.Rajagopala Chari to the Legislative Council and invited him to form the ministry.</p>
									    	<p>After Rajagopala Chari became the Chief Minister of the Madras State, he tried to divert the Krishna waters by constructing Krishna-Pennar Project for the development of the Tamil area. The Andhras agitated against this as they feared that the Project spelt ruin to Andhra. The Government of India appointed an expert Committee under the Chairmanship of A.N.Khosla, who pronounced that the project in its present form should not be proceeded with and suggested the construction of a project at Nandikonda (the site of the present Nagarjunasagar Project). The report of the Khosla Committee vindicated the apprehensions of the Andhras regarding the unfriendly attitude of Rajagopala Chari’s Government towards the Andhras. The desire of the Andhras to separate themselves from the composite Madras State and form their own State gained further momentum.</p>
									    	<p>At this juncture, Potti Sriramulu, a self-effacing Gandhian, began his fast unto death on the 19th of October, 1952 at Madras. Though the fast created an unprecedented situation throughout Andhra, the Congress leaders and the Government of India did not pay much attention to it. On the 15th of December, 1952, Sriramulu attained martyrdom. The news of Sriramulu’s death rocked Andhra into a violent and devastating agitation. The Government of India was taken aback at this popular upsurge. On the 19th December, 1952, Jawaharlal Nehru announced in the Lok Sabha that the Andhra State would be formed with the eleven undisputed Telugu districts, and the three Taluks of the Bellary district, but excluding Madras City.</p>
									    	<p>On the 1st of October, 1953, Andhra State came into existence. It consisted of the districts of Srikakulam, Visakhapatnam, East Godavari, West Godavari, Krishna, Guntur, Nellore, Chittoor, Cuddapah, Anantapur and Kurnool, and the taluks of Rayadurg, Adoni and Alur of the Bellary district. On the question of Bellary taluk, it was included in the Mysore State on the recommendation of L.S.Mishra Commission.</p>
									    	<p>Kurnool became the capital of the new State, under the terms of the Sri Bagh Pact of 1937 between the leaders of the Coastal Andhra and Rayalaseema. T.Prakasam became the first Chief Minister of the Andhra State and C.M.Trivedi was appointed Governor of this new State. With the inauguration of the Andhra State by Nehru, the forty year old dream of the Telugu people to have a separate State of their own was partly fulfilled. They looked forward to the formation of Visalandhra with Hyderabad City as the Capital.</p>
									    </div>
									    <div role="tabpanel" class="tab-pane active" id="police">
											<img src="images/police-struggle-banner.png" style="margin-bottom:10px;" />
											<p>Andhras were very much agitated over the developments in the State of Hyderabad during the years 1946-48. The Nizam was very anxious to become independent and he insisted that Hyderabad should be the third dominion. He tried to achieve his ambitious desire with the help of Khasim Razvi of the Ittehadul Muslimeen and its storm-troopers, the Razakars.</p>
											<p>Meanwhile, the Hindus of the Hyderabad State who accounted for 93 percent of its population, launched the `Join India’ movement with the cooperation of a few patriotic Muslims for the integration of the State with the rest of the country. The State Congress leaders, led by Swami Ramanand Tirtha, invoked themselves whole-heartedly in the movement. As the State Congress was banned by the Nizam, its leaders conducted their activities from places like Vijayawada and Bombay. The Communists on their part organised village defence squads to protect the villagers from the attacks of the Nizam Police and Razakars.</p>
											<p>All negotiations between the Nizam’s Dominions and the Indian Union proved abortive. The Nizam Government did not agree to the accession of the Dominions to the Indian Union. The activities of the Majlis Ittehadul Muslimeen and the Razakars within the Dominions were posing a threat to peace and harmony. The growing violence of the Razakars seriously jeopardised law and order. The Government of India, tried to make the Nizam see reason and sign the Instrument of Assession with India. After tortuous negotiations, the Nizam finally entered into a `Stand Still Agreement’ on November 29, 1947, with India for one year to maintain status quo, which existed between the British and the Nizam before August 15, 1947. This agreement of the Nizam was only to gain time to procure military hardware from different parts of the world and smuggle them into Hyderabad. In the meanwhile, the Nizam sent a delegation to the U.N.O. to refer the Hyderabad case to the Security Council.</p>
											<p>With the growing violence by the Razakars and the Nizam’s attempts to get himself independent, the Government of India decided to curb these tendencies by launching a `Police Action’ against the Nizam. On the 13th of September, 1948 `Police Action’ on Hyderabad commenced. The Indian Army, led by Major-General J.N.Chaudhuri entered the State from five directions and the military action was a brilliant success. On 18th September, 1949, Nizam’s forces surrendered and Mir Laik Ali, the Prime Minister of the Nizam, and Khasim Razvi were arrested. On September, 23, the Nizam withdrew his complaint in the Security Council. The merger of Hyderabad Dominions into the Indian Union was announced. Major-General J.N.Chaudhuri took over as Military Governor of Hyderabad and stayed in that position till the end of 1949. In January 1950, M.K.Vellodi, a Senior Civil Servant, was made the Chief Minister of the State and the Nizam was designated `Raj Pramukh’. After the 1952 General Elections, the first popular ministry headed by B.Rama Krishna Rao took charge of the State.</p>
										</div>
										<div role="tabpanel" class="tab-pane active" id="emergence">
											<img src="images/police-struggle-banner.png" style="margin-bottom:10px;" />
											<p>The creation of Andhra State in October, 1953 strengthened the general demand for linguistic States. Andhras had also long cherished demand for the formation of Visalandhra, since the people of Hyderabad State were unanimous in their demand for the trifurcation of their State. Andhras hoped that the outlying Telugu areas in Orissa, Madhya Pradesh, Mysore and Madras be incorporated in the greater Andhra.</p>
											<p>The States Reorganization Commission, with Syed Fazl Ali as the Chairman, set up by the Government of India in December 1953, who heard the views of different organisations and individuals, was though convinced of the advantages of Visalandhra, however, favoured the formation of separate State for Telangana. This report of the S.R.C. led to an intensive lobbying both by the advocates of Telangana and Visalandhra. The Communists reacted sharply and announced that they would resign their seats in the Hyderabad Legislative Assembly and contest elections on the issue. In the Hyderabad Legislative Assembly, a majority of the Legislators supported Visalandhra.</p>
											<p>The Congress High Command favoured Visalandhra and prevailed upon the leaders of the Andhra State and Telangana to sort out their differences, who, thereupon, entered into a `Gentlemen’s Agreement’. One of the main provisions of the Agreement was the creation of a `Regional Council’ for Telangana for its all round development. The enlarged State by merging nine Telugu speaking districts of Adilabad, Nizamabad, Medak, Karimnagar, Warangal, Khammam, Nalgonda, MahabubNagar and Hyderabad, into Andhra State with its eleven districts of Srikakulam, Visakhapatnam, East Godavari, West Godavari, Krishna, Guntur, Nellore, Chittoor, Cuddapah, Anantapur and Kurnool, totalling 20 districts* was named `Andhra Pradesh’ with its capital at Hyderabad. It was inaugurated on the 1st of November, 1956 by Jawaharlal Nehru. Neelam Sanjiva Reddy became the first Chief Minister of Andhra Pradesh, who later rose to the position of the President of India. Burgula Ramakrishna Rao, last of the Chief Ministers of Hyderabad State was elevated to the Office of the Governor of Kerala. C.M.Trivedi continued to be the Governor of Andhra Pradesh.</p>
											<p>As stated above, on the formation of Andhra Pradesh on the 1st of November 1956, Neelam Sanjiva Reddy became the first Chief Minister of the new State. Consequent on his becoming the President of the All India Congress Committee, he resigned the post of Chief Minister on 10th June, 1960 and was succeeded by D.Sanjivaiah, a talented young man from the Scheduled Castes. After 1962 General Elections, Sri N.Sanjiva Reddy again became the Chief Minister of the State on 12th March, 1962. But, he relinquished the Chief Ministership in 1964 on moral grounds consequent on the adverse verdict of the Supreme Court in Kurnool Transport Nationalisation case. He was succeeded by Sri Kasu Brahmananda Reddy on 29th February, 1964. He was in the office till 30th September, 1971. His long innings witnessed development of the city as well as the State in many ways. True the Telangana agitation erupted during his time paved way for rectification of defects and implementation of measures to develop Telangana.</p>
										</div>
										<div role="tabpanel" class="tab-pane active" id="crisis">
											<img src="images/political-crisis-banner.png" style="margin-bottom:10px;" />
											<p>During the years 1969 and 1972, Andhra Pradesh was rocked by two political agitations popularly known as the `Telangana’ and the `Jai Andhra’ Movements respectively. Telangana agitation was started by the people of the region when they felt that the Andhra leaders had flouted the Gentlemen’s Agreement which facilitated the formation of Andhra Pradesh.</p>
											<p>The influx of the people from the coastal region into the city of Hyderabad created many social tensions. Slowly the discontent spread among the Telangana officials and the unemployed youth who felt that they were exploited by the people of the Andhra region. The discontent manifested itself when a student of Khammam went on a hunger-strike in January 1969 demanding the implementation of the safeguards for Telangana provided in the Gentlemen’s Agreement. Slowly the agitation spread to Hyderabad and other parts of Telangana. In the beginning, the movement demanded the implementation of the safeguards agreed upon earlier, but later it wanted the separation of Telangana from Andhra Pradesh.</p>
											<p>Three more districts were added later by the creation of Prakasam in 1970, Ranga Reddy in 1978 and Vizianagaram in 1979. Thus, the State presently has 23 districts.</p>
											<p>The agitation took a new turn when the Congress legislators from Telangana supported the movement. Dr.Channa Reddy entered the fray and formed the Telangana Praja Samiti to lead the movement. But by November 1969, there was a split in the Praja Samiti when dissident Congress legislators realised that the Prime Minister Indira Gandhi was not in favour of separate Telangana. The movement slowly petered out. In September 1971, Brahmananda Reddy, the then Chief Minister, resigned his position to make room for a leader from Telangana to become the Chief Minister. On the 30th of September, 1971, P.V.Narsimha Rao* became the Chief Minister. The Telangana Praja Samiti was dissolved and its members rejoined the Congress.</p>
											<p>During 1972, another agitation known as the Jai Andhra Movement was launched in the Andhra region. The agitation was a sequel to the Telangana agitation which demanded that only `Mulkis’ should be appointed to the posts in Telangana including the Hyderabad city. The `Mulki’ issue had a long history behind it. As early as in 1919, the Nizam of Hyderabad issued a firman laying down that only `Mulkis’ are eligible for public appointments in the State. `Mulki’ was defined as one who was born in the State of Hyderabad or resided there continuously for fifteen years and had given an affidavit that he abandoned the idea of returning to his native place. Even after the formation of Andhra Pradesh, the Mulki rules continued to be in force in the Telangana region. As these rules stood in the way of the people of the Andhra region to compete for the posts, their validity was challenged in the High Court. A full bench of the High Court by a four-one majority held that the Mulki rules were not valid and operative after the formation of Andhra Pradesh.</p>
											<p>But on an appeal by the State Government, the Supreme Court declared on the 3rd of October, 1972 that the Mulki rules were valid and were in force. The judgement created a great political crisis in the State. The people of the Andhra region felt that they were reduced to the status of second class citizens in their own State capital. They felt that the only way to uphold their dignity was by severing their connection with Telangana and started a movement for the separation of Andhra region from Andhra Pradesh.</p>
											<p>As the agitation continued, President’s rule was imposed in the State on the 10th of January, 1973. Finally, a political settlement was arrived at under the aegis of the Central Government. A `Six-Point Formula’ was agreed upon by the leaders of the two regions to prevent any recurrence of such agitations in future. The `Six-Point Formula’ included (1) the abolition of Mulki rules and the Telangana Regional Committee and (2) the establishment of a Central University at Hyderabad to augment educational facilities.</p>
											<p>On December 10, 1973, President’s rule in the State was revoked and a popular ministry with Sri Jalagam Vengala Rao as the Chief Minister was inducted. With this, normalcy returned and the State enjoyed political stability.</p>
											<p>In the General Elections held in February 1978 for the A.P.Legislative Assembly, the Congress Party swept the polls and Dr.M.Channa Reddy became the sixth Chief Minister of A.P. on the 6th of March 1978. He announced that separate Telangana was no longer an issue. Owing to some factional squabbles in the party, Dr.Channa Reddy resigned in October 1980 and was succeeded by T.Anjaiah, who remained in office only for one year and four months. In February 1982, he was replaced by Sri Bhavanam Venkataram, who in turn was replaced by Sri K.Vijaya Bhaskara Reddy in September 1982. Thus Andhra Pradesh was administered by four Chief Ministers in four years.</p>
											<p>Frequent changes of the Chief Ministers by the Congress High Command created dissatisfaction among the people. Taking advantage of this popular discontent, Sri N.T.Rama Rao, a leading figure of the film world formed a regional party called `Telugu Desam’ in January 1983 and contested the General Elections to the Andhra Pradesh Legislative Assembly held in 1983. His party became victorious and Sri Rama Rao was sworn in as the tenth Chief Minister of the State. But, on the 16th of August 1984, Sri Nadendla Bhaskara Rao, a cabinet colleague of Sri Rama Rao, succeeded in becoming the Chief Minister by engineering the dismissal of Sri Rama Rao by the then Governor. However, Sri Rama Rao was reinstated on the 16th of September 1984 consequent on the severe criticism on the action of Governor. In the elections of March 1985, Sri Rama Rao proved that he continued to enjoy the confidence of people by winning absolute majority in the House.</p>
											<p>The Telugu people who were not quite pleased with some of the policies of the Telugu Desam Government, returned Congress in 1989 general elections to the State Legislature with good majority. During the following five years, three Chief Ministers, Dr.M.Channa Reddy, Sri N.Janardhana Reddy and Sri K.Vijaya Bhaskara Reddy held the reins of power. The discontentment of the Telugu public was reflected in pushing the Congress out and handing over the power again to the Telugu Desam Party in 1994. In 1995 N.T.Rama Rao, has been succeeded by Sri N.Chandrababu Naidu. He ruled the State as Chief Minister from 1995 to 2004. Congress returned to power in 2004 and Dr. Y.S. Rajasekhara Reddy, became the Chief Minister of the State.</p>
											<p>Dr.Y.S. Rajasekhara Reddy introduced several popular welfare schemes viz. ‘INDIRAMMA’ housing scheme for weaker sections, ‘Rajiv Arogyasri’ providing corporate health care to BPL families, ‘108’ Ambulance service and ‘104’ Mobile Health clinics in rural areas, Rs.2 per KG rice, Free power supply to farmers, College Fee reimbursement scheme,construction of Dams and Lift Irrigation projects under the ‘Jalayagnam’ scheme, providing rural employment under the NREGA programme. ‘Pavala Vaddi’ scheme and Pension scheme to members of Self Help Groups.</p>
											<p>Dr.Y.S. Rajasekhara Reddy died in a tragic incident of Helicopter crash on 2nd September 2009, in Nallamala forest area, while going on a tour to Chittoor district, to launch the ‘Rachabanda’ programme. He won the hearts of the people of the State by virtue of introduction of several welfare schemes and by his tireless efforts to reach out to the people.</p>
											<p>Sri Konijeti Rosaiah, was sworn in as the Chief Minister of Andhra Pradesh, on 3rd September 2009.He extended cashless treatment under Aarogyasri Scheme to orphans and destitute living in old age homes run by Government and recognized by the Government through Chief Ministers Camp Office referral system. Approved to explore and study further the proposals to establish Comprehensive Cancer Care Centres in 7 Government Hospitals and 16 Palliative Cancer Care Centres in 16 districts and to establish Comprehensive Trauma Care Centres in 6 Teaching Hospitals through Aarogyasri to increase the access in these areas of concern as limited facilities are available for these patients.</p>
											<strong>Sri Nara Chandrababu Naidu, was sworn in as the Chief Minister of Andhra Pradesh, on 08th June 2014</strong>
										</div>
									  </div>
								</div>
							</div>
							<div id="modern-data" style="float:left;display:none" class="data-tab">
								<h3 class="obj_edb_h">Modern Period</h3>
								<div class="dis_desc_div">
									  <ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
										    <li role="presentation" class="active"><a href="#asaf" aria-controls="asaf" role="tab" data-toggle="tab">Asaf Jahis</a></li>
										    <li role="presentation"><a href="#company" aria-controls="company" role="tab" data-toggle="tab">East India Company</a></li>
										    <li role="presentation" class="active"><a href="#freedom" aria-controls="freedom" role="tab" data-toggle="tab">Freedom Struggle</a></li>
										    <li role="presentation" class="active"><a href="#development" aria-controls="development" role="tab" data-toggle="tab">Socio-Economic Development</a></li>
									  </ul>
									  <div class="tab-content">
									    <div role="tabpanel" class="tab-pane active" id="asaf">
											<img src="images/asafjahi-banner.png" style="margin-bottom:10px;" />
											<p>The founder of this dynasty was one Mir Kamaruddin, a noble and a courtier of the Mughal Muhammad Shah, who negotiated for a peace treaty with Nadirshah, the Iranian invader; got disgusted with the intrigues that prevailed in Delhi. He was on his way back to the Deccan, where, earlier he was a Subedar. But he had to confront Mubariz Khan, as a result of a plot by the Mughal emperor to kill the former. Mubariz Khan failed in his attempt and he was himself slain. This took place in A.D.1724, and henceforth Mir Kamaruddin, who assumed the title of Nizam-ul-Mulk, conducted himself as an independent prince. Earlier, while he was one of the Ministers of the Mughal emperor Muhammad Shah, the latter conferred on him the title of Asaf Jah. Thus begins the Asaf Jahi rule over Golconda with the capital at Aurangabad. It was only during Nizam II rule that the capital of the Deccan Subha was shifted to Hyderabad reviving its importance.</p>
											<p>The Asaf Jahi Nizams are generally counted as seven, though they were ten. Nasir Jung and Muzaffar Jung, son and grandson of the Nizam I who were killed by the Kurnool and Cuddapah Nawabs and Salabatjung who also ruled for a decade, were not counted by the historians though the Mughal emperors at Delhi recognised them as Subedars of the Deccan.</p>
											<p>The Nizams of Asafjahi dynasty who ruled the Deccan are the following:</p>
											<p>(1) Mir Kamaruddin (Nizam-ul-Mulk – Asaf Jah I) (A.D.1724–1748), (2) Nasir Jung (A.D. 1748–1751), (3) Muzaffar Jung (A.D.1750–1751), (4) Salabat Jung (AD.1751–1761), (5) Nizam Ali Khan – Asaf Jah II (A.D.1762–1803), (6) Nizam III Sikandar Jah (A.D.1803–1829), (7) Nizam IV — Nasir-ud-Daula (A.D.1829–1857), (8) Nizam V — Afzal-ud-Daula (A.D.1857–1869), (9) Nizam VI — Mir Mahaboob Ali Khan (A.D.1869–1911), and (10) Nizam VII — Mir Osman Ali Khan (AD.1911–1948 September).</p>
											<p>Though Hyderabad was founded in A.D.1590–91 and built by Muhammad Quli, the fifth king of the Qutbshahi dynasty, it was a princely capital under them. The pomp and peagantry of the fabulous Asafjahi Nizams gained an all-India importance as well as World wide recognition. The rule of the Nizams lasted not only for a much longer period from A.D.1724 to 1948 but also concerned a large territory with diverse language groups that came under their sway.</p>
											<p>The authority of the founder of the State of Hyderabad, Asafjah I, extended from Narmada to Trichinapally and from Machilipatnam to Bijapur. During the period of Afzal-ud-Daula (A.D.1857–1869) it was estimated to be 95,337 sq.miles (2,46,922.83 sq.kms.), forming a lateral square of more than 450 miles (724.17 kms.) each way.</p>
											<p>After Nizam I, Asaf Jah, died in A.D.1748, there was tussle for power among his son, Nasar Jung, and grandson Muzaffar Jung. The English supported Nasar Jung whereas Muzaffar Jung got support from the French. These two heirs were subsequently killed by Nawabs of Kurnool and Cuddapah, one after another, in A.D.1750 and AD.1751 respectively. The third son of Nizam I, Salabat Jung became the ruler as Nizam under the support of the French.</p>
											<p>Hostilities recommenced in India between the French and the English in AD.1758 on the outbreak of Seven Years War in Europe in A.D.1756. As a result, the French lost their power in India and consequently it also lost influence at Hyderabad. In A.D.1762 Nizam Ali Khan dislodged Salabat Jung and proclaimed himself as Nizam.</p>
											<p>Hyderabad came into focus again when Nizam Ali Khan (Nizam II) in A.D.1763 shifted the capital of the Deccan from Aurangabad to Hyderabad. Such a move helped rapid economic growth and expansion of the city, resulting in its importance and prosperity.</p>
											<p>Between A.D.1766 and A.D.1800, Nizam’s sovereignty had declined considerably and the British gained their authority over the Nizams by compelling the latter to sign six treaties.In A.D.1766, the Nizam signed a treaty with the British, whereby in return for the Northern Circars, the British agreed to furnish Nizam Ali Khan with a subsidiary force as and when required and to pay Rs.9 lakhs per annum when the assistance of the troops was not required in lieu of Northern Circars to be ceded to them. In A.D.1768 he signed another treaty conferring the Northern Circars to the British and the payment by the British was reduced to Rs.7 lakhs. According to another treaty, he surrendered the Guntur circar in A.D.1788. In A.D.1779, the Nizam conspired with Hyder Ali of Mysore and the Peshwa of the Marathas to drive away the English. When they learnt about his designs, the English marched against the Nizam who had to sue for peace agreeing to the presence of an English Resident along with army, artillery and cavalry at Hyderabad.</p>
											<p>Through another treaty, the Nizam was compelled to disassociate himself from Hyder Ali. In A.D.1800 yet another treaty was signed by the Nizam with the British altering the earlier treaties to increase the strength of the English army in Hyderabad. In lieu of the cost of maintenance of the force, the Nizam had to cede to the company an area comprising the districts of Rayalaseema and Bellary (now in Karnataka). With this the Nizam lost not only the territory but also reputation and power.</p>
											<p>The East India Company acquired the Nellore region comprising the present Nellore and Prakasam districts and a part of the Chittoor district from the Nawab of Arcot in A.D.1781. Together with the other parts of the territories of the Nawab, this area was merged with the then Madras Presidency of the Company in A.D.1801. Thus, by the beginning of the 19th century, the Telugu land was divided into major divisions: one that came to be popularly called Telangana under the feudal rule of the Nizam, accounting approximately one-third of the entire land and the other, broadly designated as Andhra, in British India.</p>
											<p>It was during the period of Nizam III — Sikandar Jah (A.D.1803–1829), that the English cantonment, raised on the other side of Hussain Sagar, was named after him as Secunderabad. This township grew rapidly as the modern town with Railway station and other commercial establishments. The notable events under the rule (A.D. 1857–1869) of Nizam V, Afzal-ud-Daula, were the construction of the Afzal Gunj Bridge or the Nayapul, over the river Musi and the establishment of a General Hospital.</p>
											<p>The modern era of the development of the twin cities began soon after the last flood of the river Musi in A.D.1908 which had shattered the life of the people living in Hyderabad. This necessitated the planned development of the city in a phased manner. Sri M.Vishweshwarayya, the great engineer of Mysore, was specially invited for this purpose and was appointed as adviser to the Nizam’s Government to suggest measures for flood control and improvement of the city. As a result of his suggestion, Osman Sagar and Himayat Sagar were constructed in A.D.1917. These two dams not only controlled the floods from river Musi, but also supplied drinking water to the city. These spots have also become recreational centres for many people in Hyderabad. Another step taken for the development of the city was the formation of the City Improvement Board in A.D.1912, which paid greater attention to the construction of roads, markets, housing sites and shopping centres in the city. Nizam VII, Osman Ali Khan, also moved to Kingkothi, the northern suburb of the city in A.D.1914, which helped in the development of its surroundings. Several public utility services were commissioned in A.D.1922. Electricity was commissioned in A.D.1923. In A.D.1928 with the establishment of rail connection to Bangalore, the city was brought on the metre-gauge map of India. By A.D.1932 bus service was started in the city and in A.D.1936 the bus routes radiated from the capital to all the district headquarters. In A.D.1935, the Madras-Karachi Air Service was linked with Hyderabad with Hakimpet as landing ground.</p>
											<p>Many buildings of utility like Legislative Assembly, Hyderabad and Secunderabad railway stations, the High Court, City College, the Asafia Library (present State Central Library), the Unani Hospital, the Osmania University, were constructed during the reign of Nizam VII.</p>
											<p>If Muhammad Quli Qutb Shah was the founder of Hyderabad City, Osman Ali Khan, the Nizam VII, can be called as the maker of modern Hyderabad, in a variety of ways. The buildings constructed during his reign are impressive and represent a rich variety of architecture, such as the magnificent Osmania University, synthesizing the modern, the medieval and the ancient styles of architecture. The sprawling Osmania General Hospital in the Mughal style, the lofty High Court in Indo-Saracenic style, the stately well-proportioned Legislative Assembly building in Saracenic-Rajasthani style, symbolize his desire to build modern and majestic Hyderabad. The engineers or the architects and craftsmen of the period have to be congratulated for their talent.</p>
											<p>A fascinating pretty edifice in the centre of the city is the Andhra Pradesh Legislative Assembly building, with the lawns of the Public Gardens, to form the needed premises.</p>
											<p>The noble buildings during the Asafjahis’ period were the Chow Mahalla during Nizam V, Pancha Mahal, and the Falaknuma Palace. The Falaknuma, built by Nawab Viquar-ul-Umra, a Paigha Noble in A.D.1892 at a cost of Rs.40 lakhs, has become a land mark like Charminar.</p>
											<p>The hereditary Diwans of the Nizams, the Salar Jungs were as colourful and dazzling as their masters. The Mir Alam Tank, the Mir Alam Mandi, the Salar Jung Museum, their Devdi, the Aliya School are inalienable parts of Hyderabad.</p>
										</div>
									  	<div role="tabpanel" class="tab-pane" id="company">
									    	<img src="images/east-india-banner.png" style="margin-bottom:10px;" />
									    	<p>It naturally took some years for the East India Company to consolidate and stabilize its rule in the Telugu area, which came under its direct rule. In the initial stages, the Company had to counter strong resistance from the Zamindars in the coastal Andhra and the Palegars in the Rayalaseema districts, that were in existence from the ancient Hindu rulers or the medieval Muslim rulers. The Company decided to use the Zamindari system to its best advantage, entrusting the Zamindars only with collection of land revenue and taking away from them the executive and judicial powers. The Company also introduced the system of `Permanent Settlement’ in A.D.1802.</p>
									    	<p>In Rayalaseema, the first Principal Collector, Thomas Munro, of the ceded districts suppressed all the Palegars and established a new mode of collection of land revenue directly from the tiller of the soil in A.D.1808. This system came to be known as `Ryotwari’ system.</p>
									    	<p>The administrative measures taken by the Company in the rest of the Telugu land also led to similar changes in the Hyderabad State of which Telangana formed a major constituent. The famine of A.D.1777 and the devastating flood in the succeeding year greatly impoverished the State of Hyderabad and its economy was badly affected. The unwise policies of the rulers led the State on the verge of bankruptcy by neck-deep debts and the Nizam was harassed by Arab and Rohilla bankers. In such situation, the Company, through its Resident, intervened and saved the Nizam. Thus, the Nizam became a dependable friend of the Company and his support to the Company in the crucial period of the War of Independence in A.D.1857 (otherwise called Sepoy Mutiny) turned out to be decisive factor in clinching the issue in favour of the Company’s rule in India. In A.D.1858 the British crown took over the reign in the entire India.</p>
									    	<p>Thus, the British, who entered India in the early 17th century as a trading company, gained power as its ruler for over a century and a half.</p>
									    </div>
									    <div role="tabpanel" class="tab-pane active" id="freedom">
											<img src="images/freedom-struggle-banner.png" style="margin-bottom:10px;" />
											<p>The role of the Andhras in the Freedom Struggle is next to that of none and they had always been in the forefront along with the rest of the countrymen. The first War of Independence in A.D.1857 did in no way affect the state of affairs in the south, though ripples were felt in the State of Hyderabad, in the shape of a raid by Rohilla and Arab soldiers against the Residency and a rebellion by the Gonds in the Adilabad district under the leadership of Ramji Gond. However, in A.D.1860, the English suppressed all these rebellions.</p>
											<p>The rest of the 19th century passed away without any event of major importance, though occasional rebellions of the peasants here and there brought out their dissatisfaction to the forefront. The introduction of English education helped the formation of a strong educated middle class, which found security of life in the Government jobs. Agriculture became the mainstay of the people, as the cottage industries, especially the cloth industry, dwindled due to the deliberate policy of the Government to encourage British industries and trade at the expense of the indigenous ones. However, construction of dams across the Godavari and the Krishna by A.D.1852 and 1855 respectively, resulted in increasing agricultural production and helped, for a time, to cloud the real issues.</p>
											<p>The beginning of the twentieth century saw the emergence of the numerically strong, educated, confident but dissatisfied middle class, seeking equality with the white ruler. The dissatisfaction, as elsewhere, was voiced in the form of pamphleteering. The foreign government, ever vigilant in such things, sought to nip it in the bud and as a consequence of it, repressive measures were introduced. Gadicherla Hari Sarvottama Rao (1883–1960) was the first victim of the move in Andhra. He was sentenced for his seditious article `Cruel Foreign Tiger’. The young men of Andhra had their own share in the `Vande Mataram’ and `Home Rule’ movements also.</p>
											<p>But, along with this agitation, a kind of constructive work was also carried on by some fore-sighted leaders such as Kopalle Hanumantha Rao (1880–1922). Long before Gandhiji thought of the constructive programme, Hanumantha Rao founded his `Andhra Jateeya Kalasala’ (National College) in Machilipatnam to train young men in techniques of modern production, as he thought that it was the surest way to win independence from an imperialist rule which cared more for its markets than anything else.</p>
											<p>In 1920, when Gandhiji started his non-co-operation movement, it had an immediate response in Andhra. Under the leadership of eminent men like Konda Venkatappaiah (1866–1948), Tanguturi Prakasam Pantulu (1872–1957), Bulusu Sambamurti (1886–1958) and Bhogaraju Pattabhi Seetaramaiah (1880–1959), the Andhra young men made many a sacrifice for the cause of the Nation. Many practicing lawyers gave up their lucrative practice and many a brilliant student gave up their studies to respond to the call of the Nation. In November, 1921, the Congress gave permission to the Provincial Committee to start Civil Disobedience if the conditions laid down by Mahatma Gandhi were fulfilled.</p>
											<p>Three episodes during the Civil Disobedience Movement in Andhra attracted the attention of the whole country. The first was the Chirala-Perala episode led by Duggirala Gopalakrishnayya. He served for some time in the Government College at Rajahmundry and the National College at Machilipatnam. He was, however, not satisfied with the kind of education that was imparted there. Moreover, after attending the Calcutta Congress in 1920, he was attracted to the programme of Non-co-operation and resolved to dedicate his life to the achievement of Swaraj. For this purpose he trained thousand disciplined band of warriors and gave them the name `Ramadandu’. He put them to test at the All-India Congress Session in Vijayawada to maintain peace and order and the All-India leaders were immensely pleased with the kind of work they did.</p>
											<p>Chirala and Perala were two contiguous villages in Prakasam (then part of Guntur) district with a population of 15,000. The Government wanted to combine them into a municipality in 1920. But the people protested against this move because it meant imposition of additional taxes. These protests were not headed to and the municipality was constituted. As a protest against this, all elected councilors resigned. The Government, however, carried on the administration of the municipality with a paid chairman. In January, 1921, the residents refused to pay the municipal taxes. Several of them including a woman were prosecuted, tried and sentenced to imprisonment. This woman was considered to be the first woman in the country to be imprisoned on political grounds. After the All-India Congress session at Vijayawada, Gandhiji came to Chirala. Gopalakrishnayya sought his advice on the future course of action to be taken. Gandhiji suggested two alternatives, (1) to continue the No-Tax Campaign in a non-violent manner and (2) mass exodus of people to the vacant areas beyond the municipal limits. The second would automatically end the municipality. But he made it clear that whatever course they chose the Congress would bear no responsibility and that they must stand on their own legs. Gopalakrishnayya had enough confidence in himself and the people, and in spite of the warning, he persuaded the residents to move to the area outside the municipal limits and raise temporary tenements which he called `Ramanagar’.</p>
											<p>It was an unprecedented step in the history of the country. For eleven months people lived there in thatched huts braving the severity of weather. Gopalakrishnayya and his Ramadandu kept up the morale of the people. Their aim was to establish a parallel government and demonstrate to the outside world how Swarajya, as conceived by him, would be like. He constituted an Assembly comprising members elected from each caste and established an arbitration court. Sankirtans and Bhajans kept up the morale of the people. He, however, faced financial difficulties and he went to Berhampore in 1921, when the Andhra Conference was in session to collect some money. There he was prohibited to address the public meetings but he defied the orders. He was arrested and sentenced to one year’s imprisonment and sent to Trichinapally. There was no other person who could occupy his place. The Government also took repressive measures against those who built sheds on government lands. People returned to their homes in the municipality at the end of eleven months and reconciled themselves to its constitution. Though the movement failed, the qualities of courage and fearlessness they developed stood them in good stead in the subsequent stages of the freedom movement.There were similar movements, though not of the same scale or character, in Repalle and Vijayawada municipalities. The Government was not obdurate and yielded to popular pressure and took steps to redress their grievances.</p>
											<p>The next episode was the `Forest Satyagraha’ of the ryots of Palnad in Guntur district in 1921. The peasants of this place had to pay heavy tax for permission to graze their cattle in forests. When the crops failed that year, they decided to send their cattle into the forests without paying the fee and suffer the penalties. They resorted to social boycott of all government officials and refused supply of even the bare necessaries of life to them. It did not produce the desired change in the attitude of the officials. They took the cattle forcibly, confined them in cattle-pounds and refused to free them unless the fee was paid. There was, therefore, clash between the cattle owners and the armed police that was brought on the scene. In the firing that took place one Kannuganti Hanumanthu was killed. Meanwhile, Gandhiji called off the Non-Co-operation Movement due to some untoward incidents at Chowri Chowra and with this the Palnad Satyagraha also came to an end.</p>
											<p>The No-Tax Campaign at Pedanandipadu in Bapatla taluk of Guntur district was the third famous landmark. There was considerable difference of opinion between leaders like Konda Venkatappayya and Mahatma Gandhi with regard to this campaign. Gandhiji wanted to try the experiment first in Bardoli in Gujarat. The local leaders, however, tried to convince him that the conditions laid down for starting such a campaign were fulfilled by the people of this place and they were very keen on starting it. Gandhiji reluctantly gave permission to proceed with it. In January, 1922, when the first instalment of land revenue fell due, a non-payment campaign was started under the leadership of Parvataneni Virayya Chowdery. As a first step the village officers were persuaded to resign so that no land revenue could be collected. The Revenue officials could not collect even five per cent of the demand of land revenue. Repressive measures were resorted to movables, cattle and even lands were attached for non-payment of land tax, but none was present to bid them in the auctions. Military was moved into the area to terrorise them. These did not produce any result. The volunteers worked day in and day out to maintain order and see that no untoward incident took place. Before they proceeded on further action, the movement was called off and the local leaders gave up the No-Tax Campaign, and the taxes were paid.</p>
											<p>When the movement was called off, it left the minds of many young men sore and the disappointment took a violent turn in one instance. A rebellion broke out in the agency areas of the Northern Circars under the leadership of Alluri Sitaramaraju (1897–1923). He was a simple and unostentatious young man given to studies of spiritual importance. He was keen on the welfare of the lowly and the innocent. He contributed his mite in the days of the non-co-operation movement and later settled down among the hill tribes of the Visakhapatnam district, spending his time in spiritual practices. The misdeeds of a British contractor, who took pleasure in under-paying the workers drawn from the hill tribes, brought him into a tussle with the police who supported the contractor. This led to encounters between the police and Sitaramaraju, who was supported by the hill tribes under the leadership of the Gamu brothers. Sitaramaraju raided many police stations and carried off guns and powder. The alien Government then made use of all its resources to quell the rebellion. A company of the Assam rifles under the leadership of Saunders was sent there. The campaign lasted nearly for one year from December 1922 and, in the end, many of the followers of Raju, especially the Gamu brothers, were overpowered in an encounter. The rebellion petered off by October 1923. Raju surrendered himself, so it was said, and was shot dead without any trial.</p>
											<p>In 1930 when Gandhiji started his salt-campaign, the broad east coast of Andhra became the venue of memorable deeds of many a young man and woman, who in spite of the severe blows of lathis, prepared salt and courted imprisonment. The tremendous awakening, which was an outcome of this movement, resulted in the rout of the parties other than the Congress in the elections of 1937.</p>
											<p>The thirties saw the emergence of leftist organisations in Andhra which gave a fillip to the progressive trends. Meanwhile, in 1939, the British Government dragged India into World War II and the Congress ministries resigned.</p>
											<p>From 1942, history moved with a quick and vigorous pace. The arrest of the leaders at Bombay on August 9, 1942, provoked the masses. The `Do or Die’ message of the National Congress inspired the people of Andhra, who under the leadership of young but devoted workers, brought the functioning of the Government to a stand still for a few days. Many young students and workers faced the bullets cheerfully, to swell the number of those unknown, unwept, and unsung heroes of India who died to make their country live.</p>
											<p>Events moved on quickly and, on August 15, 1947, India achieved its Independence. A new Constitution came into force from the 26th of January, 1950, which envisaged the new set-up of Government at the Centre as well as at the States by duly elected representatives from the people on an adult franchise.</p>
											<p>The Andhras all along their fight with the British authorities thought that the exit of the Britishers would facilitate the early formation of the Telugu areas as a separate State. But the Constituent Assembly had to decide otherwise and this proved to be a bitter pill for the Andhras to swallow.</p>
										</div>
										<div role="tabpanel" class="tab-pane active" id="development">
											<img src="images/devlopment-banner.png" style="margin-bottom:10px;" />
											<p>The period of British rule in India forms a significant chapter in the history of the ancient land. Many aliens came to this land, conquered some parts of the territory, but were soon absorbed as natural citizens of the country. For the first time, the British (and the other European nationals) who conquered and ruled it for a considerable time remained aliens administering a colonial rule and ultimately had to return. The policy that underlined the various measures the British took in legislative, judicial and executive fields was only to tighten their grip over the country and to exploit it to the advantage of their own motherland.</p>
											<p>However, the very measures they took had, curiously enough, initiated and promoted many positive factors leading to consolidation of the Indian society and their urge for freedom. The colonial rule, of course, left the country impoverished economically, but it unified the nation, which was rudely shocked and, therefore, prepared itself for a searching introspection. This resulted in ushering in a new order, which almost displaced the old one.</p>
											<p>As a constituent of India, Andhra region also received its share of these negative and positive forces. Andhra was noted, for a long time since the period of the Satavahanas, for its cloth industry. In spite of several political upheavals, the ports of Andhra had been busy with incoming and outgoing ships of various countries. Even in the early years of the British rule, Andhra flourished as an exporter of fine varieties of cloth, chintz, palampores, etc. Handicrafts and metal crafts also formed a part of the exports along with cloth. Narsapur, in the present-day West Godavari district, was noted for its ship-building activity and some of the Europeans also were customers at the place. There used to be a great demand for indigo, an agricultural product, available only in Andhra and in a few other parts of the country. The over-all exports were far ahead of imports in value and the region earned a lot of foreign exchange, which enabled it to withstand the severity of famines that ravaged the country often.</p>
											<p>But the Industrial Revolution which started in England in the latter half of the 18th century, gradually affected the cottage industries of Andhra as well as those in the rest of India. England then turned out to be a manufacturing country. By the aid of machines, the English factories could manufacture finished articles at a lesser cost than those from the cottage industries. Further, the British being the rulers in the country, discouraged the artists and craftsmen by imposing heavy taxes. As a result of these measures the once flourishing cottage industries and handicrafts of Andhra languished and gradually vanished. The finished articles that came out of the factories in England were imported into Andhra and thus began the economic drain which gradually impoverished the country and enriched Great Britain. The synthetic method of preparation of indigo by the western scientists, affected the farmers very badly. The unemployed poor artisans in the villages became agricultural labourers thus swelling the ranks of those that depended on the land.</p>
											<p>A greater harm was caused by the `divide and rule’ policy of the British. The communal virus thus injected into the political body of the country had vitiated the relations between the Hindus and the Muslims to such an extent that it forced the Indians to agree for the division of India into two independent states. Though Andhras living in the coastal and Rayalaseema districts managed to keep away from this communal divide, those living in the State of Hyderabad had to undergo a lot of suffering in 1946-48 in the wake of a fanatic struggle carried on by Razakars to carve out the Nizam’s dominions as an independent Muslim-dominated State. However, the timely action by the Union Government of Free India saved the situation.</p>
											<p>But, as mentioned earlier, some of the measures introduced by the alien rulers to safeguard their own interests proved very beneficial to Indians. The political and administrative unity brought in by the Britishers, helped the various, linguistic groups to come together and take pride in being the citizens of a great country with common cultural traditions. The rail-road, the telegraph, the telephone and the newspaper brought all those living in various corners of this vast country come together and to understand each other. This system of communication also helped the transit of goods from one place to the other and was of immense help during the times of famine.</p>
											<p>The Britishers, wanted to keep India as a producer of raw materials and as such harnessed the rivers by constructing dams. The dam on the Godavari at Dowleswaram was constructed in 1852 and the one on the Krishna at Vijayawada in 1855. These naturally helped the farmers of the delta areas, though they could not solve the problem of poverty that tormented the people at large.</p>
											<p>It must, however, be conceded that the foreigner’s rule had resulted in a renaissance that yielded fruitful results in social and cultural fields. The introduction of English as a medium of teaching in schools is the main factor that contributed to this transformation, though it was mainly intended to train Indians for ministerial jobs. This new system of education, unlike the old traditional one, threw open the gates of the schools to all Indians irrespective of caste or creed. A certificate from such a school served as a passport for a job in the service of the Government. The Christian missionaries from England and America also played a notable part in spreading the system.</p>
											<p>The introduction of printing press in the State in or about 1810 helped in bringing knowledge to the door-steps of the ordinary readers. As a result, educational activity in Andhra as well as in the rest of India, was influenced by European literatures, modern sciences and democratic ideas that sprung from the knowledge. This knowledge brought out many revolutionary changes in the religious and cultural fields.</p>
											<p>This contact with European thought enabled many Hindu leaders to reinterpret Hinduism to strengthen it to withstand the threat from the proselytisation carried on by the Christian missionaries. The reaction to it resulted in the founding of the Brahma Samaj and the Arya Samaj. At the same time, Europeans such as Anne Besant, captivated by the merits of the ancient Hindu and Buddhist thoughts, founded the Theosophical Society. All these gained some following in Andhra, especially among the educated classes.</p>
											<p>Telugu literature also underwent a sea-change under the influence of the English writings. The credit for pioneering such a change goes to Kandukuri Veeresalingam Pantulu. He was also responsible for bringing in many social reforms, the main thrust of which was the upliftment of the women’s status.All these revolutionary changes in social and cultural fields found their expression in the urge for freedom among people.</p>
										</div>
									  </div>
								</div>
							</div>
							<div id="medieval-data" style="float:left;display:none" class="data-tab">
								<h3 class="obj_edb_h">Medieval Period</h3>
								<div class="dis_desc_div">
								  	<!-- Nav tabs -->
									  <ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
										    <li role="presentation" class="active"><a href="#kakatiyas" aria-controls="kakatiyas" role="tab" data-toggle="tab">Kakatiyas</a></li>
										    <li role="presentation"><a href="#bahamanis" aria-controls="bahamanis" role="tab" data-toggle="tab">Bahamanis</a></li>
										    <li role="presentation"><a href="#vijaynagar" aria-controls="vijaynagar" role="tab" data-toggle="tab">Vijaynagar</a></li>
										    <li role="presentation"><a href="#qutub" aria-controls="qutub" role="tab" data-toggle="tab">Qutub Shahi</a></li>
										    <li role="presentation"><a href="#mughal" aria-controls="mughal" role="tab" data-toggle="tab">Mughal Rule</a></li>
									  </ul>
									  <!-- Tab panes -->
									  <div class="tab-content">
									 	<div role="tabpanel" class="tab-pane active" id="mughal">
											<img src="images/mughal-rule-banner.png" style="margin-bottom:10px;" />
											<p>Aurangazeb, the Mughal emperor, invaded Golconda in A.D.1687 and annexed it to the Mughal empire. When this was done, Golconda became part of the Deccan Subha and a Nazim was appointed as an agent of the Mughal emperor. Thus, for about a period of 35 years it was ruled by Nazims, the last one being Mubariz Khan.</p>
											<p>The period between A.D.1687 and A.D.1724 saw several sea changes. Aurangazeb died in A.D.1707. The administrative machinery of the Mughal imperial regime began to crumble and the central authority manned by successive feeble rulers gradually lost control over the provinces. In Deccan, situated far away from the capital, the state of affairs was still worse. This anarchy contributed much in giving a new turn to Indian history. It enabled two foreign mercantile companies to consolidate themselves as political powers capable of subsequently playing decisive roles in shaping the destiny of the nation. They were the East India Company of England and the Compagnie de Inde Orientale of France. These trading companies had their headquarters at Madras and Pondicherry respectively and both had trade centres at Machilipatnam. They were waiting for suitable opportunities to expand their areas of control and so, did not hesitate to take sides in the local skirmishes.</p>
										</div>
									  	<div role="tabpanel" class="tab-pane active" id="qutub">
											<img src="images/qutub-banner.png" style="margin-bottom:10px;" />
											<p>The Qutb Shahi dynasty held sway over the Andhra country for about two hundred years from the early part of the 16th century to the end of the 17th century. Sultan Quli Qutb Shah, the founder of the dynasty, served the Bahmanis faithfully and was appointed governor of Telangana in A.D.1496. He declared independence after the death of his patron king, Mahmud Shah, in A.D.1518. During his 50-year rule, Sultan Quli extended his kingdom upto Machilipatnam. He was murdered by his third son, Jamsheed, who succeeded Sultan Quli. Jamsheed reigned for seven years till A.D.1550 but remained maligned by all for his patricidal crime. His youngest brother, Ibrahim, who was hardly thirteen at the time of his father’s assassination, fled to Vijayanagar and took refuge there. It afforded him a training ground and he learned the art of administration.</p>
											<p>After Jamsheed’s death in A.D.1550, Ibrahim returned to Golconda and ascended the throne. Ibrahim Qutb Shah, who was known as Malkibharam in the Andhra country, was the real architect of the Golconda kingdom. He ruled the kingdom for 30 years from A.D.1550 to A.D.1580. He organised the central and provincial governments and brought them into close contact. He also introduced an efficient intelligence service which kept him informed on all affairs. The kingdom was made safe for travel and trade. Ibrahim had also many works of public utility to his credit. He dug lakes and tanks and laid out towns and gardens. He also encouraged local language Telugu and patronised Telugu scholars and poets like, Telaganarya and Gangadhara who dedicated their works to him.</p>
											<p>Ibrahim took an active part in the battle of Rakkasi Tangadi in A.D.1565. It immensely benefited him in cash and territories, and the kingdom was extended to the south as far as Madras and Gandikota.</p>
											<p>The next period of forty years led by Ibrahim’s son and grandson was an era of peace and prosperity. Muhammad Quli, son of Ibrahim, was a great writer and a builder. The city of Hyderabad was laid in A.D.1591 with magnificent buildings, straight roads and other civic amenities. For this purpose, he invited many Persians to settle down in Hyderabad and Machilipatnam. He was a scholar and a poet, composed a large number of poems in the Deccani language. Muhammad Quli was succeeded by his nephew and son-in-law Sultan Muhammad in A.D.1612. He was highly religious and a model of virtue and piety. He followed his uncle in promoting learning and architecture. The great mosque known as Mecca Masjid in Hyderabad was designed and its foundation laid by him, though the main structure of the Mosque was completed during the next four generations.</p>
											<p>Sultan Muhammad’s premature death in A.D.1626 was a sad prelude to the decline and fall of Golconda. He was succeeded by his minor son, Abdullah Qutb Shah, who was indolent. The fall of Ahmadnagar in A.D.1633 to the Mughals exposed Golconda. Abdullah Qutb Shah acknowledged the suzerainty of the Mughals and concluded a treaty in A.D.1636. He was reduced to vassalage and the Mughal Hajib, a resident officer of the Mughals imposed on him, interfered in day-to-day administration and encouraged fissiparous tendencies. The traitors of Golconda found their strength in the Mughals who did not hesitate to invade Golconda.</p>
											<p>Abdullah Qutb Shah died in A.D.1672 and was succeeded by his third son-in-law, Abul Hassan Qutb Shah, popularly known as Tana Shah. He had a steady mind, broader vision and administrative experience of a high order. He handled the domestic and foreign affairs deftly and put forth all his efforts against the Mughal tide.</p>
											<p>Abul Hassan and his kingdom were misrepresented by false propaganda to justify the interference of the Mughal emperor who contemplated to liquidate the Deccan Sultanates and incorporate it in the Mughal empire. The emperor came to the Deccan in A.D.1682 and launched his campaign against both the Marathas and the Deccan Sultanates. His original plan was to put down the Maratha power, but later on, he suspended the plan and directed his forces against Bijapur and Golconda in A.D.1685. Bijapur fell in after two months’ siege. But Golconda held out for a long time. It came to an abrupt end owing to the treachery of an Afghan general, Abdullah Khan, who opened the gate in the dead of night and facilitated the capture of the fort. The equanimity with which Abul Hassan Tana Shah had faced the Mughal captors and the unequalled loyalty of Abdul Razak Lari, who remained faithful to his king, Tana Shah, are of special significance.</p>
											<p>The fall of Golconda in A.D.1687 had far reaching consequences. It halted the face of cultural progress for years and relaxed the administrative grip on the English Company at Machilipatnam and Madras. So long as the kingdom was powerful in the south, the king Abul Hassan and his Minister, Madanna, kept their constant vigil on the English merchants.</p>
											<p>Qutb Shahi rulers adopted religious tolerance. They treated Hindus equal with Muslims as well and maintained cordial relations between the two throughout. They encouraged the local language Telugu besides the Deccani Urdu. They patronised scholars and awarded them titles and Jagirs. The builder of Hyderabad, Muhammad Quli Qutb Shah was an eminent poet in Persian and was an author of several Persian works. The fourth king, Ibrahim was a great patron of Telugu. His court was crowded with Telugu poets besides many others. The rulers adopted the local customs to a great extent. This tolerance and patronage of the kings were followed by the nobles as well. Ramadas (Goppanna), a great devotee of Sri Rama who lived in the period of Abul Hassan, wrote a number of poetical works and songs in praise of his deity.</p>
											<p>The Deccani architecture, is a combination of Persian, Hindu and Pathan styles. They mostly borrowed heavily from Hindu style of architecture. The Bala Hissar gate of the Golconda fort is remarkable for the figures and emblems of Hindu mythology.</p>
											<p>The citadel of Hyderabad, the Charminar is the most remarkable of all the Qutb Shahi monuments. It is one of the magnificent structures in India.</p>
											<p>The socio-cultural life of the people during the rule of the Qutb Shahis was marked by a spirit of broad-mindedness and catholicity based on sharing and adopting of mutual traditions and customs.</p>
										</div>
									  	<div role="tabpanel" class="tab-pane" id="vijaynagar">
											<img src="images/vijayanaga-banner.png" style="margin-bottom:10px;" />
											<p>The year A.D.1336 saw the emergence of a new power, the kingdom of Vijayanagar in the south-western part of Andhra on the banks of the Tungabhadra. It was founded by two Sangama brothers, Harihara and Bukka, with the blessings of a great saint patriot of medieval India, Vidyaranya, and Harihara became its first ruler. It was that great kingdom which, by resisting the onslaughts of Muslims, championed the cause of Hindu civilisation and culture in its polity, its learning and arts.</p>
											<p>The two brothers took possession of Kampili from Hoyasala ruler of Karnataka, Ballala III. They later established a new city on the southern bank of Tungabhadra, opposite Anegondi, and gave a name to it as Vijayanagar or Vidyanagar. They expanded their territory by occupying the Udayagiri fort in the Nellore region and Penukonda fort from Hoyasalas. Meanwhile the Bahmani Kingdom came into existence in the Deccan. In the conflicts between the Bahmanis and Vijayanagar, Harihara-I lost some territory. After his death in A.D.1355, his brother Bukkaraya succeeded him. On account of frequent wars with Bahmanis, Bukka could not do anything in the initial period, however, he conquered Madhura and extended his territory to the south up to Rameswaram. Harihara II (A.D.1377–1404), who ascended the throne after Bukkaraya, consolidated and its frontiers further extended. During this time coastal Andhra lying between Nellore and Kalinga was under the Reddis of Kondavidu. Harihara II carried on campaign, for gaining control over the territory, against the Reddis and wrested Addanki and Srisailam areas from the Reddis. This led to clashes with the Velamas of Rachakonda in Telangana. To counter attack, Rachakonda sought help from Bahmanis and this checkmated Harihara II from proceeding further into Telangana. The extension of Vijayanagar territory towards northwest gave it control over the ports of Goa, Chaul, and Dabhol and led to an expansion of commerce and ensuing prosperity.</p>
											<p>In the dispute between sons, after the death of Harihara II, Devaraya I (A.D.1406–422) emerged victorious and ascended the throne only to wage wars against the Bahmanis, the Velamas of Telangana and the Reddis of Kondavidu. His reign also saw the commencement of hostilities between the Gajapatis of Kalinga and the Rayas of Vijayanagar. Devaraya I passed away in A.D.1422. His sons, Ramachandraraya and Vijayaraya I, who ruled one after the other, did not do anything significant.</p>
											<p>The next ruler, Devaraya II (A.D.1426-1446), son of Vijayaraya, was a great monarch. He effected the conquest of Kondavidu and carried his arms into Kerala, subjugating the ruler of Quilon and other chieftains. The writings of Abdul Razzak, the Persian ambassador, who visited south India during the reign of Devaraya II, bear testimony to the supremacy of the king over many ports of south India. According to him, the dominions of Devaraya II extended from Ceylon to Gulbarga and from Orissa to Malbar. The relations between the Vijayanagar and Bahmani kingdoms continued to be hostile during the reign of Devaraya II also. Devaraya was a great builder and a patron of poets. Extensive commerce and revenues from various sources contributed to the prosperity of the Vijayanagar kingdom under him.</p>
											<p>But the kings who succeeded Devaraya II were quite incompetent and allowed the empire to disintegrate. To add to this, there was pressure from Bahmani Sultans. The Portuguese were also rapidly trying to establish themselves on the west coast and in the ports along it.</p>
											<p>The Vijayanagar minister, Saluva Narasimha, who usurped the throne in A.D.1485 could successfully counter these forces. Thus the Saluva line of kings came to rule Vijayanagar. However, he had to spend a good deal of his time and energy putting down many rebel chieftains. He died in A.D.1490 leaving his two sons to the care of Narasanayaka of the Tuluva family, a trusted general. Narasanayaka assumed himself the power as a regent in A.D.1492 keeping the real rule under tutelage. Narasanayaka died in A.D.1503 and by that time he had established his authority effectively over the whole of his extensive dominion. His son, Vira Narasimha, succeeded him as the regent and proclaimed himself as a ruler in A.D.1506, thus inaugurating the third dynasty. He died in A.D.1509 and his brother, Krishnadevaraya, succeeded him.</p>
											<p>The period of Krishnadevaraya was considered as the golden age of the Vijayanagar history. He was a great warrior, statesman, administrator and a patron of arts. His first task was to repulse the Bahmanis. He occupied Raichur doab, carried the war up to Gulbarga and returned successfully. He extended his dominion in the east and north-east by defeating the Gajapatis of Orissa in A.D.1518.</p>
											<p>Krishna Devaraya died in A.D.1529. After his death, Vijayanagar kingdom started declining gradually. There was a tussle for power and the rulers spent their time in struggle against internal revolts. The five Muslim rulers in Deccan kingdom, took this opportunity, united and formed a league and marched towards Vijayanagar with combined forces. In a decisive battle fought on the 23rd January, 1565 on the south bank of the Krishna near the village of Rakkasi Tangadi, Vijayanagar was defeated and Ramaraya, who led the Vijayanagar armies, was killed. Tirumalaraya, the younger brother of Ramaraya, along with his puppet ruler, Sadasivaraya fled to Penukonda in Anantapur district with all the treasure. The victorious armies of Muslims then marched towards Vijayanagar. Uninhibited looting of the city by the Muslim rulers as well as the ruthless robbers went on for days together. Never perhaps in the history of the world has such havoc been brought and wrought on such a splendid city teening with a wealthy and industrious population in prosperity one day and on the next seized, pillaged and reduced to ruins amid scenes of savage measures and horrors beggaring description.</p>
											<p>Tirumalaraya after reaching Penukonda ruled for some time and tried his best to rebuild the empire but failed. The last ruler of Vijayanagar dynasty was Sriranga (A.D.1642–1681).The Rayas of Vijayanagar regarded all sects of Hindus alike, built temples to Siva and Vishnu and patronised them by lavish grants. They patronised even Jains and Muslims. The Vijayanagar architecture fused various elements of the Chalukya and Chola art, and produced extremely beautiful gopuras and mantapas. The most typical of them can be found at Tirupati, Tadpatri, Srikalahasti and Penukonda. The Tadpatri and Lepakshi temples are the notable examples of Vijayanagar architecture and sculpture.</p>
											<p>Telugu language and literature was given a preferential treatment and Telugu was treated as official language of the empire. Simultaneously, Sanskrit and other languages were encouraged by the Vijayanagar rulers. The renowned Telugu poet Srinatha was honoured with Kanakabhisheka by Proudhadevaraya of the first dynasty of the rulers. Particularly, the reign of Krishnadevaraya marked a new era in the literary history of south India.</p>
											<p>He was himself a scholar and authored Amuktamalyada, a celebrated Telugu work. His court known as Bhuvanavijayam, was adorned by such eminent poets like Allasani Peddana, Nandi Timmana, Dhurjati, Tenali Ramakrishna, Mallana, Ramarajabhushana, Pingali Surana and Rudra, known as Ashtadiggajas. The greatest of them was Allasani Peddana whose famous work Manucharitra heralded the eminence of the native genius of Telugus.</p>
										</div>
									  	<div role="tabpanel" class="tab-pane" id="bahamanis">
									    	<img src="images/bahmanis-banner.png" style="margin-bottom:10px;" />
									    	<p>The disastrous fall of Warangal in A.D.1323 brought the Andhras, for the first time in their history, under the yoke of an alien ruler, the Muslims. In A.D.1347 an independent Muslim State, the Bahmani kingdom was established in south India by Alla-ud-din Hasan Gangu by revolting against the Delhi Sultanate. To stabilise his position, Hasan waged wars to annexe the two neighbouring Hindu kingdoms, Warangal, under the Musunuri Nayakas, and Vijayanagar, which was under the Rayas. He occupied the area up to the river Tungabhadra in A.D.1358, and shifted his capital from Daulatabad to Gulbarga. The Hindu rulers, however, reoccupied their lost territory during the period between A.D.1358-75. Harihara Raya II of Vijayanagar conquered many areas which were under the Bahmanis during the period of Muhammad Shah II (A.D.1378-1397). The successors of Muhammad Shah II, who were also hostile to Rayas of Vijayanagar, waged wars against them. But they were defeated by the Vijayanagar armies. During the reign of Muhammad III (A.D.1463-82), the Bahmanis, for the first time, extended their empire from sea to sea and thereby got into their possession a large part of the Telugu area, namely, the area north of the Krishna up to the coast and the present Guntur district. By the end of the 15th century the Bahmani rule was plagued with faction fights and there came into existence the five Shahi kingdoms, the Nizamshahis of Ahmadnagar, the Adilshahis of Bijapur, the Imadshahis of Berar, the Qutbshahis of Golconda and the Baridshahis of Bidar. Thereafter, the rule of the Bahmani dynasty came to an end in A.D.1527. Of the five Shahi dynasties, it was the Qutbshahi dynasty that played a significant and notable role in the history of Andhras.</p>
									    </div>
									    <div role="tabpanel" class="tab-pane active" id="kakatiyas">
											<img src="images/kakatiya-banner.png" style="margin-bottom:10px;" /><p>The 12th and the 13th centuries saw the emergence of the Kakatiyas. They were at first the feudatories of the Western Chalukyas of Kalyana, ruling over a small territory near Warangal. A ruler of this dynasty, Prola II, who ruled from A.D.1110 to 1158, extended his sway to the south and declared his independence. His successor Rudra (A.D.1158–1195) pushed the kingdom to the north up to the Godavari delta. He built a fort at Warangal to serve as a second capital and faced the invasions of the Yadavas of Devagiri. The next ruler Mahadeva extended the kingdom to the coastal area. In A.D.1199, Ganapati succeeded him. He was the greatest of the Kakatiyas and the first after the Satavahanas to bring the entire Telugu area under one rule. He put an end to the rule of the Velanati Cholas in A.D.1210. He forced the Telugu Cholas of Vikramasimhapura to accept his suzerainty. He established order in his vast dominion and encouraged trade.</p>
											<p>As Ganapati Deva had no sons, his daughter Rudramba succeeded him in A.D.1262 and carried on the administration. Some generals, who did not like to be ruled by her, rebelled. She could, however, suppress the internal rebellions and external invasions with the help of loyal subordinates. The Cholas and the Yadavas suffered such set backs at her hands that they did not think of troubling her for the rest of her rule.</p>
											<p>Prataparudra succeeded his grandmother Rudramba in A.D.1295 and ruled till A.D.1323. He pushed the western border of his kingdom up to Raichur. He introduced many administrative reforms. He divided the kingdom into 75 Nayakships, which was later adopted and developed by the Rayas of Vijayanagara. In his time the territory constituting Andhra Pradesh had the first experience of a Muslim invasion. In A.D.1303, the Delhi Sultan Ala-ud-din Khilji sent an army to plunder the kingdom. But Prataparudra defeated them at Upparapalli in Karimnagar district. In A.D. 1310, when another army under Malik Kafur invaded Warangal, Prataparudra yielded and agreed to pay a large tribute. In A.D.1318, when Ala-ud-din Khilji died, Prataparudra withheld the tribute. It provoked another invasion of the Muslims. In A.D.1321, Ghiaz-ud-din Tughlaq sent a large army under Ulugh Khan to conquer the Telugu country then called Tilling. He laid siege to Warangal, but owing to internal dissensions he called off the siege and returned to Delhi. Within a short period, he came back with a much bigger army. In spite of unpreparedness, Prataparudra fought bravely. For want of supplies, he surrendered to the enemy who sent him to Delhi as a prisoner, and he died on the way. Thus ended the Kakatiya rule, opening the gates of the Telugu land to anarchy and confusion yielding place to an alien ruler.</p>
											<p>The Kakatiya period was rightly called the brightest period of the Telugu history. The entire Telugu speaking area was under the kings who spoke Telugu and encouraged Telugu. They established order throughout the strife torn land and the forts built by them played a dominant role in the defence of the realm. Anumakonda and Gandikota among the `giridurgas’, Kandur and Narayanavanam among the `vanadurgas’, Divi and Kolanu among the `jaladurgas’, and Warangal and Dharanikota among the `sthaladurgas’ were reckoned as the most famous strongholds in the Kakatiya period. The administration of the kingdom was organized with accent on the military.</p>
											<p>Though Saivism continued to be the religion of the masses, intellectuals favoured revival of Vedic rituals. They sought to reconcile the Vaishnavites and the Saivites through the worship of Harihara. Arts and literature found patrons in the Kakatiyas and their feudatories. Tikkana Somayaji, who adorned the court of the Telugu Chola ruler Manumasiddhi II, wrote the last 15 cantos of the Mahabharata which was lying unfinished. Sanskrit, which could not find a place in the Muslim-occupied north, received encouragement at the hands of the Kakatiyas. Prataparudra was himself a writer and he encouraged other literature.</p>
											<p>The Kakatiya dynasty expressed itself best through religious art. Kakatiya art preserved the balance between architecture and sculpture, that is, while valuing sculpture, it laid emphasis on architecture where due. The Kakatiya temples, dedicated mostly to Siva, reveal in their construction a happy blending of the styles of North India and South India which influenced the political life of the Deccan.</p>
											<p>The most important of these temples are those at Palampeta, Hanamkonda and the incomplete one in the Warangal fort. The temple at Palampeta, described as the `brightest gem in the galaxy of Medieval Deccan temple architecture’, was constructed by Recherla Rudra, a general of Kakatiya Ganapati, in S.1135 (A.D.1213). The figures in the temple are of a heterogeneous character comprising gods, goddesses, warriors, acrobats,musicians, mithuna pairs in abnormal attitudes and dancing girls. The sculptures, especially of the dancing girls, possess the suggestion of movement and pulsating life. A striking peculiarity of this temple is the figure-brackets which spring from the shoulders of the outer pillars of the temple. The figure-brackets are mere ornaments and represent the intermediate stage between their earlier analogues at Sanchi and the later examples at Vijayanagara.</p>
											<p>The Thousand-Pillared Temple at Hanamkonda, built by the Kakatiya king Rudra in A.D.1162, is similar in style and workmanship to the Ramappa temple. This temple, dedicated to Siva, Vishnu and Surya, is star-shaped. The Nandi pavilion, in which a huge granite bull still stands, the beautiful entrances to the shrine, the pierced slabs used for screens and windows, and the elegant open work by which the bracket-shafts are attached to the pillars are the other most interesting features of this temple.</p>
											<p>The temple in the Warangal fort, believed to have been built by Kakatiya Ganapati, was constructed making use of large slabs. The floor of the shrine is beautifully polished and shines like a mirror. An interesting feature of this temple is the four gateways called `Kirti Stambhas’ which face the four cardinal points of the compass. In their design the gateways are reminiscent of the `toranas’ of the Great Stupa at Sanchi. The architecture and sculpture of these temples are thus conventional to a degree but no one can deny their magnificence nor can any one fail to see the rich imagination, patient industry and skilful workmanship of the builders of the temples of the Kakatiya period.</p>
											<p>After the fall of Kakatiyas, uncertainty prevailed over the region. Several small kingdoms came into existence, Musunuri Nayakas occupied Warangal from Muslims and ruled between A.D.1325–1368. The fall of Kakatiya kingdom and its annexation to the Tughlak empire made the Hindu feudatories to unite themselves to liberate the Andhra country from alien rulers. A movement was started at Rekapalli on the bank of the Godavari under the leadership of Musunuri Prolaya Nayaka and his cousin Kapaya Nayaka and succeeded in driving away the Muslims from the Telugu country in A.D.1328. Kapaya Nayaka became the ruler in A.D.1333, after the demise of Prolaya Nayaka, and Warangal was once again the capital of the Telugu Country. They were dethroned by Recherla Chiefs and ruled the entire Telangana from A.D.1325 to 1474 with Rachakonda as their capital. The coastal area was ruled by the Reddis of Kondavidu between A.D.1325 and 1424. Addanki was their first capital which was later shifted to Kondavidu. There was also another branch of Reddis at Rajahmundry. In due course, Reddi kingdom disappeared in the hands of Vijayanagar kings, and Gajapatis of Orissa in the frequent battles with each other. The Gajapatis of Orissa with Cuttack as their capital extended their territory far into Telugu land by conquering the Reddis of Rajahmundry in A.D.1448. They also occupied some parts of the Bahmani kingdom. But, Vijayanagar king, Krishnadevaraya, occupied the entire Telugu region that was in the possession of Gajapatis.</p>
											<p>The Reddis and Recherla chiefs were the patrons of learning. The renowned poet Srinatha, and one of the three great poets who wrote the Mahabharata in Telugu, Errapraggada lived in that age.</p>
										</div>
									  </div>
								</div>
							</div>
							<div id="ancient-data" style="float:left;display:block" class="data-tab">
								<h3 class="obj_edb_h">Ancient Period</h3>
								<div class="dis_desc_div">
								  	<!-- Nav tabs -->
									  <ul class="nav nav-tabs" role="tablist" id="mytabs" style="font-weight:900;font-family:arial;">
										    <li role="presentation" class="active"><a href="#sat_home" aria-controls="sat_home" role="tab" data-toggle="tab">Satavahanas</a></li>
										    <li role="presentation"><a href="#east_chal" aria-controls="east_chal" role="tab" data-toggle="tab">Eastern Chalukyas</a></li>
									  </ul>
									  <!-- Tab panes -->
									  <div class="tab-content">
									    <div role="tabpanel" class="tab-pane active" id="sat_home">
									    	<img src="images/satvahana.png" style="margin-bottom:10px;" />
									    	<p>After the fall of the Mauryan Empire, the history of the Andhras, as a continuous account of political and cultural events, commences with the rise of the Satavahanas as a political power. According to Matsya Purana there were 29 rulers of this dynasty. They ruled over the Andhradesa including Deccan for about 400 years from the 2nd century B.C. to beyond the 2nd century A.D. Satavahanas were also called Salivahanas and Satakarnis. In the 3rd century B.C., Simukha, the founder of the Satavahana dynasty, unified the various Andhra principalities into one kingdom and became its ruler (271 B.C. – 248 B.C.). Dharanikota near Amaravati in Guntur district was the first capital of Simukha, but later he shifted his capital to Pratishtana (Paithan in Aurangabad district).</p>
									    	<p>Satakarni II, the sixth ruler of the dynasty (184 B.C.) was an able ruler who extended his kingdom to the west by conquering Malwa. According to inscriptional evidence, he extended the boundaries of his realm far into central India across the Vindhyas, perhaps up to the river Ganges. He ruled for a long period of 56 years. The long reign of Satakarni II was followed successively by eight rulers of whom none can be credited with any notable achievement. It was the accession of Pulumavi I that brought renewed strength and glory to their kingdom. He struck down the last of the Kanva rulers, Susarman, in 28 B.C. and occupied Magadha. The Satavahanas thus assumed an all-India significance as imperial rulers in succession to the Nandas, Mauryas, Sungas and Kanvas. The kings, who succeeded him, appear to have been driven, by the Sakas, out of Maharashtra back to their home land in Andhra. The only silver lining in that murky atmosphere was the excellent literary work, Gathasaptasati, of Hala, the 17th Satavahana king.</p>
									    	<p>It was during the time of Gautamiputra Satakarni, the 23rd ruler of this dynasty, who ascended the throne in A.D.62, their kingdom made a sharp recovery of the lost territories from the western Kshatrapas. A Nasik record describes him as the restorer of the glory of the Satavahanas. His kingdom included the territories of Asika, Assaka, Mulaka, Saurashtra, Kukura, Aparanta, Anupa, Vidarbha, Akara and Avanti, and the mountainous regions of Vindhya, Achavata, Pariyatra, Sahya, Kanhagiri, Siritana, Malaya, Mahendra, Sata and Chakora, and extended as far as seas on either side. Though some of the mountains mentioned in the inscription cannot be identified at present, it is clear that Gautamiputra’s kingdom covered not only the peninsular India, but also the southern parts of Gujarat, Rajasthan, Madhya Pradesh and Orissa. He passed away in A.D.86, and his successors witnessed the dismemberment of their far flung empire.</p>											
											<p>Pulumavi II succeeded Gautamiputra and ruled for 28 years. In spite of serious efforts put forth by him to safeguard the frontiers of his vast empire, the closing years of his reign witnessed the decline of the Satavahana authority. Yajnasri Satakarni’s accession to the throne in A.D.128 brought matters to a crisis. He came into conflict with the Saka Satrap, Rudradamana, and suffered defeat, and consequently, lost all his western possessions. However, he continued to rule till A.D.157 over a truncated dominion. His ship-marked coins suggest extensive maritime trade during his days. With him passed away the age of the great Satavahanas and by the end of the 2nd century A.D., the rule of the Satavahanas was a matter of past history.There were different opinions about their capital. Some argue that Srikakulam in Krishna district was their capital. Evidences show that Dharanikota in Guntur district, Dharmapuri in Karimnagar district and Paithan in Aurangabad district of Maharashtra State were used as capitals at various periods.</p>
											<p>The Deccan, during this period, was an emporium of inland and maritime trade. The region between the rivers of Godavari and Krishna was full of ports and throbbing with activity. There was plentiful currency to facilitate trade and the Telugus entered upon a period of great industrial, commercial and maritime activity.</p>
											<p>Buddhism flourished throughout the period and at the same time the rulers were devoted to Vedic ritualism. They constructed several Buddhist Stupas, Chaityas and Viharas. The Stupa at Amaravati is known for its architecture par excellence. Satavahanas were not only the able rulers but were also lovers of literacy and architecture. The 17th ruler of this dynasty, Hala was himself a great poet and his Gathasaptasati in Prakrit was well received by all. Gunadhya, the minister of Hala was the author of “Brihatkadha”.</p>
											<p>The decline and fall of the Satavahana empire left the Andhra country in a political chaos. Local rulers as well as invaders tried to carve out small kingdoms for themselves and to establish dynasties. During the period from A.D.180 to A.D.624, Ikshvakus, Brihatphalayanas, Salankayanas, Vishnukundins, Vakatakas, Pallavas, Anandagotras, Kalingas and others ruled over the Andhra area with their small kingdoms. Such instability continued to prevail until the rise of the Eastern Chalukyas.</p>
											<p>Important among them were the Ikshvakus. The Puranas mention them as the Sriparvatiyas. The present Nagarjunakonda was then known as Sriparvata and Vijayapuri, near it, was their capital. They patronised Buddhism, though they followed the vedic ritualism. After the Ikshvakus, a part of the Andhra region north of the river Krishna was ruled over by Jayavarma of Brihatphalayana gotra. Salankayanas ruled over a part of the East Coast with Vengi as their capital. Next to rule were the Vishnukundins who occupied the territory between the Krishna and Godavari. It is believed that their capital was Indrapura, which can be identified with the modern Indrapalagutta in Ramannapet taluk of Nalgonda district. By A.D.514, the land north of the Godavari, known, as Kalinga became independent. The area south of the Krishna fell to the share of the Pallavas, who ruled from Kanchi. The Vakatakas occupied the present Telangana. This state of affairs continued with few changes up to the beginning of the 7th century A.D.</p>
											<p>Buddhism continued, though in a decadent form during this period. Mahayanism gave wide currency to the belief that the installation and worship of Buddha and Bodhisattva images, and the erection of stupas conferred great merit. The Madhyamika School of thought in Mahayana was propounded by Nagarjuna. Sanskrit came to occupy the place of Prakrit as the language of inscriptions. The Vishnukundins extended patronage to architecture and sculpture. The cave temples at Mogalrajapuram and Undavalli near Vijayawada bear testimony to their artistic taste.</p>
											<p>The period of Andhra history, between A.D.624 and A.D.1323, spanning over seven centuries, is significant for the sea-change it brought in all spheres of the human activity; social, religious, linguistic and literary. During this period, Desi, the indigenous Telugu language, emerged as a literary medium overthrowing the domination of Prakrit and Sanskrit. As a result, Andhradesa achieved an identity and a distinction of its own as an important constituent of Indian Cultural set-up.</p>
											<p>This change was brought by strong historical forces, namely, the Eastern and Western Chalukyas, the Rashtrakutas and the early Cholas. Kakatiyas came to power during the later half of this period and extended their rule over the entire Telugu land with the exception of a small land in the northeast. Arts, crafts, language and literature flourished under their benevolent patronage.</p>
									    </div>
									    <div role="tabpanel" class="tab-pane" id="east_chal">
									    	<img src="images/east_chal.png" style="margin-bottom:10px;" />
									    	<p>This dynasty was a branch of the Chalukyas of Badami. Pulakesin II, the renowned ruler of Chalukyas conquered Vengi (near Eluru) in A.D.624 and installed his brother Kubja Vishnuvardhana (A.D.624 – 641) as its ruler. His dynasty, known as the Eastern Chalukyas, ruled for nearly four centuries. Vishnuvardhana extended his dominions up to Srikakulam in the north and Nellore in the south. He was succeeded by his son Jayasimha I (A.D.641 – 673). Between A.D.641 and A.D.705 some kings, except Jayasimha I and Mangi Yuvaraju, (A.D.681 – 705) ruled for short duration. Then followed a period of unrest characterised by family feuds and weak rulers. In the meanwhile, the Rashtrakutas of Malkhed ousted Chalukyas of Badami. The weak rulers of Vengi had to meet the challenge of the Rashtrakutas, who overran their kingdom more than once. There was no Eastern Chalukya ruler who could check them until Gunaga Vijayaditya came to power in A.D.848. He also failed to face the Rashtrakutas, and the then Rashtrakuta ruler Amoghavarsha treated him as his ally. After Amoghavarsha’s death, Vijayaditya proclaimed independence. He started on a campaign to the south and achieved some notable success. He ruled for 44 years and passed away in A.D.892. He was succeeded by his brother’s son, Chalukya Bhima (A.D.892 – 921). Rashtrakutas again attacked the Vengi kingdom during this period but were repulsed effectively by Vengi and came to an understanding with Rashtrakutas and treated them as his allies. They were able to maintain their independence till the Chalukyas of Kalyani in A.D.973 overthrew the Rashtrakutas.</p>
											<p>Contemporaries to the Eastern Chalukyas were the Eastern Gangas in the northeast and the Pallavas in the south.</p>
											<p>The Eastern Gangas appeared in the political scene towards the close of the 5th century A.D. as rulers of Orissa. The first known ruler of this dynasty was Indravarma (6th century A.D.). He had his capital at Dantapura, but later shifted to Kalinganagara (Mukhalingam in Srikakulam district). The Gangas ruled with their capital in Andhra for nearly five centuries, until it was shifted to Cuttack at the end of the 11th century A.D. The early Eastern Gangas were ruling a small territory in Srikakulam district in the Telugu land.</p>
											<p>The Pallava rule, which was earlier eclipsed by the onslaught of the Kalabhras, was revived during the last quarter of the 6th century A.D. by Simhavishnu, a scion of the Pallava ruling family and was firmly established at Kanchi. This new dynasty of the Pallavas is known as the “Greater Pallavas” or the “Later Pallavas dynasty”. The earliest Pallava ruler was Virakurcha and the most famous of them was Trilochana Pallava. An inscription noticed at Manchikallu, near Macherla in Guntur district is the earliest epigraphical record of the Pallava family. The entire territory south of the Krishna held sway over by Mahendravarman (A.D.600 – 630), son of Simhavishnu of the Later Pallavas. From the 7th century A.D. onwards, the Pallavas has to face the expanding Chalukya power. The conflict continued for a long time with varying degrees of success. But the extermination of the Chalukyas of Badami by the Rashtrakutas gave respite to the Pallavas to consolidate their power. The Pallavas continued till the end of the 9th century A.D., when a new power, the Cholas of Tanjore, displaced them and occupied Kanchipuram.</p>
											<p>Among the minor Chalukya families that ruled parts of Andhra, those of Vemulavada (presently in Karimnagar district) are the most important. Their rule extended over the present-day Karimnagar and Nizamabad districts. As subordinate rulers loyal to the Rashtrakutas, they ruled with semi-independent status for about two centuries (A.D.755 – 968). The rule of the Vemulavada Chalukyas coincided with that of the Rashtrakutas. One peculiarity with this family is that it traced its descent from the Sun, while many other Chalukya families considered themselves as of lunar descent.</p>
											<p>The Cholas attained the status of a major power in south India under the valiant leadership of Rajaraja I (A.D.985 – 1016). Two rebel princes of the Eastern Chalukya family sought refuge in his court. Rajaraja I utilised the claim of one of these princes, Saktivarma, as a pretext for intervening in the affairs of Vengi. He was successful in seating Saktivarma on the throne of Vengi and, from that time, the Eastern Chalukyas played a role subservient to the Cholas. But the Telugu country became a cockpit of battles between the Cholas and the Chalukyas of Kalyani who supported a rival claimant to the throne of the Vengi each time. An Eastern Chalukya Prince, Rajendra, occupied the Chola throne in A.D. 1070 under the name of Kulottunga I. Nevertheless, Vijayaditya VII, a cousin of Rajaraja, continued to rule over Vengi till his death in A.D.1076 when the Eastern Chalukya dynasty came to an end.</p>
											<p>The Eastern Chalukyas occupied a prominent place in the history of Andhra Pradesh. Though they were originally of Kannada stock, they patronised Telugu and gave fillip to it. Since the time of Gunaga Vijayaditya, inscriptions show Telugu stanzas, culminating in the production of literary works. Later on, in the 11th century under the patronage of the then Eastern Chalukya king, Rajaraja, the great epic, `Mahabharata’ was translated partly by his court poet, Nannaya. At the time of Chalukya conquest three religions, Buddhism, Jainism and Hinduism, were prevalent. Of these, Buddhism was on the wane. The Buddhist Aramas were transformed into pilgrim centres by the resurgent Hinduism. Jainism lingered on, and an appreciable section of the people paid homage to the Tirthankaras. Hinduism enjoyed the status of a national religion throughout the kingdom. Temples were built which played an important role in the religious life of the people and the temples of Siva at Chalukya Bhimavaram and Draksharama are among them.</p>
											<p>The 12th century A.D. was a period of chaos. The Western Chalukyas of Kalyani, who were at first successful in overthrowing the Eastern Chalukyas, were driven out after 17 years by the Imperial Cholas with the help of local chiefs. But the latter did not rule directly and thought it prudent to leave the kingdom to the feudatories themselves in lieu of nominal allegiance. The Velanati Cholas of Tsandavolu (Guntur district) were the foremost among the feudatories. Between A.D.1135 and 1206, several minor dynasties ruled over parts of Andhra Pradesh recognising the authority of the Velanati Cholas nominally. The chiefs of these dynasties fought amongst themselves, and one such struggle among them was the `Palnati Yuddham’.</p>
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