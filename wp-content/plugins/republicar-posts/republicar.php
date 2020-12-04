<?php
/*
Plugin Name: Republicar posts
Description: Ejecutar un cron que vuelva a publicar un post cada 5 minutos. Se debe agregar el hook "cron_crear_post_cinco_minutos"
Version: 1.0
Author: César Aquino Maximiliano
Author URI: https://cesar.pe
*/

add_action( 'init', 'cron_republicar_init' );
function cron_republicar_init() {

  register_post_type(
    'cron-logs', array(
      'labels'        =>  array('name' => 'Cron Logs', 'singular_name' => 'Log'),
      'public'        => true,
      'exclude_from_search' => true,
      'show_in_admin_bar'   => false,
      'show_in_nav_menus'   => false,
      'publicly_queryable' => false,
      'query_var'   => false,
      'supports'    => array( 'title')
    )
  );

  require_once dirname(__FILE__).'/acf.php';
  
}
add_action( 'template_redirect', 'cron_republicar_template_redirect' );
function cron_republicar_template_redirect() {
crear_post_cinco_minutos();
}

add_action('cron_crear_post_cinco_minutos', 'crear_post_cinco_minutos');
function crear_post_cinco_minutos() {
  if (!function_exists('acf_add_options_page')) return;

  $horario_fecha = get_field('horario_fecha', 'options');
  if (!in_array(current_time('N'), $horario_fecha)) return;

  $hora_correcta = false;
  while (have_rows('horarios', 'options')) { the_row();
    $horario_desde = intval(get_sub_field('desde', 'options'));
    $horario_hasta = intval(get_sub_field('hasta', 'options'));
    if (intval(current_time('Hi')) >= $horario_desde && intval(current_time('Hi')) <= $horario_hasta) $hora_correcta = true;
  }
  if (!$hora_correcta) return;

  $args = array(
    'post_status' => 'publish',
    'orderby' => 'rand',
    'showposts' => 1
  );
  $categorias = get_field('categorias', 'options');
  if ($categorias) {
    $args['tax_query'] = array(
      'taxonomy' => 'category',
      'operator' => 'IN',
      'terms' => $categorias
    );
  }
  $usuarios = get_field('usuarios', 'options');
  if ($categorias) {
    $args['author__in'] = $usuarios;
  }
  //echo '<pre>';print_r($args);
  //echo '</pre>';
  $random = new WP_Query($args);
  while ($random->have_posts()) { $random->The_post();
    wp_update_post(array(
      'ID' => get_the_id(),
      'post_date' => current_time('Y-m-d H:i:s'),
      'post_date_gmt' => current_time('Y-m-d H:i:s')
    ));
    wp_insert_post(array(
      'post_title' => 'Se acaba de re-publicar el post: '.get_the_title(),
      'post_type' => 'cron-logs'
    ));
  }
}
