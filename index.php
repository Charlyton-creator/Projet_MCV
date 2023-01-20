<?php
define("ROOT", str_replace('index.php', "", $_SERVER['SCRIPT_FILENAME']));
//transformer le $_GET['p'] en un tableau en utilisant comme séparateur le /
$uri = $_SERVER['REQUEST_URI'];
if(!empty($uri) && $uri != '/' && $uri[-1] === '/'){
    $uri = substr($uri, 0, -1);
    http_response_code(301);

    header("location: ".$uri);
    exit;
}
$params = explode("/", $_GET['p']);
//verifier si au moins un controller existe
if($params[0] != ''){
    //transformer le premier caractère en majuscule
    $controller = ucfirst($params[0]);
    //on inclut le controller dans la page
    require_once(ROOT.'Controllers/'.$controller.'.php');
    //instanciation du controller
    $controller = new $controller();
    //si $params[1] existe alors $methode vaut $params[1] sinon $methode vaut 'index'
    $methode = isset($params[1]) ? $params[1] : 'index';
    //verifier si la méthode existe pour le controller
    if(method_exists($controller, $methode)){
        //on appel la méthode
        //$controller->$methode();
        //on supprimme $controller = $params[0] et $methode = $params[1] dans $params
        unset($params[0]);
        unset($params[1]);
        call_user_func_array([$controller, $methode], $params);
    }else{
        http_response_code(404);
        echo "Oups!!. La ressource demandée n'existe pas!";
    }
}else{
    //aucun param n'est defini. On accedera a la page d'acceuil
    //on cree un controller par défaut qui aura aussi une seule methode
    require_once(ROOT.'Controllers/DefaultController.php');
    $controller = new DefaultController();
    // on renvoi la page d'acceuil
    $controller->index();
}
?>
