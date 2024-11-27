<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Yamifood Restaurant - Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
						<li class="nav-item"><a class="nav-link" href="stuff.php">Stuff</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">

	<?php
		error_reporting(1);
		include('connection.php');
		$data = "SELECT * FROM slider ORDER by id DESC";
		$val = $con->query($data);
		if($val->num_rows > 0) {
			while(list($id, $title, $description, $image) = mysqli_fetch_array($val)) {

		echo "<li class='text-center'>
				<img src='admin/slider/$image' alt='$title'>
				<div class='container'>
					<div class='row'>
						<div class='col-md-12'>
							<h1 class='m-b-20'><strong> $title </strong></h1>
							<p class='m-b-40'> $description </p>
							<p><a class='btn btn-lg btn-circle btn-outline-new-white' href='reservation.php'>Reservation</a></p>
						</div>
					</div>
				</div>
			</li>";
			}
		} else {
		echo "<h1 style='text-align: center;'><b> No data available</b></h1>"; 
		}
	?>

		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->

	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/about-img.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Yamifood Restaurant</span></h1>
						<h4>Our Story</h4>
						<p>At YamiFood, we blend passion and flavor to create unforgettable dining experiences. Every dish tells a story of love, tradition, and quality. Our journey began with a vision to bring people together over authentic, handcrafted meals. </p>
						<p>From the freshest ingredients to masterful techniques, we strive to deliver excellence in every bite. Join us for a culinary adventure that satisfies your cravings and warms your heart. </p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->

	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->

	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Special Menu</h2>
						<p>Delight in our carefully curated dishes, crafted to elevate your dining experience.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							<button data-filter=".drinks">Drinks</button>
							<button data-filter=".lunch">Lunch</button>
							<button data-filter=".dinner">Dinner</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">

<?php
		error_reporting(1);
		include('connection.php');
		$data = "SELECT * FROM drinks ORDER by id DESC LIMIT 3";
		$val = $con->query($data);
		if($val->num_rows > 0) {
			while(list($id, $name, $description, $price, $image) = mysqli_fetch_array($val)) {

		echo "<a href='reservation.php'><div class='col-lg-4 col-md-6 special-grid drinks'>
					<div class='gallery-single fix'>
						<img src='admin/drink/$image' class='img-fluid' alt='$name'>
						<div class='why-text'>
							<h4> $name </h4>
							<p> $description </p>
							<h5> $price MMK</h5>
						</div>
					</div>
				</div></a>";
			}
		} else {
		echo "<h1 style='text-align: center;'><b> No data available</b></h1>";
		}
?>

<?php
		error_reporting(1);
		include('connection.php');
		$data = "SELECT * FROM lunch ORDER by id DESC LIMIT 3";
		$val = $con->query($data);
		if($val->num_rows > 0) {
			while(list($id, $name, $description, $price, $image) = mysqli_fetch_array($val)) {

		echo "<a href='reservation.php'><div class='col-lg-4 col-md-6 special-grid lunch'>
					<div class='gallery-single fix'>
						<img src='admin/lunch/$image' class='img-fluid' alt='$name'>
						<div class='why-text'>
							<h4> $name </h4>
							<p> $description </p>
							<h5> $price MMK </h5>
						</div>
					</div>
				</div></a>";
			}
		} else {
		echo "<h1 style='text-align: center;'><b> No data available</b></h1>";
		}
?>

<?php
		error_reporting(1);
		include('connection.php');
		$data = "SELECT * FROM dinner ORDER by id DESC LIMIT 3";
		$val = $con->query($data);
		if($val->num_rows > 0) {
			while(list($id, $name, $description, $price, $image) = mysqli_fetch_array($val)) {

		echo "<a href='reservation.php'><div class='col-lg-4 col-md-6 special-grid dinner'>
					<div class='gallery-single fix'>
						<img src='admin/dinner/$image' class='img-fluid' alt='Image'>
						<div class='why-text'>
							<h4> $name </h4>
							<p> $description </p>
							<h5> $price </h5>
						</div>
					</div>
				</div></a>";
			}
		} else {
		echo "<h1 style='text-align: center;'><b> No data available</b></h1>";
		}
?>

			</div>
		</div>
	</div>
	<!-- End Menu -->

	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Our Culinary Journey</h2>
						<p>Explore our vibrant selection of dishes that showcase the essence of Yamifood. 
							Each image tells a story of flavor, creativity, and passion for culinary art. 
							From our handcrafted appetizers to delectable desserts, take a visual journey through the heart of our restaurant. 
							We invite you to savor the experience of dining with us, one dish at a time.</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">

				<?php
error_reporting(1);
include('connection.php');

$tables = [
    'drinks' => 'drink',
    'lunch' => 'lunch',
    'dinner' => 'dinner'
];

$items = [];

foreach ($tables as $table => $folder) {
    $data = "SELECT * FROM $table ORDER BY id DESC LIMIT 2";
    $val = $con->query($data);

    if (!$val) {
        die("Query failed for $table: " . $con->error);
    }

    if ($val->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($val)) {
            $row['folder'] = $folder;
            $items[] = $row;
        }
    } else {
        echo "<h1 style='text-align: center;'><b>No data available for $table</b></h1>";
    }
}

if (!empty($items)) {
    foreach ($items as $item) {
        $id = $item['id'];
        $name = $item['name'];
        $description = $item['description'];
        $price = $item['price'];
        $image = $item['img'];
        $folder = $item['folder'];

        $largeImagePath = "admin/{$folder}/$image";

        echo "<div class='col-sm-12 col-md-4 col-lg-4'>
                <a class='lightbox' href='$largeImagePath'>
                    <img class='img-fluid' src='$largeImagePath' alt='$name'>
                </a>
            </div>";
    }
} else {
    echo "<h1 style='text-align:center;'><b>No data available</b></h1>";
}
?>



				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

	<!-- Start Customer Reviews -->
	<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Customer Reviews</h2>
						<p>Your feedback matters! See how others have enjoyed their experience with us.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">

				<?php
					error_reporting(1);
					include('connection.php');
					$data = "SELECT * FROM contact ORDER by id DESC LIMIT 3";
					$val = $con->query($data);
					$active = false;
					if($val->num_rows > 0) {
						while(list($id, $name, $email, $person, $message) = mysqli_fetch_array($val)) {
							$activeok = $active ? '' : 'active';
							$active = true;
						echo "<div class='carousel-item text-center $activeok'>
								<h5 class='mt-4 mb-0'><strong class='text-warning text-uppercase'> $name </strong></h5>
								<h4 class='text-dark m-0'><strong> $email </strong></h4>
								<h4 class='text-dark m-0'> $person </h4>
								<p class='m-0 pt-3'> $message </p>
							</div>";
						}
					} else {
						echo "<h1 style='text-align: center;'><b> No data available</b></h1>";
					}
				?>

						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Customer Reviews -->

	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							+95 997-636-4292
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							lhtet4001@gmail.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							300, Linn Htet Street, Myanmar
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->

	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>At YamiFood, we’re passionate about serving delicious, high-quality meals in a warm and welcoming atmosphere. Experience exceptional flavors and heartfelt service.</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Baham Street, Timecity Tower, Yangon, Myanmar</p>
					<p class="lead"><a href="#">+95 997-636-4292</a></p>
					<p><a href="lhtet4001@gmail.com"> lhtet4001@gmail.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=61563815671360"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://github.com/linnhtet003"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://github.com/linnhtet003"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="lhtet4001@gmail.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="https://github.com/linnhtet003"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2024 <a href="#">Yamifood Restaurant</a> Design By :
					<a href="https://github.com/linnhtet003">Linn design</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>