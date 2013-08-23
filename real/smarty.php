<?php

require_once "vendor/Smarty/Smarty.class.php";
$smarty = new Smarty;
$smarty->template_dir = "templates/";
$smarty->compile_dir = "cache/";
$smarty->cache_dir = "cache/";
$smarty->debugging = false;

$vars = array(
	'title' => 'Smarty',
    'name'  => 'John',
	'categories'  => array('Programming', 'C++', 'Twig', 'Symfony2', 'Drupal', 'Programmer Jokes', 'Smarty', 'Templates')
);

$startTime = microtime(true);
$startMemory = memory_get_usage();

$smarty->assign($vars);
$smarty->display('smarty_content.tpl');

echo "Smarty: ", microtime(true)-$startTime," s";
echo "<br />start: ",number_format($startMemory,0,"."," ")," b";
echo "<br />end: ",number_format(memory_get_usage(),0,"."," ")," b";
echo "<br />peak: ",number_format(memory_get_peak_usage(),0,"."," ")," b";