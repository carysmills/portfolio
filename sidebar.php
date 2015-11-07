  <div class="sidebarContainer">

		<div class="logoContainer">
		       <?php 
		       $image = get_field('logo');
		       if( !empty($image) ): ?>
		        <img class="logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		       <?php endif; ?> 
		</div>       

	<div class="menuContainer">
	    <?php wp_nav_menu( array(
	      'container' => false,
	      'theme_location' => 'primary'
	    )); ?>
    </div>
    
  </div> <!-- /.container -->

<nav class="mobile">
  <button class="hamburger">
  	<i class="fa fa-bars"></i>
  </button>
  <div class="navigation">
  <?php wp_nav_menu( array(
    'container' => false,
    'theme_location' => 'primary'
  )); ?>
  </div>
</nav>

