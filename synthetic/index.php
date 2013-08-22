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

// подключаем Smarty
require('vendor/Smarty/Smarty.class.php');
$smarty = new Smarty();
$smarty->compile_check = false;
$smarty->template_dir = 'templates/smarty';
$smarty->compile_dir = 'cache';
$smarty->cache_dir = "cache";
$smarty->debugging = false;

echo "echo: \n";

// тестим Twig на echo
$startTime = microtime(true);
$startMemory = memory_get_usage();
$template = $twig->loadTemplate('echo.tpl');
$template->render($data);
echo "Twig   - ", microtime(true)-$startTime, "(",$startMemory,", ",memory_get_usage(),", ",memory_get_peak_usage(),")";

echo "\n";

// тестим Smarty на echo
$startTime = microtime(true);
$startMemory = memory_get_usage();
$smarty->assign($data);
$smarty->fetch('echo.tpl');
echo "Smarty - ", microtime(true)-$startTime, "(",$startMemory,", ",memory_get_usage(),", ",memory_get_peak_usage(),")";

echo "\n\nforeach: \n";

// тестим Twig на foreach
$startTime = microtime(true);
$startMemory = memory_get_usage();
$template = $twig->loadTemplate('foreach.tpl');
$template->render($data);
echo "Twig   - ", microtime(true)-$startTime, "(",$startMemory,", ",memory_get_usage(),", ",memory_get_peak_usage(),")";

echo "\n";

// тестим Smarty на foreach
$startTime = microtime(true);
$startMemory = memory_get_usage();
$smarty->assign($data);
$smarty->fetch('foreach.tpl');
echo "Smarty - ", microtime(true)-$startTime, "(",$startMemory,", ",memory_get_usage(),", ",memory_get_peak_usage(),")";

echo "\n\ninheritance: \n";

// тестим Twig на inheritance
$startTime = microtime(true);
$startMemory = memory_get_usage();
$template = $twig->loadTemplate('b100.tpl');
$template->render($data);
echo "Twig   - ", microtime(true)-$startTime, "(",$startMemory,", ",memory_get_usage(),", ",memory_get_peak_usage(),")";

echo "\n";

// тестим Smarty на inheritance
$startTime = microtime(true);
$startMemory = memory_get_usage();
$smarty->assign($data);
$smarty->fetch('b100.tpl');
echo "Smarty - ", microtime(true)-$startTime, "(",$startMemory,", ",memory_get_usage(),", ",memory_get_peak_usage(),")";