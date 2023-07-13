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
		'return_format' => 'id',
		'preview_size' => 'thumbnail',
		'library' => 'all',
	])
    ->addNumber('orden', [
        'label' => 'Orden',
	])
	->addText('periodo', [
		'label' => 'Periodo',
	])
	->addText('nombre_periodo', [
		'label' => 'Nombre del periodo',
    ])
    ->addText('pie_nombre', [
		'label' => 'Pie de foto',
    ])
    ->addText('pie_medidas', [
		'label' => 'Medidas para el pie de foto',
	]);

return $serie;
