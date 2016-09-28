<!DOCTYPE html>
<html lang="en-CA">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="care, seniors, caring, psw, personal, support, worker, Mia, Lee, Daigle, Lee-Daigle,
									cleaning, nursing, registered, activities, daily, living, daily-living,
									companionship, find, Kingston, ygk, YGK, respite">
	<meta name="description" content="The website of Mia's Care Services, a home care service in Kingston,
									Ontario, Canada">
	<meta name="author" content="Rob Cardy">
	<title>Mia's Care Services - Providing Safe, Empathetic Care</title>
	<link rel="icon" type="image/jpeg" href="../public/images/logo.png">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="../public/css/bootstrap.min.css">
	<!--Fonts-->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu" type="text/css">
	<!--Stylesheets-->
	<link rel="stylesheet" href="../public/css/style-general.css" type="text/css">
	<link rel="stylesheet" href="../public/css/style-nav.css" type="text/css">
	<link rel="stylesheet" href="../public/css/style-main.css" type="text/css">
	<!--Bootstrap JS-->
	<script src="../public/js/jquery.min.js"></script>
	<script src="../public/js/bootstrap.min.js"></script>
	<!--JavaScript-->
	<!--Fix Dropdown-->
	<script>
		$(document).ready(function () {
			$('.dropdown-toggle').dropdown();
		});
	</script>
	<!--Google Analytics-->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-77724706-1', 'auto');
		ga('send', 'pageview');
	</script>
	<!--Auto-close navbar on click in mobile view-->
	<script>
		$(document).on('click','.navbar-collapse.in',function(e) {
			if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
				$(this).collapse('hide');
			}
		});
	</script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid" id="drop">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" 
				data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>				
				</button>
				<a class="navbar-brand hidden-sm hidden-xs" href="../public/">MIA'S CARE SERVICES</a>
				<a class="navbar-brand visible-xs" href="../">MIA'S CARE SERVICES</a>
				<a class="navbar-brand visible-sm hidden-xs" id="head-logo" href="../public/">
					<img width="35px;" alt="Mia's Care Services Logo" src="../public/images/logo.png">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
						   aria-haspopup="true" aria-expanded="false">ABOUT<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class=""scroll" href="../public/index.php#about">About Mia</a></li>
							<li><a href="../public/docs/Mia-Resume.pdf">Resume</a></li>
						</ul>
					</li>
					<li><a href="../public/index.php#services">SERVICES</a></li>
					<li><a href="../public/index.php#fees">FEES</a></li>
					<li><a href="../public/testimonials.php">TESTIMONIALS</a></li>
					<li><a id="last" href="../public/contact.php">CONTACT</a></li>
				</ul>
			</div>
		</div>
	</nav>
	