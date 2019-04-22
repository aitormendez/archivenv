<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TaxonomySerie extends Controller
{
  public static function image() {
    $post_thumbnail_id = get_post_thumbnail_id();    
    return $post_thumbnail_id;
  }

  public static function imageAlt() {

    $post_thumbnail_id = get_post_thumbnail_id();
    $object_id = apply_filters( 'wpml_object_id', $post_thumbnail_id, 'attachment', FALSE, NULL );
    $attachment_alt = get_post_meta($object_id, '_wp_attachment_image_alt', true);
    
    return $attachment_alt;
  }

  
}
