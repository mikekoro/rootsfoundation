<!-- Navigation -->
<header class="top-bar" role="banner">
	<ul class="title-area">
      	<!-- Title Area -->
      	<li class="name">
        	<h1><a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
      	</li>
    	<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>

	<section class="top-bar-section" role="navigation">
      	<?php
        if (has_nav_menu('primary_navigation')) :
          	wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'right'));
        endif;
      	?>
	</section>
</header>
<!-- End Top Bar -->
