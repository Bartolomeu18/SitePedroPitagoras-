<?php
session_start();
include_once('conexão_com_banco.php');
// se não existir um sessão iniciada vai redircionar para a tela de login 
if((!isset($_SESSION['nome']) == true)  and (!isset($_SESSION['Bi']) == true) and (!isset($_SESSION['função']) == true) ){

  unset($_SESSION['nome']);
  unset($_SESSION['Bi']);
  unset($_SESSION['função']);
  header('location: login.php');
}
  //pegando o total de PROFESSORES da BD
  $users = "SELECT count(professor_id) from professores ";
  $execution = $conectphp->query($users);
  //fecthing O total de alunos cadastrados na BD
  $taking_result = mysqli_fetch_assoc($execution);
  $result= implode(",",$taking_result);
//fettching os dados de todos os usuários 
$all_users = "SELECT * FROM professores ORDER BY professor_id ";
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
      <h3>Coordenador</h3> 
      <div class="menu-itens">
        <div class="itens"><i class="bi bi-plus-circle"></i><a href="../php/Professores_cadastro.php">Professor</a></div> 
        <div class="itens"><i class="bi bi-pencil-square"></i><a href="editar_prof_modal.php"onclick="paga()">editar dados</a></div>
        <div class="itens"><i class="bi bi-person-circle"></i><a href="#conteudo" onclick="inf()">informações</a></div>
        <div class="itens"><i class="bi bi-plus-circle"></i><a href="#rendimento" onclick="rendi()">Criar Horário</a></div>
        <div class="itens"><i class="bi bi-pencil-square"></i><a href="editar_horário_modal.php" onclick="rendim()">editar Horário</a></div>
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
      <div class="itens"><i class="bi bi-plus-circle"></i><a href="../php/Professores_cadastro.php">Aluno</a></div> 
      <div class="itens"><i class="bi bi-pencil-square"></i><a href="editar_prof_modal.php"onclick="paga()">editar dados</a></div>
      <div class="itens"><i class="bi bi-person-circle"></i><a href="#conteudo" onclick="inf()">informações</a></div>  
      <div class="itens"><i class="bi bi-plus-circle"></i><a href="#rendimento" onclick="rendi()">Criar Horário</a></div>
      <div class="itens"><i class="bi bi-pencil-square"></i><a href="editar_horário_modal.php" onclick="rendim()">editar Horário</a></div>
      <div class="itens"><i class="bi bi-bell"></i><a href="#noti" onclick="notif()"> Enviar Notificações</a></div>  
      <div class="itens"><i class="bi bi-box-arrow-right"></i><a href="index.html">Sair</a></div>
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
       <p><span><?php echo $result ?> </span> Professores</p> 
    </div>
    <div class="user_itens">
       <p><span><?php echo $result ?> </span> Diciplinas</p> 
    </div>

  </section>


<div id="rendimento" class="conteudo">
  <div class="container">
        <fieldset>
        <h2>Horário</h2>
               <form action="Criar_horário.php" method="post">
              <div class="col">
                <input type="number" name="CH" id="assunto" class="input" placeholder="Digite a classe correspodente ao horário" required>
              </div>
          <button type="submit"  name="submit" value="Enviar" id="enviar" class="btn btn-lg btn-dark btn-block">Enviar</button>
        </form>
      </div>
  </div> 

      <div id="conteudo" class="conteudo">
      <div class="table-responsive">

        <table class="table  table-silver table-hover ">
  <thead>
    <tr>
 
    <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Bilhete</th>
      <th scope="col">Nacionalidade</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Genero</th>
      <th scope="col">Morada</th>
      <th scope="col">Nº Telefone</th>
      <th scope="col">Email</th>     
      <th scope="col">Grau Academico</th>
      <th scope="col">Area de formação</th>  
      <th scope="col">Instituto de Formação</th>  
      <th scope="col">Diciplinas Ministradas</th>  
      <th scope="col">função</th>  
    </tr>
  </thead>
  <tbody>
    <?php

while ($user_data = mysqli_fetch_assoc($all_data)) {
  echo "<tr>
          <td>" . $user_data['professor_id'] . "</td>
          <td>" . $user_data['nome'] . "</td>
          <td>" . $user_data['bilhete_de_identidade'] . "</td>
          <td>" . $user_data['nacionalidade'] . "</td>
          <td>" . $user_data['data_nascimento'] . "</td>
          <td>" . $user_data['genero'] . "</td>
          <td>" . $user_data['endereco'] . "</td>
          <td>" . $user_data['telefone'] . "</td>
          <td>" . $user_data['email'] . "</td>
          <td>" . $user_data['grau_academico'] . "</td>
          <td>" . $user_data['area_formacao'] . "</td>
          <td>" . $user_data['instituicao_formacao'] . "</td>
          <td>" . $user_data['disciplinas_ministradas'] . "</td>
          <td>" . $user_data['função'] . "</td>
        </tr>";
}

    ?>
  </tbody>
</table>
      </div>
        </div>   

        <div id="noti" class="conteudo">
        <div class="modal_not" id="mymodal">
        <button onclick="umprofessor()">Um Professor</button>
        <button onclick="todosprofessores()">Todos Professores</button>
    </div>
        <div class="container">
        <fieldset>
        <h2>Enviar Notificação</h2>
          <form action="verfication_todos_prof.php" id="form" method="post">
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
<script>
  //função  para modal notificações
function umprofessor(){
   const myform = document.getElementById('form');
   const mymodal = document.getElementById('mymodal');

   myform.action ='verification_notification_prof.php';
   mymodal.style.display="none";

 }

 function todosprofessores(){
   
console.log("erros");
   const mymodal = document.getElementById('mymodal');
   mymodal.style.display="none";

 }
</script>
</body>
</html>