<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$serie = new FieldsBuilder('Artwork series');

$serie
	->setLocation('taxonomy', '==', 'serie');
	
$serie
	->addImage('featured_image_serie', [
		'label' => 'Featured Image Serie',
		'instructions' => '',
		'required' => 1,
		'return_format' => 'array',
		'preview_size' => 'thumbnail',
		'library' => 'all',
	]);

return $serie;




