<?php

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
        'charset'  => 'utf8',
	    'host'     => 'localhost',
	        'port'     => '3306',
		    'dbname'   => 'yekola',
		        'user'     => 'yekola',
			    'password' => 'yekola'
			    );
// define log level
$app['monolog.level'] = 'WARNING';

