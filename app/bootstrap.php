<?php

$loader = require_once __DIR__.'/../vendor/autoload.php';

// Add your own namespaces
//$loader->add('MyNamespace', __DIR__.'/../src/');

use Silex\Application;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\SwiftmailerServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;

$app = new Application();

require_once __DIR__.'/config.php';


$app->register(new FormServiceProvider());
$app->register(new SessionServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new UrlGeneratorServiceProvider());

// *******
// ** Twig
// *******
$app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../src/Resources/views',
//        'twig.options' => array('cache' => __DIR__.'/../cache'),
));

// *******
// ** Translations
// *******
$app->register(new TranslationServiceProvider(array(
    'locale_fallback' => $app['locale'],
    'locale' => $app['locale'],
)));

// *******
// ** Doctrine DBAL
// *******
$app->register(new Silex\Provider\DoctrineServiceProvider(), $app['db.options'] );

// *******
// ** SwiftMailer
// *******
$app->register(new SwiftmailerServiceProvider(array(
		'swiftmailer.options' => $app['mail.options'],
)));

return $app;