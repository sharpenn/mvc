<?php 

require __DIR__.'/vendor/autoload.php';

//EXTRAI A ROTA DA URL
$uri = $_SERVER['REQUEST_URI'];

//GERENCIAMENTO DE ROTAS 
include __DIR__.'/router/router.php';

//VERIFICA SE A ROTA EXISTE NO ARRAY DAS ROTAS POSSÍVEIS
if(array_key_exists($uri, $routes)) {
    $path = $routes[$uri];
}

//CASO NÃO EXISTA, REDIRECIONA PARA A PÁGINA 404
else {
    $path = Error404::class;
}

$obRoute = new $path();
$obRoute->render();




?>