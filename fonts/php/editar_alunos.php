<?php
  include_once ('conexão_com_banco.php');
    $id =$_POST['studentId'];
       // print_r($id);
      //Verificando se o ID enviados nos input  existem na base de dados
            $verif = "SELECT * from alunos WHERE id = '$id'  ";
            //fazer consulta na base de dados na base de dados atravez variavel conectphp declarada no arquivo de conexao com base de dados
            $consulta = $conectphp ->query($verif);
                if($consulta->num_rows < 1){
    
         header('Location:editar_aluno_modal.php');
                }
                else{
                 
             while($user_data = mysqli_fetch_assoc($consulta))
              {
                //pegando os dados do formulario 
                $nome = $user_data['nome_completo'];
                $Bi = $user_data['bilhete_de_identidade'];
                $nasc = $user_data['data_de_nascimento'];
                $sexo = $user_data['sexo'];
                $encarregado = $user_data ['nome_do_encarregado'];
                $morada = $user_data['morada'];
                $tel = $user_data['telefone'];
                $email = $user_data['email'];
                $curso = $user_data['curso'];
                $classe =$user_data['classe'];
                
             }
      
    

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
                <h2 id="PRE">EDITAR DADOS</h2>
            </div>
            <div class="form">
                <form action="verificando_edição.php" method="POST">
                    <div class="form-conteiner">
                        <div class="aluno">
                            <label for="nome">Nome Completo</label>
                            <input type="text" name="nome" id="nome"  placeholder="Digite o seu nome completo" value="<?php echo $nome ?>" >
                            <label for="Bi">Bilhete de identidade</label>
                            <input type="text"  name="Bi" id="Bi" placeholder="Digite o numero do  B.I" value="<?php echo $Bi ?>" >
                            <label for="nascimento">Data de nascimento</label>
                            <input type="date" id="nascimento" name="nascimento" required max="2014-01-01" value="<?php echo $nasc ?>">

                            <div class="sexo">
                                <h3>Sexo</h3>
                                <div class="sexo-content" style="border-radius: 5px;">
                                    <label for="Masculino">Másculino</label>
                                    <input type="radio" name="sexo" id="Masculino" value="<?php echo ($sexo == 'Masculino') ? 'checked': ''?>" >
                                    <label for="Femenino">Feménino</label>
                                    <input type="radio" name="sexo" id="Feménino"value= "<?php echo ($sexo == 'Feménino') ? 'checked': ''?>">
                                </div>
                            </div>
                            <label for="localização">Morada</label>
                            <input type="text" name="morada" placeholder="Digite o  nome do seu bairro " value="<?php echo $morada ?>">
                            <label for="curso">Curso</label>
                            <input type="text" id="curso" name="curso" placeholder="Qual o seu curso " value="<?php echo $curso ?>"> 
                            <label for="class">Class</label>
                            <input type="number" name="classe" id="class" placeholder="class" value="<?php echo $classe ?>">

                        </div>
                        <div class="Encarregado">
                            <label for="encarregadonome">Nome do Encarregado</label>
                            <input type="text" name="encarregado" id="encarregadonome" placeholder="Digite o seu nome completo" value="<?php echo $encarregado?> ">
                            <label for="tel">Telefone</label>
                            <input type="tel" name="tel" id="tel" placeholder="(+244) xxx-xxx-xxx" value="<?php echo $tel ?>" >
                            <label for="e-mail">E-mail</label>
                            <input type="email" name="email" id="e-mail" placeholder="Digite o seu e-mail" value="<?php echo $email ?>" >
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                        </div>
                    </div>
                    <input type="submit" name="Update" id="enviar" value="Enviar">
                </form>
            </div>

        </div>

    </main>

    <script src="../scrips/cadastrdo.js"></script>
</body>

</html>