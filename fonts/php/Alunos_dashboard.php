<?php
session_start();

// Verifica se a sessão está iniciada
if (!isset($_SESSION['nome'], $_SESSION['Bi'], $_SESSION['função'])) {
    // Redireciona para a página de login se a sessão não estiver iniciada
    header('Location: login.php');
    exit(); // Termina a execução do script após redirecionar
}

include_once('conexão_com_banco.php');

$nome = $_SESSION['nome'];

// Escapar caracteres especiais para prevenir SQL injection
$nome = mysqli_real_escape_string($conectphp, $nome);

// Consulta para obter o ID do aluno
$query = "SELECT id FROM alunos WHERE nome_completo = '$nome'";
$result = mysqli_query($conectphp, $query);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];

// Consulta para obter os dados do aluno
$data_query = "SELECT * FROM alunos WHERE id = $id";
$data_result = mysqli_query($conectphp, $data_query);

// Consulta para obter o curso e a classe do aluno
$dados_query = "SELECT curso, classe FROM alunos WHERE id = $id";
$dados_result = mysqli_query($conectphp, $dados_query);
$dados = mysqli_fetch_assoc($dados_result);
$curso = $dados['curso'];
$classe = $dados['classe'];

// Consulta para obter as notificações dos alunos
$take_not = "SELECT * FROM notificação_alunos ORDER BY id DESC";
$take_query = mysqli_query($conectphp, $take_not);

