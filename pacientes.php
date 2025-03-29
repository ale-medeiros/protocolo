<?php include 'includes/header.php'; ?>
<div class="container">
    <h2>Pacientes</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adicionarPaciente">
        Launch demo modal
    </button>
    <?php include 'modal/adicionarPaciente.php'; ?>
    <table>
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
            include 'config/conexao.php';
            $sql = "SELECT paciente_id, nome_paciente, data_nascimento, responsavel_principal FROM pacientes";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $nascimento = new DateTime($row['data_nascimento']);
                    $hoje = new DateTime();
                    $idadeAnos = $hoje->diff($nascimento)->y;
                    $idadeMeses = $hoje->diff($nascimento)->m;
                    $idade = $idadeAnos . " anos";
                    if ($idadeMeses > 0) {
                        $idade .= " e " . $idadeMeses . " meses";
                    }

                    echo "<tr>
                            <td>{$row['nome_paciente']}</td>
                            <td>{$idade}</td>
                            <td>{$row['responsavel_principal']}</td>
                            <td><button type='button' class='btn btn-primary btn-editar' data-id='{$row['paciente_id']}' data-bs-toggle='modal' data-bs-target='#editarPaciente'>Editar</button></td>
                        </tr>";
                }
            }
            ?>
        </tbody>
    </table>
    <?php include 'modal/editarPaciente.php'; ?>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Seleciona os botões de edição
        document.querySelectorAll(".btn-editar").forEach(button => {
            button.addEventListener("click", function() {
                let id = this.getAttribute("data-id");
                // Faz uma requisição para buscar os dados do paciente
                fetch(`recupera.php?id=${id}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            alert(data.error);
                            return;
                        }

                        
                        document.getElementById("paciente_id").setAttribute("value", data.paciente_id);
                        document.getElementById("nome_paciente").setAttribute("value", data.nome_paciente);
                        document.getElementById("data_nascimento").setAttribute("value", data.data_nascimento);
                        document.getElementById("responsavel_principal").setAttribute("value", data.responsavel_principal);
                        document.getElementById("responsavel_secundario").setAttribute("value", data.responsavel_secundario);
                        document.getElementById("email").setAttribute("value", data.email);
                        document.getElementById("telefone").setAttribute("value", data.telefone);
                        document.getElementById("escola").setAttribute("value", data.escola);

                        console.log(data); // Para depuração
                    })
            });
        });

        // Enviar formulário via AJAX
        document.getElementById("form-edicao").addEventListener("submit", function(e) {
            e.preventDefault(); // Previne o envio padrão do formulário

            let formData = new FormData(this);

            fetch("processa.php", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.text())
                .then(result => {
                    alert(result); // Mostra a resposta
                    location.reload(); // Recarrega a página para atualizar a lista
                });
        });
    });
</script>
<?php include 'includes/footer.php'; ?>