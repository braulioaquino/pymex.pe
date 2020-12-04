<div class="mh-header-mobile-nav mh-clearfix"></div>
<header class="mh-header cri" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
     <!--<div class="mh-container mh-container-inner mh-row mh-clearfix">
		<?php mh_magazine_lite_custom_header(); ?>
	</div>-->
	 <!--<div class="mh-main-nav-wrap">
		<nav class="mh-navigation mh-main-nav mh-container mh-container-inner mh-clearfix" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
			<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
		</nav>
	</div>-->
	<div class="jumbotron" style="background-image: url(https://pymex.com/wp-content/uploads/2019/09/lima-mid.jpg); position:relative;background-position:center;background-repeat: no-repeat;background-attachment: scroll;background-size: cover;height: 500px;padding-bottom:60px;">
		
		<nav class="mh-navigation mh-main-nav mh-container mh-container-inner mh-clearfix" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"style="margin-top: -26px;">
			<div class="div-logo" style="position: absolute;color: white;margin-top: -32px;">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" style="color: white;">
				  <h1 style="font-size: 30px;font-weight: 700;color: #FFC107;">PYMEX</h1>
				  <p class="mh-header-tagline">PORTAL DE NEGOCIOS Y FINANZAS</p>
				</a>
	        </div>
			<?php wp_nav_menu(array('theme_location' => 'main_nav')); ?>
		</nav>
        <div class="container">
          <h1 class="display-3 text-center" style="font-size: 36px; color: white;margin-top: 240px;">RESUELVE TUS DUDAS </h1>
		 <!-- <div class="buscador text-center"><?php get_search_form(); ?></div>-->
		    <div class="kleo-search-wrap kleo-search-form search-style-transparent">
			   <form role="search" method="get" class="searchform" action="https://www.pymex.com/" data-context="" _lpchecked="1">
					<div class="input-group">
					<input name="s" id="s" autocomplete="off" type="text" class="ajax_s form-control input-lg blur" value="" placeholder="Busca lo que te interesa" style="opacity:0.5;" >
					<span class="input-group-btn"><input type="submit" value="Buscar" class="button searchsubmit"></span>
					</div>
                </form>
			</div>
        </div>
      </div>
</header>
<style>	  


</style>
