            </div>

            <footer id="bottom">
            	<div class="container">
	                <div class="grid 1of3">
	                	<small>
	                		<p>
		                		&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?> .
	                		</p>
	                	</small>
	                </div>

					<div class="grid 1of3 offset-4">
						<small>
			                <ul role="navigation">
			                    <li><a href="<?php echo rss_url(); ?>" class="rss"> RSS</a></li>			                    
			                    <li><a href="http://pedrolopes.net/subscribe" class="subscribe"> Subscribe</a></li>
							</ul>
			            </small>
	        		</div>
	        	</div>
            </footer>
        </div>

	    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	    <script>
	    	jQuery(document).ready(function($) {
	    		if($('nav .latest-post').hasClass('current')) {
	    			$('nav .latest-post').siblings('a').removeClass('current');
	    		}

	    		$('a[href="#menu"]').click(function() {
	    			$('a[href="#menu"]').toggleClass('current');
	    			$('.slidey').slideToggle(300);
	    		});

	    		$('section.content ol').not('.items').children('li').wrapInner('<p>');

				$('section.content img').each(function(){
					var act = $(this);
					var src = act.attr('src');
					var caption = act.attr('alt');
					var figureClass = act.attr('title');

					if (!figureClass) {
						figureClass = ' ';
					}

					act.wrap('<figure class="image-wrapper ' + figureClass + '" />');

					if (caption) {
						act.after('<figcaption>' + caption + '</figcaption>');
						act.attr('alt', 'Image');
					} else {
						act.removeAttr('alt');
					}

					if (figureClass) {
						act.removeAttr('title');
					}

					if (!src.substring(0,4).match('http') && !src.substring(0,5).match('https') && !src.substring(0,2).match('//')) {
						act.attr('src', '<?php echo base_url(); ?>content/' + src);
					}
				});
	    	});
	    </script>

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script>
				jQuery(document).ready(function($) {
					$('body').addClass('ie');
				});
			</script>
		<![endif]-->
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16246623-1']);
  _gaq.push(['_setDomainName', 'pedrolopes.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </body>
</html>
<!--
	Published with Anchor CMS: http://anchorcms.com
	Original Theme by @molovo: https://github.com/molovo/bushwick/
-->
<!--
  ___  
 (   ) 
 .--'  
(___)  
       
-->
