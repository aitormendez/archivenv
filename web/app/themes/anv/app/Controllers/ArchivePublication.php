<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchivePublication extends Controller
{
  public static function cover() {
    $srcset = wp_get_attachment_image_srcset('medium');
    $thumb = the_post_thumbnail(
      'medium',
      array(
        'alt' => $attachment_alt,
        'srcset' => $srcset,
        'sizes'=>'200px',
      )
    );
    
    return $thumb;
  }


}
