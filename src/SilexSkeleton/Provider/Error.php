<?php

namespace SilexSkeleton\Provider;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\ControllerCollection;

class Error implements ControllerProviderInterface
{
	public function connect(Application $app)
	{
		$controllers = $app['controllers_factory'];
	
		$app->error(function (\Exception $e, $code) use($app)
		{
			return $app['twig']->render('error.twig', [ 'code' => $code, 'message' => $e->getMessage() ] );
		});
	
		return $controllers;
	}	
}