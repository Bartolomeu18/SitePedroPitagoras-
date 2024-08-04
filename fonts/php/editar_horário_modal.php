<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modal para Inserir ID do Aluno</title>
  <link rel="stylesheet" href="../estilo/styles_modal.css">
</head>
<body>
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Digite a classe correspondente ao horário</h2>
    <form action="editar_horário.php" method="post"> <!-- Corrigido o nome do arquivo -->
      <input type="text" id="classe" name="classe" placeholder="Classe pertencente ao horário">
      <input type="submit" value="Enviar">
    </form>
  </div>
</div>
<script src="../scripts/modal_script.js"></script> <!-- Corrigido o caminho do script -->
</body>
</html>
