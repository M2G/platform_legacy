<?php

// Importer nos dépendances externes
use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\VarDumperServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\LocaleServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\CsrfServiceProvider;

// Initialiser l'application Silex
$app = new Application();

// Register les services que l'on veut utiliser
$app->register(new SessionServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app->register(new ServiceControllerServiceProvider());
$app->register(new VarDumperServiceProvider());
$app->register(new FormServiceProvider());
$app->register(new CsrfServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new LocaleServiceProvider());
$app->register(new TranslationServiceProvider());

// Gérer la configuration de quelques services
require_once __DIR__.'/config/assets.php';
require_once __DIR__.'/config/database.php';
require_once __DIR__.'/config/security.php';
require_once __DIR__.'/config/twig.php';

// Ajouter notre gestionnaire d'utilisateur
require_once __DIR__.'/providers/user.php';

// Activer les logs du développement
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/development.log',
));

return $app;
