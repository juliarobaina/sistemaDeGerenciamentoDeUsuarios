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

        <main class="flex-fill d-flex justify-content-center align-items-center position-relative pt-5">

            <div class="position-absolute top-0 start-0 p-3">
                <a href="listarUsuario.php" class="btn btn-sm" style="border: 2px solid black;color: black;">Voltar</a>
            </div>
            <?php 
                include "bd/conexaoBD.php"; 
                if (isset($_GET['id'])){
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
                    $dadosUsuario = mysqli_query($conexao, $sql);


                 
                    if (mysqli_num_rows($dadosUsuario) > 0){
                        foreach($dadosUsuario as $usuario){
                    
                
            ?>
            
            <div class="container d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                    <form action="crud/editar.php" method="POST" class="card p-4 shadow">
                        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
                        <h2 class="text-center mb-4">Editar Usuário</h2>

                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" value="<?= $usuario['nome'] ?>">

                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control"  value="<?= $usuario['email'] ?>">

                        </div>

                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" name="telefone" id="telefone" class="form-control" value="<?= $usuario['telefone'] ?>" maxlength="9">
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="editarUsuario" class="btn btn-primary fs-5">
                                Editar
                            </button>
                        </div>

                    </form>
                </div>

            <?php 
                      }
                    }else{
                        echo "<p>não foi</p>";
                    }
                }
            ?>
        </main>
         <footer class="container-fluid bg-dark text-light py-2">
            <p class="text-center mb-0">Feito por Julia Robaina</p>
        </footer>
    </body>
</html>