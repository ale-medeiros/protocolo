<?php
function formatarIdade($data_nascimento)
{
    $nascimento = new DateTime($data_nascimento);
    $hoje = new DateTime();

    $idadeAnos = $hoje->diff($nascimento)->y;
    $idadeMeses = $hoje->diff($nascimento)->m;

    $idade = "";

    if ($idadeAnos > 0){
        $idade .= ($idadeAnos === 1) ? "1 ano" : "$idadeAnos anos";
    }

    if ($idadeMeses > 0) {
        if ($idade !== "") $idade .= " e ";
        $idade .= ($idadeMeses == 1) ? "1 mês" : "$idadeMeses meses";
    }

    return $idade;
}
?>