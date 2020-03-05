<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel
 */
 require_once 'database.php';
 require_once 'functions.php';

?>

<!--<pre>
<?php print_r($flights); ?>
</pre>-->

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header" class="header">
	<div class="container">
		<div class="row main_line">
		<div class="navbar">
				<div class="col-sm-12 col-lg-1">
					<a href="/">
						<h1 class="logo">TravelCream</h1>
					</a>
				</div>

				<div class="col-sm-12 col-lg-5">
					<nav>
						<ul class="menu">
							<li class="menu__item">
								<a href="#flights">Flights</a>
							</li>
							<li class="menu__item">
								<a href="#hotels">Hotels</a>
							</li>
							<li class="menu__item">
								<a href="#trips">Trips</a>
							</li>
							<li class="menu__item">
								<a href="#">Activity</a>
							</li>
							<li class="menu__item">
								<a href="#">Deals</a>
							</li>
						</ul>
					</nav>
			    </div>


				<div class="login d-flex justify-content-center col-sm-6 col-lg-6">
						<button type="btn" class="login_btn" id="hider" onClick="filter()">Login</button>
				</div>
             </div>

		</div>


		 <div class="row">
		 				<div class="col-lg-12">
		 						<div class="offer__title_one">
		 							<h1>Do you want to visit Paris?</h1>
		 						</div>
		 						<div class="offer__title_next">
		 							<h4>Why not</h4>
		 						</div>
		                </div>
		 </div>

</div>

</header>
	<div id="content" class="site-content">
