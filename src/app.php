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
    
    // le Usermanager est accesible dans le twig globale user_manager
    $twig->addGlobal('user_manager', $app['user.manager']);
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


/*********  C O N T R O L L E R  *********/

$app['index.controller'] = function () use ($app) {
    return new Controller\IndexController($app);
};

$app['about.controller'] = function () use ($app) {
    return new Controller\AboutController($app);
};

$app['product.controller'] = function () use ($app) {
    return new Controller\ProductController($app);
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

$app['opportunity.controller'] = function () use ($app) {
    return new Controller\OpportunityController($app);
};

$app['contact.controller'] = function () use ($app) {
    return new Controller\ContactController($app);
};

$app['register.controller'] = function () use ($app) {
    return new Controller\RegisterController($app);
};
$app['login.controller'] = function () use ($app) {
    return new Controller\LoginController($app);
};

$app['user.controller'] = function () use ($app) {
    return new Controller\UserController($app);
};

$app['profil.controller'] = function () use ($app) {
    return new Controller\ProfilController($app);
};

/***************A D M I N   C O N T R O L L E R****************/

$app['admin.controller'] = function () use ($app) {
    return new Controller\Admin\AdminController($app);
};

$app['admin.product.controller'] = function () use ($app) {
    return new Controller\Admin\AdminProductController($app);
};

$app['admin.provider.controller'] = function () use ($app) {
    return new Controller\Admin\AdminProviderController($app);
};

$app['admin.service.controller'] = function () use ($app) {
    return new Controller\Admin\AdminServiceController($app);
};

$app['candidacy.controller'] = function () use ($app) {
    return new Controller\CandidacyController($app);
};

$app['admin.client.controller'] = function () use ($app) {
    return new Controller\Admin\AdminClientController($app);
};

$app['admin.team.controller'] = function () use ($app) {
    return new Controller\Admin\AdminTeamController($app);
};

$app['mention.controller'] = function () use ($app) {
    return new Controller\MentionController($app);
};


/*********  R E P O S I T O R Y  *********/


$app['country.repository'] = function () use ($app){
    return new Repository\CountryRepository($app['db']);
};

$app['service.repository'] = function () use ($app){
    return new Repository\ServiceRepository($app['db']);
};

$app['product.repository'] = function () use ($app){
    return new Repository\ProductRepository($app['db']);
};

$app['candidacy.repository'] = function () use ($app){
    return new Repository\CandidacyRepository($app['db']);
};

$app['provider.repository'] = function () use ($app){
    return new Repository\ProviderRepository($app['db']);
};

$app['about.repository'] = function () use ($app) {
    return new Repository\AboutRepository($app['db']);
};

$app['team.repository'] = function () use ($app) {
    return new Repository\TeamRepository($app['db']);
};

$app['opportunity.repository'] = function () use ($app) {
    return new Repository\OpportunityRepository($app['db']);
};

$app['client.repository'] = function () use ($app) {
    return new Repository\ClientRepository($app['db']);
};

$app['user.repository'] = function () use ($app) {
    return new Repository\UserRepository($app['db']);
};


/*************M A N A G E R*************/

$app['client.manager'] = function() use ($app){
    return new \Service\ClientManager($app['session']);
};

$app['user.manager'] = function() use ($app){
    return new \Service\UserManager($app['session']);
};

return $app;