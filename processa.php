<?php include 'config/conexao.php';

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
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
        
            $sql = "INSERT INTO pacientes (nome_paciente, data_nascimento, responsavel_principal, responsavel_secundario, telefone, email, escola) 
            VALUES ('$nome_paciente', '$data_nascimento', '$responsavel_principal', '$responsavel_secundario', '$telefone', '$email', '$escola')";
        
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert(Paciente adicionado com sucesso!).window.location.href = 'pacientes.php';</script>";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
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

            $sql = "UPDATE pacientes SET nome_paciente = $nome_paciente,
                                          data_nascimento = $nome_paciente,
                                          responsavel_principal =$nome_paciente,
                                          responsavel_secundario = $nome_paciente,
                                          telefone = $nome_paciente,
                                          email = $nome_paciente,
                                          escola = $nome_paciente
            WHERE paciente_id = ?";
            
            if (mysqli_query($conn, $sql)) {
                echo "<script>alert(Paciente editado com sucesso!).window.location.href = 'pacientes.php';</script>";
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
