<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>SISTEMA ESCOLAR</title>
  </head>
  <body>

	<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Sistema Escolar 1.0</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav nav-pills flex-column mb-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?php echo base_url('Welcome'); ?>">
          <i class="bi bi-house"></i>
          Resumo
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('turmas'); ?>">
          <i class="bi bi-file-earmark"></i>
          Turmas
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('gestao-de-alunos'); ?>">
          <i class="bi bi-cart"></i>
          Gestão de alunos
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('relatorios'); ?>">
          <i class="bi bi-people"></i>
          Relatórios
        </a>
      </li>
    </ul>
  </div>
</nav>

<style>

.nav-link {
  transition: background-color 0.2s ease;
}

.nav-link:hover {
  background-color: #f0f0f0;
}
</style>
		<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
