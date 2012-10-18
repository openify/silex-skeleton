<?php

namespace SilexSkeleton\Provider\Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\ControllerCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class Index implements ControllerProviderInterface
{

    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

		$controllers->get('/', function () use ($app) {
			return $app['twig']->render('index.twig' );
		})->bind('homepage');

		return $controllers;
    }
}