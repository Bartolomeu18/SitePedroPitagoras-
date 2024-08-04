<?php
    include_once("conexão_com_banco.php");
    if(isset($_POST['Update']))
   

    {
       
//pegando os dados do formulario   
    $id = $_POST['id']; 
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

    //atualizando os dados na base de dados
    $update_comand = "UPDATE alunos set 
    nome_completo = '$nome',bilhete_de_identidade = '$Bi',data_de_nascimento = '$nasc',sexo = '$sexo',nome_do_encarregado = '$encarregado',morada = '$morada',telefone ='$tel',email = '$email',curso = '$curso',classe ='$classe'
    WHERE id = '$id'";
      //mandando as atualizações para o banco de dados  
      $excution = $conectphp ->query($update_comand);

    }     //print_r($encarregado);
          //print_r($id); 

    header("Location:secretaria_adimin.php");    
          echo"<script>
                alert('Os dados foram allterados com susseso');
                </scritp>";
?>