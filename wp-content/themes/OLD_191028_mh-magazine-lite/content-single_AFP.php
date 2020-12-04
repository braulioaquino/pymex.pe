<?php /* Default template for displaying content. */ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header mh-clearfix"><?php
		the_title('<h1 class="entry-title">', '</h1>');
		mh_post_header(); ?>
			<div class="container">           
		 <br>
			<a href="http://bit.ly/312QLTd" target="_blank"><img style = "border: solid 1px red;" src="https://pymex.com/wp-content/uploads/2019/10/SE_300x250.gif"></a>
</div>
	</header>
	<?php dynamic_sidebar('posts-1'); ?>
	<div class="entry-content mh-clearfix">
		<div class="excerpt"><?php the_excerpt(); ?>
					<div class="publi-mobil">
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
		<!-- Inicio - PMX-BotonArriba-Mov -->		
		<div class="mns"> 				
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
	</div>
		<!-- FIN - PMX-BotonArriba-Mov -->
	 </div>
		 <p class="btncris" id="read" onclick="ver('uno')">Ver artículo completo</p>
	   </div>
		<div class="oculto" id="uno"><?php the_content(); ?>

<?php

if( have_rows('cajalinkpmx') ):
	
	while ( have_rows('cajalinkpmx') ) : the_row();

        the_sub_field('url');

    endwhile;

else :

endif;

?>
		</div>
	</div>
	<?php
	the_tags('<div class="entry-tags mh-clearfix"><i class="fa fa-tag"></i><ul><li>','</li><li>','</li></ul></div>');
	dynamic_sidebar('posts-2'); ?>
</article>
