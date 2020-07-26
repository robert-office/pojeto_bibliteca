<?php
error_reporting(0);
session_start();
$id_usuario = $_SESSION['id_usu'];
if(!empty($id_usuario)){

include "includes/header_nav.php";
?>


<!-- conteudo ou container do sistema -->
<div class="jumbotron tamanho-tela">

  <h3 style="margin-left: 1%">
    <img src="https://img.icons8.com/ios-filled/50/000000/shortcut.png"/>
    Atalhos Rápidos
  </h3>

  <br>
  <br>

  <div class="row">
    <div class="col">
      <div class="label_div_btns">
        <label class="label_btns_index">Livros Cadastrados</label>
        <div class="btns_index">
          <a onclick="MandaUsusario(1300), MudaConteudoData(1)" style="cursor: pointer;">
            <svg width="100%" height="100%;" viewBox="0 0 16 16" class="bi bi-book-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.261 13.666c.345.14.739-.105.739-.477V2.5a.472.472 0 0 0-.277-.437c-1.126-.503-5.42-2.19-7.723.129C5.696-.125 1.403 1.56.277 2.063A.472.472 0 0 0 0 2.502V13.19c0 .372.394.618.739.477C2.738 12.852 6.125 12.113 8 14c1.875-1.887 5.262-1.148 7.261-.334z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="label_div_btns">
        <label class="label_btns_index">Autores Cadastrados </label>
        <div class="btns_index">
          <a onclick="MandaUsusario(1300), MudaConteudoData(2)" style="cursor: pointer;">
            <svg width="100%" height="100%;" viewBox="0 0 16 16" class="bi bi-file-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 3a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3zm6 7a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 11.825 10.623 11 8 11s-4.146.826-5 1.755V13a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
    
    <div class="col">
      <div class="label_div_btns">
        <label class="label_btns_index">Editoras Cadastrada</label>
        <div class="btns_index">
          <a onclick="MandaUsusario(1300), MudaConteudoData(3)" style="cursor: pointer;">
            <svg width="100%" height="100%;" viewBox="0 0 16 16" class="bi bi-briefcase-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
              <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v1.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="col">
      <div class="label_div_btns" onclick="MudaConteudo(1)" style="cursor: pointer;">
        <label class="label_btns_index">Cadastrar Livro</label>
        <div class="btns_index">
          <a onclick="MandaUsusario(760)">
            <img width="100%" height="100%;" class="imgs_btns" src="https://img.icons8.com/ios-filled/150/000000/add-book.png"/>
          </a>
        </div>
      </div>
    </div>


    <div class="col">
      <div class="label_div_btns" onclick="MudaConteudo(2)" style="cursor: pointer;">
        <label class="label_btns_index">Cadastrar Autor</label>
        <div class="btns_index">
          <a onclick="MandaUsusario(760)">
            <img width="100%" height="100%;" class="imgs_btns"  src="https://img.icons8.com/metro/150/000000/add-user-male.png"/>
          </a> 
        </div>
      </div>
    </div>


    <div class="col">
      <div class="label_div_btns" onclick="MudaConteudo(3)" style="cursor: pointer;">
        <label class="label_btns_index">Cadastrar Editora</label>
        <div class="btns_index">
          <a onclick="MandaUsusario(760)">
            <svg width="100%" height="100%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.5 8a6.5 6.5 0 1113 0 6.5 6.5 0 01-13 0zM8 0a8 8 0 100 16A8 8 0 008 0zm.75 4.75a.75.75 0 00-1.5 0v2.5h-2.5a.75.75 0 000 1.5h2.5v2.5a.75.75 0 001.5 0v-2.5h2.5a.75.75 0 000-1.5h-2.5v-2.5z"></path></svg>
          </a>
        </div>
        <div id="local_cadastro"></div>
      </div>
    </div>

  </div>


</div> <!-- div container -->

<div style="margin-top: 30px;"></div>
  <div class="jumbotron tamanho-tela">

    <h3 style="margin-left: 1%">
      <img src="https://img.icons8.com/ios-filled/50/000000/database-restore.png"/>
      Cadastrar
    </h3>
    
    <br>
    <br>

    <div style="margin-left: 1%" id="conteudo_cadastrar">  



      <!-- DIV QUE FICA O CADASTRO DO AUTOR -->
      <div id="cadastro_autor" class="divs_cadastros">
        <form action="recebe_autor.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Nome Completo</label>
            <input type="text" required="required" class="form-control" name='nome_autor' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: Machado de Asiss">
            <small class="form-text text-muted">Escreva o nome do Autor(a) do livro aqui..</small>
          </div>
          <div class="row">
            <div class="col-lg-6">
                <label for="exampleFormControlSelect1">Genero do Autor(a)</label>
                <select required="required" name='genero' class="form-control" id="exampleFormControlSelect1">
                  <option value="">Selecione um Genero</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                  <option value="Outros">Outros</option>
                </select>
            </div>

            <div class="col-lg-6">
              <label for="exampleFormControlSelect1">Data Nasc. do Autor(a)</label>
              <input required="required" name='datanasc' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
          </div>
          
          <br>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>


       <!-- DIV QUE FICA O CADASTRO Da EDITORA -->
      <div id="cadastro_editora" class="divs_cadastros" style="display: none">
        <form action="recebe_editora.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Nome da Editora</label>
            <input required="required" type="text" class="form-control" name='nome_editora' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: Companhia Machado de Asiss">
            <small class="form-text text-muted">Escreva o nome da Editora de livros aqui..</small>
          </div>
          <div class="row">
            <div class="col-lg-6">
               <label for="exampleInputEmail1">Endereço da Editora</label>
              <input required="required" type="text" class="form-control" name='endereco' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: Avenida Seres Supremos">
            </div>
             <div class="col-lg-6">
                 <label for="exampleInputEmail1">Número</label>
                <input type="text" class="form-control" name='numero' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: 20258">
              </div>
          </div>
          <br>
          <div class="form-group">
            <label for="exampleInputEmail1">Complemento</label>
            <input required="required" type="text" class="form-control" name='complemento' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: Machado de Asiss">
          </div>
          
          <br>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>



      <!-- DIV QUE FICA O CADASTRO DO LIVRO -->
      <div id="cadastro_livro" class="divs_cadastros" style="display: none">
        <form action="recebe_livro.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Nome do Livro</label>
            <input required="required" type="text" class="form-control" name='livro_nome' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ex: Doctor Who">
            <small class="form-text text-muted">Escreva o nome do Livro aqui..</small>
          </div>
          <div class="row">
            <div class="col-lg-6">
                <label for="exampleFormControlSelect1">Categoria Do Livro</label>
                <select required="required" name='categoria' class="form-control" id="exampleFormControlSelect1">
                  <option value="">Selecione uma categoria</option>
                  <?php

                    $sql_cate = $conn->query('SELECT * FROM categoria');
                    $matriz_cate = $sql_cate->fetchAll();

                    foreach ($matriz_cate as $linha) :
                  ?>

                  <option value="<?php echo $linha['id_categoria']; ?>"><?php echo $linha['nome']; ?></option>


                  <?php endforeach; ?>

                </select>
            </div>
            <div class="col-lg-6">
                <label for="exampleFormControlSelect1">Autor</label>
                <select required="required" name='autor' class="form-control" id="exampleFormControlSelect1">
                  <option value="">Selecione um(a) Autor(a)</option>
                  <?php

                    $sql_autor = $conn->query('SELECT * FROM autor');
                    $matriz_autor = $sql_autor->fetchAll();

                    foreach ($matriz_autor as $linha) :
                  ?>

                  <option value="<?php echo $linha['id_autor']; ?>"><?php echo $linha['nome']; ?></option>


                  <?php endforeach; ?>
                  
                </select>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-12">
                <label for="exampleFormControlSelect1">Editora</label>
                <select required="required" name='editora' class="form-control" id="exampleFormControlSelect1">
                  <option value="">Selecione uma Editora</option>
                  <?php

                    $sql_autor = $conn->query('SELECT * FROM editora');
                    $matriz_autor = $sql_autor->fetchAll();

                    foreach ($matriz_autor as $linha) :
                  ?>

                  <option value="<?php echo $linha['id']; ?>"><?php echo $linha['nome']; ?></option>

                  <?php endforeach; ?>
                  
                </select>
            </div>
          </div>
          
          <br>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>

    </div>
    <div id="local_dados"></div>
  </div>

<div style="margin-top: 30px;"></div>
<div class="jumbotron tamanho-tela">

  <h3 style="margin-left: 1%">
    <img src="https://img.icons8.com/ios-filled/50/000000/database-restore.png"/>
    Tabelas e Dados
  </h3>
  
  <br>
  <br>



  <div id="tb_livros" style="margin-left: 1%" class="tables_invi">
    <table id="example1" class="table table-striped table-bordered" style="width:100%">
      <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Autor</th>
                <th>Editora</th>
            </tr>
        </thead>
        <tbody>
        <?php

          $sql_pega_dados = $conn->query('SELECT a.id, a.nome as nome_livro, b.nome as nome_categoria, c.nome as nome_autor, d.nome as nome_editora FROM livros as a
            INNER JOIN categoria as b ON b.id_categoria = a.id_categoria
            INNER JOIN autor as c ON a.id_autor = c.id_autor
            INNER JOIN editora as d ON d.id = a.id_editora');
          $fetch = $sql_pega_dados->fetchAll();

          foreach ($fetch as $linha):
        ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome_livro'];?></td>
            <td><?php echo $linha['nome_categoria'];?></td>
            <td><?php echo $linha['nome_autor'];?></td>
            <td><?php echo $linha['nome_editora'];?></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>





  <div id="tb_autores" style="margin-left: 1%; display: none" class="tables_invi">
    <table id="example2" class="table table-striped table-bordered" style="width:100%">
      <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data Nascimento</th>
                <th>Genero</th>
            </tr>
        </thead>
        <tbody>
        <?php

          $sql_pega_dados = $conn->query('SELECT * FROM autor');
          $fetch = $sql_pega_dados->fetchAll();

          foreach ($fetch as $linha):
        ?>
        <tr>
            <td><?php echo $linha['id_autor'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo date( 'd-m-Y' , strtotime( $linha['data_nasc'] ) ); ?></td>
            <td><?php echo $linha['genero'];?></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>




  <div id="tb_editoras" style="margin-left: 1%; display: none" class="tables_invi">
    <table id="example3" class="table table-striped table-bordered" style="width:100%">
      <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Autor</th>
                <th>Editora</th>
            </tr>
        </thead>
        <tbody>
        <?php

          $sql_pega_dados = $conn->query('SELECT * FROM editora');
          $fetch = $sql_pega_dados->fetchAll();

          foreach ($fetch as $linha):
        ?>
        <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo $linha['endereco'];?></td>
            <td><?php echo $linha['numero'];?></td>
            <td><?php echo $linha['compl'];?></td>
        </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </div>
</div>



<script>

  function MandaUsusario(pos){
    //scroll suave
    $('html, body').animate({scrollTop:pos}, 'slow'); //slow, medium, fast

  }

  function MudaConteudo(op){

    $('.divs_cadastros').css("display", "none");

    if(op == 1){
      $('#cadastro_livro').css("display", "block");

    }else if(op == 2){
      $('#cadastro_autor').css("display", "block");

    }else if(op == 3){
      $('#cadastro_editora').css("display", "block");

    }
  }


  function MudaConteudoData(op){

    $('.tables_invi').css("display", "none");

    if(op == 1){
      $('#tb_livros').css("display", "block");

    }else if(op == 2){
      $('#tb_autores').css("display", "block");

    }else if(op == 3){
      $('#tb_editoras').css("display", "block");

    }
  }


  //// iniciador das tabelas

  $(document).ready(function() {
    $('#example1').DataTable();
    $('#example2').DataTable();
    $('#example3').DataTable();
  } );

</script>

<?php
include "includes/footer.php";

}else{
header("Location: index.php");
}
?>