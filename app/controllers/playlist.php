<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ParameterBag;

// si le username = username donc supprimer tout les id qui correspond à l'id de l'utilisateur connecté.
// $app->get('/playlist/{id}', function ($id) use ($app) {
//   var_dump($id);
//
//   $username = $app['user']->getUsername();
//
//    if($id == 0){
//
//    $app['db']->delete('songs', array('username' => $username));
//
//   }
//
//     $app['db']->delete('songs', array('id' => $id));
//
//     return $app->redirect($app['url_generator']->generate('homepage'));
//
// });

// Gère la route du home
$app->get('/playlist', function (Request $request) use ($app) {
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

    // return json_encode($songs);

    return $app['twig']->render('playlist.html.twig', array(
        'title' => 'Playlist',
        'songs' => $songs,
        'jsonString' => json_encode($songs)
    ));
})
 ->bind('playlist');
