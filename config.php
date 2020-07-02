<?php
define('PATH_SITE',__DIR__);
define('URL_SITE','http://localhost/export');

define('DB_HOST','localhost');
define('DB_USER','admin_andrey');
define('DB_PASSWORD','qqqqqq');
define('DB_NAME','admin_excel');

// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASSWORD','');
// define('DB_NAME','export');

class Config {
	
	public $cells = array(
		'A'=>'title',
		'B'=>'date',
		'C'=>'content',
	);
}
?>