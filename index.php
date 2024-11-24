<?php 

include 'conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<header>
        <nav class="topo-you">
            <nav>
            <p id="YouLearn">YouLearn</p>
            </nav>
            <nav>
                <h4>Bem-Vindo(a)</h4>
            </nav>
        </nav>
        <br>
        <figure>
            <img id="logo" src="img/Gemini_logo.jpg" alt="Logo"  width="300px" height="300px">
        </figure>
        <br>
</header>
    <div class="container">
        <h1>Cadastro de Alunos</h1>
        <form action="insert.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="curso">Curso:</label>
            <select id="curso" name="curso" required>
                <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                <option value="Sistemas de Informações">Sistemas de Informações</option>
                <option value="Engenharia de Software">Engenharia de Software</option>
                <option value="Medicina">Medicina</option>
                <option value="Enfermagem">Enfermagem</option>
                <option value="Psicologia">Psicologia</option>
                <option value="Artes Visuais">Artes Visuais</option>
                <option value="Fotografia">Fotografia</option>
                <option value="Artes Cênicas">Artes Cênicas</option>
            </select>
            <hr>
            <br>
            <button type="submit">Cadastrar</button>
        </form>
<br>
<h1>Lista de Alunos</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Curso</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php

        // Consulta para obter os alunos
        $sql = "SELECT ID, Nome, Curso FROM alunos";
        $result = mysqli_query($conn, $sql);
            
        // Verificar se existem resultados
            if (mysqli_num_rows($result) > 0) {
                // Exibir cada linha da tabela



                while($row = mysqli_fetch_assoc($result)) {


                    echo "<tr>
                            <td>" . $row["ID"] . "</td>
                            <td>" . $row["Nome"] . "</td>
                            <td>" . $row["Curso"] . "</td>
                            <td>
                            <a id='edit' href='edit.php?ID=".$row["ID"]."' >Editar</a>
                            <a class='delete-button' href='delete.php?ID=".$row["ID"]."' >Deletar</a>

                            </td>
                        </tr>";
                }






            } else {
                echo "<tr><td colspan='3'>Nenhum aluno cadastrado</td></tr>";
            }


            ?>
            </tbody>
</table> 



    </div>
    <br>
<footer>
        <br>
        <figure>
            <img id="logo" src="img/Gemini_logo.jpg" alt="Logo"  width="60px" height="60px">
        </figure>
        <br>
        <h4>YouLearn - Cursos online</h4>
        <h4>Levando cursos de qualidade para você</h4>
        <br>
        <p>Entre em contato: Whatsapp (11)99999-9999 </p>
        <p>Também estamos no instagram: @youlearn</p>
</footer>
</body>
</html>
