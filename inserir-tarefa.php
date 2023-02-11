<?php

    $tarefa = $_POST['tarefa'];
    $responsavel = $_POST['responsavel'];
    $status = $_POST['status'];

    //Conexão com o banco de dados

    include 'conexao.php';

    $sqlGravar = "insert into t_tarefas(descricao, responsavel, status) values('$tarefa', '$responsavel', '$status')";
    mysqli_query($conexao, $sqlGravar);
    mysqli_close($conexao);

    header("location: index.php?msg=adicionado")

?>