
                 <!--     <?php if(count($flights) === 0): ?>
                          <li><a href="#"><i class="glyghicon glyghicon-plus-sign" ></i>Adding item</a></li>
                              <?php else: ?>
                               <?php
                              foreach($flights as $flight)
                              {
                              echo' <li><a href="#">'.$flights['flight_airline'].'</a></li>';
                              $i++;
                              }
                              ?>
                         <?php endif;?>


				<?php
                 $flights = get_flights($link);
                 ?>
                		 <?php if(count($flights) === 0): ?>
                		 <p><a></a></p>

                		<?php foreach($flights as $flight): ?>

                		<?php endforeach;?>
                		<?php endif;?>


                   ?php if(count($flights) === 0): ?> -->













<div id="page" class="site">
                           <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'travel' ); ?></a>

                                                                                                                                        <header id="masthead" class="site-header">
                                                                                                                                                                                 <div class="site-branding">
                                                                                                                                                                                                           <?php
the_custom_logo();
if ( is_front_page() && is_home() ) :
?>
 <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                                                                                                         <?php
                                                                                                                           else :
?>
 <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                                                                                                        <?php
                                                                                                                          endif;
$travel_description = get_bloginfo( 'description', 'display' );
if ( $travel_description || is_customize_preview() ) :
?>
 <p class="site-description"><?php echo $travel_description; /* WPCS: xss ok. */ ?></p>
                                                                                     <?php endif; ?>
                                                                                                   </div><!-- .site-branding -->

<nav id="site-navigation" class="main-navigation">
                                                 <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'travel' ); ?></button>
                                                                                                                                                                                  <?php
wp_nav_menu( array(
'theme_location' => 'menu-1',
'menu_id'        => 'primary-menu',
) );
?>
 </nav><!-- #site-navigation -->
 <!--<?php echo get_template_directory_uri(); ?>/assets/  -->
</header><!-- #masthead -->
