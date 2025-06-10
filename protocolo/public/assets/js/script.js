function editarPaciente(paciente) {
  document.getElementById("editar_paciente_id").value = paciente.paciente_id;
  document.getElementById("editar_nome_paciente").value = paciente.nome_paciente;
  document.getElementById("editar_data_nascimento").value = paciente.data_nascimento;
  document.getElementById("editar_responsavel_principal").value = paciente.responsavel_principal;
  document.getElementById("editar_responsavel_secundario").value = paciente.responsavel_secundario;
  document.getElementById("editar_telefone").value = paciente.telefone;
  document.getElementById("editar_email").value = paciente.email;
  document.getElementById("editar_escola").value = paciente.escola;
  var modal = new bootstrap.Modal( document.getElementById("editarPacienteModal"));
  modal.show();
}
