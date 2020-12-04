<?php /* Template Name: Theme Test */

$args = array(
'posts_per_page'   => -1,
'author_name' => ''
);
$posts = get_posts($args);

foreach ( $posts as $post ) :
  setup_postdata( $post ); 

//print_r($post);
if ( empty($post->post_author)) {

?> 
	<div>
		xyzxyz | <?php the_title(); ?>   - Eliminado
		<?php //wp_delete_post(get_the_id(), true); ?>
	</div><br>
<?php
}
endforeach; 
wp_reset_postdata();




 ?>

