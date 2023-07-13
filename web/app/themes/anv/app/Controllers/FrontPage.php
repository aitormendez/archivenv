<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{

  public function image() {
    $array = get_field('background_image', 'option');
    return $array[array_rand($array)]['bg_img']['id'];
  }

//   public function series() {
//     $args = array(
//       'taxonomy'          => 'series',
//       'hide_empty'        => 1,
//       'meta_key'          => 'orden',
//       'orderby'           => 'meta_value',
//       'order'             => 'ASC',
//       'meta_query'    => [
//         [
//             'key'       => 'mostrar_en_portada',
//             'value'     => true,
//             'compare'   => '=',
//         ],
//       ]
//     );
//     $terms = get_terms('serie', $args );

//     return $terms;
//   }

  public function descripcion() {
    $desc= get_bloginfo('description');
		$output = html_entity_decode($desc);
    return $output;
  }

}
