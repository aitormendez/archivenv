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
  ->addImage('sutitut_img', [
      'label' => 'Image',
      'instructions' => 'Add background image',
      'return_format' => 'array',
      'preview_size' => 'thumbnail',
      'library' => 'all',
  ]);

return $options;