<?php  
include 'conexao.php';


$id = $_POST["id"];
$nome = $_POST["nome"];
$curso = $_POST["curso"];

$sqlUpdate = "UPDATE alunos SET Nome = '$nome', Curso = '$curso' WHERE  ID = $id ";

if(mysqli_query($conn,$sqlUpdate)){
    print_r("<p>Dado Atualizado com sucesso!!</p>");
    print_r("<br><a href='index.php'><p id='back'>Voltar</p></a>");
}else {
    
    echo "Erro ao Atualizar registro: " . mysqli_error($conn);
}

?>
<style>
    p{
    font-size: 1.6rem;
    background-color: #f4f4f4;
    padding: 1rem;
    margin:0 auto ;
    text-align: center;
    max-width: 80%;
    }
    #back{
    text-decoration: none;
    color: #000;
    font-weight: bold;
    cursor: pointer;
    }
    #back:hover{
    cursor: pointer;
    text-decoration: underline;
    color: #FF8C00;
    }
</style>