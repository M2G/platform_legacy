<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

// Gère la route du home
$app->get('/connexion', function (Request $request) use ($app) {
    return $app['twig']->render('login.html.twig', array(
        'title' => 'Connexion',
        'error' => $app['security.last_error']($request)
    ));
})
->before(function (Request $request, Application $app) {
    if ($app['security.authorization_checker']->isGranted('ROLE_USER')) {
        return $app->redirect($app['url_generator']->generate('homepage'));
    }
})
->bind('login'); // Cette ligne déclare le nom de la route pour utilisation ailleurs
