<?php
include 'config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $acao = $_POST['acao'] ?? '';

    switch ($acao) {
        case 'adicionarPaciente': {
                $nome_paciente = $_POST['nome_paciente'];
                $data_nascimento = $_POST['data_nascimento'];
                $responsavel_principal = $_POST['responsavel_principal'];
                $responsavel_secundario = $_POST['responsavel_secundario'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $escola = $_POST['escola'];

                $stmt = $conn->prepare(
                    "INSERT INTO pacientes (
                        nome_paciente,
                        data_nascimento,
                        responsavel_principal,
                        responsavel_secundario,
                        telefone,
                        email,
                        escola
                    ) VALUES (?, ?, ?, ?, ?, ?, ?)"
                );

                $stmt->bind_param(
                    "sssssss",
                    $nome_paciente,
                    $data_nascimento,
                    $responsavel_principal,
                    $responsavel_secundario,
                    $telefone,
                    $email,
                    $escola
                );

                if ($stmt->execute()) {
                    echo "<script>alert('Paciente adicionado com sucesso!'); window.location.href = 'pacientes.php';</script>";
                } else {
                    echo "Erro: " . $stmt->error;
                }
                $stmt->close();
            }
            break;

        case 'editarPaciente': {
                $paciente_id = $_POST['paciente_id'];
                $nome_paciente = $_POST['nome_paciente'];
                $data_nascimento = $_POST['data_nascimento'];
                $responsavel_principal = $_POST['responsavel_principal'];
                $responsavel_secundario = $_POST['responsavel_secundario'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $escola = $_POST['escola'];

                $stmt = $conn->prepare("UPDATE pacientes SET
                    nome_paciente = ?,
                    data_nascimento = ?,
                    responsavel_principal = ?,
                    responsavel_secundario = ?,
                    telefone = ?,
                    email = ?,
                    escola = ? 
                    WHERE paciente_id = ?");

                $stmt->bind_param(
                    "sssssssi",
                    $nome_paciente,
                    $data_nascimento,
                    $responsavel_principal,
                    $responsavel_secundario,
                    $telefone,
                    $email,
                    $escola,
                    $paciente_id
                );

                if ($stmt->execute()) {
                    echo "<script>alert('Paciente editado com sucesso!'); window.location.href = 'pacientes.php';</script>";
                } else {
                    echo "Erro: " . $stmt->error;
                }
                $stmt->close();
            }
            break;

        case 'deletarPaciente': {
            echo "Entrou no case deletarPaciente";
                $paciente_id = $_POST['paciente_id'] ?? null;

                if ($paciente_id) {
                    $stmt = $conn->prepare("DELETE FROM pacientes WHERE paciente_id = ?");
                    $stmt->bind_param("i", $paciente_id);

                    if ($stmt->execute()) {
                        echo "<script>alert('Paciente deletado com sucesso!'); window.location.href = 'pacientes.php';</script>";
                    } else {
                        echo "Erro: " . $stmt->error;
                    }
                } else {
                    echo "<script>alert('Paciente não encontrado!'); window.location.href = 'pacientes.php';</script>";
                }
                
                $stmt->close();
            }
            break;
    }
}
