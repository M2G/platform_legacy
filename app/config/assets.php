<?php

use Silex\Provider\AssetServiceProvider;

// Configure la version en utilisation de nos assets (JS, CSS)
$app->register(new AssetServiceProvider(), array(
    'assets.version' => 'v1',
    'assets.version_format' => '%s?version=%s'
));
