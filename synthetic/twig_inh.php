<?php
header('content-type: text/plain; charset=utf-8');
$data = json_decode(file_get_contents('data.json'), true);

// подключаем Twig
require('vendor/Twig/Autoloader.php');
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates/twig');
$twig = new Twig_Environment($loader, array(
	'cache' => 'cache',
	'autoescape' => false, 
	"debug" => false,
));

echo "inheritance: \n";

// тестим Twig на inheritance
$startTime = microtime(true);
$startMemory = memory_get_usage();
$template = $twig->loadTemplate('b100.tpl');
$template->render($data);
echo "Twig: ", microtime(true)-$startTime," s";
echo "\nstart: ",number_format($startMemory,0,"."," ")," b";
echo "\nend: ",number_format(memory_get_usage(),0,"."," ")," b";
echo "\npeak: ",number_format(memory_get_peak_usage(),0,"."," ")," b";