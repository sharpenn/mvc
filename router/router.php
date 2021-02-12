<?php 

use App\Controller\{Home, HomeAdmin};

//GERENCIANDO AS ROTAS DA URL
$routes = [
    '/' => Home::class,
    '/admin' => HomeAdmin::class,
];


?>