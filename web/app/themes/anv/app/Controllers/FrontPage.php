<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  public function image() {
    $array = get_field('background_image', 'option');
    return $array[array_rand($array)]['bg_img']['id'];
  }
}
