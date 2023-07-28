<?php
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

// Ce chemin est indiqué via un chemin généré depuis la page list.php
// Lorsque que la requête get est exécuté, on récupére {id} depuis le param de la function ($id)
// $app['db']->delete('users', array('id' => $id)); la commande DELETE supprime le 'users' en DB qui posséde 'id', 'id' sera désigné via le param $id
// return $app->redirect($app['url_generator']->generate('list')); à chaque éxécution de la requête, il éffectura une redirection automatique vers /list
$app->get('/list/users/{id}', function ($id) use ($app) {

    $app['db']->delete('users', array('id' => $id));

    return $app->redirect($app['url_generator']->generate('list'));

});

 $app->get('/list', function (Request $request) use ($app) {
$users = array();

   $username = $app['user']->getUsername();

   $query = $app['db']->createQueryBuilder()
       ->select('*')
       ->from('users')
       ->execute();
       
       $users = $query->fetchAll();


     return $app['twig']->render('list.html.twig', array(
         'title' => 'Liste des utilisateurs',
         'users' => $users
     ));
 })

->bind('list');
