<?php

	//Composer autoloader

	$composerAutoload	=	__DIR__.'/../vendor/autoload.php';

	if(!file_exists($composerAutoload)){

		echo "No composer autoloader has been found, for running the tests you need to run composer install";
		exit(1);

	}

	$loader = require $composerAutoload;

