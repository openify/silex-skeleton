<?php
/**
 * Default configuration
 */

// *******
// ** Misc
// *******
$app['debug'] = true;
$app['locale'] = 'fr';
$app['secret'] = 'klghq3+21sqd*ljh6-54dsfhsfgnh';
// *******


// *******
// ** Database
// *******
$app['db.options'] = array(
    'dbs.options' => array (
        'prod' => array(
            'driver'    => 'pdo_mysql',
            'host'      => 'localhost',
            'dbname'    => '',
            'user'      => '',
            'password'  => '',
        ),
        'dev' => array(
            'driver'    => 'pdo_mysql',
            'host'      => 'localhost',
            'dbname'    => '',
            'user'      => '',
            'password'  => '',
        ),
    ),
);
// *******

// *******
// ** SwiftMailer
// *******
// @see http://silex.sensiolabs.org/doc/providers/swiftmailer.html#parameters
// SMTP Transport
$app['swiftmailer.options'] = array(
		'host' => 'localhost',
		'port' => '25',
		'username' => '',
		'password' => '',
		'encryption' => null,
		'auth_mode' => null,
);