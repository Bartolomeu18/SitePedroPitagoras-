<?php
session_start();
include_once('conexão_com_banco.php');
// se não existir um sessão iniciada vai redircionar para a tela de login 
if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['Bi']) == true) and (!isset($_SESSION['função']) == true) ){

  unset($_SESSION['nome']);
  unset($_SESSION['BI']);
  unset($_SESSION['função']);

  header('location: login_administrativo.php');
}
  //pegando o total de alunos da BD
  $users = "SELECT count(id) from alunos";
  $execution = $conectphp->query($users);
  //fecthing O total de alunos cadastrados na BD
  $taking_result = mysqli_fetch_assoc($execution);
  $result= implode(",",$taking_result);
//fettching os dados de todos os usuários 
$all_users = "SELECT * FROM alunos ORDER BY  id DESC";
$all_data = $conectphp->query($all_users);
//$test =$all_data-> num_rows;
// print_r($test);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--link para o favicon-->
 <link rel="shortcut icon" href="../icons/favicon.ico" type="image/x-icon">
  <!--links css-->
  <link rel="stylesheet" href="../estilo/secretariaadimin.css">
  <link rel="stylesheet" media="screen and (min-width:375px) and (max-width:667px)" href="../mediaquery/secretadiminmobile.css">

  <link rel="stylesheet" media="screen and (min-width:360px) and (max-width:740px)" href="../mediaquery/secretadiminmobile.css">
  <!--tela igual galaxy s8+-->
  <link rel="stylesheet" media="screen and (min-width:320px) and (max-width:588px)" href="../mediaquery/secretadiminmobile.css">
  <!--tela pequenas-->
  <link rel="stylesheet" media="screen and (min-width:658px) and (max-width:909px)" href="../mediaquery/alunotablet.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--link google icons-->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,100,1,200" rel="stylesheet"/>
<!--bootsrap icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Instituto Politecnico Privado Pedro Pitágoras</title>
</head>
<body> 
  <header>
      <div class="menu-lateral">
        <img src="../img/nova_logo-removebg-preview.png" alt="logo da instituição" >
      <h3>"Altar do Saber"</h3>
      <div class="menu-itens">
        <div class="itens"><i class="bi bi-plus-circle"></i><a href="../php/alunos_cadastro.php">Aluno</a></div> 
        <div class="itens"><i class="bi bi-pencil-square"></i><a href="editar_aluno_modal.php"onclick="paga()">editar dados</a></div>
        <div class="itens"><i class="bi bi-check-circle"></i><a href="#rendimento" onclick="rendi()">Validar Pagamentos</a></div>
        <div class="itens"><i class="bi bi-person-circle"></i><a href="#conteudo" onclick="inf()">informações</a></div> 
        <div class="itens"><i class="bi bi-bell"></i><a href="#noti" onclick="notif()">Enviar Notificações</a></div>  
        <div class="itens"><i class="bi bi-box-arrow-right"></i><a href="../html/index.html">Sair</a></div>
      </div>
    </div>
  </header>
  <main>
  <div class="body">
  <div id="menu-mobile" >
    <img src="../img/nova_logo-removebg-preview.png" alt="logo da instituição" >
      <h3>"Altar do Saber"</h3>
      <div class="itens"><i class="bi bi-plus-circle"></i><a href="../php/alunos_cadastro.php">Aluno</a></div> 
      <div class="itens"><i class="bi bi-pencil-square"></i><a href="#editar"onclick="paga()">editar dados</a></div>
      <div class="itens"><i class="bi bi-check-circle"></i><a href="#rendimento" onclick="rendi()">Validar Pagamentos</a></div>
      <div class="itens"><i class="bi bi-person-circle"></i><a href="#conteudo" onclick="inf()">informações</a></div> 
      <div class="itens"><i class="bi bi-bell"></i><a href="#noti" onclick="notif()"> Enviar Notificações</a></div>  
      <div class="itens"><i class="bi bi-box-arrow-right"></i><a href="../html/index.html">Sair</a></div>
      </div>
  </div>
<!-- Formulário da barra de pesquisa -->
<form action="/search" method="GET" id="form">
    <input type="text" id="search-bar" name="q" placeholder="Pesquisar por aluno">
    <button type="submit" id="search-button">Pesquisar</button>
</form>
<button id="btn-mobile" ><img src="../img/menu.png" alt=""></button>

  <section class="user">
    <div class="user_itens">
       <p><span><?php echo $result ?> </span> Alunos</p> 
    </div>
    <div class="user_itens">
        <p><span>23</span> Alunos sem dividas</p> 
     </div>
     <div class="user_itens">
        <p><span>23</span> Alunos com dividas</p> 
     </div>
  </section>


<div id="rendimento" class="conteudo">
  <h3>rendimento</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae labore facilis aliquid inventore numquam eum adipisci, repudiandae molestiae obcaecati est perferendis optio tempore. Officiis expedita laudantium facilis pariatur laborum illum.</p>
<!--<button type="submit" id="close">OK</button>-->
  </div> 
 
      <div id="conteudo" class="conteudo">
      <div class="table-responsive">

        <table class="table table-bordered border-second">
  <thead>
    <tr>
 
    <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Bilhete</th>
      <th scope="col">Data Nascimento</th>
      <th scope="col">Sexo</th>
      <th scope="col">Nome do Encarregado</th>
      <th scope="col">Morada</th>
      <th scope="col">Nº Telefone</th>
      <th scope="col">classe</th>     
      <th scope="col">Email</th>
   <th scope="col">Curso</th>  
    </tr>
  </thead>
  <tbody>
    <?php

   
   while($user_data = mysqli_fetch_assoc($all_data))
    {
       echo"<tr>

      <td>".$user_data['id']."</td>
      <td>".$user_data['nome_completo']."</td>
      <td>".$user_data['bilhete_de_identidade']."</td>
      <td>".$user_data['data_de_nascimento']."</td>
      <td>".$user_data['sexo']."</td>
      <td>".$user_data['nome_do_encarregado']."<td>
      <td>".$user_data['morada']."</td>
      <td>".$user_data['telefone']."</td>
      <td>".$user_data['classe']."</td>     
      <td>".$user_data['email']."</td>
      <td>".$user_data['curso']."</td>

      </tr>";
    }

    ?>
  </tbody>
</table>
      </div>
        </div>   

        <div id="noti" class="conteudo">
        <div class="container">
        <fieldset>
        <h2>Enviar Notificação</h2>
               <form action="verfication_notification.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <input type="text" name="assunto" id="assunto" class="input" placeholder="Digite o assunto" required>
              </div>
              <div class="col">
                <input type="date"  name="data" id="data" class="input"  required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea placeholder="Digite a sua mensagem Aqui" class="inputmail" id="mensagen" name="mensagen" rows="10" required></textarea>
          </div>
          <button type="submit"  name="submit" value="Enviar" id="enviar" class="btn btn-lg btn-dark btn-block">Enviar mensagem</button>
        </form>
        </fieldset>
   
      </div>

          </div>   
    </main>
<script src="../scrips/dashbord.js"></script>
</body>