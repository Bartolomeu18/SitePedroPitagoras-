<?php
include_once('conexão_com_banco.php');
$id = $_POST['studentId'];
// Verificando se o ID enviado nos input existe na base de dados
$verif = "SELECT * FROM Professores WHERE professor_id = '$id' ";
// Fazer consulta na base de dados através da variável conectphp declarada no arquivo de conexão com a base de dados
$consulta = $conectphp->query($verif);
if ($consulta->num_rows < 1) {
    header('Location: editar_aluno_modal.php');
} else {
    while ($user_data = mysqli_fetch_assoc($consulta)) {
        // Pegando os dados do formulário
        $nome = $user_data['nome'];
        $Bi = $user_data['bilhete_de_identidade'];
        $nacionalidade = $user_data['nacionalidade'];
        $data_nasc = $user_data['data_nascimento'];
        $genero = $user_data['genero'];
        $morada = $user_data['endereco'];
        $tel = $user_data['telefone'];
        $email = $user_data['email'];
        $grau = $user_data['grau_academico'];
        $aread = $user_data['area_formacao'];
        $inst = $user_data['instituicao_formacao'];
        $classe = $user_data['classe'];
        $dicipli = $user_data['disciplinas_ministradas'];


    }
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
                <h2 id="PRE">EDITAR DADOS</h2>
            </div>
            <div class="form">
                <form action="Professores_cadastro.php" method="post">
                    <div class="form-conteiner">
                        <div class="aluno">
                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nome" name="nome" placeholder="Digite o seu nome completo" value="<?php echo $nome ?>">
                            <label for="Bi">Bilhete de identidade</label>
                            <input type="text" id="Bi" name="Bi" placeholder="Digite o numero do B.I" value="<?php echo $Bi ?>">
                            <label for="naciona">Nacionalidade</label>
                            <input type="text" id="naciona" name="Nacionalidade" placeholder="Digite a sua nacionalidade" value="<?php echo $nacionalidade ?>">
                            <label for="nascimento">Data de nascimento</label>
                            <input type="date" id="nascimento" name="nascimento" value="<?php echo $data_nasc ?>">
                            <div class="sexo">
                                <h3>Sexo</h3>
                                <div class="sexo-content" style="border-radius: 5px;">
                                    <label for="Masculino">Másculino</label>
                                    <input type="radio" name="sexo" id="Masculino" value="M" <?php if ($genero == 'M') echo 'checked'; ?>>
                                    <label for="Femenino">Feménino</label>
                                    <input type="radio" name="sexo" id="Feménino" value="F" <?php if ($genero == 'F') echo 'checked'; ?>>
                                </div>
                            </div>
                            <label for="localização">Morada</label>
                            <input type="text" name="Morada" placeholder="Digite o nome do seu bairro" value="<?php echo $morada ?>" required>
                            <label for="tel">Telefone</label>
                            <input type="tel" id="tel" name="N_Telefone" placeholder="(+244) xxx-xxx-xxx" value="<?php echo $tel ?>" required>
                        </div>
                        <div class="Encarregado">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="Email" placeholder="Digite o seu email" value="<?php echo $email ?>" required>
                            <label for="grau">Grau académico</label>
                            <input type="text" id="grau" name="Grau_Academico" placeholder="Qual o seu grau académico" value="<?php echo $grau ?>" required>
                            <label for="forma">Área de Formação</label>
                            <input type="text" name="forma" id="arae" placeholder="Área de formação" value="<?php echo $aread ?>">
                            <label for="inst_form">Instituto de Formação</label>
                            <input type="text" id="inst_form" name="Instituto_de_Formação" placeholder="Digite o nome do seu Instituto de Formação" value="<?php echo $inst ?>" required>
                            <label for="classe">Classe</label>
                            <input type="int" id="classe" name="classe" placeholder="Qual a sua classe" value="<?php echo $classe ?>" required>
                            <label for="curso">Disciplina</label>
                            <input type="text" id="curso" name="Diciplinas_Ministradas" placeholder="Disciplinas Ministradas" value="<?php echo $dicipli ?>" required>
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
