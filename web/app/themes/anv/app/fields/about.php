<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$about = new FieldsBuilder('about');

$about
    ->setLocation('post_type', '==', 'page');
  
$about
	->addRepeater('chapters')
		->addText('title')
		->addWysiwyg('content');

return $about;
