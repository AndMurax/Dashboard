<?php

use CodeIgniter\Router\RouteCollection;


// Rota de autentificação
$routes->get('/auth/login', 'Auth::login');
