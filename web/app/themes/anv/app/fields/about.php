<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$page_en = get_page_by_title('About');
$page_ca = get_page_by_title('Sobre l’Arxiu Navarro Vives');
$page_es = get_page_by_title('Sobre Archivo Navarro Vives');

$about = new FieldsBuilder('about');

$about
	->setLocation('page', '==', $page_en->ID)
		->or('page', '==', $page_ca->ID)
		->or('page', '==', $page_es->ID);
  
$about
	->addRepeater('chapters')
		->addText('title')
		->addWysiwyg('content');

return $about;
