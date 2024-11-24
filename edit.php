<?php 

include 'conexao.php';

$id = $_GET['ID'];

$querySelect = 'SELECT Nome,Curso from alunos where ID = '.$id;

$result = mysqli_query($conn,$querySelect);

$result = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Alunos</title>
    <link rel="stylesheet" href="css/styles.css">
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
        <h1>Editar aluno</h1>
        <form action="update.php" method="POST">

            <label for="id">ID:</label>
            <input type="text" id="id" name="id" value="<?php echo $id; ?>" >

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $result["Nome"]; ?>" required>

            <label for="curso">Curso:</label>
            <select id="curso" name="curso" value="<?php echo $result["Curso"]; ?>" required>
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
            <p><br>(selecione o seu curso novamente)</p>
            <br>
            <hr>
            <button type="submit">Editar</button>
        </form>
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
