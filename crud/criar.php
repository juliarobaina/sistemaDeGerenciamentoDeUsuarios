<?php 
include '../bd/conexaoBD.php';

if(isset($_POST['cadastrarUsuario'])){
    $nome = $_POST['nome'];
    $email = $_POST['email']; 
    $telefone = $_POST['telefone'];
   
    $sql = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')";

    mysqli_query($conexao, $sql);

    header('Location: ../criarUsuario.php');
}




?>