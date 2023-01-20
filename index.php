<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('login', 'DefaultController');
Routing::get('register', 'DefaultController');
Routing::get('search', 'SearchController');
Routing::get('chat', 'MessengerController');
Routing::get('profile', 'ProfileController');
Routing::get('logout', 'SecurityController');
Routing::post('login', 'SecurityController');
Routing::post('register', 'SecurityController');
Routing::post('photoUpload', 'ProfileController');
Routing::post('userInfoUpload', 'ProfileController');

Routing::run($path);
