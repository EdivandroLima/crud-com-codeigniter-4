<?php

$routes->get('/', 'DashboardController::index');
// create
$routes->get('/novo-usuario', 'UsuarioController::create');
$routes->post('/novo-usuario', 'UsuarioController::store');
// edit
$routes->get('/editar-usuario/(:num)', 'UsuarioController::edit/$1');
$routes->put('/editar-usuario/(:num)', 'UsuarioController::update/$1');

$routes->delete('/remover-usuario/(:num)', 'UsuarioController::delete/$1');
