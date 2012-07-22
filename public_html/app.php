<?php

require_once __DIR__.'/../Symfony/app/bootstrap.php.cache';
require_once __DIR__.'/../Symfony/app/AppKernel.php';
//require_once __DIR__.'/../Symfony/app/AppCache.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new AppKernel('prod', false);
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);
$kernel->handle(Request::createFromGlobals())->send();
