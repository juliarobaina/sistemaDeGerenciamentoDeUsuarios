<?php 
include '../bd/conexaoBD.php';

if(isset($_POST['excluirUsuario'])){
   
    $id = $_POST['id'];
   
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
   
    mysqli_query($conexao, $sql);


    header('Location: ../listarUsuario.php');

}


?>