  <div class="sidebarContainer">

		<div class="">
    <a href="#home">
  		<div class="logoContainer">
  		       <?php 
  		       $image = get_field('logo');
  		       if( !empty($image) ): ?>
  		        <img class="logo" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  		       <?php endif; ?> 
  		</div>  
    </a>     

	<div class="menuContainer">
	    <?php wp_nav_menu( array(
	      'container' => false,
	      'theme_location' => 'primary'
	    )); ?>
    </div>
    </div>

    <ul class="social clearfix">
       <?php while(has_sub_field('social')): ?>
              <li>
              <a href="<?php the_sub_field('link') ?>" target="_blank"><i class="fa fa-<?php the_sub_field('icon');?>"></i></a>
               </li>
             <?php endwhile; ?>
    </ul>
    
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
    <i class="fa fa-times-circle hamburgertwo"></i>
  </div>
</nav>

