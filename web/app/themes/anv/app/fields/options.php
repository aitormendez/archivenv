<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

acf_add_options_page([
    'page_title' => get_bloginfo('name') . ' theme options',
    'menu_title' => 'ANV Options',
    'menu_slug'  => 'theme-options',
    'capability' => 'edit_theme_options',
    'position'   => '999',
    'autoload'   => true
]);

$options = new FieldsBuilder('theme_options');

$options
    ->setLocation('options_page', '==', 'theme-options');

$options
    ->addRepeater('background_image', [
        'label' => 'Background image',
        'instructions' => 'Conjunto de las imágenes que se mostrarán aleatoriamente en el fondo de la página principal',
    ])
    ->addImage('bg_img', [
        'label' => 'Image',
        'instructions' => 'Add background image',
        'return_format' => 'array',
        'preview_size' => 'thumbnail',
        'library' => 'all',
    ])
    ->endRepeater()
    ->addTaxonomy('series_portada', [
        'label' => 'Series en portada',
        'instructions' => '',
        'required' => 1,
        'taxonomy' => 'serie',
        'field_type' => 'checkbox',
        'allow_null' => 0,
        'add_term' => 1,
        'save_terms' => 0,
        'load_terms' => 0,
        'return_format' => 'object',
        'multiple' => 1,
    ]);

return $options;
