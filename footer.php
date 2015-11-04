<footer>
  <div class="container content">
     <ul class="clearfix">
        <?php while(has_sub_field('social')): ?>
               <li>
               <a href="<?php the_sub_field('link') ?>"><i class="fa fa-<?php the_sub_field('icon');?>"></i></a>
                </li>
              <?php endwhile; ?>
     </ul>

    <p>&copy; Carys Mills <?php echo date('Y'); ?></p>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>