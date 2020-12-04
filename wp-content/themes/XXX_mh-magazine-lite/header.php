<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php if (is_singular() && pings_open(get_queried_object())) : ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php endif; ?>
		<!-- Contact Form 7 redirect -->
			<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
       if ( '260223' == event.detail.contactFormId ) { // Sends sumissions on form 947 to the first thank you page
    location = 'https://pymex.com/251389-2';
}}, false );
</script>
	<!-- FIN Contact Form 7 redirect -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-7682183-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-7682183-10');
</script>

<?php wp_head(); ?>
</head>
<body id="mh-mobile" <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php mh_before_header();
get_template_part('content', 'header');
mh_after_header(); ?>