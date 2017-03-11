<?php

spl_autoload_register(function ($class) {

	$class	=	trim($class,'\\');
	$ns		=	'stange\\caching\\cashe';
	$pos		=	strpos($class,$ns);

	if($pos===FALSE){

		return;

	}

	$baseDir		=	__DIR__;

	$class		=	substr($class,strlen($ns));
	$class		=	preg_replace('/\\\\/',DIRECTORY_SEPARATOR,$class);

	$file		=	sprintf ('%s%s.php',$baseDir,$class);

	if (!file_exists($file)){

		$msg	=	"Autoloader error: File $file was not found";

		throw new \RuntimeException($msg);

	}

	if(!is_readable($file)){

		$msg	=	"Autoloader error: File $file is not readable, check file  permissions";
		throw new \RuntimeException($msg);

	}

	require $file;

});
