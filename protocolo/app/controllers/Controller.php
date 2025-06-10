<?php
namespace App\Controllers;

class Controller
{
    public function view($view, $dados = [])
    {
        extract($dados);

        $viewPath = "../app/views/{$view}.php";

        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo "View '{$view}' não encontrada.";
        }
    }

    public function redirect($rota)
    {
        header("Location: /protocolo/public/index.php?rota={$rota}");
        exit;
    }
}
?>
