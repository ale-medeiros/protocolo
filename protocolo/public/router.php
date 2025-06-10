<?php
require_once '../config/conexao.php';
require_once '../app/controllers/pacienteController.php';

$rota = $_GET['rota'] ?? 'home';
$metodo = explode('/', $rota);

$controller = $metodo[0] ?? '';
$acao = $metodo[1] ?? '';

if ($controller === 'pacientes') {
    switch ($acao) {
        case 'listar':
            $pacienteController->index();
            break;
        case 'adicionar':
            $pacienteController->adicionar($_POST);
            break;
        case 'editar':
            $pacienteController->editar($_POST);
            break;
        case 'deletar':
            $pacienteController->deletar($_POST['paciente_id']);
            break;
        default:
            echo "Ação não encontrada.";
            break;
    }
    exit;
}else {
    echo "Controller não encontrado.";
}
