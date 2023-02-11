<?php 
include_once 'header.php'
?>
<H3>Alterar tarefa</H3>

<?php 
$id = $_GET['id'];
$descricao ='';


include_once 'conexao.php';

$sqlBusca = "select * from t_tarefas where id = $id";
$todasAsTarefas = mysqli_query($conexao, $sqlBusca);


while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
    $descricao = $umaTarefa['descricao'];    
    $status = $umaTarefa['status'];
}

?>

<form action="confirmar-alteracao.php" method="post">
    <div class="row">
        <div class="col">
            <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
            <input class="form-control" type="text" name="descricao" value="<?php echo $descricao; ?>">
            <button class="mt-2 btn btn-success" type="submit"><i class="bi bi-download"></i> Salvar</button>
        </div>
    </div>
</form>

<?php 
include_once 'footer.php'
?>