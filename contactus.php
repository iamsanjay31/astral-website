<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>contact us</title>
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

	<!-- style -->
	<style>
		.form{
		margin-top: 2rem;
		margin-bottom: 2rem;
		margin-right: 2rem;
	}

	.scrollable-menu {
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
}
	</style>
	
	<!-- style ends -->

</head>

<body>
		<?php
		include('header.php');
		?>
	<br><br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div class="container form-control bg-primary">
					<h2 class="text-white">Contact Us</h2>
					<h5 class="text-white">To contact us please fill out the form below.</h5>
					<form class="form" action='' method='POST'>
						<input type="text" name='name' class="form-control footer-input margin-b-20" placeholder="Name" required> <br>
						<input type="email" name='email' class="form-control footer-input margin-b-20" placeholder="Email" required> <br>
						<input type="text" name='phone' class="form-control footer-input margin-b-20" placeholder="Phone" required> <br>
						<textarea name='message' class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
						<br>
						<label  class="text-white" for="message">Attache CV: &nbsp;&nbsp;</label><input type="file" name="attachment" value="" id="contact_attachment"
						 class="attachment" /><br>
						<br>
						<button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase">Submit</button> <br>
					</form>
					<br>
				</div>
			</div>
			<div class="col-6">
			<h4>Contact us:</h4>
				<ul>
					<li><strong>Astral Computers Pvt. Ltd.</strong><br>
						<small><i>(An ISO 9001:2015 Certified IT Company)</i></small></li>
					<li>New Baneshwor, Opposite of BICC West Gate No.2,
						GPO Box No. 1213,<br />
						Kathmandu, Nepal</li>
					<li>Phone: 977-1-4483088, 4494072, 9802026676 </li>
					<li>Email: info&#64astralcomputer.com.np</li>
					<li>Skype: <a href="#" title="Skype us">Astral-computer</a></li>
				</ul>
				<br>
				<h3>Find us on Map</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.9120067569547!2d85.33371312398994!3d27.689114387135273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199a06c2eaf9%3A0xc5670a9173e161de!2z4KSo4KSv4KS-4KSBIOCkrOCkvuCkqOClh-CktuCljeCkteCksCwg4KSV4KS-4KSg4KSu4KS-4KSh4KWM4KSBIDQ0NjAw!5e0!3m2!1sne!2snp!4v1549292405435" width="600" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<br>
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
	<script>
		let modalId = $('#image-gallery');

		$(document)
			.ready(function () {

				loadGallery(true, 'a.thumbnail');

				//This function disables buttons when needed
				function disableButtons(counter_max, counter_current) {
					$('#show-previous-image, #show-next-image')
						.show();
					if (counter_max === counter_current) {
						$('#show-next-image')
							.hide();
					} else if (counter_current === 1) {
						$('#show-previous-image')
							.hide();
					}
				}

				/**
				 *
				 * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
				 * @param setClickAttr  Sets the attribute for the click handler.
				 */

				function loadGallery(setIDs, setClickAttr) {
					let current_image,
						selector,
						counter = 0;

					$('#show-next-image, #show-previous-image')
						.click(function () {
							if ($(this)
								.attr('id') === 'show-previous-image') {
								current_image--;
							} else {
								current_image++;
							}

							selector = $('[data-image-id="' + current_image + '"]');
							updateGallery(selector);
						});

					function updateGallery(selector) {
						let $sel = selector;
						current_image = $sel.data('image-id');
						$('#image-gallery-title')
							.text($sel.data('title'));
						$('#image-gallery-image')
							.attr('src', $sel.data('image'));
						disableButtons(counter, $sel.data('image-id'));
					}

					if (setIDs == true) {
						$('[data-image-id]')
							.each(function () {
								counter++;
								$(this)
									.attr('data-image-id', counter);
							});
					}
					$(setClickAttr)
						.on('click', function () {
							updateGallery($(this));
						});
				}
			});

		// build key actions
		$(document)
			.keydown(function (e) {
				switch (e.which) {
					case 37: // left
						if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
							$('#show-previous-image')
								.click();
						}
						break;

					case 39: // right
						if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
							$('#show-next-image')
								.click();
						}
						break;

					default:
						return; // exit this handler for other keys
				}
				e.preventDefault(); // prevent the default action (scroll / move caret)
			});

	</script>
	<!-- //Js files -->
</body>

</html>