
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
    <h2>Inserir ID do Professor</h2>
    <form action="editar_Professor.php " method="post">   
   <input type="text" id="studentId"  name="studentId" placeholder="ID do Aluno">
   <input type="submit"  id="submitBtn"><!--<a href="editar_alunos.php">  </a-->
  </form>
  </div>
</div>

<script src="../scrips/modal_script.js"></script>

</body>
</html>
