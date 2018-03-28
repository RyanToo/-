<?php
function autoloader($class_name){
	$cl = '.class.php';
	$inFa = '.interface.php';
    $class_name = str_replace('\\' , DIRECTORY_SEPARATOR, $class_name);
    $ClassFileWay = $class_name . $cl;
    $InterfaceFileWay = $class_name . $inFa;
    if (file_exists($ClassFileWay)) {
        include "$pathToClassFile";
    } elseif (file_exists($InterfaceFileWay)) {
        include "$pathToInterfaceFile";
    }
}


function AutoloaderCentr($class_name)
{
    $class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
    $ClassFileWay = 'ñentr' . DIRECTORY_SEPARATOR . $class_name . $cl;
    $InterfaceFileWay = 'centr' . DIRECTORY_SEPARATOR . $class_name . $inFa;
    if (file_exists($ClassFileWay)) {
        include "$pathToClassFile";
    } elseif (file_exists($InterfaceFileWay)) {
        include "$pathToInterfaceFile";
    }
}
spl_autoload_register('AutoloaderCentr');
spl_autoload_register('autoloader');