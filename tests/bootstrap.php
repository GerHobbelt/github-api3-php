<?php

require_once dirname(__FILE__) . '/../lib/vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php';

$loader = new Symfony\Component\ClassLoader\UniversalClassLoader();
$loader->registerNamespaces(array(
    'GitHub\\Tests'    => __DIR__.'/',
    'GitHub'           => __DIR__.'/../lib'
));
$loader->register();