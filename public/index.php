<?php
session_start(); //Inicia a sessão
//área de memória dentro do servidor
//carrinho de compras, seus dados de conexão
//qualquer variável que vc queira criar
    //phpinfo();
	include_once("visao/head.php");
	include("visao/formulario.php");
	
    //include("visao/listar.php");
	include_once("controle/ListarUsuario.php");
	$index = new ListarUsuario();
    include_once("visao/listar.php");
	//atribuição de responsabilidade
	//o controle sabe como exibir a lista de contatos
	include_once("visao/footer.php");
?>


<!--<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Teste - Banco de dados</title>
    
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#formulario">Formulario</a></li>
                    <li class="nav-item"><a class="nav-link" href="#listar">Listar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Atividade Lucas Banco e Formulario</div>
            <div class="masthead-heading text-uppercase">Clique abaixo para ir ao formulario</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#formulario">Formulario</a>
        </div>
    </header>
    

    <section class="page-section" id="formulario">
        
    <div class="container">
        <h2 class="text-center">Cadastre uma pessoa</h2>
        <form role="form" class="mt-5" method="post" action="cadastrarForm.php">
            <div class="form-group row">
                <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputSalario" class="col-sm-2 col-form-label">Salario</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputSalario" name="salario" placeholder="Salario R$" required step="any">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputData" class="col-sm-2 col-form-label">Data de nascimento</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="inputData" name="data" placeholder="Data de nascimento" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Cadastrar Pessoa" name="submit" class="btn btn-primary" />
                </div>
            </div>
        </form>
    </div>
    </section>
    
    <section class="listar-section" id="listar">

    <div class="card m-3 p-3" style="width: 18rem;">
        <img src="./assets/img/usuario/lucas_foto.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">id:</h5>
        <p>Nome:</p>
        <p>Email:</p>
        <p>Salario:</p>
    </div>
</div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
-->