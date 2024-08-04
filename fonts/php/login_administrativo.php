
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--link para o favicon-->
      <link rel="shortcut icon" href="../icons/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../estilo/teladelogin.css">
  <link rel="stylesheet" media="screen and (min-width:375px) and (max-width:667px)" href="../mediaquery/loginmobile.css">
  <!--telefones normais-->
  <link rel="stylesheet" media="screen and (min-width:360px) and (max-width:740px)" href="../mediaquery/loginmobile.css">
  <!--tela igual galaxy s8+-->
  <link rel="stylesheet" media="screen and (min-width:320px) and (max-width:588px)" href="../mediaquery/loginmobile.css">
  <!--tela pequenas-->
  <title>Instituto Politecnico Privado Pedro Pitágoras</title>
</head>

<body>
    <div class="conteiner">
  <div class="conteiner-header">
    <img src="../img/nova_logo-removebg-preview.png" alt="logo da instituição" id="log">
    <h2>Instituto Politecnico Privado Pedro Pitágoras</h2>
    <h3>"O ALTAR DO SABER"</h3>
    <h2>NIF: 00048357</h2>
    <br>
  </div>
  <div class="conteiner-body">
    <form action="verificação_admin.php" method="post">
        <br>
        <br>
        <br>
      <label for="nome">Nome de Usuário</label>
      <input type="text" name="nome" id="nome" placeholder="Digite o nome de usuario">
      <label for="Bi">Senha</label>
      <input type="text"  name="senha" id="Bi" placeholder="Digite a sua senha">
      <div class="entrar">
              <input type="submit" name="submit" id="entrar" value="Entrar">
      </div>

    </form>
  </div>
</div>
<script src="../script/login_scripts.js"></script>
</body>
</html>