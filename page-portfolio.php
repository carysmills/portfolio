<?php get_header();  ?>

<div class="sidebarWrap">

  <?php get_sidebar(); ?>

  <div class="getMain">
    <section id="about" class="container about">

      <div class="bio content">
      
      <?php 
         $image = get_field('headshot');
            if( !empty($image) ): ?>
            <img class="headshot" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?> 

      <div class="biotext">
          <?php the_field(bio); ?>
       </div>

    </div> <!-- end of bio content -->

</section> <!-- end of about section -->

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, quae tempora praesentium? Magni atque et maxime similique, quidem sit distinctio reprehenderit a labore ullam quae illum laborum reiciendis debitis ex?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, quae tempora praesentium? Magni atque et maxime similique, quidem sit distinctio reprehenderit a labore ullam quae illum laborum reiciendis debitis ex?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, quae tempora praesentium? Magni atque et maxime similique, quidem sit distinctio reprehenderit a labore ullam quae illum laborum reiciendis debitis ex?</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, quae tempora praesentium? Magni atque et maxime similique, quidem sit distinctio reprehenderit a labore ullam quae illum laborum reiciendis debitis ex?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, quae tempora praesentium? Magni atque et maxime similique, quidem sit distinctio reprehenderit a labore ullam quae illum laborum reiciendis debitis ex?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, quae tempora praesentium? Magni atque et maxime similique, quidem sit distinctio reprehenderit a labore ullam quae illum laborum reiciendis debitis ex?</p>




  </div> <!-- end getmain -->
</div> <!-- end mainwrapper (sidebarwrap) for flexbox -->

<?php get_footer(); ?> 