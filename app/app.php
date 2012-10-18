<?php 
$app = require_once __DIR__.'/bootstrap.php';

$app->mount(null, new SilexSkeleton\Provider\Error() );
$app->mount('/', new SilexSkeleton\Provider\Controller\Index() );

return $app;