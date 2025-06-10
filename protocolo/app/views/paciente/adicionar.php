<div class="modal fade" id="adicionarPaciente" tabindex="-1" aria-labelledby="adicionarPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="adicionarPacienteLabel">Novo paciente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form action="/protocolo/public?rota=paciente/salvar" method="POST">
                    <input type="hidden" name="acao" value="adicionar">
                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <label for="nome_paciente" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome_paciente" name="nome_paciente" required>
                            </div>
                            <div class="col-4">
                                <label for="data_nascimento" class="form-label">Data de nascimento</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="responsavel_principal" class="form-label">Responsável principal</label>
                                <input type="text" class="form-control" id="responsavel_principal" name="responsavel_principal" required>
                            </div>
                            <div class="col">
                                <label for="responsavel_secundario" class="form-label">Responsável secundário</label>
                                <input type="text" class="form-control" id="responsavel_secundario" name="responsavel_secundario">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" required>
                            </div>
                            <div class="col">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col">
                                <label for="escola" class="form-label">Escola</label>
                                <input type="text" class="form-control" id="escola" name="escola">
                            </div>
                        </div>

                        <div class="mt-3 text-end">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
