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
          <?php the_field(bio); ?>
       </div>

    </div> 
</section> 

  <section class="portfolio">
      <?php the_field(top); ?>
        <p id="portfolio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, quae tempora praesentium? Magni atque et maxime similique, quidem sit distinctio reprehenderit a labore ullam quae illum laborum reiciendis debitis ex?</p>
  </section>

    <section class="expert" id="skills">

    <?php the_field('expert_intro')?>

      <div class="expertise">
        <div class="expertContained"> <!-- this should be the flexbox -->
        <?php while(has_sub_field('expert')): ?>

          <div class="wrapp">
            <div class="expertIcon">
              <?php 
              $image = get_sub_field('expert_icon');
              if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            </div>

            <?php the_sub_field('expert_blurb');?>
           <?php endwhile; ?>
        </div>   
        </div>  
      </div>  
  </section>

  </div> <!-- end getmain -->
</div> <!-- end mainwrapper (sidebarwrap) for flexbox -->

<?php get_footer(); ?> 