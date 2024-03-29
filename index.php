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
Routing::get('animal', 'ProfileController');
Routing::get('logout', 'SecurityController');
Routing::get('like', 'SearchController');
Routing::get('dislike', 'SearchController');
Routing::post('login', 'SecurityController');
Routing::post('register', 'SecurityController');
Routing::post('photoUpload', 'ProfileController');
Routing::post('userInfoUpload', 'ProfileController');
Routing::post('userAnimalUpload', 'ProfileController');
Routing::post('userAnimalInfoUpload', 'ProfileController');
Routing::post('addMessage', 'MessengerController');

Routing::run($path);
