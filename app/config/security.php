<?php

use Silex\Provider\SecurityServiceProvider;
use SoundCloudApp\Providers\UserProvider;

// Configure le formulaire de connexion (ceci est natif au Silex/Symfony)
$app->register(new SecurityServiceProvider(), array(
    'security.firewalls' => array(
        'default' => array(
            'pattern' => '^.*$',
            'anonymous' => true,
            'form' => array('login_path' => '/connexion', 'check_path' => 'login_check'),
            'logout' => array('logout_path' => '/logout'),
            'users' => function () use ($app) {
                return new UserProvider($app['db']);
            },
        ),
    ),
    // On définit qu'un admin peut faire tout ce qu'un User peut faire
    'security.role_hierarchy' => array(
        'ROLE_ADMIN' => array('ROLE_USER')
    )
));
