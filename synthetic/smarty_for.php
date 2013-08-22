<?php
header('content-type: text/plain; charset=utf-8');
$data = json_decode(file_get_contents('data.json'), true);

// подключаем Smarty
require('vendor/Smarty/Smarty.class.php');
$smarty = new Smarty();
$smarty->compile_check = false;
$smarty->template_dir = 'templates/smarty';
$smarty->compile_dir = 'cache';
$smarty->cache_dir = "cache";
$smarty->debugging = false;

echo "foreach: \n";

// тестим Smarty на foreach
$startTime = microtime(true);
$startMemory = memory_get_usage();
$smarty->assign($data);
$smarty->fetch('foreach.tpl');
echo "Smarty: ", microtime(true)-$startTime," s";
echo "\nstart: ",number_format($startMemory,0,"."," ")," b";
echo "\nend: ",number_format(memory_get_usage(),0,"."," ")," b";
echo "\npeak: ",number_format(memory_get_peak_usage(),0,"."," ")," b";