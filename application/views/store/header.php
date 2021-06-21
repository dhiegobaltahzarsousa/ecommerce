<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>DamaluModas ecommerce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/store/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/store/img/favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/store/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/store/css/templatemo.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/store/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/store/css/fontawesome.min.css">
    
</head>
<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">contato@damalumoda.com.br</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:(12)996637195">(12)99663-7195</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                Damalu Moda
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Feminino</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Masculino</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Acessórios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Infantil</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <!-- Carrinho -->
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark"></span>
                    </a>
                </div>
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                        	<?php if($this->session->userdata('status')=="TRUE" && $this->session->userdata('atuacao')=="CLIENTE"): ?>
                        		<p><a class="nav-link" href="index.html">Bem vindo, <?php echo $this->session->userdata('nome'); ?></a></p>
                            	<a class="nav-link" href="index.html"><a class="nav-link" href="index.html">Sair</a></a>
                            <?php else: ?>
                            	<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#login-modal">Login</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->
    
    <!-- Modal Search -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Login-modal -->
    <div class="modal fade bg-white" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <p>Já é cadastrado? Então faça seu login.</p>
            <form action="" method="post" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="input-usuario" name="usuario" placeholder="email">
                </div>
                <div class="input-group mb-2">
                    <input type="password" class="form-control" id="input-senha" name="senha" placeholder="password">
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Fazer Login</button>
                    </div>
                </div>
            </form>
            </br>
            <p><b>Ou</b></p>
            </br>
            <p>Faça seu cadastro.</p>
            <form action="" method="post" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="input-email" name="email" placeholder="email">
                </div>
                <div class="input-group mb-2">
                    <input type="nome" class="form-control" id="input-nome" name="nome" placeholder="nome">
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>