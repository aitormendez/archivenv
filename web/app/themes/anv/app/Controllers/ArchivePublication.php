<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ArchivePublication extends Controller
{
    public static function cover() {

        global $post;

        if ( has_post_thumbnail() ) {

            $srcset = wp_get_attachment_image_srcset('medium');
            $thumb = get_the_post_thumbnail(
                $post->ID,
                'medium',
                array(
                    'srcset' => $srcset,
                    'sizes'=>'200px',
                )
            );
        } else {
            $thumb = '';
        }

        return $thumb;
    }


}
