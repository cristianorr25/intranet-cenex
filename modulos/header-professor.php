<?php
    $nome = getenv("Shib-Person-CommonName");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Intranet CENEX :: Professor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/interno/cenex/sistema/public/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="/interno/cenex/sistema/public/css/reset.css" />
    <link rel="stylesheet" href="/interno/cenex/sistema/public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/interno/cenex/sistema/public/css/css.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top ntw-bg">
        <a class="logo-cenex" href="/interno/cenex/sistema/usuario/professor/"><img src="/interno/cenex/sistema/public/img/logo-cenex.svg" width="150px" height="auto" alt="Logo CENEX FAO"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="/interno/cenex/sistema/usuario/professor/">Início</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ações de Extensão</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="/interno/cenex/sistema/usuario/professor/acoes/listar/">Listar ações</a>
                        <a class="dropdown-item" href="/interno/cenex/sistema/usuario/professor/acoes/criar/">Criar ações</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Ajuda <i class="far fa-question-circle"></i></a></li>
            </ul>
            <p class="text-white">Intranet :: <strong>FAO UFMG</strong></p>
        </div>
    </nav>
    <div class="navbar fixed-top sombra container-fluid">
        <ul class="nav">
            <li class="nav-item">Você está em:</li>
            <li><i class="fas fa-home"></i> Painel do Professor</li>
        </ul>
        <ul class="nav  justify-content-end">
            <li class="nav-item">Usuário: </li>
            <li class="nav-item"><strong><?= $nome; ?></strong></li>
            <li><a href="/interno/cenex/"><i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
    </div>