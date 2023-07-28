<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ParameterBag;

$app->before(function (Request $request) {
    if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
        $data = json_decode($request->getContent(), true);
        $request->request->replace(is_array($data) ? $data : array());
    }
});

// Gère la route du home
$app->get('/', function (Request $request) use ($app) {
    $songs = array();


    if ($app['security.authorization_checker']->isGranted('ROLE_USER')) {

        $username = $app['user']->getUsername();

        $query = $app['db']->createQueryBuilder()
        ->select('*')
        ->from('songs')
        ->where('username = :username')
        ->setParameter(':username', $username)
        ->execute();

        $songs = $query->fetchAll();
    }

    return $app['twig']->render('home.html.twig', array(
        'title' => 'Accueil',
        'songs' => $songs

    ));
})
 ->bind('homepage'); // Cette ligne déclare le nom de la route pour utilisation ailleurs

$app->post('/api', function (Request $request) use ($app) {
    $songData = array(
        'title' => $request->request->get('title'),
        'url'  => $request->request->get('url'),
        'artwork'  => $request->request->get('artwork')
    );

    $username = $app['user']->getUsername();

    $query = $app['db']->createQueryBuilder()
    ->insert('songs')
    ->values(
        array(
            'url' => ':url',
            'title' => ':title',
            'artwork' => ':artwork',
            'username' => ':username'
        )
    )
    ->setParameters(array(
        ':url' => $songData['url'],
        ':title' => $songData['title'],
        ':artwork' => $songData['artwork'],
        ':username' => $username
    ));

    $query->execute();

    return $app->json(array('success' => true), 201);
})
->before(function (Request $request, Application $app) {
    if (!$app['security.authorization_checker']->isGranted('ROLE_USER')) {
        return $app->redirect($app['url_generator']->generate('homepage'));
    }
});
