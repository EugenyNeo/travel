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

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="header" class="header">
	<div class="container">
		<div class="row">
				<div class="col-md-1">
					<h1 class="logo">TravelCream</h1>
				</div>

				<div class="col-md-5 ">
					<nav>
						<ul class="menu d-flex justify-content-center">
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

				<div class="col-md-6">
						<button type="btn" class="login_btn">Login</button>
				</div>
		 </div>

		 <div class="row">
				<div class="col-lg-12">
					<div class="offer">
						<div class="offer__title_one">
							<h1>Do you want to visit Paris?<h1>
						</div>
						<div class="offer__title_next">
							<h4>Why not</h4>
						</div>
					</div>
		       </div>
		</div>

	</div>


		<div class="row">
			<div class="col-lg-12">
				<div class="inputGroup">
					<input type="text" placeholder="Where are you leaving from?" size="33%"/>
					<input type="text" placeholder="Where do you want to go?" size="33%"/>
					<input type="text" placeholder="Date" size="18,5%"/>
				    <button type="btn" class="btn_search">Search</button>
				</div>
           </div>
    </div>

</header>

	<div id="content" class="site-content">
