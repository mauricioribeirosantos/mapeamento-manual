<?php

	//require __DIR__ . '/class/JsonExport.php';
	//require __DIR__ . '/class/XmlExport.php';


	//ao chamar as classe aqui pelo use evito de chamar a classe em 
	//print(new /Export/JsonExport())->doExport();
	use Export\JsonExport;
	use Export\XmlExport;

	function autoload($class) {
		$baseFolder = __DIR__ . '/src/';

		$class = str_replace('\\' , '/', $class);
		
		require $baseFolder . $class . '.php';
	}

	spl_autoload_register('autoload');

	if($_GET['export'] == 'xml') {
		//primeira \ significa diretório raiz 
		print(new XmlExport())->doExport();
	}


	if($_GET['export'] == 'json') {
		print(new JsonExport())->doExport();
	}
