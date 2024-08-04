<?php 
include_once('conexão_com_banco.php');

if (isset($_POST['Update'])) {
    // Recuperar os dados do formulário
    $classe = $_POST['classe'];
    // Supondo que $classe esteja definido no arquivo verification_horario.php
  
    $primeiro_seg = $_POST['primeiro_seg'];
    $segundo_seg = $_POST['segundo_seg'];
    $terceiro_seg =$_POST['terceiro_seg'];
    $quarto_seg =$_POST['quarto_seg'];
    $quinto_seg =$_POST['quinto_seg'];
    $sexto_seg = $_POST['sexto_seg'];

    $primeiro_ter = $_POST['primeiro_ter'];
    $segundo_ter = $_POST['segundo_ter'];
    $terceiro_ter =$_POST['terceiro_ter'];
    $quarto_ter = $_POST['quarto_ter'];
    $quinto_ter = $_POST['quinto_ter'];
    $sexto_ter =$_POST['sexto_ter'];

    $primeiro_quar =$_POST['primeiro_quar'];
    $segundo_quar = $_POST['segundo_quar'];
    $terceiro_quar =$_POST['terceiro_quar'];
    $quarto_quar = $_POST['quarto_quar'];
    $quinto_quar =$_POST['quinto_quar'];
    $sexto_quar =$_POST['sexto_quar'];

    $primeiro_quin =$_POST['primeiro_quin'];
    $segundo_quin = $_POST['segundo_quin'];
    $terceiro_quin =$_POST['terceiro_quin'];
    $quarto_quin = $_POST['quarto_quin'];
    $quinto_quin = $_POST['quinto_quin'];
    $sexto_quin = $_POST['sexto_quin'];

    $primeiro_sex = $_POST['primeiro_sex'];
    $segundo_sex =$_POST['segundo_sex'];
    $terceiro_sex =$_POST['terceiro_sex'];
    $quarto_sex = $_POST['quarto_sex'];
    $quinto_sex = $_POST['quinto_sex'];
    $sexto_sex = $_POST['sexto_sex'];

    // Pegando os dados do formulário para segunda-feira
    // Restante do seu código...
    // Construindo a query de UPDATE
    $query = "UPDATE Horario SET
        primeiro_seg = '$primeiro_seg',
        segundo_seg = '$segundo_seg',
        terceiro_seg = '$terceiro_seg',
        quarto_seg = '$quarto_seg',
        quinto_seg = '$quinto_seg',
        sexto_seg = '$sexto_seg',
        primeiro_ter = '$primeiro_ter',
        segundo_ter = '$segundo_ter',
        terceiro_ter = '$terceiro_ter',
        quarto_ter = '$quarto_ter',
        quinto_ter = '$quinto_ter',
        sexto_ter = '$sexto_ter',
        primeiro_quar = '$primeiro_quar',
        segundo_quar = '$segundo_quar',
        terceiro_quar = '$terceiro_quar',
        quarto_quar = '$quarto_quar',
        quinto_quar = '$quinto_quar',
        sexto_quar = '$sexto_quar',
        primeiro_quin = '$primeiro_quin',
        segundo_quin = '$segundo_quin',
        terceiro_quin = '$terceiro_quin',
        quarto_quin = '$quarto_quin',
        quinto_quin = '$quinto_quin',
        sexto_quin = '$sexto_quin',
        primeiro_sex = '$primeiro_sex',
        segundo_sex = '$segundo_sex',
        terceiro_sex = '$terceiro_sex',
        quarto_sex = '$quarto_sex',
        quinto_sex = '$quinto_sex',
        sexto_sex = '$sexto_sex'
    WHERE classe= '$classe'";
    
    // Executando a query
    $result =$conectphp->query($query);
  
header('location:coordenadores_dashboard.php');

}
else {
    echo "in code we trust we have an erro";
}
?>