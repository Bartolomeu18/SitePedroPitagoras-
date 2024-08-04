<?php
if (isset($_POST['submit']) && !empty($_POST['assunto']) && !empty($_POST['data']) && !empty($_POST['mensagen']) ) {
    
    $data= $_POST['data'];
    $mensagen =$_POST['mensagen'];
    $assunto = $_POST['assunto'];

    INCLUDE_ONCE("conexão_com_banco.php");
    $enter= "INSERT INTO notificação_profs (prof_notifi,assunto,data_de_envio) values('$mensagen','$assunto','$data')";
    $send =$conectphp->query($enter); 
    
    header("location:coordenadores_dashboard.php");

} else {
  echo "in code we trust, we have an erro!";
}

?>