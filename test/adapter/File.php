<?php 

	require __DIR__."/../base.php";

	use \stange\caching\cashe\adapter\File	as	FileCache;
	use \stange\logging\Slog;

	try{

		$cache	=	new FileCache([
												'entry'	=>	'cache',
												'log'		=>	new Slog([
																				'echo'	=>	TRUE
												])
		]);

		$value	=	$cache->sload('test','cache');

		echo "Value obtained: $value\n";

	}catch(\Exception $e){

		echo $e->getMessage()."\n";

	}
