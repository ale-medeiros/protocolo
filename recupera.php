<?php
include 'config/conexao.php';

$id = $_GET['id'];
$sql = "SELECT * FROM pacientes WHERE paciente_id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    header('Content-Type: application/json');
    echo json_encode($row);
}else{
    echo json_encode(["error" => "Paciente não encontrado"]);
}

$conn->close();
?>