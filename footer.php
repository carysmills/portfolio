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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69057817-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>
</body>
</html>