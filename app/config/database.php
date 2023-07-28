<?php

use Silex\Provider\DoctrineServiceProvider;
use Doctrine\DBAL\Schema\Table;

// Configure la connexion à la BDD
$app->register(new DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'    => 'pdo_mysql',
        'host'      => 'localhost',
        'dbname'    => 'silex',
        'user'      => 'root',
        'password'  => 'root',
        'charset'   => 'utf8',
    )
));

$schema = $app['db']->getSchemaManager();


// Crée notre table d'utilisateurs si elle n'existe pas
if (!$schema->tablesExist('users')) {
    $users = new Table('users');
    $users->addColumn('id', 'integer', array('unsigned' => true, 'autoincrement' => true));
    $users->setPrimaryKey(array('id'));
    $users->addColumn('username', 'string', array('length' => 32));
    $users->addUniqueIndex(array('username'));
    $users->addColumn('password', 'string', array('length' => 255));
    $users->addColumn('roles', 'string', array('length' => 255));

    $schema->createTable($users);

// Insertion en base de donnée d'utilisateur
    $app['db']->insert('users', array(
      'username' => 'admin',
      'password' => '$2y$13$GbW1/LKOC7BJx4WX4GhAY.PBeQyImzyhRcHUbKmLhOEq641KQ.Rp2', // = "password"
      'roles' => 'ROLE_ADMIN'
    ));

    $app['db']->insert('users', array(
      'username' => 'toto',
      'password' => '$2y$13$GbW1/LKOC7BJx4WX4GhAY.PBeQyImzyhRcHUbKmLhOEq641KQ.Rp2', // = "password"
      'roles' => 'ROLE_USER'
    ));

}

// Crée notre table d'utilisateurs si elle n'existe pas
if (!$schema->tablesExist('songs')) {
    $songs = new Table('songs');
    $songs->addColumn('id', 'integer', array('unsigned' => true, 'autoincrement' => true));
    $songs->setPrimaryKey(array('id'));
    $songs->addColumn('url', 'string', array('length' => 255));
    $songs->addUniqueIndex(array('url'));
    $songs->addColumn('username', 'string', array('length' => 255));
    $songs->addColumn('title', 'string', array('length' => 255));
    $songs->addColumn('artwork', 'string', array('length' => 255));

    $schema->createTable($songs);

// Insertion en base de donnée de musique
    $app['db']->insert('songs', array(
      'url' => 'https://api.soundcloud.com/tracks/272802309/stream?client_id=892031c10866d66948c9a34b24b9fdf7',
      'title' => 'Tory Lanez - Controlla',
      'artwork' => 'https://i1.sndcdn.com/artworks-000172182566-cjd8iy-large.jpg',
      'username' => 'admin'
    ));

$app['db']->insert('songs', array(
      'url' => 'https://api.soundcloud.com/tracks/300541034/stream?client_id=892031c10866d66948c9a34b24b9fdf7',
      'title' => 'Tory Lanez - Bal Harbour (Feat. A Ferg) (Prod. C Sick)',
      'artwork' => 'https://i1.sndcdn.com/artworks-000200878726-6tm08q-large.jpg',
      'username' => 'admin'
    ));

  $app['db']->insert('songs', array(
        'url' => 'https://api.soundcloud.com/tracks/189457983/stream?client_id=892031c10866d66948c9a34b24b9fdf7',
        'title' => 'Two-9 – Full House ft. Wiz Khalifa & Ty Dolla Sign',
        'artwork' => 'https://i1.sndcdn.com/artworks-000105625354-07wyjk-large.jpg',
        'username' => 'toto'
    ));

  $app['db']->insert('songs', array(
        'url' => 'https://api.soundcloud.com/tracks/278264307/stream?client_id=892031c10866d66948c9a34b24b9fdf7',
        'title' => 'Tory Lanez - Tim Duncan (Prod. C-Sick)',
        'artwork' => 'https://i1.sndcdn.com/artworks-000149689140-0a43et-large.jpg',
        'username' => 'toto'
    ));
}
