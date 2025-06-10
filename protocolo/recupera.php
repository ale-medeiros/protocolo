<?php
include 'config/conexao.php';

$id = $_GET['paciente_id'];
$sql = "SELECT * FROM pacientes WHERE paciente_id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "0 results";
}

$conn->close();
?>