<?php include 'bd/conexaoBD.php'?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Sistema de Gerenciamento de Usuários</title>
        <title>Sistema de Gerenciamento de Usuários</title>
    </head>
   <body class="d-flex flex-column min-vh-100">

        <header class="container-fluid bg-dark text-light py-3">
            <h1 class="text-center">Sistema de Gerenciamento de Usuários</h1>
        </header>

        <main class="flex-fill position-relative pt-5">

         
            <div class="position-absolute top-0 start-0 p-3">
                <a href="index.php" class="btn btn-sm" style="border: 2px solid black; color: black;">
                    Voltar
                </a>
            </div>

          
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered mx-auto">
                                <caption class="visually-hidden">
                                    Lista de usuários cadastrados no sistema
                                </caption>

                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">E-mail</th>
                                        <th scope="col">Telefone</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php 
                                        $sql = "SELECT * FROM usuarios";
                                        $listaUsuarios = mysqli_query($conexao, $sql);

                                        if (mysqli_num_rows($listaUsuarios) > 0){
                                            foreach($listaUsuarios as $usuario){
                                    ?>
                                    <tr>
                                        <td><?= $usuario['id'] ?></td>
                                        <td><?= $usuario['nome'] ?></td>
                                        <td><?= $usuario['email'] ?></td>
                                        <td><?= $usuario['telefone'] ?></td>
                                        <td>
                                            <a href="editarUsuario.php?id=<?= $usuario['id'] ?>" class="btn btn-sm btn-warning" aria-label="Alterar usuário <?= $usuario['nome'] ?>" role="button">
                                                Alterar
                                            </a>

                                            <form action="crud/excluir.php" method="POST" class="d-inline">
                                                <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
                                                <button type="submit" name="excluirUsuario" class="btn btn-sm btn-danger" aria-label="Excluir usuário <?= $usuario['nome'] ?>" >
                                                    Excluir
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php 
                                            }
                                        } else {
                                    ?>
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Nenhum usuário encontrado
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </main>

        <footer class="container-fluid bg-dark text-light py-2">
            <p class="text-center mb-0">Feito por Julia Robaina</p>
        </footer>
    </body>
</html>