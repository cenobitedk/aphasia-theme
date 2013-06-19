  <div id="footer">
    <div class="container_16">
      <?php 
      	  $args = array(
	  
			  'container' => 'div', 
			  'container_class' => 'menu clearfix', 
			  'theme_location' => 'aphasia-bottom-menu',
			  'menu_class' => 'bottom-menu',
			  'depth' => 0					  
		  );
	
	  echo wp_nav_menu( $args );
	  ?>
      <p class="social-links">
      	<a href="http://soundcloud.com/aphasia-records" target="_blank" class="soundcloud" title="Soundcloud">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/icons/soundcloud-icon.png" alt="Soundcloud" /></a>
      	<a href="http://aphasiarecords.bandcamp.com/" target="_blank" class="bandcamp" title="Bandcamp">
         <img src="<?php echo get_stylesheet_directory_uri() ?>/icons/bandcamp-icon.png" alt="Bandcamp" /></a>
      	<a href="http://www.facebook.com/AphasiaRecords" target="_blank" class="facebook" title="Facebook">
         <img src="<?php echo get_stylesheet_directory_uri() ?>/icons/facebook-icon.png" alt="Facebook" /></a>
      	<a href="http://www.youtube.com/user/AphasiaRecordsMusic" target="_blank" class="youtube" title="Youtube">
         <img src="<?php echo get_stylesheet_directory_uri() ?>/icons/youtube-icon.png" alt="Youtube" /></a>
      	<a href="http://twitter.com/AphasiaRecords/" target="_blank" class="twitter" title="Twitter">
         <img src="<?php echo get_stylesheet_directory_uri() ?>/icons/twitter-icon.png" alt="Twitter" /></a>
      </p>
      <p>© Copyright 2013 - <a href="<?php echo home_url( '/' ); ?>">Aphasia Records</a></p>
      <?php //do_action( 'vortex_footer' ); ?>
    </div>
  </div>
</div> <!-- end .wrapper -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/scripts/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/scripts/main.js"></script>
</body>
</html>