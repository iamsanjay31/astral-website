<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Career</title>
	<link rel="icon" type="image/ico" href="images/title-logo1.jpg" />
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Medic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<style>
			.scrollable-menu {
			height: auto;
			max-height: 200px;
			overflow-x: hidden;
		}
			</style>
	<style>
		.div1 {
			  width: 300px;
			  height: 50px;
			  color: white;
			  text-align: center;
			  background: rgb(93, 146, 245);
				margin-left: auto;
			  margin-right: auto;
			 			}
			.div2 {
			
			  height: 20px;
			  color: white;
			  text-align: center;
			  background: rgb(93, 146, 245);
			  align-items: center;
			  
						 }
			.div3 {
			
		max-width: auto;
			color: white;
			text-align: center;
			background: rgb(93, 146, 245);
			/* align-items: center; */
					   }
		
			</style>
</head>

<body >
		<?php
		include('header.php');
		?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col">
					<p><h2>Astral's Benefits</h2>
						<strong>We like to take care of our team here at Astral. Here&rsquo;s a small list of some of the benefits available to our employees. </strong>
						
						<ul>
							<li>Competitive salaries</li>
							<li>Free breakfast essentials (cereal, milk, yogurt, pancakes, coffee etc.)</li>
							<li>Free snacks, pop fridge, beer fridge</li>
							<li>Employee Assistance Program (EAP)</li>
							<li>Paid Volunteer/Charity Days</li>
							<li>On-site games (ping pong, football)</li>
							<li>On-site showers and towel service</li>
							<li>Casual office with no dress code</li>
							<li>Choice of tools and computer</li>
							<br>
							<h2>VACANCIES:</h2>
						</ul>
			</div>
		</div>
	</div>
                      
	<br><br><br><br>

	<div class="container col-sm-5 sm-margin-b-30 ">
			<h2 class="color-white">Apply Now</h2>
			<h5>Contact us with a CV attachment and we will respond you shortly.</h5>
		<form action = '' method = 'POST'>
			<input type="text" name = 'name' class="form-control footer-input margin-b-20" placeholder="Name" required> <br>
			<input type="email" name = 'email' class="form-control footer-input margin-b-20" placeholder="Email" required> <br>
			<input type="text" name = 'phone' class="form-control footer-input margin-b-20" placeholder="Phone" required> <br>
			<textarea name = 'message' class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea> <br>
			<label for="message">Attache CV:</label><input type="file" name="attachment" value="" id="contact_attachment" class="attachment" /><br>
			<br>
			<button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button> <br>
		</form> 
<br>
		</div>
	

		<?php
		include('footer.php');
		?>

	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<script>

		$(document).ready(function () {

			$('.navbar .dropdown-item').on('click', function (e) {
				var $el = $(this).children('.dropdown-toggle');
				var $parent = $el.offsetParent(".dropdown-menu");
				$(this).parent("li").toggleClass('open');

				if (!$parent.parent().hasClass('navbar-nav')) {
					if ($parent.hasClass('show')) {
						$parent.removeClass('show');
						$el.next().removeClass('show');
						$el.next().css({ "top": -999, "left": -999 });
					} else {
						$parent.parent().find('.show').removeClass('show');
						$parent.addClass('show');
						$el.next().addClass('show');
						$el.next().css({ "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 });
					}
					e.preventDefault();
					e.stopPropagation();
				}
			});

			$('.navbar .dropdown').on('hidden.bs.dropdown', function () {
				$(this).find('li.dropdown').removeClass('show open');
				$(this).find('ul.dropdown-menu').removeClass('show open');
			});
		});
	</script>
	<!-- //Js files -->
</body>

</html>