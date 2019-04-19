<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TaxonomySerie extends Controller
{
  public static function image() {

    $post_thumbnail_id = get_post_thumbnail_id($post->ID);
    $object_id = apply_filters( 'wpml_object_id', $post_thumbnail_id, 'attachment', FALSE, NULL );
    $miniatura_traducida = get_post($object_id);
    $attachment_alt = get_post_meta($object_id, '_wp_attachment_image_alt', true);

    $thumb = the_post_thumbnail(
      'cuadrado-1200',
      array(
        'alt' => $attachment_alt,
        'srcset' =>
          wp_get_attachment_image_url( $post_thumbnail_id, 'cuadrado-300' ) . ' 300w,'.
          wp_get_attachment_image_url( $post_thumbnail_id, 'cuadrado-600' ) . ' 600w',
        'sizes'=>'(max-width: 700px) 600px, 100px',
      )
    );
    
    return $thumb;
  }

  
}
