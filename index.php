<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>cadastro usuarios</title>
</head>
    <title>Projeto PIE - ADS</title>
    <link rel="stylesheet" href="bootstrap-5.3.3/bootstrap-5.3.3/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="bootstrap-5.3.3/bootstrap-5.3.3/dist/css/bootstrap-utilities.css">
    <link rel="stylesheet" href="bootstrap-5.3.3/bootstrap-5.3.3/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.3.3/bootstrap-5.3.3/dist/css/bootstrap-grid.css">
    <script src="bootstrap-5.3.3/bootstrap-5.3.3/dist/js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
<body>
<ul class="nav nav-tabs">
 <li class="nav-item"><!-- nav bar para viajar entre as paginas-->
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?page=novo">Cadastrar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?page=listar">Lista de cadastros</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?page=salvar">Salvar registro</a>
    </li>

</ul>

  <?php // Uma instrução apenas para a nav bar viajar entre as paginas
            include ("config.php"); //inclui as configurações para acessar o  banco de dados.
            switch (@$_REQUEST["page"]) {
                case "novo":
                    include("cadastro.php");
                    break;
                case "listar":
                    include("lista de cadastros.php");
                    break;
                case "salvar":
                    include("salvar_usuario.php");
                    break;
                case "editar":
                    include("editar.php");
                    break;
                default:
                    print("<h2 class='mt-4 ms-5 mb-3 border-2 h2 '>Bem vindo</h2>");
            }
  ?>
    
</body>
</html>