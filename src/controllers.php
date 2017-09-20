<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

/********* F R O N T *********/

$app->get('/', 'index.controller:indexAction')
        ->bind('homepage');

$app->get('/apropos', 'about.controller:aboutAction')
        ->bind('apropos');

$app->get('/services', 'service.controller:serviceAction')
        ->bind('services');

$app->get('/services/ajax-request', 'service.controller:targetAction')
        ->bind('services_ajax');

$app->get('/innovateurs', 'innovator.controller:innovatorAction')
        ->bind('innovateurs');

$app->get('/clients', 'client.controller:clientAction')
        ->bind('clients');

$app->get('/offres', 'opportunity.controller:opportunityAction')
        ->bind('opportunity');

$app->get('/contact', 'contact.controller:contactAction')
        ->bind('contact');

$app->get('/register', 'register.controller:registerAction')
        ->bind('register');

$app->match('/candidatures/{postId}', 'candidacy.controller:candidacyAction')
        ->value('postId', null)
        ->bind('candidacy');

$app->match('/login', 'user.controller:loginAction')
        ->bind('login');

$app->get('/product', 'product.controller:productAction')
        ->bind('product');



/***ADMIN ROUTE***/
//crée un groupe de route

$admin = $app['controllers_factory'];
//toutes les url des routes créees par $admin sont préfixées par admin
$app->mount('/admin', $admin);

$admin->get('/accueil', 'admin.controller:adminAction')
        ->bind('admin');


/******ADMIN PROVIDER ACTION*********/

$admin->get('/providers', 'admin.provider.controller:providertListAction')
        ->bind('admin_provider');

$admin->match('/providers/edition/{id}', 'admin.provider.controller:editAction')
        ->value('id', null)
        ->bind('admin_provider_edit');

$admin->get('/providers/suppression/{id}', 'admin.provider.controller:deleteAction')
        ->assert('id','\d+')
        ->bind('admin_provider_delete');

/*******ADMIN PRODUCT ACTION*******/

$admin->get('/products', 'admin.product.controller:productListAction')
        ->bind('admin_product');

$admin->match('/products/edition/{id}', 'admin.product.controller:editAction')
        ->value('id', null)
        ->bind('admin_product_edit');

$admin->get('/products/suppression/{id}', 'admin.product.controller:deleteAction')
        ->assert('id','\d+')
        ->bind('admin_product_delete');

/*******ADMIN CLIENT ACTION*******/

$admin->get('/clients', 'admin.client.controller:clientListAction')
        ->bind('admin_client');

$admin->match('/clients/edition/{id}', 'admin.client.controller:editAction')
         ->value('id', null)
        ->bind('admin_client_edit');

$admin->get('/clients/suppression/{id}', 'admin.product.controller:deleteAction')
        ->assert('id','\d+')
        ->bind('admin_client_delete');



$admin->get('/services', 'admin.service.controller:serviceListAction')
        ->bind('admin_service');

$admin->match('/services/edition/{id}', 'admin.service.controller:editAction')
            ->value('id', null)
            ->bind('admin_service_edit');


$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
