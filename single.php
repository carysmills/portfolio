<?php get_header(); ?>

<div class="sidebarWrap">

  <?php get_sidebar(); ?>

  <div class="getMain">

<div class="main">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="blogTitle"><?php echo get_the_title( $ID ); ?></h1>

          <div class="bigImage">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <img class="custom-bg" src="<?php echo $image[0]; ?>" alt="">
            <?php endif; ?>
          </div>
          
          <div class="sidebar">
              <?php the_field('sidebar'); ?>
           </div>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

        </div><!-- #post-## -->

        <div id="nav-below" class="navigation">
          <p class="nav-previous"><?php previous_post_link('%link', 'Previous portfolio item: %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', 'Next portfolio item: %title '); ?></p>
        </div><!-- #nav-below -->

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->


<?php get_footer(); ?>