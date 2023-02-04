<?php

    $tarefa = $_POST['tarefa'];

    //Conexão com o banco de dados

    include 'conexao.php';

    $sqlGravar = "insert into t_tarefas(descricao) values('$tarefa')";
    mysqli_query($conexao, $sqlGravar);
    mysqli_close($conexao);

?>