<?
	$files = array(
		$_SERVER["DOCUMENT_ROOT"]."bitrix/php-interface/include/functions.php",
		);
	foreach ($files as $file) {
		if (file_exists($file))
			require_once($file);
	}