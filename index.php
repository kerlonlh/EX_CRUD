<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?pg=novoUsuario">Novo Usuário</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.php?pg=listUser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lista de Usuários
          </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php
            $pg = "";
            if(isset($_GET['pg']) && !empty($_GET['pg'])){
                $pg = $_GET['pg'];
            }
            switch($pg){
                
                
                case 'editarUser': require './mvc/Controller/editUser.php';break;
                case 'novoUsuario': require './mvc/Controller/newUser.php';break;
                case 'deleteUser': require './mvc/Controller/deleteUser.php';break;

                case 'listUser': require './mvc/View/listUser.php'; break;

                case 'salvarUsuario': require './mvc/Model/saveUser.php'; break;
                case 'salvarEdicaoUsuario': require './mvc/Model/saveEditUser.php'; break;
                case 'saveDeleteUser': require './mvc/Model/saveDeleteUser.php';break;

                default: print"<h1> Sejam bem vindos </h1>";
            }

            ?>
        </div>
    </div>
</div>



</body>
</html>