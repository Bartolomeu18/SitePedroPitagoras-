<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['Bi']) && !empty($_POST['função'])) {
    include_once('conexão_com_banco.php');

    $nome = $_POST['nome'];
    $Bi = $_POST['Bi'];
    $funcao = $_POST['função'];

    $verif = "SELECT * FROM alunos WHERE nome_completo = '$nome' AND bilhete_de_identidade = '$Bi' AND função = '$funcao'";
    $consulta = $conectphp->query($verif);

    if(mysqli_num_rows($consulta) >= 1) {
        $_SESSION['nome'] = $nome;
        $_SESSION['Bi'] = $Bi;
        $_SESSION['função'] = $funcao ;
        header('Location: alunos_dashboard.php');
        exit;
    } else {
        $segunda_verif = "SELECT * FROM professores WHERE nome = '$nome' AND bilhete_de_identidade = '$Bi' AND função = '$funcao'";
        $segunda_consulta = $conectphp->query($segunda_verif);
        
        if(mysqli_num_rows($segunda_consulta) >= 1) {
            $_SESSION['nome'] = $nome;
            $_SESSION['Bi'] = $Bi;
            $_SESSION['função'] = $funcao;
            header('Location: Professores_dashboard.php');
            exit;
        } else {
            $quarta_verif = "SELECT * FROM coordenador WHERE nome = '$nome' AND bilheti_de_identidade = '$Bi' AND função = '$funcao'";
            $quarta_consulta = $conectphp->query($quarta_verif);
            
            if(mysqli_num_rows($quarta_consulta) >= 1) {
                $_SESSION['nome'] = $nome;
                $_SESSION['Bi'] = $Bi;
                $_SESSION['função'] = $funcao;
                header('Location: coordenadores_dashboard.php');
                exit;
            } else {
                # TRABALHANDO NA VERIFICAÇÃO DA SECRETARIA JA MEXI  USER PAGE
       $verif_secret = "SELECT * from secretaria WHERE nome = '$nome' AND BI = '$Bi' AND função = '$funcao'";
       $consulta_secret = $conectphp ->query($verif_secret);
       if(mysqli_num_rows($consulta_secret) >= 1) {
       $_SESSION['nome'] = $nome;
       $_SESSION['Bi'] = $Bi;
       $_SESSION['função'] = $funcao;
       header('Location: secretaria_admin.php');
                exit; 
              } else {
                header('Location: login.php');
                exit;
            }
            }
        }
    }
} else {
    header('Location: login.php');
    exit;
}
?>
