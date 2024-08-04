<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--link para o favicon-->
        <link rel="shortcut icon" href="../icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../estilo/inscriçãostyle.css">
    <link rel="stylesheet" media="screen and (min-width:375px) and (max-width:667px)" href="../mediaquery/inscmobile.css">
    <!--telefones normais-->
    <link rel="stylesheet" media="screen and (min-width:360px) and (max-width:740px)" href="../mediaquery/inscmobile.css">
    <!--tela igual galaxy s8+-->
    <link rel="stylesheet" media="screen and (min-width:320px) and (max-width:588px)" href="../mediaquery/inscmobile.css">
    <!--tela pequenas-->
    <link rel="stylesheet" media="screen and (min-width:658px) and (max-width:909px)" href="../mediaquery/instablet.css">
    <!--tabletes mine-->
    <link rel="stylesheet" media='screen and  (min-width:662px;) and (max-width:988px;)' href="../mediaquery/instablet2.css">
    <!--ipads-->
    <title>Instituto Politecnico Privado Pedro Pitágoras</title>
</head>
<body>
    <main>
        <div class="conteiner"> 
            <div class="header">
            <img src="../img/nova_logo-removebg-preview.png" alt="logo da instituição" id="log">
            <h2>Instituto Politecnico Privado Pedro Pitágoras</h2>
            <h3>"O ALTAR DO SABER"</h3>
            <h2>NIF: 00048357</h2>
            <h2 id="PRE">CONFIRMAÇÕES</h2>
           </div>
           <div class="form">
  <form action="">
    <div    class="form-conteiner" >
            <div class="aluno" >
        <label for="nome">Nome Completo</label>
        <input type="text" id="nome" placeholder="Digite o seu nome completo" required>
        <label for="Bi">Bilhete de identidade</label>
            <input type="text" id="Bi" placeholder="Digite o numero do  B.I" required>
            <label for="nascimento">Data de nascimento</label>
            <input type="date" id="nascimento" name="nascimento" required min="2014-01-01">

            <div class="sexo">
                <h3>Sexo</h3>
                <div class="sexo-content" style="border-radius: 5px;">
                    <label for="Masculino">Másculino</label>
                    <input type="radio" name="sexo" id="Masculino" required>
                    <label for="Femenino">Feménino</label>
                    <input type="radio"  name="sexo" id="Feménino" required>
                </div>
            </div>
            <label for="localização">Morada</label>
            <input type="text" placeholder="Digite o  nome do seu bairro " required>
            <label for="curso">Curso</label>
            <input type="text" id="curso" name="curso" placeholder="Qual o seu curso " required>
            <label for="class">Classe</label>
            <input type="number" id="classe" placeholder="class" required>
            
    </div>
    <div class="Encarregado">
        <label for="encarregadonome">Nome do Encarregado</label>
        <input type="text" id="encarregadonome" placeholder="Digite o seu nome completo"required>
        <label for="tel">Telefone</label>
        <input type="tel" id="tel" placeholder="(+244) xxx-xxx-xxx" required>
        <label for="e-mail">E-mail</label>
        <input type="email" id="e-mail" placeholder="Digite o seu e-mail" required>
        <label for="fil" id="Descarregar">Enviar Comprovativo</label>
        <input type="file" id="fil" required>
    </div>
    </div>
<!--
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" placeholder="Digite o seu nome completo">
            <label for="encarregadonome">Nome do Encarregado</label>
            <input type="text" id="encarregadonome" placeholder="Digite o seu nome completo">
            <label for="Bi">Bilheti de identidade</label>
            <input type="number" id="Bi" placeholder="Digite o numero do  B.I">
            <label for="Biencarregado">Bilheti de identidade do Encarregado</label>
            <input type="number" id="Biencarregado" placeholder="Digite o numero do B.I">
            <label for="nascimento">Data de nascimento</label>
            <input type="date" id="nascimento" name="nascimento">
            <label for="nascimento">Data de nascimento do Encarregado</label>
            <input type="date" id="nascimento" name="nascimento">
            <div class="sexo">
                <h3>Sexo</h3>
                <div class="sexo-content">
                    <label for="Masculino">Másculino</label>
                    <input type="radio" name="gender">
                    <label for="Femenino">Feménino</label>
                    <input type="radio"  name="gendder">
                </div>
            </div>
            <label for="localização">Morada</label>
            <input type="text" placeholder="Digite o  nome do seu bairro ">
            <label for="curso">Curso</label>
            <input type="text" id="curso" name="curso" placeholder="Qual o seu curso ">
            <label for="class">Class</label>
            <input type="number" id="class" placeholder="class">-->
            <input type="submit" id="enviar" value="Enviar">
           </form> 
           </div>
         
        </div>

    </main>
    <script src="../scrips/cadastrdo.js"></script>
</body>
</html>