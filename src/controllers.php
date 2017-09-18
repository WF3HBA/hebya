<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/', 'index.controller:indexAction')
        ->bind('homepage');

$app->get('/services', 'service.controller:serviceAction')
        ->bind('services');

$app->get('/services/description-ajax', 'service.controller:descriptionAction')
        ->bind('service_description');

$app->get('/innovateurs', 'innovator.controller:innovatorAction')
        ->bind('innovateurs');

$app->get('/clients', 'client.controller:clientAction')
        ->bind('clients');

$app->get('/emplois', 'emploi.controller:emploiAction')
        ->bind('emplois');

$app->get('/contact', 'contact.controller:contactAction')
        ->bind('contact');

$app->get('/register', 'register.controller:registerAction')
        ->bind('register');



/***ADMIN ROUTE***/

$app->get('/admin', 'admin.controller:adminAction')
        ->bind('admin');

$app->get('/admin/products', 'admin.product.controller:productListAction')
        ->bind('admin_product');

$app->get('/admin/providers', 'admin.provider.controller:providertListAction')
        ->bind('admin_provider');



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
