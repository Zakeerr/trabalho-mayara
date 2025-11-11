<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php


if(isset($_POST['Inseir_Nota'])){
    $Nome = $_POST['nome'];
    $curso = $_POST['curso'];
    $A1 = $_POST['A1'];
    $A2 = $_POST['A2'];

    $Nome =file("Alunos.txt", FILE_IGNORE_NEW_LINES);

    $achou = false;
    foreach($Nome as $linha){
        list($u, $s, $a, $b) = explode(",",",", $linha);
        if($u === $Nome && $s === $curso && $a === $A1 && $b === $A2){
            $achou = true;
            $_SESSION['nome'] = $Nome;
            header("Por favor insira a nota");
            exit;
        }


    }

    if(!$achou){
        $erro = "Usuario ou senha incorreta";
    }

}
?>





<form method="POST">
    <input type="text" name=Nome>Nome</br>
    <input type="text" name=Curso>Curso</br>
    <input type="INT" name=Nota>A1</br>
    <input type="INT" name=Nota>A2</br>
    <button type="submite" name=Inserir_Nota>Cadastrar</button>
    <button type="button" onclick="window.location.href='home.php'">Voltar</button>
</form>



</body>
</html>