<?php if (function_exists('acf_add_options_page') && function_exists('acf_add_local_field_group')) {

    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Configuración CRON',
        'menu_title'	=> 'Configuración CRON',
        'menu_slug' 	=> 'configuracion-cron',
        'redirect'		=> false
    ));

  acf_add_local_field_group(array(
    'key' => 'group_5fbd1d31c4be7',
    'title' => 'Configuración CRON',
    'fields' => array(
      array(
        'key' => 'field_5fbd1d46d991f',
        'label' => 'Categorías',
        'name' => 'categorias',
        'type' => 'taxonomy',
        'instructions' => 'Si no eliges ninguno no se filtrará por categoría',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'taxonomy' => 'category',
        'field_type' => 'multi_select',
        'allow_null' => 0,
        'add_term' => 0,
        'save_terms' => 0,
        'load_terms' => 0,
        'return_format' => 'id',
        'multiple' => 0,
      ),
      array(
        'key' => 'field_5fbd1d83d9920',
        'label' => 'Usuarios',
        'name' => 'usuarios',
        'type' => 'user',
        'instructions' => 'Si no eliges ninguno no se filtrará por usuario',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'role' => '',
        'allow_null' => 0,
        'multiple' => 1,
        'return_format' => 'id',
      ),
      array(
        'key' => 'field_5fbd1da2d9921',
        'label' => 'Horario Fecha',
        'name' => 'horario_fecha',
        'type' => 'checkbox',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          1 => 'Lunes',
          2 => 'Martes',
          3 => 'Miércoles',
          4 => 'Jueves',
          5 => 'Viernes',
          6 => 'Sábado',
          7 => 'Domingo',
        ),
        'allow_custom' => 0,
        'default_value' => array(
        ),
        'layout' => 'horizontal',
        'toggle' => 0,
        'return_format' => 'value',
        'save_custom' => 0,
      ),
      array(
        'key' => 'field_5fbd1dddd9922',
        'label' => 'Horarios',
        'name' => 'horarios',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'table',
        'button_label' => 'Agregar horario',
        'sub_fields' => array(
          array(
            'key' => 'field_5fbd2c8ed9923',
            'label' => 'Desde',
            'name' => 'desde',
            'type' => 'time_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'display_format' => 'H:i',
            'return_format' => 'Hi',
          ),
          array(
            'key' => 'field_5fbd2caad9924',
            'label' => 'Hasta',
            'name' => 'hasta',
            'type' => 'time_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'display_format' => 'H:i',
            'return_format' => 'Hi',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'configuracion-cron',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  } ?>