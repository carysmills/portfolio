<footer>
  <div class="container content">

  <ul class="clearfix">
          <?php while(has_sub_field('social')): ?>
                 <li>
                 <a href="<?php the_sub_field('link') ?>" target="_blank"><i class="fa fa-<?php the_sub_field('icon');?>"></i></a>
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

<!-- CREDITS!
Star animation and images in header Copyright (c) Script Tutorials.: https://www.script-tutorials.com/night-sky-with-twinkling-stars/

Star image below animation by Blair Fraser: https://unsplash.com/photos/aI1tDC8PaLM 

Headshot of Carys Mills by Pam Lau http://pamlau.com/

Portfolio sorter: https://mixitup.kunkalabs.com/

Noun Project icons:
- reporter by Blake Kimmel from the Noun Project
- function by Ian Kirkland from the Noun Project
- html by vijay sekhar from the Noun Project

Design based on purchased PSD: http://themeelite.com/demos/folix/


 -->
</html>