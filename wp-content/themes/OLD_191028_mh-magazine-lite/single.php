<?php get_header(); ?>
<div class="mh-wrapper mh-clearfix">
<style>
.mh-content {
    width: 65.83%;
    overflow: inherit !important;
}
</style>
	<div id="main-content" class="mh-content" role="main" itemprop="mainContentOfPage"><?php
		while (have_posts()) : the_post();
			mh_before_post_content();
			get_template_part('content', 'single');
			mh_after_post_content();
			//comments_template();
		endwhile; ?>

<div>
<h2>Artículos Relacionados</h2>
<!-- PMX-Relac -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<div class="hidden-xs hidden-sm">
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-7512798297333598"
     data-ad-slot="1293009415"></ins>
</div>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- PMX-relac-mov -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<div class="visible-xs visible-sm">
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-7512798297333598"
     data-ad-slot="5488269249"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- FIN PMX-relac-mov -->

</div>
<!-- FIN PMX-Relac -->
</div>
</div>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>