<?php defined('ABSPATH') or die("No script kiddies please!"); ?>
			<footer>
				<a href="#page-top" id="ftr-btn" title="Return to top of Page">^</a>
				<ul class="socialmedia">
					<a href="" class="social"><img src="<?php echo get_stylesheet_directory_uri()?>/img/facebook.png" class="social icons" alt="Facebook"></a>
					<a href="https://plus.google.com/u/0/114735018727905520658/posts" class="social"><img src="<?php echo get_stylesheet_directory_uri()?>/img/g+.png" class="social icons" alt="Google Plus"></a>
					<a href="https://twitter.com/JXandur" class="social"><img src="<?php echo get_stylesheet_directory_uri()?>/img/twitter.png" class="social icons" alt="Twitter"></a>
					<a href="https://github.com/JXDR" class="social"><img src="<?php echo get_stylesheet_directory_uri()?>/img/Github.png" class="social icons" alt="GitHub"></a>
					<a href="http://ca.linkedin.com/pub/jordan-cross/54/167/a43" class="social"><img src="<?php echo get_stylesheet_directory_uri()?>/img/linkedin.png" class="social icons" alt="Linkedin"></a>
				</ul>
				<span class="ftr-inner">&copy; JXandur 2014</span>
			</footer>
			<!-- Call Google Library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<!--Call SourceJS-->
			<script src="<?php echo esc_url(get_template_directory_uri('template_url')); ?>/js/source.js" type="text/javascript"></script>
			<!--Call Smooth Scroll JS-->
			<script src="<?php echo esc_url(get_template_directory_uri('template_url')); ?>/js/smooth-scroll.js" type="text/javascript"></script>
			<!--Call smooth scroll function on anchor tags-->
			<script>
				$('a').smoothScroll();
			</script>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>