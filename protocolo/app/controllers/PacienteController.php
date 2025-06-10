<?php
require_once 'Controller.php';
require_once __DIR__ . '/../models/paciente.php';

use App\Models\Paciente;

class PacienteController extends \App\Controllers\Controller
{
    public function index()
    {
        $pacientes = Paciente::buscarTodos();
        $this->view('paciente/index', ['pacientes' => $pacientes]);
    }

    public function adicionar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Paciente::adicionar($_POST);
            $this->redirect('paciente/index');
        } else {
            $this->view('paciente/adicionar');
        }
    }

    public function editar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Paciente::editar($_POST);
            $this->redirect('paciente/index');
        } else {
            $id = $_GET['id'] ?? null;
            if ($id) {
                $paciente = Paciente::buscarPorId($id);
                $this->view('paciente/editar', ['paciente' => $paciente]);
            } else {
                echo "Paciente não encontrado.";
            }
        }
    }

    public function deletar()
    {
        $id = $_GET['id'] ?? null;
        if ($id) {
            Paciente::deletar($id);
            $this->redirect('paciente/index');
        } else {
            echo "ID inválido para deletar.";
        }
    }
}
?>