<?php
if (isset($_POST['submit'])) {    
    include_once('conexão_com_banco.php');
    
    //pegando os dados do formulário 
    $nome = $_POST['nome'];
    $Bi = $_POST['Bi'];
    $nacionalidade = $_POST['Nacionalidade'];
    $data_nasc = $_POST['nascimento']; // Corrigido
    $genero = $_POST['sexo'];
    $morada = $_POST['Morada'];
    $tel = $_POST['N_Telefone'];
    $email = $_POST['Email'];  
    $grau = $_POST['Grau_Academico'];
    $aread = $_POST['forma'];
    $inst = $_POST['Instituto_de_Formação'];
    $classe = $_POST['classe'];
    $dicipli = $_POST['Diciplinas_Ministradas'];

    //inserindo os dados na base de dados
    $php_base = mysqli_query($conectphp, "INSERT INTO professores
    (nome, bilhete_de_identidade, nacionalidade, data_nascimento, genero, endereco, telefone, email, grau_academico, area_formacao, instituicao_formacao, classe, disciplinas_ministradas)
    VALUES ('$nome', '$Bi', '$nacionalidade', '$data_nasc', '$genero', '$morada', '$tel', '$email', '$grau', '$aread', '$inst', '$classe', '$dicipli')");
}   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../estilo/inscriçãostyle.css">
    <link rel="stylesheet" media="screen and (min-width:375px) and (max-width:667px)" href="../mediaquery/inscmobile.css">
    <link rel="stylesheet" media="screen and (min-width:360px) and (max-width:740px)" href="../mediaquery/inscmobile.css">
    <link rel="stylesheet" media="screen and (min-width:320px) and (max-width:588px)" href="../mediaquery/inscmobile.css">
    <link rel="stylesheet" media="screen and (min-width:658px) and (max-width:909px)" href="../mediaquery/instablet.css">
    <link rel="stylesheet" media='screen and  (min-width:662px;) and (max-width:988px;)' href="../mediaquery/instablet2.css">
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
                <h2 id="PRE">NOVO PROFESSOR</h2>
            </div>
            <div class="form">
                <form action="Professores_cadastro.php" method="post"> <!-- Corrigido -->
                    <div class="form-conteiner">
                        <div class="aluno">
                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nome" name="nome" placeholder="Digite o seu nome completo" required>
                            <label for="Bi">Bilhete de identidade</label>
                            <input type="text" id="Bi" name="Bi" placeholder="Digite o numero do B.I" required>
                            <label for="naciona">Nacionalidade</label>
                            <input type="text" id="naciona" name="Nacionalidade" placeholder="Digite a sua nacionalidade" required>
                            <label for="nascimento">Data de nascimento</label>
                            <input type="date" id="nascimento" name="nascimento" required min="2014-01-01">
                            <div class="sexo">
                                <h3>Sexo</h3>
                                <div class="sexo-content" style="border-radius: 5px;">
                                    <label for="Masculino">Másculino</label>
                                    <input type="radio" name="sexo" id="Masculino" value="M" required> <!-- Corrigido -->
                                    <label for="Femenino">Feménino</label>
                                    <input type="radio" name="sexo" id="Feménino" value="F" required> <!-- Corrigido -->
                                </div>
                            </div>
                            <label for="localização">Morada</label>
                            <input type="text" name="Morada" placeholder="Digite o nome do seu bairro" required>
                            <label for="tel">Telefone</label>
                            <input type="tel" id="tel" name="N_Telefone" placeholder="(+244) xxx-xxx-xxx" required>
                        </div>
                        <div class="Encarregado">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="Email" placeholder="Digite o seu email" required>
                            <label for="grau">Grau académico</label>
                            <input type="text" id="grau" name="Grau_Academico" placeholder="Qual o seu grau académico" required>
                            <label for="forma">Área de Formação</label>
                            <input type="text" name="forma" id="arae" placeholder="Área de formação">
                            <label for="inst_form">Instituto de Formação</label>
                            <input type="text" id="inst_form" name="Instituto_de_Formação" placeholder="Digite o nome do seu Instituto de Formação" required>
                            <label for="classe">Classe</label>
                            <input type="int" id="classe" name="classe" placeholder="Qual a sua classe" required>
                            <label for="curso">Disciplina</label>
                            <input type="text" id="curso" name="Diciplinas_Ministradas" placeholder="Disciplinas Ministradas" required>
                        </div>
                    </div>
                    <input type="submit" id="enviar" name="submit" value="Enviar">
                </form> 
            </div>
        </div>
    </main>
    <script src="../scrips/cadastrdo.js"></script>
</body>
</html>
