<?php get_header(); ?>
<div class="mh-wrapper mh-clearfix">
	<div id="main-content" class="mh-loop mh-content" role="main"><?php
		mh_before_page_content();
		if (have_posts()) { ?>
			<header class="page-header"><?php
				the_archive_title('<h1 class="page-title">', '</h1>');			
				if (is_author()) {
					mh_magazine_lite_author_box();
				} else {
					the_archive_description('<div class="">', '</div>');
				} ?>
			</header>
		<div>
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- PMX-1a-boton -->
         <ins class="adsbygoogle"
        style="display:block"
       data-ad-client="ca-pub-7512798297333598"
       data-ad-slot="7653611709"
       data-ad-format="link"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
     <ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-7512798297333598"
     data-ad-slot="1293009415"></ins>
     <script>
     (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
		<?php
			mh_magazine_lite_loop_layout();
			mh_magazine_lite_pagination();
		} else {
			get_template_part('content', 'none');
		} ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>