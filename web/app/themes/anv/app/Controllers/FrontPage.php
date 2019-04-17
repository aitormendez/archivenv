<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  public function image() {
    $array = get_field('background_image', 'option');
    return $array[array_rand($array)]['bg_img']['id'];
  }

  public function series() {
    $args = array(
      'taxonomy'          => 'series',
      'hide_empty'        => 0,
      'parent'            => 0,
      'meta_key'          => 'orden',
      'orderby'           => 'meta_value',
      'order'             => 'ASC',
    );
    $terms = get_terms('serie', $args );

    return $terms;
  }
}
