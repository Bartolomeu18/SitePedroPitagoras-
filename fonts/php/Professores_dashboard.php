<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--link para o favicon-->
      <link rel="shortcut icon" href="../icons/favicon.ico" type="image/x-icon">
  <!--links css-->
  <link rel="stylesheet" href="../estilo/profstyle.css">
  <link rel="stylesheet" media="screen and (min-width:375px) and (max-width:667px)" href="../mediaquery/alunomobile.css">

  <link rel="stylesheet" media="screen and (min-width:360px) and (max-width:740px)" href="../mediaquery/alunomobile.css">
  <!--tela igual galaxy s8+-->
  <link rel="stylesheet" media="screen and (min-width:320px) and (max-width:588px)" href="../mediaquery/alunomobile.css">
  <!--tela pequenas-->
  <link rel="stylesheet" media="screen and (min-width:658px) and (max-width:909px)" href="../mediaquery/alunotablet.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--link google icons-->
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,100,1,200" rel="stylesheet" />
<!--bootsrap icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Instituto Politecnico Privado Pedro Pitágoras</title>

</head>

<body> 
  <header>
      <div class="menu-lateral">
        <img src="../img/nova_logo-removebg-preview.png" alt="logo do Instituto">
      <h3>"Altar do Saber"</h3>
      <div class="menu-itens">
      <div class="itens"><i class="bi bi-journal-arrow-up"></i><a href="#conteudo" onclick="inf()">Relatorio</a></div> 
        <div class="itens"><i class="bi bi-chat-left-text"></i><a href="#conteudopagamento"onclick="paga()">Comunicados</a></div>
        <div class="itens"><i class="bi bi-graph-up-arrow"></i><a href="#rendimento" onclick="rendi()">Rendimento</a></div>
        <div class="itens"><i class="bi bi-table"></i><a href="#notas" onclick="nota()">Notas </a></div>
        <div class="itens"><i class="bi bi-card-checklist"></i><a href="#materias" onclick="maté()">matérias</a></div>        
        <div class="itens"><i class="bi bi-calendar4-week"></i><a href="#horaroi" onclick="hora()">Horário</a></div>
        <div class="itens"><i class="bi bi-bell"></i><a href="#noti" onclick="notif()">Notificações</a></div>
        <div class="itens"><i class="bi bi-box-arrow-right"></i><a href="../html/index.html">Sair</a></div>
      </div>

    <!--<div class="menu-itens">
        <div class="itens"><i class="bi bi-person-circle"></i><a href="#conteudo" onclick="infor()">informações</a></div> 
        <div class="itens"><i class="bi bi-bank"></i><a href="#conteudopagamento"onclick="pagamen()">Pagamentos</a></div>
        <div class="itens"><i class="bi bi-graph-up-arrow"></i><a href="#rendimento" onclick="rendimen()">Rendimento</a></div>
        <div class="itens"><i class="bi bi-table"></i><a href="#notas" onclick="notas()">Notas </a></div>
        <div class="itens"><i class="bi bi-card-checklist"></i><a href="#materias" onclick="materias()">matérias</a></div>        
        <div class="itens"><i class="bi bi-calendar4-week"></i><a href="#horaroi" onclick="horario()">Horário</a></div>
        <div class="itens"><i class="bi bi-bell"></i><a href="#noti" onclick="Notifica()">Notificações</a></div>
        <div class="itens"><i class="bi bi-box-arrow-right"></i><a href="index.html">Sair</a></div>
      </div>-->  
    </div>
  </header>

  <main>
  <div class="body">
    <div class="body-conteiner">
         <div class="img-conteiner">
     <img id="alunoimg" src="../img/alunobb.jpg" alt="imagem do aluno"><h3 id="diciplina">S.E.A.C</h3>
     <button id="btn-mobile" ><img src="../img/menu.png" alt=""></button>
     
    </div>
    <div class="aluno">
     
      <div class="mine-inf">
        <p id="curso">Diciplina:  <br><span id="curso">Técnico Informática</span></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p id="nine-iten">Nome: <br><span id="nome">Estavão Ántonio</span></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p id="nine-iten">Classe: <br><span id="Classe">13ª</span></p>
      </div>
    </div>
  </div>
  <div id="menu-mobile" >
      <h3>"Altar do Saber"</h3>
      <div class="itens"><i class="bi bi-journal-arrow-up"></i><a href="#conteudo" onclick="inf()">Relatorio</a></div> 
        <div class="itens"><i class="bi bi-chat-left-text"></i><a href="#conteudopagamento"onclick="paga()">Comunicados</a></div>
        <div class="itens"><i class="bi bi-graph-up-arrow"></i><a href="#rendimento" onclick="rendi()">Rendimento</a></div>
        <div class="itens"><i class="bi bi-table"></i><a href="#notas" onclick="nota()">Notas </a></div>
        <div class="itens"><i class="bi bi-card-checklist"></i><a href="#materias" onclick="maté()">matérias</a></div>        
        <div class="itens"><i class="bi bi-calendar4-week"></i><a href="#horaroi" onclick="hora()">Horário</a></div>
        <div class="itens"><i class="bi bi-bell"></i><a href="#noti" onclick="notif()">Notificações</a></div>
        <div class="itens"><i class="bi bi-box-arrow-right"></i><a href="../html/index.html">Sair</a></div>
      </div>
  </div>
<div class="main-menu">
  <a href="#conteudo" onclick="inf()">informações</a>
  <a href="#notas" onclick="nota()">Notas </a>
  <a href="#conteudopagamento"onclick="paga()">Pagamentos</a>
  </div>
</div>  
<div id="conteudo" class="conteudo">
<h3>informações</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, provident sit necessitatibus animi, illum sint, a hic vero ab eum molestias sunt. Officiis sequi nisi nam tempore repellendus blanditiis beatae!</p>
</div>

   <div id="conteudopagamento" class="conteudo">
  <h3>pagamentos</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium distinctio delectus, pariatur voluptatum, adipisci nemo libero totam magnam voluptatem facere temporibus eum, molestiae repellendus ipsam nesciunt incidunt aliquam quidem quae!</p>
  </div>

<div id="rendimento" class="conteudo">
  <h3>rendimento</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae labore facilis aliquid inventore numquam eum adipisci, repudiandae molestiae obcaecati est perferendis optio tempore. Officiis expedita laudantium facilis pariatur laborum illum.</p>
<!--<button type="submit" id="close">OK</button>-->
  </div> 
 
  <div id="notas" class="conteudo">
    <h3>Notas</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus repudiandae esse quaerat dicta minima, fugit tempore a consequuntur doloribus quod neque sunt veniam tenetur laboriosam cumque laborum magni sint quidem?</p>
    </div>   

    <div id="materias" class="conteudo">
      <h3>Materias</h3>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus repudiandae esse quaerat dicta minima, fugit tempore a consequuntur doloribus quod neque sunt veniam tenetur laboriosam cumque laborum magni sint quidem?</p>
      </div>   

      <div id="horario" class="conteudo">
        <h3>Horário</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus repudiandae esse quaerat dicta minima, fugit tempore a consequuntur doloribus quod neque sunt veniam tenetur laboriosam cumque laborum magni sint quidem?</p>
        </div>   

        <div id="noti" class="conteudo">
          <h3>Notificações</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus repudiandae esse quaerat dicta minima, fugit tempore a consequuntur doloribus quod neque sunt veniam tenetur laboriosam cumque laborum magni sint quidem?</p>
          </div>   
    </main>
<script src="../scrips/user.js"></script>
</body>