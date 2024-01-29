<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?page=novoassociado">Cadastrar associados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=novaanuidade">Cadastrar anuidade</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=checkout">Checkout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=listaranuidades">Lista de anuidades</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
              include("config.php"); 
              switch(@$_REQUEST["page"]){
                case "novaanuidade":
                  include("nova-anuidade.php");
                break;
                case "novoassociado":
                  include("novo-associado.php");
                break;
                case "checkout":
                  include("listar-associados.php");
                break;
                case "listaranuidades":
                  include("listar-anuidades.php");
                break;
                case "salvarassociado":
                  include("salvar-associado.php");
                break;
                case "salvaranuidade":
                  include("salvar-anuidade.php");
                break;
                case "quitar":
                  include("quitar.php");
                break;
                default:
                  print "<h1>Bem-vindos!</h1>";
                }
          ?>
        </div>
      </div>
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>