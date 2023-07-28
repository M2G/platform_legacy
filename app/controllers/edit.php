<?php
use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// supprimer son compte
// get vers le chemin {id}, dans la page edit.php lorsque ce dernier devra récupérer le lien qui contient {id} sera automatiquement supprimer,
// puis un redirect vers la homepage prend effet, d'ou le return qui stop la function.
$app->get('/edit/users/{id}', function ($id) use ($app) {

    $app['db']->delete('users', array('id' => $id));

    return $app->redirect($app['url_generator']->generate('homepage'));
});

// editer son compte
$app->post('/edit', function (Request $request) use ($app) {
// in $requete obj :
// - $request->request - the POST parameters
// - $request->query - the GET parameters
//$data = $request->request->all(); // pour voir tout les donnée de l'utilisateur connecté
$data = $request->request->get('username'); // retourne la valeur saisie dans l'username utilisateur
$username = $app['user']->getUsername(); // retourne l'username de l'utilisateur

// Ce qui faut resoudre c'est que le username lorsque du changement, la database $app['user']->getUsername() retourne NULL, chose normal, car le username ne correspond plus.
// De ce fait il faut parvenir à une solution pour qu'il retourne 1 et non NULL.
$app['db']->update('users', array('username' => $data), array('username' => $username));

// $message = 'Modification du compte ont bien été prises en compte.';
// return new Response($message);
return $app->redirect($app['url_generator']->generate('edit'));

});


$app->get('/edit', function (Request $request) use ($app) {

$users = array();

$username = $app['user']->getUsername();

$query = $app['db']->createQueryBuilder()
    ->select('*')
    ->from('users')
    ->where('username = :username')
    ->setParameter(':username', $username)
    ->execute();
    $users = $query->fetchAll();

var_dump($users);


return $app['twig']->render('edit.html.twig', array(
    'title' => 'Modification du compte',
    'users' => $users
    ));
})
 ->bind('edit');
