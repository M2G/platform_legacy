<?php

$app['twig.path'] = array(__DIR__.'/../../templates');
$app['twig.options'] = array('cache' => __DIR__.'/../../var/cache/twig');

$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // Ici on pourrait ajouter des tags et filtres twig custom
    return $twig;
});
