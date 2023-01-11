<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('login', 'DefaultController');
Routing::get('register', 'DefaultController');
Routing::get('search', 'DefaultController');
Routing::get('chat', 'DefaultController');
Routing::get('profile', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('photoUpload', 'ProfileController');

Routing::run($path);
