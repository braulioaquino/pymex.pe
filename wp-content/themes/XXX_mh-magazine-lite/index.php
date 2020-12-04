<?php get_header(); ?>
<div class="mh-wrapper mh-clearfix mh-container">
	<div id="main-content" class="mh-loop mh-content" role="main">
			<div>
		<!-- PMX-BotonArriba -->
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<div class="hidden-xs hidden-sm">
		<ins class="adsbygoogle"
			style="display:block"
			data-ad-client="ca-pub-7512798297333598"
			data-ad-slot="7653611709"
			data-ad-format="link"
			data-full-width-responsive="true"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		</div>
		<!-- FIN PMX-BotonArriba -->
		<!-- INICIO PMX-BotonArriba-Mov -->
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<div class="visible-xs visible-sm">
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-7512798297333598"
     data-ad-slot="3236799984"
     data-ad-format="link"
     data-full-width-responsive="true"></ins>
				</div>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	<!-- FIN PMX-BotonArriba-Mov -->
  <!-- PMX-Relac -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<div class="hidden-xs hidden-sm">
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-7512798297333598"
     data-ad-slot="1293009415"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<!-- FIN PMX-Relac -->
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
</div>
<!-- FIN PMX-relac-mov -->
	  <br>
		<?php
		mh_before_page_content();
		if (have_posts()) {
			if (is_home() && !is_front_page()) { ?>
				<header class="page-header">
					<h1 class="page-title">
						<?php single_post_title(); ?>
					</h1>
				</header>
				HOLA2
	<?php
			}
			mh_magazine_lite_loop_layout();
			
			mh_magazine_lite_pagination();
		} else {
			get_template_part('content', 'none');
		} ?>
	</div>
		<!-- AD AQUI -->

</div>
<?php get_footer(); ?>