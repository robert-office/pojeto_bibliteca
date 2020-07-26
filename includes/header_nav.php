<?php include "includes/conexao.php"; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Bibliotéca - Robert</title>
  <style>
    <?php include "includes/style_nav.css"; ?>
  </style>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/f5d05f7ae0.js" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

  <link type="text/javascript" href="https://code.jquery.com/jquery-3.5.1.js">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <style type="text/css">
    .imgs_btns{
      max-width: 50%;
      max-height: 80%;
      margin-top: 5%;
      margin-left: 25%;
    }
    .btns_index{
      align-items: center;
      align-content: center;
    }
  </style>


  <script>
    $( document ).ready(function() {
       $('.leftmenutrigger').on('click', function(e) {
         $('.side-nav').toggleClass("open");
         e.preventDefault();
      });

       $(document).ready(function() {
          $('#example').DataTable( {
              "order": [[ 3, "desc" ]]
          } );
      } );

    });
  </script>
</head>
<body>

<div id="wrapper" class="animate">
  <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
    <span class="navbar-toggler-icon leftmenutrigger"></span>
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav animate side-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home Page
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastrar algo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastrados</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-md-auto d-md-flex">
        <li class="nav-item">
          <a class="nav-link" href="#">Home Page
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastrar algo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cadastrados</a>
        </li>
      </ul>
    </div>
  </nav>
</div>