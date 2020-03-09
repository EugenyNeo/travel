
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

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header" class="header">
	<div class="container-fluid">
		<div class="row">
		<div class="navbar">
        				<div class="col-sm-4 col-md-3 col-lg-1">
        					<a href="/">
        						<h1 class="logo">TravelCream</h1>
        					</a>
        				</div>

        				<div class=" col-md-6 col-lg-5 ">
        				 <div id="hide_menu" class="hide col-sm-12 col-md-12"><i class="fas fa-bars"></i></div>
        					<nav>
        						<ul class="menu menu_">
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


                         <div class="login col-sm-4 col-md-3 col-lg-6">
                             <a href="/register.php" class="login_btn">Login</a>
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
