<?php
chdir(dirname(__DIR__));
define("APP_PATH", getcwd());
include APP_PATH."/vendor/autoload.php";

$config = array(
    'components' => array(
        'cache'=> 'Xend\Cache\MemcachedClient'
    ),
    'config' => array(
        'cache' => array(
            'host' => 'localhost',
            'port' => 11211
        ),
        'dispatcher' => array(
            'defaultModule' => 'App',
            'routers' => array(
                array(
                    'type' => 'literal',
                    'url' => '/',
                    'controller' => 'Index',
                    'action' => 'index',
                ),
                array(
                    'type' => 'regex',
                    'url' => '^\/node\/(?P<id>\d+)$',
                    'controller' => 'node',
                    'action' => 'index'
                )
            )
        ),
        'view' => array(
            'path' => APP_PATH."/App/view/",
            'layout' => 'layout.php'
        ),
        'db' => array(
            'host' => "localhost",
            'username' => "root",
            'password' => '',
            'dbname' => 'wiki'
        )
    ),
    'configCachePath' => APP_PATH."/cache/config.php",
    'configCacheEnable' => false
);


$app = \Xend\Application::init($config);

$response = $app->run();
