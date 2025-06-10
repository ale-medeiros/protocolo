<?php
require_once __DIR__ . '../../includes/header.php'; 
require_once __DIR__ . '../../includes/functions.php';
require_once __DIR__ . '../../../controllers/pacienteController.php';
?>

<div class="container">
    <div class="row mb-3">
        <div class="col">
            <h1>Pacientes</h1>
        </div>
        <div class="col text-end align-self-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adicionarPaciente">
                Adicionar paciente
            </button>
        </div>
        <?php require_once 'adicionar.php'; ?>
    </div>
    <div class="row mb-3">
        <div class="col">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Responsável principal</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $pacientes = Paciente::buscarTodos();
                    if (!empty($pacientes)) {
                        foreach ($pacientes as $paciente) {
                            $idade = formatarIdade($paciente['data_nascimento']);

                            $paciente_id = htmlspecialchars($paciente['paciente_id']);
                            $nome = htmlspecialchars($paciente['nome_paciente']);
                            $responsavel = htmlspecialchars($paciente['responsavel_principal']);

                            echo "<tr>
                            <td>{$nome}</td>
                            <td>{$idade}</td>
                            <td>{$responsavel}</td>
                            <td>
                                <!-- Botão para editar paciente com dados passados via JS -->
                                <a href='javascript:void(0);'
                                   class='btn btn-primary'
                                   onclick='editarPaciente(" . json_encode($paciente) . ")'>
                                   Editar
                                </a>

                                <!-- Formulário para excluir paciente -->
                                <form action='processa.php' method='POST' style='display:inline;'>
                                    <input type='hidden' name='acao' value='deletarPaciente'>
                                    <input type='hidden' name='paciente_id' value='{$paciente_id}'>
                                    <button type='submit' class='btn btn-danger btn-excluir' onclick=\"return confirm('Tem certeza que deseja deletar este paciente?');\">Excluir</button>
                                </form>
                            </td>
                        </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '../../includes/footer.php'; ?>