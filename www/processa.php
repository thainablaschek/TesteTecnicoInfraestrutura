<?php
session_start();

require_once 'database.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO comments(name, email, comment) VALUES (:name, :email, :comment)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $nome, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':comment', $comentario, PDO::PARAM_STR);

if ($stmt->execute()) {
  $_SESSION['msg']="Comentário enviado com sucesso!";
} else {
  $_SESSION['msg']="Não foi possível processar a sua requisição.";
  error_log("Error: " . $sql . " " . $conn->error);
}

session_write_close();
$conn = null;

// include_once 'index.php';

header("Location: /");
exit();
?>