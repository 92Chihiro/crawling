<?php

$url='https://no1s.biz/';
$contents = file_get_contents($url);

$doc = new DOMDocument;
@$doc->loadHTML($contents);
$elements = $doc->getElementsByTagName('a');

foreach($elements as $val) {
	$attributes = $val->attributes;
	echo $attributes->getNamedItem('href')->nodeValue;
	echo $val->nodeValue;
	echo '<br />';
}; 

?>