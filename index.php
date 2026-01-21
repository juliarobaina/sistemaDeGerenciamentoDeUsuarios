<?php 
    include 'bd/conexaoBD.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Sistema de Gerenciamento de Usuários</title>
    </head>
    <body class="d-flex flex-column min-vh-100">

        <header class="container-fluid bg-dark text-light py-3">
            <h1 class="text-center">Sistema de Gerenciamento de Usuários</h1>
        </header>

       <main class="flex-fill d-flex align-items-center justify-content-center">
            <div class="container-fluid py-3">
                <div class="row justify-content-center">
                    <div class="col-10 d-flex flex-column flex-md-row justify-content-center gap-3">
                        <a href="criarUsuario.php" class="btn btn-success w-100 fs-3">Cadastrar</a>
                        <a href="listarUsuario.php" class="btn btn-success w-100 fs-3">Listar</a>
                    </div>
                </div>
            </div>
        </main>

        <footer class="container-fluid bg-dark text-light py-2">
            <p class="text-center mb-0">Feito por Julia Robaina</p>
        </footer>

    </body>

</html>