<?php 

use App\Controller\{Home, HomeAdmin};

//GERENCIANDO AS ROTAS DA URL
$routes = [
    null => Home::class,
    '/' => Home::class,
    '/admin' => HomeAdmin::class,
];


?>