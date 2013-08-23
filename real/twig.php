<?php

require_once 'vendor/Twig/Autoloader.php';
Twig_Autoloader::register();
$twig = new Twig_Environment(new Twig_Loader_Filesystem('./templates'), array(
	'cache' => 'cache', 
	'autoescape' => false,
	'debug' => false,
));

$vars = array(
	'title' => 'Twig',
    'name'  => 'John',
	'categories'  => array('Programming', 'C++', 'Twig', 'Symfony2', 'Drupal', 'Programmer Jokes', 'Smarty', 'Templates')
);

$startTime = microtime(true);
$startMemory = memory_get_usage();

echo $twig->render('twig_content.tpl', $vars);

echo "Twig: ", microtime(true)-$startTime," s";
echo "<br />start: ",number_format($startMemory,0,"."," ")," b";
echo "<br />end: ",number_format(memory_get_usage(),0,"."," ")," b";
echo "<br />peak: ",number_format(memory_get_peak_usage(),0,"."," ")," b";