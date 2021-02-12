<?php 

use App\Controller\Home;

//GERENCIANDO AS ROTAS DA URL
$routes = [
    '/' => Home::class,
    '/admin' => HomeAdmin::class,
];


?>