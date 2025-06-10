<div class="modal fade" id="editarPaciente" tabindex="-1" aria-labelledby="editarPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editarPacienteLabel">Editar paciente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form id="formEditarPaciente" action="index.php?rota=paciente/salvar" method="POST">
                    <input type="hidden" name="acao" value="editar">
                    <input type="hidden" name="paciente_id" id="editar_paciente_id">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <label for="editar_nome_paciente" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="editar_nome_paciente" name="nome_paciente" required>
                            </div>
                            <div class="col-4">
                                <label for="editar_data_nascimento" class="form-label">Data de nascimento</label>
                                <input type="date" class="form-control" id="editar_data_nascimento" name="data_nascimento" required>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <label for="editar_responsavel_principal" class="form-label">Responsável principal</label>
                                <input type="text" class="form-control" id="editar_responsavel_principal" name="responsavel_principal" required>
                            </div>
                            <div class="col">
                                <label for="editar_responsavel_secundario" class="form-label">Responsável secundário</label>
                                <input type="text" class="form-control" id="editar_responsavel_secundario" name="responsavel_secundario">
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-3">
                                <label for="editar_telefone" class="form-label">Telefone</label>
                                <input type="text" class="form-control" id="editar_telefone" name="telefone" required>
                            </div>
                            <div class="col">
                                <label for="editar_email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="editar_email" name="email">
                            </div>
                            <div class="col">
                                <label for="editar_escola" class="form-label">Escola</label>
                                <input type="text" class="form-control" id="editar_escola" name="escola">
                            </div>
                        </div>

                        <div class="mt-3 text-end">
                            <button type="submit" class="btn btn-primary">Salvar alterações</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
