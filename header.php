<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link href='https://fonts.googleapis.com/css?family=Cutive|Open+Sans:400,300,300italic,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<section id="home">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="header">
        <?php if ( has_post_thumbnail() ): {
            $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
            $the_content = get_the_content();
                 echo 
                 '<div class="backgroundImage" style="background:url('.$feat_image_url.');">
                     <div class="buffer fade-in">
                        <p class="container">'.$the_content.'</p>
                        <a href="#portfolio"><button class="what">See my work</button></a>
                      </div>
                  </div>';
                    } endif; ?>
        <?php endwhile;?>
        </div>

</section>