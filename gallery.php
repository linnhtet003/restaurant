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
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						<li class="nav-item active"><a class="nav-link" href="gallery.php">Gallery</a></li>
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
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Gallery</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
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

// Map table names to folder names
$tables = [
    'drinks' => 'drink',
    'lunch' => 'lunch',
    'dinner' => 'dinner'
];

$items = [];

foreach ($tables as $table => $folder) {
    $data = "SELECT * FROM $table ORDER BY id DESC ";
    $val = $con->query($data);

    if (!$val) {
        die("Query failed for $table: " . $con->error);
    }

    if ($val->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($val)) {
            $row['folder'] = $folder; // Add folder info
            $items[] = $row;
        }
    } else {
        echo "<h1 style='text-align: center;'><b>No data available for $table</b></h1>";
    }
}

if (!empty($items)) {
    foreach ($items as $item) {
        // Extract data for display
        $id = $item['id'];
        $name = $item['name'];
        $description = $item['description'];
        $price = $item['price'];
        $image = $item['img']; // Use 'img' as per the debug output
        $folder = $item['folder']; // Folder from mapping

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