// Consulta para obter o horário da classe do aluno
$take_hora = "SELECT * FROM horario WHERE classe = $classe";
$horario = mysqli_query($conectphp, $take_hora);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Politecnico Privado Pedro Pitágoras</title>
    <!--link para o favicon-->
    <link rel="shortcut icon" href="../icons/favicon.ico" type="image/x-icon">
    <!--links css-->
    <link rel="stylesheet" href="../estilo/alunostyle.css">
    <link rel="stylesheet" media="screen and (min-width:375px) and (max-width:667px)" href="../mediaquery/alunomobile.css">
    <link rel="stylesheet" media="screen and (min-width:360px) and (max-width:740px)" href="../mediaquery/alunomobile.css">
    <!--tela igual galaxy s8+-->
    <link rel="stylesheet" media="screen and (min-width:320px) and (max-width:588px)" href="../mediaquery/alunomobile.css">
    <!--tela pequenas-->
    <link rel="stylesheet" media="screen and (min-width:658px) and (max-width:909px)" href="../mediaquery/alunotablet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--link google icons-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,100,1,200" rel="stylesheet" />
    <!--bootsrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <header>
        <div class="menu-lateral">
            <img src="../img/nova_logo-removebg-preview.png" alt="logo da instituição">
            <h3>"Altar do Saber"</h3>
            <div class="menu-itens">
                <div class="itens"><i class="bi bi-person-circle"></i><a href="#conteudo" onclick="inf()">informações</a></div>
                <div class="itens"><i class="bi bi-bank"></i><a href="#conteudopagamento" onclick="paga()">Pagamentos</a></div>
                <div class="itens"><i class="bi bi-table"></i><a href="#notas" onclick="nota()">Notas </a></div>
                <div class="itens"><i class="bi bi-card-checklist"></i><a href="#materias" onclick="maté()">matérias</a></div>
                <div class="itens"><i class="bi bi-calendar4-week"></i><a href="#horaroi" onclick="hora()">Horário</a></div>
                <div class="itens"><i class="bi bi-bell"></i><a href="#noti" onclick="notif()">Notificações</a></div>
                <div class="itens"><i class="bi bi-box-arrow-right"></i><a href="../html/index.html">Sair</a></div>
            </div>
        </div>
    </header>

    <main>
        <div class="body">
            <div class="body-conteiner">
                <div class="img-conteiner">
                    <img id="alunoimg" src="../img/alunobb-removebg-preview.png" alt="imagem do aluno">
                    <h3 id="nome"><?php echo $nome; ?></h3>
                    <button id="btn-mobile"><img src="../img/menu.png" alt=""></button>
                </div>
                <div class="aluno">
                    <div class="mine-inf">
                        <p id="curso">Curso:<br><span id="curso"><?php echo $curso; ?></span></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p id="nine-iten">Classe : <br><span id="sala"><?php echo "$classe ª"; ?></span></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <p id="nine-iten">N° : <br><span id="id"><?php echo $id; ?></span></p>
                    </div>
                </div>
            </div>
            <div id="menu-mobile">
                <h3>"Altar do Saber"</h3>
                <div class="itens"><i class="bi bi-person-circle"></i><a href="#conteudo" onclick="inf()">informações</a></div>
                <div class="itens"><i class="bi bi-bank"></i><a href="#conteudopagamento" onclick="paga()">Pagamentos</a></div>
                <div class="itens"><i class="bi bi-table"></i><a href="#notas" onclick="nota()">Notas </a></div>
                <div class="itens"><i class="bi bi-card-checklist"></i><a href="#materias" onclick="maté()">matérias</a></div>
                <div class="itens"><i class="bi bi-calendar4-week"></i><a href="#horaroi" onclick="hora()">Horário</a></div>
                <div class="itens"><i class="bi bi-bell"></i><a href="#noti" onclick="notif()">Notificações</a></div>
                <div class="itens"><i class="bi bi-box-arrow-right"></i><a href="../html/index.html">Sair</a></div>
            </div>
        </div>
        <div class="main-menu">
            <a href="#conteudo" onclick="inf()">informações</a>
            <a href="#notas" onclick="nota()">Notas </a>
            <a href="#conteudopagamento" onclick="paga()">Pagamentos</a>
        </div>
    </div>
    <div id="conteudo" class="conteudo">
        <div class="table-responsive">
            <table class="table table-bordered border-second">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Bilhete</th>
                        <th scope="col">Data Nascimento</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Nome do Encarregado</th>
                        <th scope="col" class="danger">Morada</th>
                        <th scope="col">Nº Telefone</th>
                        <th scope="col">classe</th>
                        <th scope="col">Email</th>
                        <th scope="col">Curso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($user_data = mysqli_fetch_assoc($data_result)) {
                        echo "<tr>
                                <td>".$user_data['id']."</td>
                                <td>".$user_data['nome_completo']."</td>
                                <td>".$user_data['bilhete_de_identidade']."</td>
                                <td>".$user_data['data_de_nascimento']."</td>
                                <td>".$user_data['sexo']."</td>
                                <td>".$user_data['nome_do_encarregado']."</td>
                                <td>".$user_data['morada']."</td>
                                <td>".$user_data['telefone']."</td>
                                <td>".$user_data['classe']."</td>
                                <td>".$user_data['email']."</td>
                                <td>".$user_data['curso']."</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="conteudopagamento" class="conteudo">
        <h3>pagamentos</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium distinctio delectus, pariatur voluptatum, adipisci nemo libero totam magnam voluptatem facere temporibus eum, molestiae repellendus ipsam nesciunt incidunt aliquam quidem quae!</p>
    </div>

    <div id="rendimento" class="conteudo">
        <h3>rendimento</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae labore facilis aliquid inventore numquam eum adipisci, repudiandae molestiae obcaecati est perferendis optio tempore. Officiis expedita laudantium facilis pariatur laborum illum.</p>
        <!--<button type="submit" id="close">OK</button>-->
    </div>

    <div id="notas" class="conteudo">
        <h3>Notas</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus repudiandae esse quaerat dicta minima, fugit tempore a consequuntur doloribus quod neque sunt veniam tenetur laboriosam cumque laborum magni sint quidem?</p>
    </div>

    <div id="materias" class="conteudo">
        <h3>Materias</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus repudiandae esse quaerat dicta minima, fugit tempore a consequuntur doloribus quod neque sunt veniam tenetur laboriosam cumque laborum magni sint quidem?</p>
    </div>

    <div id="horario" class="conteudo">
        <div class="table-responsive">
            <table class="table table-bordered border-second">
                <thead>
                    <tr>
                      
                        <th scope="col">Segunda-féira</th>
                        <th scope="col">Terça-Féira</th>
                        <th scope="col">Quarta-Féira</th>
                        <th scope="col">Quinta-Féira</th>
                        <th scope="col">Sexta-Féira</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($diciplina = mysqli_fetch_assoc($horario)) {
                        echo "<tr>
                                <td>".$diciplina['primeiro_seg']."</td>
                                <td>".$diciplina['primeiro_ter']."</td>
                                <td>".$diciplina['primeiro_quar']."</td>
                                <td>".$diciplina['primeiro_quin']."</td>
                                <td>".$diciplina['primeiro_sex']."</td>
                            </tr>";
                            echo "<tr>
                            <td>".$diciplina['segundo_seg']."</td>
                            <td>".$diciplina['segundo_ter']."</td>
                            <td>".$diciplina['segundo_quar']."</td>
                            <td>".$diciplina['segundo_quin']."</td>
                            <td>".$diciplina['segundo_sex']."</td>

                        </tr>";
                            echo "<tr>
                            <td>".$diciplina['terceiro_seg']."</td>
                            <td>".$diciplina['terceiro_ter']."</td>
                            <td>".$diciplina['terceiro_quar']."</td>
                            <td>".$diciplina['terceiro_quin']."</td>
                            <td>".$diciplina['terceiro_sex']."</td>
                        </tr>";

                        echo "<tr>
                        <td>".$diciplina['quarto_seg']."</td>
                        <td>".$diciplina['quarto_ter']."</td>
                        <td>".$diciplina['quarto_quar']."</td>
                        <td>".$diciplina['quarto_quin']."</td>
                        <td>".$diciplina['quarto_sex']."</td>
                    </tr>";

                    echo "<tr>
                    <td>".$diciplina['quinto_seg']."</td>
                    <td>".$diciplina['quinto_ter']."</td>
                    <td>".$diciplina['quinto_quar']."</td>
                    <td>".$diciplina['quinto_quin']."</td>
                    <td>".$diciplina['quinto_sex']."</td>
                </tr>";

                echo "<tr>
                <td>".$diciplina['sexto_seg']."</td>
                <td>".$diciplina['sexto_ter']."</td>
                <td>".$diciplina['sexto_quar']."</td>
                <td>".$diciplina['sexto_quin']."</td>
                <td>".$diciplina['sexto_sex']."</td>
            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="noti" class="conteudo">
        <div class="notification">
            <?php
            while ($notificações = mysqli_fetch_assoc($take_query)) {
                echo "<div class='notificação'>
                        <p id='assunto'>ASSUNTO: <span >".$notificações['assunto']."</span></p>
                        <p id='notificação'>".$notificações['alunos_notifi']."</p>
                        <span id='data'>".$notificações['data_de_envio']."</span> 
                    </div>";
            }
            ?>
        </div>
    </div>
    </main>
    <script src="../scrips/user.js"></script>
</body>
</html>
