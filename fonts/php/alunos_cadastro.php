<?php

if (isset($_POST['submit'])) {    
 /*
    echo 'funciona';
    print_r('<br>');
    print_r($_POST['nome']);
    print_r('<br>');
     print_r($_POST['Bi']); 
     print_r('<br>');
    print_r($_POST['nascimento']);*/

   include_once ('conexão_com_banco.php');
    //pegando os dados do formulario 
    $nome = $_POST['nome'];
    $Bi = $_POST['Bi'];
    $nasc = $_POST['nascimento'];
    $sexo = $_POST['sexo'];
    $encarregado = $_POST['encarregado'];
    $morada = $_POST['morada'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];
    $classe = $_POST['classe'];
    //inserindo os dados na base de dados
    $php_base = mysqli_query($conectphp , "INSERT INTO alunos 
(nome_completo,bilhete_de_identidade,data_de_nascimento,sexo,nome_do_encarregado,morada,telefone,email,curso,classe)
    VALUES ('$nome','$Bi','$nasc','$sexo','$encarregado','$morada','$tel','$email','$curso','$classe')");

   }
?>
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
                <h2 id="PRE">NOVO ALUNO</h2>
            </div>
            <div class="form">
                <form action="alunos_cadastro.php" method="POST">
                    <div class="form-conteiner">
                        <div class="aluno">
                            <label for="nome">Nome Completo</label>
                            <input type="text" name="nome" id="nome"  placeholder="Digite o seu nome completo" >
                            <label for="Bi">Bilhete de identidade</label>
                            <input type="text"  name="Bi" id="Bi" placeholder="Digite o numero do  B.I" >
                            <label for="nascimento">Data de nascimento</label>
                            <input type="date" id="nascimento" name="nascimento" required max="2014-01-01">

                            <div class="sexo">
                                <h3>Sexo</h3>
                                <div class="sexo-content" style="border-radius: 5px;">
                                    <label for="Masculino">Másculino</label>
                                    <input type="radio" name="sexo" id="Masculino" VALUE="Masculino" >
                                    <label for="Femenino">Feménino</label>
                                    <input type="radio" name="sexo" id="Feménino" VALUE="Feménino">
                                </div>
                            </div>
                            <label for="localização">Morada</label>
                            <input type="text" name="morada" placeholder="Digite o  nome do seu bairro ">
                            <label for="curso">Curso</label>
                            <input type="text" id="curso" name="curso" placeholder="Qual o seu curso ">
                            <label for="class">Class</label>
                            <input type="number" name="classe" id="class" placeholder="class" >

                        </div>
                        <div class="Encarregado">
                            <label for="encarregadonome">Nome do Encarregado</label>
                            <input type="text" name="encarregado" id="encarregadonome" placeholder="Digite o seu nome completo">
                            <label for="tel">Telefone</label>
                            <input type="tel" name="tel" id="tel" placeholder="(+244) xxx-xxx-xxx">
                            <label for="e-mail">E-mail</label>
                            <input type="email" name="email" id="e-mail" placeholder="Digite o seu e-mail" >
                        </div>
                    </div>
                    <input type="submit" name="submit" id="enviar" value="Enviar">
                </form>
            </div>

        </div>

    </main>
    <script src="../scrips/cadastrdo.js"></script>
</body>

</html>