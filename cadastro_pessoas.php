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

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>     


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
</style>
</head>

<body>

  <div class="container container-alert">
    <div class="alert alert-danger" id="alerta-erro" role="alert" style="display: none">
     <!--  Dados informados incorretos, verifique se a senha e/ou o usuario estão corretos -->
    </div>

    <div class="alert alert-success" id="alerta-sucesso" role="alert" style="display: none;">
     OK, você acaba de se cadastrar, em 10 segundos você será redirecionado para a pagina de Login!
    </div>
  </div>


  <div class="container login-container">
    <div class="row">

      <div class="col-md-6 ads">
        <h1><span id="fl">Cadastro</span></h1>
        <br>
        <img src="https://img.icons8.com/cotton/260/000000/name--v2.png"/>
      </div>

      <div class="col-md-6 login-form">
        
        <form id="formCadastro">
          <div class="form-group">
            <label for="exampleInputEmail1">Nome / Usuario:  </label>
            <input type="text" class="form-control" required="required" name="username" placeholder="Seu nome real">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Endereço de E-mail: </label>
            <input type="email" class="form-control" required="required" name="email" placeholder="Digite seu E-mail">
            <small id="emailHelp" class="form-text text-muted">Este será o campo utilizado para logar-se</small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Senha: </label>
            <input type="password" class="form-control" required="required" name="senha" placeholder="Digite a sua senha">
            <small id="emailHelp" class="form-text text-muted">Este será o campo utilizado para logar-se</small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Confirme a Senha: </label>
            <input type="password" class="form-control" required="required" name="senha_confirm" placeholder="Confirme a sua senha">
            <small id="emailHelp" class="form-text text-muted">Confirme as senhas, devem ser senhas iguais</small>
          </div>

          <div class="form-group">
            <button id="btn-login" type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar-se</button>
          </div>
        </form>
      </div>

    </div>
  </div>


<script>
  $(function(){

    $('#formCadastro').on('submit', function(e) {

      e.preventDefault();

      $.ajax({
        url: "recebe_cadastro_usuario.php",
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType: "json",
        success: function(data){
          
          // se por algum motivo der erro
          if(data.sucesso == false){

            console.log('Não foi possivel cadastrar o usuario !');

            if(data.motivo == "email_exists"){
              MostraAlertaErro("E-mail informado já existe, Por Favor tente outro e-mail !");
            }
            else if(data.motivo == "senha_wrongs"){
              MostraAlertaErro("As senhas não coincidem, Por Favor redigite as senhas !");
            }

          }

          if(data.sucesso == true){
            console.log('Usuario cadastrado com sucesso !');
            $('#alerta-erro').css('display', 'none');
            Mostra_e_redireciona();
          }

        }
      });

    }); // end on
  });
</script>

<script type="text/javascript">
  function MostraAlertaErro(erro_str){
      $('#alerta-erro').html(erro_str);
      $('#alerta-erro').css('display', 'block');
  }
  function Mostra_e_redireciona(){
    $('#alerta-sucesso').css('display', 'block');

    setTimeout(function(){
      window.location.href = "index.php";
    }, 10000);

  }
</script>


</body>