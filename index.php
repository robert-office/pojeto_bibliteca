<?php include "includes/conexao.php";
session_start();
?>

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

  <style type="text/css">
    body {
    font-family: 'Montserrat', sans-serif;
    transition: 3s;
  }

  .login-container {
    margin-top: 2%;
    border: 1px solid #CCD1D1;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    max-width: 50%;
    height: 100%;
  }

  .row{
    height: 500px !important;
  }

  .ads {
    background: url('assets/dark-grey-tile.png');
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    color: #fff;
    padding: 15px;
    text-align: center;
  }

  .ads h1 {
    margin-top: 20%;
  }

  #fl {
    font-weight: 600;
  }

  #sl {
    font-weight: 100 !important;
  }

  .profile-img {
    text-align: center;
  }

  .profile-img img {
    border-radius: 50%;
  }


  .login-form {
    padding: 15px;
  }

  .login-form h3 {
    text-align: center;
    padding-top: 15px;
    padding-bottom: 15px;
  }

  .form-control {
    font-size: 14px;
  }

  .forget-password a {
    font-weight: 500;
    text-decoration: none;
    font-size: 14px;
  }

  #separadora{
    margin-bottom: 150px;
  }

  .container-alert{
    max-width: 52% !important;
    margin-top: 20px !important;
  }

  #no_line{
    text-decoration-line: none;
    color: white;
  }

  .cadastro-btn{
    text-decoration-line: none;
    background: rgb(119,58,180);
    background: linear-gradient(90deg, rgba(119,58,180,1) 18%, rgba(1,1,255,1) 83%);
    color: white;
  }

  .cadastro-btn:hover{
    background: rgb(131,58,180);
    background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
  }

  #btn-login{
    background: rgb(1,1,255);
    background: linear-gradient(90deg, rgba(1,1,255,1) 18%, rgba(119,58,180,1) 83%);
  }

  #btn-login:hover{
    background: rgb(131,58,180);
    background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
  }

  #alerta-erro{
    <?php
      if(isset($_SESSION['erro_login'])){
        if($_SESSION['erro_login'] == "1"){
          $display_error = "block";
        }else{
          $display_error = "none";
        }
      }else{
        $display_error = "none";
      }
    ?>
    display: <?php echo $display_error; ?>
  }
</style>
</head>

<body>

  <div class="container container-alert">
    <div class="alert alert-danger" id="alerta-erro" role="alert">
      Dados informados incorretos, verifique se a senha e/ou o usuario estão corretos
    </div>
  </div>


  <div class="container login-container">
    <div class="row">

      <div class="col-md-6 ads">
        <h1><span id="fl">Biblioteca</span></h1>
        <br>
        <img src="https://img.icons8.com/nolan/256/books-1.png"/>
      </div>

      <div class="col-md-6 login-form">
        <div class="profile-img">
          <img src="https://img.icons8.com/cotton/128/000000/name--v2.png"/>
        </div>

        <h3>LOGIN</h3>

        <form>
          <div class="form-group">
            <input type="email" class="form-control" required="required" name="username" placeholder="E-mail">
          </div>

          <div class="form-group">
            <input type="password" class="form-control" required="required" name="password" placeholder="Senha">
          </div>

          <div class="form-group">
            <button type="submit" id="btn-login" class="btn btn-primary btn-lg btn-block">Logar</button>
          </div>

          <div class="form-group">
            <a href="cadastro_pessoas.php" class="cadastro-btn" id="no_line">
              <button type="button" class="cadastro-btn btn btn-lg btn-block">
                Cadastre-se aqui :)
              </button>
            </a>
          </div>

        </form>
      </div>

    </div>
  </div>
</body>