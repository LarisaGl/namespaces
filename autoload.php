<?php

spl_autoload_register(function ($className) {
	$filePath =str_replace('\\', DIRECTORY_SEPARATOR, $className).'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
});

spl_autoload_register(function ($intName) { 
    $filePath =str_replace('\\', DIRECTORY_SEPARATOR, $intName).'.php'; 
    if(file_exists($filePath)) { 
        include "$filePath"; 
    } 
});