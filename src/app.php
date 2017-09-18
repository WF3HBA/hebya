<?php

use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    return $twig;
});

$app->register(
        new Silex\Provider\DoctrineServiceProvider(),
        [
            'db.options' => [
                'driver' => 'pdo_mysql',
                'host' => 'localhost',
                'dbname' => 'hebya',
                'user' => 'root',
                'password' => '',
                'charset' => 'utf8'
            ]
        ]
);

// gestionnaire de sessions de Symfony ($app['session'])
$app->register(new Silex\Provider\SessionServiceProvider());

$app['index.controller'] = function () use ($app) {
    return new Controller\IndexController($app);
};

$app['service.controller'] = function () use ($app) {
    return new Controller\ServiceController($app);
};

$app['innovator.controller'] = function () use ($app) {
    return new Controller\InnovatorController($app);
};

$app['client.controller'] = function () use ($app) {
    return new Controller\ClientController($app);
};

$app['contact.controller'] = function () use ($app) {
    return new Controller\ContactController($app);
};

$app['register.controller'] = function () use ($app) {
    return new Controller\RegisterController($app);
};


$app['admin.controller'] = function () use ($app) {
    return new Controller\Admin\AdminController($app);
};


$app['admin.product.controller'] = function () use ($app) {
    return new Controller\Admin\AdminProductController($app);
};


$app['admin.provider.controller'] = function () use ($app) {
    return new Controller\Admin\AdminProviderController($app);
};



//Repository

$app['country.repository'] = function () use ($app){
    return new Repository\CountryRepository($app['db']);
};

$app['service.repository'] = function () use ($app){
    return new Repository\ServiceRepository($app['db']);
};


$app['product.repository'] = function () use ($app){
    return new Repository\ProductRepository($app['db']);
};


$app['provider.repository'] = function () use ($app){
    return new Repository\ProviderRepository($app['db']);
};


return $app;