<?php
session_start();
if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha'])){
     //asseçar
    // echo "seja muito bem vindo";
    include_once('conexão_com_banco.php');
    //verificando se o os dados do form estão chegando no php
       $nome = $_POST['nome'];
       $senha= $_POST['senha'];
   
      /* print_r('NOME:'.$nome);
       print_r('<br>');
       print_r('sennha:'.$senha);*/


       //comparandos se dados os dados enviados nos input são iguais aos que estão existem
       $verif = "SELECT * from secretaria WHERE nome = '$nome'  and senha= '$senha' ";
       //fazer consulta na base de dados na base de dados atravez variavel conectphp declarada no arquivo de conexao com base de dados
       $consulta = $conectphp ->query($verif);
           if(mysqli_num_rows($consulta)<1){

               header('Location: login_administrativo.php'); 

           }else{

               $_SESSION['nome'] = $nome;
               $_SESSION['senha'] = $senha;
               
               header('Location: secretaria_adimin.php');
           }
   
   }
   
else{
    //caso nenhuma das instruções de cima não forem comprida readericiona para essa pagina
       header('Location: login.php');
   }
   
     
?>
