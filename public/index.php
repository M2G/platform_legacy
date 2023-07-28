<?php

use Silex\Provider\WebProfilerServiceProvider;

// Importer toutes les dépendances chargées automatiquement par composer
require_once __DIR__.'/../vendor/autoload.php';

// Importer le coeur de notre application
$app = require_once __DIR__.'/../app/main.php';

// Importer les controllers
require __DIR__.'/../app/controllers/homepage.php';
require __DIR__.'/../app/controllers/register.php';
require __DIR__.'/../app/controllers/login.php';
require __DIR__.'/../app/controllers/playlist.php';
require __DIR__.'/../app/controllers/list.php';
require __DIR__.'/../app/controllers/edit.php';

// Configurer l'application en mode debug
$app['debug'] = true;

if ($app['debug'] == true) {
    // Activer la barre de debug Symfony
    $app->register(new WebProfilerServiceProvider(), array(
        'profiler.cache_dir' => __DIR__.'/../cache/profiler',
        'profiler.mount_prefix' => '/_profiler',
    ));
}

// Lance l'application
$app->run();
