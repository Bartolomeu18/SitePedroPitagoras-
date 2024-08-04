
<?php 
 include_once ('conexão_com_banco.php');
if (isset($_POST['classe'])) {
    $classe = $_POST['classe'];
    $query = "SELECT * FROM Horario WHERE classe = '$classe'";
    $result = $conectphp->query($query);
}
else{
    #  header('Location:criar_horário.php');
    echo"insira a classe do horário no modal";
  }
    
////////////////////////////////////////////////////
   
 
    if ($result->num_rows < 1) {
      #  header('Location:criar_horário.php');
      echo"O horário para esta classe ainda não foi criado";
    } else {

        while ($user_data = mysqli_fetch_assoc($result)) {
            //pegando os dados do formulario 
          
            $primeiro_seg = $user_data['primeiro_seg'];
            $segundo_seg = $user_data['segundo_seg'];
            $terceiro_seg = $user_data['terceiro_seg'];
            $quarto_seg = $user_data['quarto_seg'];
            $quinto_seg = $user_data['quinto_seg'];
            $sexto_seg = $user_data['sexto_seg'];

            $primeiro_ter = $user_data['primeiro_ter'];
            $segundo_ter = $user_data['segundo_ter'];
            $terceiro_ter = $user_data['terceiro_ter'];
            $quarto_ter = $user_data['quarto_ter'];
            $quinto_ter = $user_data['quinto_ter'];
            $sexto_ter = $user_data['sexto_ter'];

            $primeiro_quar = $user_data['primeiro_quar'];
            $segundo_quar = $user_data['segundo_quar'];
            $terceiro_quar = $user_data['terceiro_quar'];
            $quarto_quar = $user_data['quarto_quar'];
            $quinto_quar = $user_data['quinto_quar'];
            $sexto_quar = $user_data['sexto_quar'];

            $primeiro_quin = $user_data['primeiro_quin'];
            $segundo_quin = $user_data['segundo_quin'];
            $terceiro_quin = $user_data['terceiro_quin'];
            $quarto_quin = $user_data['quarto_quin'];
            $quinto_quin = $user_data['quinto_quin'];
            $sexto_quin = $user_data['sexto_quin'];

            $primeiro_sex = $user_data['primeiro_sex'];
            $segundo_sex = $user_data['segundo_sex'];
            $terceiro_sex = $user_data['terceiro_sex'];
            $quarto_sex = $user_data['quarto_sex'];
            $quinto_sex = $user_data['quinto_sex'];
            $sexto_sex = $user_data['sexto_sex'];
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITANDO HORÁRIO</title>
    <link rel="stylesheet" href="../estilo/criar_horário.css">

</head>
<body>
    <div class="conteiner">
    <form action="verficando_horario_edição.php" method="post">
    <div class="form-group">
        <div class="form-group">
            <h2>Segunda-Feira</h2>
            <div class="label-input">
                <label for="primeiro_seg">Primeiro Tempo</label>
                <input type="text" name="primeiro_seg" value="<?php echo $primeiro_seg ?>" >
                <label for="segundo_seg">Segundo Tempo</label>
                <input type="text" name="segundo_seg" value="<?php echo $segundo_seg?>" >
                <label for="terceiro_seg">Terceiro Tempo</label>
                <input type="text" name="terceiro_seg" value="<?php echo $terceiro_seg?>" >
                <label for="quarto_seg">Quarto Tempo</label>
                <input type="text" name="quarto_seg" value="<?php echo $quarto_seg?>" >
                <label for="quinto_seg">Quinto Tempo</label>
                <input type="text" name="quinto_seg" value="<?php echo $quinto_seg?>" >
                <label for="sexto_seg">Sexto Tempo</label>
                <input type="text" name="sexto_seg" value="<?php echo $sexto_seg?>" >
            </div>
        </div>
        <div class="form-group">
            <h2>Terça-Feira</h2>
            <div class="label-input">
                <label for="primeiro_ter">Primeiro Tempo</label>
                <input type="text" name="primeiro_ter" value="<?php echo $primeiro_ter?>" >
                <label for="segundo_ter">Segundo Tempo</label>
                <input type="text" name="segundo_ter" value="<?php echo $segundo_ter?>" >
                <label for="terceiro_ter">Terceiro Tempo</label>
                <input type="text" name="terceiro_ter" value="<?php echo $terceiro_ter?>" >
                <label for="quarto_ter">Quarto Tempo</label>
                <input type="text" name="quarto_ter" value="<?php echo $quarto_ter?>" >
                <label for="quinto_ter">quinto Tempo</label>
                <input type="text" name="quinto_ter" value="<?php echo $quinto_ter?>" >
                <label for="sexto_ter">Sexto Tempo</label>
                <input type="text" name="sexto_ter" value="<?php echo $sexto_ter?>" >
            </div>
        </div>
        <!-- Adicione mais blocos de código HTML para os outros dias da semana, se necessário -->
        <div class="form-group">
            <h2>Quarta-Feira</h2>
            <div class="label-input">
                <label for="primeiro_quar">Primeiro Tempo</label>
                <input type="text" name="primeiro_quar" value="<?php echo $primeiro_quar?>" >
                <label for="segundo_quar">Segundo Tempo</label>
                <input type="text" name="segundo_quar" value="<?php echo $segundo_quar?>" >
                <label for="terceiro_quar">Terceiro Tempo</label>
                <input type="text" name="terceiro_quar" value="<?php echo $terceiro_quar?>" >
                <label for="quarto_quar">Quarto Tempo</label>
                <input type="text" name="quarto_quar" value="<?php echo $quarto_quar?>" >
                <label for="quinto_quar">Quinto Tempo</label>
                <input type="text" name="quinto_quar" value="<?php echo $quinto_quar?>" >
                <label for="sexto_quar">Sexto Tempo</label>
                <input type="text" name="sexto_quar" value="<?php echo $sexto_quar?>" >
            </div>
        </div>
        <div class="form-group">
            <h2>Quinta-Feira</h2>
            <div class="label-input">
                <label for="primeiro_quin">Primeiro Tempo</label>
                <input type="text" name="primeiro_quin" value="<?php echo $primeiro_quin?>" >
                <label for="segundo_quin">Segundo Tempo</label>
                <input type="text" name="segundo_quin" value="<?php echo $segundo_quin?>" >
                <label for="terceiro_quin">Terceiro Tempo</label>
                <input type="text" name="terceiro_quin" value="<?php echo $terceiro_quin?>" >
                <label for="quarto_quin">Quarto Tempo</label>
                <input type="text" name="quarto_quin" value="<?php echo $quarto_quin?>" >
                <label for="quinto_quin">Quinto Tempo</label>
                <input type="text" name="quinto_quin" value="<?php echo $quinto_quin?>" >
                <label for="sexto_quin">Sexto Tempo</label>
                <input type="text" name="sexto_quin" value="<?php echo $sexto_quin?>" >
            </div>
        </div>
        <div class="form-group">
            <h2>Sexta-Feira</h2>
            <div class="label-input">
                <label for="primeiro_sex">Primeiro Tempo</label>
                <input type="text" name="primeiro_sex" value="<?php echo $primeiro_sex?>" >
                <label for="segundo_sex">Segundo Tempo</label>
                <input type="text" name="segundo_sex" value="<?php echo $segundo_sex?>" >
                <label for="terceiro_sex">Terceiro Tempo</label>
                <input type="text" name="terceiro_sex" value="<?php echo $terceiro_sex?>" >
                <label for="quarto_sex">Quarto Tempo</label>
                <input type="text" name="quarto_sex" value="<?php echo $quarto_sex?>" >
                <label for="quinto_sex">Quinto Tempo</label>
                <input type="text" name="quinto_sex" value="<?php echo $quinto_sex?>" >
                <label for="sexto_sex">Sexto Tempo</label>
                <input type="text" name="sexto_sex" value="<?php echo $sexto_sex?>" >
                 <input type="hidden" id="hidden" name="classe" value="<?php echo $classe?>">
            </div>
        </div>
    </div>
    
    <div class="submit-btn">
        <input type="submit" id="salvar_horario" name="Update" value="Editar Horário">
    </div>
</body>
</html>
