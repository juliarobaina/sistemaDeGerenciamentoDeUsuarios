<?php 
include '../bd/conexaoBD.php';

if(isset($_POST['editarUsuario'])){
   
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email', telefone = '$telefone' WHERE id = '$id'";
   
    mysqli_query($conexao, $sql);


    header('Location: ../listarUsuario.php');


}

?>