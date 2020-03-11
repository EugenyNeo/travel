
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>



	<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<?php
require ('connect.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];

    $query = "INSERT INTO auth (username, password, email) VALUES ('$username','$email', '$password')";
    $results =mysqli_query($connection, $query);

    if($results){
        $smsg =" Registration is successfully!";
    }else{
        $fsmsg = "Error!";
    }
}
?>
<section class="register" id="register">
    <div class="container ">
        <span class="icon" id="icon"><a href=""><i class="fas fa-times"></i></a></span>
        <div class="col col-md-12 block_">

        <form class="form-signin" method="POST">
            <h2>Registration</h2>
            <?php if(isset($smsg)){?><div class="alert alert-success" role="alert"><?php  echo $smsg; ?></div><?php }?>
            <?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"><?php  echo $fsmsg; ?></div><?php }?>
            <input type="text" name="username" class="form-control" placeholder="Username" required height="50">
            <input type="email" name="email" class="form-control" placeholder="Email" required height="50">
            <input type="password" name="password" class="form-control" placeholder="Password" required height="50">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
        </div>
    </div>
</section>



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
                             <a href="#" class="login_btn" onclick="toggle()">Login</a>
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
