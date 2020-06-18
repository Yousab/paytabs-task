<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Paytabs - Code Challenge</title>
	<meta name="description" content="Paytabs Code Challenge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.png" />

	<!-- STYLES -->
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome CSS-->
	<link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
	<!-- Google fonts - Roboto + Roboto Slab-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
	<!-- owl carousel-->
	<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.theme.default.css">
	<!-- animate.css-->
	<link rel="stylesheet" href="/vendor/animate.css/animate.css">
	<!-- theme stylesheet-->
	<link rel="stylesheet" href="/css/style.sea.css" id="theme-stylesheet">
	<!-- Custom stylesheet - for your changes-->
	<link rel="stylesheet" href="/css/custom.css">
</head>

<body>

	<!-- HEADER section -->
	<?= $this->include('header') ?>

	<!-- CONTENT -->

	<?= $this->renderSection('content') ?>



	<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
	<?= $this->include('footer') ?>


	<!-- SCRIPTS -->
	<!-- JavaScript files-->
	<script src="/vendor/jquery/jquery.min.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/vendor/jquery.cookie/jquery.cookie.js"> </script>
	<script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="/vendor/jquery.counterup/jquery.counterup.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
	<script src="/js/front.js"></script>

	<script>
		var BASE_URL = "<?php echo base_url() . '/'; ?>";
	</script>
	<script src="/js/main.js"></script>
</body>

</html>