<?php get_header(); ?>
<div class="mh-wrapper mh-clearfix">
	<div id="main-content" class="mh-content" role="main" itemprop="mainContentOfPage"><?php
		while (have_posts()) : the_post();
			mh_before_post_content();
			get_template_part('content', 'single');
			mh_after_post_content();
			comments_template();
		endwhile; ?>
          <!-- PMX-Relac -->
          <!-- PMX-relac-mov -->
		  <!-- FIN PMX-relac-mov -->

	</div>
	<?php get_sidebar(); ?>
</div>
<!--<?php //get_footer(); ?>-->