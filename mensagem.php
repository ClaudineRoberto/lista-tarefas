<?php

$msg = $_GET['msg'] ?? "";

if ($msg == 'alterado') {
    echo "<div class='alert alert-info'>Tarefa alterada com sucesso</div>";
} elseif ($msg == 'excluido') {
    echo "<div class='alert alert-info'>Tarefa excluida com sucesso</div>";
} elseif ($msg == 'adicionado') {
    echo "<div class='alert alert-info'>Tarefa adicioado com sucesso</div>";
};
?>