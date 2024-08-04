<?php

    $classe= $_POST['CH'];
if (isset($_POST['salvar_horario']))  {
    include_once('conexão_com_banco.php');
    // Pegando a variável $classe do arquivo verification_horario.php
    // Supondo que $classe esteja definido nesse arquivo

    // Pegando os dados do formulário para segunda-feira
    // Restante do seu código...

    // Inserindo os dados na base de dados
    $php_base = mysqli_query($conectphp, "INSERT INTO Horario 
    (classe, primeiro_seg, segundo_seg, terceiro_seg, quarto_seg, quinto_seg, sexto_seg, 
    primeiro_ter, segundo_ter, terceiro_ter, quarto_ter, quinto_ter, sexto_ter, 
    primeiro_quar, segundo_quar, terceiro_quar, quarto_quar, quinto_quar, sexto_quar, 
    primeiro_quin, segundo_quin, terceiro_quin, quarto_quin, quinto_quin, sexto_quin, 
    primeiro_sex, segundo_sex, terceiro_sex, quarto_sex, quinto_sex, sexto_sex)
    VALUES 
    ('$classe', '$primeiro_seg', '$segundo_seg', '$terceiro_seg', '$quarto_seg', '$quinto_seg', '$sexto_seg',
    '$primeiro_ter', '$segundo_ter', '$terceiro_ter', '$quarto_ter', '$quinto_ter', '$sexto_ter',
    '$primeiro_quar', '$segundo_quar', '$terceiro_quar', '$quarto_quar', '$quinto_quar', '$sexto_quar',
    '$primeiro_quin', '$segundo_quin', '$terceiro_quin', '$quarto_quin', '$quinto_quin', '$sexto_quin',
    '$primeiro_sex', '$segundo_sex', '$terceiro_sex', '$quarto_sex', '$quinto_sex', '$sexto_sex')");

    if ($php_base) {
        echo '<script>alert("horário inserido com sucesso ")</script>';
    } else {
        echo "Erro ao inserir horário: " . mysqli_error($conectphp);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRIANDO HORÁRIO</title>
    <link rel="stylesheet" href="../estilo/criar_horário.css">
</head>
<body>
    <div class="conteiner">
    <form action=""method="post">
    <div class="form-group">
        <div class="form-group">
            <h2>Segunda-Feira</h2>
            <div class="label-input">
        <label for="primeiro_seg">Pimeiro Tempo</label>
        <input type="text" name="primeiro_seg" placeholder="primeiro tempo da 2ª-feira">
        <label for="segundo_seg">Segundo Tempo</label>
        <input type="text" name="segundo_seg" placeholder="Segundo tempo da 2ª-feira">
        <label for="Terçeiro_seg">Terçeiro Tempo</label>
        <input type="text" name="Terçeiro_seg" placeholder="Terçeiro tempo da 2ª-feira">
        <label for="quarto_seg">Quarto Tempo</label>
        <input type="text" name="quarto_seg" placeholder="Quarto tempo da 2ª-feira">
        <label for="Quinta_seg">Quinto Tempo</label>
        <input type="text" name="Quinta_seg" placeholder="Quinto tempo da 2ª-feira">
        <label for="Sexta_seg">Sexto Tempo</label>
        <input type="text" name="Sexta_seg" placeholder="Sexto tempo da 2ª-feira">
        </div>
        </div>
        <div class="form-group">
        <h2>Terça-Feira</h2>
        <div class="label-input">
        <label for="primeiro_ ter">Pimeiro Tempo</label>
        <input type="text" name="primeiro_ter" placeholder="primeiro tempo da 3ª-feira">
        <label for="segundo_ ter">Segundo Tempo</label>
        <input type="text" name="segundo_ter" placeholder="Segundo tempo da 3ª-feira">
        <label for="Terçeiro_ter">Terçeiro Tempo</label>
        <input type="text" name="Terçeiro_ter" placeholder="Terçeiro tempo da 3ª-feira">
        <label for="quarto_ter">Quarto Tempo</label>
        <input type="text" name="quarto_ter" placeholder="Quarto tempo da 3ª-feira">
        <label for="Quinta_ter">Quinto Tempo</label>
        <input type="text" name="Quinta_ter" placeholder="Quinto tempo da 3ª-feira">
        <label for="Sexta_ter">Sexto Tempo</label>
        <input type="text" name="Sexta_ter" placeholder="Sexto tempo da 3ª-feira">
</div>
        </div>
        <div class="form-group">
        <h2>Quarta-Feira</h2>
        <div class="label-input">
        <label for="primeiro_ quar">Pimeiro Tempo</label>
        <input type="text" name="primeiro_quar" placeholder="primeiro tempo da 4ª-feira">
        <label for="segundo_ quar">Segundo Tempo</label>
        <input type="text" name="segundo_quar" placeholder="Segundo tempo da 4ª-feira">
        <label for="Terçeiro_quar">Terçeiro Tempo</label>
        <input type="text" name="Terçeiro_quar" placeholder="Terçeiro tempo da 4ª-feira">
        <label for="quarto_quar">Quarto Tempo</label>
        <input type="text" name="quarto_quar" placeholder="Quarto tempo da 4ª-feira">
        <label for="Quinta_quar">Quinto Tempo</label>
        <input type="text" name="Quinta_quar" placeholder="Quinto tempo da 4ª-feira">
        <label for="Sexta_quar">Sexto Tempo</label>
        <input type="text" name="Sexta_quar" placeholder="Sexto tempo da 4ª-feira"></div>
        </div>
        <div class="form-group">
        <h2>Quinta-Feira</h2>
        <div class="label-input">
        <label for="primeiro_ quin">Pimeiro Tempo</label>
        <input type="text" name="primeiro_quin" placeholder="primeiro tempo da 5ª-feira">
        <label for="segundo_ quin">Segundo Tempo</label>
        <input type="text" name="segundo_quin" placeholder="Segundo tempo da 5ª-feira">
        <label for="Terçeiro_quin">Terçeiro Tempo</label>
        <input type="text" name="Terçeiro_quin" placeholder="Terçeiro tempo da 5ª-feira">
        <label for="quarto_quin">Quarto Tempo</label>
        <input type="text" name="quarto_quin" placeholder="Quarto tempo da 5ª-feira">
        <label for="Quinta_quin">Quinto Tempo</label>
        <input type="text" name="Quinta_quin" placeholder="Quinto tempo da 5ª-feira">
        <label for="Sexta_quin">Sexto Tempo</label>
        <input type="text" name="Sexta_quin" placeholder="Sexto tempo da 5ª-feira">
</div>
        </div>
        <div class="form-group">
            <h2>Sexta-Feira</h2>
            <div class="label-input">
        <label for="primeiro_ sex">Pimeiro Tempo</label>
        <input type="text" name="primeiro_sex" placeholder="primeiro tempo da 6ª-feira">
        <label for="segundo_ sex">Segundo Tempo</label>
        <input type="text" name="segundo_sex" placeholder="Segundo tempo da 6ª-feira">
        <label for="Terçeiro_sex">Terçeiro Tempo</label>
        <input type="text" name="Terçeiro_sex" placeholder="Terçeiro tempo da 6ª-feira">
        <label for="quarto_sex">Quarto Tempo</label>
        <input type="text" name="quarto_sex" placeholder="Quarto tempo da 6ª-feira">
        <label for="Quinta_sex">Quinto Tempo</label>
        <input type="text" name="Quinta_sex" placeholder="Quinto tempo da 6ª-feira">
        <label for="Sexta_sex">Sexto Tempo</label>
        <input type="text" name="Sexta_sex" placeholder="Sexto tempo da 6ª-feira">
</div>
        </div>
        </div>
        <div class="submit-btn">
                <input type="submit" name="salvar_horario" value="Salvar Horário">
            </div>
    </form></div>
</body>
</html>