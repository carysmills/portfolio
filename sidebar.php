  <div class="sidebarContainer">

		<div class="logoContainer">
			<a href="#home">
		       <?php 
		       $image = get_field('logo');
		       if( !empty($image) ): ?>
		        <img class="logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		       <?php endif; ?> 
		    </a>   
		</div>       

	<div class="menuContainer">
	    <?php wp_nav_menu( array(
	      'container' => false,
	      'theme_location' => 'primary'
	    )); ?>
    </div>
    
  </div> <!-- /.container -->

