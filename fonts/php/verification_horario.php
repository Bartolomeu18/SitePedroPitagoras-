<?php
    include_once("conexão_com_banco.php");
         if(isset($_POST['submit'])){
        $classe =$_POST['cl'];
        $sql = "SELECT * FROM Horario WHERE $classe = classe";
        $execut = $conectphp ->query($sql);
        if (mysqli_num_rows($execut)<1) {
  
                header("location:Criar_horário.php");
        } else {

                header("location:editar_horário.php");  
        }
          

    }else{
    #echo"in code we trust , we have an erro";
    }
?>
