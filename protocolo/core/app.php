<?php

class App
{
    private $controller = 'HomeController';
    private $action = 'index';
    private $params = [];

    public function __construct()
    {
        // Verificar a URL (se existe uma rota customizada)
        $this->parseUrl();
        $this->handleRoute();
    }

    // Função para verificar a URL e separar os parâmetros
    public function parseUrl()
    {
        if (isset($_GET['rota'])) {
            $url = rtrim($_GET['rota'], '/');
            $url = explode('/', $url);

            // Se o primeiro parâmetro for um controller válido
            if (file_exists(__DIR__ . '/../controllers/' . ucfirst($url[0]) . 'Controller.php')) {
                $this->controller = ucfirst($url[0]) . 'Controller';
                unset($url[0]); // Remover o primeiro parâmetro (controller)
            }

            // Se o segundo parâmetro for uma ação válida (por padrão 'index')
            if (isset($url[1]) && method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
                unset($url[1]); // Remover o segundo parâmetro (action)
            }

            // O restante da URL são parâmetros
            $this->params = $url ? array_values($url) : [];
        }
    }

    // Função para chamar o controller e a ação
    public function handleRoute()
    {
        // Incluir o controller
        require_once __DIR__ . '/../controllers/' . $this->controller . '.php';

        // Instanciar o controller
        $controller = new $this->controller();

        // Chamar a ação e passar os parâmetros
        call_user_func_array([$controller, $this->action], $this->params);
    }
}
