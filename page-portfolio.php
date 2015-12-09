<?php get_header();  ?>

<body ontouchstart="" <?php body_class(); ?>>
<section class="home" id="home">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="header">
        <?php if ( has_post_thumbnail() ): {
            $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
            $the_content = get_the_content();
                 echo 
                 '<div class="backgroundImage">
                     <div class="buffer fade-in">
                        <p class="container fade-in">'.$the_content.'</p>
                        <a class="animated" href="#about"><i class="fa fa-chevron-down animated fadeInDownBig"></i></a>
                      </div>      
                      <div class="image" style="background:url('.$feat_image_url.'); background-size: cover;"></div>
                  </div>';
                    } endif; ?>
        <?php endwhile;?>
       
       <div class="stars"></div>
       <div class="twinkling"></div>

        </div>

</section>

<div class="sidebarWrap">

  <?php get_sidebar(); ?>

  <div class="getMain">

    <section id="about" class="about container">
      <div class="bio content clearfix">
      
      <div class="bioHeadshot">
        <?php 
           $image = get_field('headshot');
              if( !empty($image) ): ?>
              <img class="headshot" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?> 
      </div>

      <div class="biotext">
          <?php the_field('bio'); ?>
       </div>

    </div> 
</section> 

  <section class="portfolio container" id="portfolio">
      <?php the_field('top'); ?>

      <div class="controls">
        <button class="filter" data-filter="all">All</button>
        <button class="filter" data-filter=".category-1">Web development</button>
        <button class="filter" data-filter=".category-2">Writing</button>
      </div>
              
      <div id="mixContainer">

        <div class="mix category-1" data-myorder="1">
             <?php 
                $image = get_field('portfolio_img');
                   if( !empty($image) ): ?>
                   <a href="http://carysmills.com/potholes" target="_blank"><img class="portfolio_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
             <?php endif; ?> 
              <div class="portfolio_text">
                  <?php the_field('portfolio_text'); ?>
             </div>
        </div>

        <div class="mix category-2" data-myorder="1">
            <?php 
               $image = get_field('portfolio_img5');
                  if( !empty($image) ): ?>
                  <a href="http://ottawacitizen.com/news/local-news/thousands-of-ottawa-parking-tickets-given-to-wrong-people" target="_blank"><img class="portfolio_img5" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
            <?php endif; ?> 
             <div class="portfolio_text">
                 <?php the_field('portfolio_text5'); ?>
            </div>
        </div>

        <div class="mix category-1" data-myorder="2">
            <?php 
               $image = get_field('portfolio_img_2');
                  if( !empty($image) ): ?>
                  <a href="http://carysmills.com/rjaa" target="_blank"><img class="portfolio_img_2" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
            <?php endif; ?> 
             <div class="portfolio_text">
                 <?php the_field('portfolio_text_2'); ?>
            </div>
        </div>

        <div class="mix category-2" data-myorder="2">
        <?php 
           $image = get_field('portfolio_img7');
              if( !empty($image) ): ?>
              <a href="http://www.theglobeandmail.com/news/national/how-applicants-are-stumbling-on-the-final-step-to-becoming-canadians/article4382633/" target="_blank"><img class="portfolio_img7" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
        <?php endif; ?> 
         <div class="portfolio_text clearfix">
             <?php the_field('portfolio_text7'); ?>
        </div>  
        </div>

        <div class="mix category-1" data-myorder="3">
              <?php 
                 $image = get_field('portfolio_img3');
                    if( !empty($image) ): ?>
                    <a href="http://carysmills.com/ecommerce/" target="_blank"><img class="portfolio_img3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
              <?php endif; ?> 
               <div class="portfolio_text">
                   <?php the_field('portfolio_text3'); ?>
              </div>
          
        </div>

        <div class="mix category-2" data-myorder="2">
        <?php 
           $image = get_field('portfolio_img8');
              if( !empty($image) ): ?>
              <a href="http://www.ottawacitizen.com/life/fashion-beauty/strange+case+Israeli+hand+cream+pedlars/9673499/story.html" target="_blank"><img class="portfolio_img8" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
        <?php endif; ?> 
         <div class="portfolio_text clearfix">
             <?php the_field('portfolio_text8'); ?>
        </div>  
        </div>

        <div class="mix category-1" data-myorder="4">
          <?php 
             $image = get_field('portfolio_img4');
                if( !empty($image) ): ?>
                <a href="http://halloweencostu.me" target="_blank"><img class="portfolio_img4" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
          <?php endif; ?> 
           <div class="portfolio_text">
               <?php the_field('portfolio_text4'); ?>
          </div>
          
        </div>

        <div class="mix category-1" data-myorder="2">
        <?php 
           $image = get_field('portfolio_img6');
              if( !empty($image) ): ?>
              <a href="http://carysmills.github.io/bridges" target="_blank"><img class="portfolio_img6" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
        <?php endif; ?> 
         <div class="portfolio_text clearfix">
             <?php the_field('portfolio_text6'); ?>
        </div>  
        </div>

        <div class="mix category-2" data-myorder="2">
        <?php 
           $image = get_field('portfolio_img9');
              if( !empty($image) ): ?>
              <a href="http://www.thestar.com/news/canada/2012/11/30/smalltown_police_forces_in_ontario_are_giving_way_to_the_opp.html" target="_blank"><img class="portfolio_img9" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
        <?php endif; ?> 
         <div class="portfolio_text clearfix">
             <?php the_field('portfolio_text9'); ?>
        </div>  
        </div>

      </div>

  </section>

    <section class="expert container" id="skills">
    <div class="skillz clearfix">
    <?php the_field('expert_intro')?>
        <?php while(has_sub_field('expert')): ?>
          <div class="expertContainer">
          <div class="expertIcon">
            <?php the_sub_field('expert_blurb');?>
            <?php 
                 $image = get_sub_field('expert_icon');
                 if( !empty($image) ): ?>
                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                 <?php endif; ?>
            </div>
           <?php endwhile; ?>
          </div> <!-- end expertContainer  -->
    </div>
  </section>

  <section class="contact container" id="contact">
        <?php the_field('contact_intro') ?>
        <div class="contactwrap clearfix">
          <div class="form">
            <?php the_field('contact_form');?>
          </div>
          <div class="info">
            <?php the_field ('other_info') ?>
          </div>
        </div>
  </section>

   <?php get_footer(); ?> 

  </div> <!-- end getmain -->

</div> <!-- end mainwrapper (sidebarwrap) for flexbox -->

