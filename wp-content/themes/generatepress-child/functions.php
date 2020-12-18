<?php
/**
 * GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file.
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

// Quitando Gutemberg
add_filter('use_block_editor_for_post', '__return_false', 10);
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' );
}

// Quitando estilos de jetpack del front
add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );

add_action( 'generate_before_main_content','f_generate_before_main_content' );
function f_generate_before_main_content() {

    if( is_archive() || is_home() ) {

        if( !wp_is_mobile() ) { ?>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:inline-block;width:336px;height:280px"
                 data-ad-client="ca-pub-7512798297333598"
                 data-ad-slot="6912692283"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <?php
        }
        else { ?>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:inline-block;width:336px;height:280px"
                 data-ad-client="ca-pub-7512798297333598"
                 data-ad-slot="2434676599"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <?php
        }

        if( !wp_is_mobile() ) { ?>
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
        }
        else { ?>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-format="autorelaxed"
                 data-ad-client="ca-pub-7512798297333598"
                 data-ad-slot="5488269249"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <?php
        }

    }
}

add_action( 'generate_after_main_content','f_generate_after_main_content' );
function f_generate_after_main_content() {

    if( is_archive() || is_home() ) {

        if( !wp_is_mobile() ) { ?>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    		<ins class="adsbygoogle"
    			style="display:block"
    			data-ad-client="ca-pub-7512798297333598"
    			data-ad-slot="7653611709"
    			data-ad-format="link"
    			data-full-width-responsive="true"></ins>
    		<script>
    		(adsbygoogle = window.adsbygoogle || []).push({});
    		</script>
            <?php
        }
        else { ?>
    		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    		<ins class="adsbygoogle"
    			 style="display:block"
    			 data-ad-client="ca-pub-7512798297333598"
    			 data-ad-slot="3236799984"
    			 data-ad-format="link"
    			 data-full-width-responsive="true"></ins>
    		<script>
    		(adsbygoogle = window.adsbygoogle || []).push({});
    		</script>
            <?php
        }

    }
}

add_action( 'generate_after_page_title','f_generate_after_page_title' );
function f_generate_after_page_title() {
    if( !wp_is_mobile() ) { ?>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
			style="display:block"
			data-ad-client="ca-pub-7512798297333598"
			data-ad-slot="7653611709"
			data-ad-format="link"
			data-full-width-responsive="true"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
        <?php
    }
    else { ?>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-7512798297333598"
			 data-ad-slot="3236799984"
			 data-ad-format="link"
			 data-full-width-responsive="true"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
        <?php
    }
}

add_action( 'generate_after_entry_title','f_generate_after_entry_title' );
function f_generate_after_entry_title() {
    if( is_single() ) {
        if( !wp_is_mobile() ) { ?>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:inline-block;width:336px;height:280px"
                 data-ad-client="ca-pub-7512798297333598"
                 data-ad-slot="6912692283"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <?php
        }
        else { ?>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:inline-block;width:336px;height:280px"
                 data-ad-client="ca-pub-7512798297333598"
                 data-ad-slot="2434676599"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <?php
        }
    }
}

add_action( 'generate_after_entry_content','f_generate_after_entry_content' );
function f_generate_after_entry_content() {
    if( is_single() ) {
        if( !wp_is_mobile() ) { ?>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-7512798297333598"
                data-ad-slot="7653611709"
                data-ad-format="link"
                data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <?php
        }
        else { ?>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-7512798297333598"
                 data-ad-slot="3236799984"
                 data-ad-format="link"
                 data-full-width-responsive="true"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <?php
        } ?>
        <h1>Articulos Relacionados</h1>
        <?php
        if( !wp_is_mobile() ) { ?>
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
        }
        else { ?>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-format="autorelaxed"
                 data-ad-client="ca-pub-7512798297333598"
                 data-ad-slot="5488269249"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <?php
        }
    }
}
