<?php get_header();  ?>

<div class="sidebarWrap">

  <?php get_sidebar(); ?>

  <div class="getMain">

    <section id="about" class="about">
      <div class="bio content">
      
      <?php 
         $image = get_field('headshot');
            if( !empty($image) ): ?>
            <img class="headshot" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?> 

      <div class="biotext">
          <?php the_field('bio'); ?>
       </div>

    </div> 
</section> 

  <section class="portfolio" id="portfolio">
      <?php the_field('top'); ?>

      <div class="controls">
        <button class="filter" data-filter="all">All</button>
        <button class="filter" data-filter=".category-1">Front-end work</button>
        <button class="filter" data-filter=".category-2">Journalism work</button>
      </div>
              
      <div id="mixContainer">

        <div class="mix category-1" data-myorder="1">
             <?php 
                $image = get_field('portfolio_img');
                   if( !empty($image) ): ?>
                   <img class="portfolio_img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
             <?php endif; ?> 
              <div class="portfolio_text">
                  <?php the_field('portfolio_text'); ?>
             </div>
        </div>

        <div class="mix category-2" data-myorder="1">
            <?php 
               $image = get_field('portfolio_img5');
                  if( !empty($image) ): ?>
                  <img class="portfolio_img5" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?> 
             <div class="portfolio_text5">
                 <?php the_field('portfolio_text5'); ?>
            </div>
        </div>

        <div class="mix category-1" data-myorder="2">
            <?php 
               $image = get_field('portfolio_img_2');
                  if( !empty($image) ): ?>
                  <img class="portfolio_img_2" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?> 
             <div class="portfolio_text_2">
                 <?php the_field('portfolio_text_2'); ?>
            </div>
        </div>

        <div class="mix category-1" data-myorder="3">
              <?php 
                 $image = get_field('portfolio_img3');
                    if( !empty($image) ): ?>
                    <img class="portfolio_img3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?> 
               <div class="portfolio_text3">
                   <?php the_field('portfolio_text3'); ?>
              </div>
          
        </div>

        <div class="mix category-1" data-myorder="4">
          <?php 
             $image = get_field('portfolio_img4');
                if( !empty($image) ): ?>
                <img class="portfolio_img4" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?> 
           <div class="portfolio_text4">
               <?php the_field('portfolio_text4'); ?>
          </div>
          
        </div>

        <div class="mix category-2" data-myorder="2">
        <?php 
           $image = get_field('portfolio_img6');
              if( !empty($image) ): ?>
              <img class="portfolio_img6" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endif; ?> 
         <div class="portfolio_text6">
             <?php the_field('portfolio_text6'); ?>
        </div>
          
        </div>

      </div>

  </section>

    <section class="expert" id="skills">
    <?php the_field('expert_intro')?>

        <?php while(has_sub_field('expert')): ?>

          <div class="expertContainer clearfix">
            <div class="expertIcon">
              <div class="expertSingle clearfix">
              <?php 
              $image = get_sub_field('expert_icon');
              if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            </div> <!-- end expertSingle -->

            <?php the_sub_field('expert_blurb');?>
            </div> <!-- end expert icon -->
           <?php endwhile; ?>
      </div> <!-- end expertContainer  -->
  </section>

  <section class="contact" id="contact">
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

  </div> <!-- end getmain -->
</div> <!-- end mainwrapper (sidebarwrap) for flexbox -->

<?php get_footer(); ?> 