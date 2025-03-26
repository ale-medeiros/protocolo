<div class="modal fade" id="adicionarPaciente" tabindex="-1" aria-labelledby="adicionarPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="adicionarPacienteLabel">Novo paciente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="processa.php" method="POST">
                    <input type="hidden" name="acao" value="adicionarPaciente">
                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <label for="nome_paciente" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome_paciente" name="nome_paciente">
                            </div>
                            <div class="col-4">
                                <label for="data_nascimento" class="form-label">Data de nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="responsavel_principal" class="form-label">Responsável principal</label>
                                <input type="text" class="form-control" id="responsavel_principal" name="responsavel_principal">
                            </div>
                            <div class="col">
                                <label for="responsavel_secundario" class="form-label">Responsável secundário</label>
                                <input type="text" class="form-control" id="responsavel_secundario" name="responsavel_secundario">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone">
                            </div>
                            <div class="col">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="col">
                                <label for="escola" class="form-label">Escola</label>
                                <input type="text" class="form-control" id="escola" name="escola">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>