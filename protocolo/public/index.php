<?php
require_once __DIR__ . '/../app/views/includes/header.php';
require_once __DIR__ . '/../app/views/includes/functions.php';
require_once __DIR__ . '/../app/views/includes/navbar.php';

$rota = $_GET['rota'] ?? 'home/index'; 
$partes = explode('/', $rota);  

$controller = $partes[0]; 
$acao = $partes[1] ?? 'index'; 
$param = $partes[2] ?? null; 

$controllerFile = "../app/controllers/{$controller}Controller.php";  

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $classe = ucfirst($controller) . 'Controller';

    if (class_exists($classe)) {
        $obj = new $classe();

        if (method_exists($obj, $acao)) {
            $param ? $obj->$acao($param) : $obj->$acao();
        } else {
            echo "Método '$acao' não encontrado.";
        }
    } else {
        echo "Classe '$classe' não encontrada.";
    }
} else {
    echo "Controller '$controllerFile' não encontrado.";
}
?>
