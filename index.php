<?php 
include_once 'header.php';
include_once 'mensagem.php';
?>

                            <!-- -------------------- Inicio conteudo -------------------- -->

        <form class="mb-4" action="inserir-tarefa.php" method="post">
            <div class="row">
                <div class=" col-6 form-outline flex-fill">
                    <input type="text" id="form2" class="form-control" placeholder="Nova tarefa" name="tarefa">
                </div>
                <div class="col-6">
                    <input type="text" id="form3" class="form-control" placeholder="Responsável" name="responsavel">
                </div>
            </div>
            <div class="row">
                <div class="col mt-3">
                    <button type="submit" class="btn btn-success ms-2"><i class="bi bi-plus-square"></i> ADD</button>
                </div>
            </div>
        </form>

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Todas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Em execução</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Concluídas<i class="bi bi-0-circle"></i>
                </a>
            </li>
        </ul>


        <ul class="list-group mb-0">
            <?php
            include "conexao.php";
            $sqlBusca = "select * from t_tarefas";
            $todasAsTarefas = mysqli_query($conexao, $sqlBusca);
            while ($umaTarefa = mysqli_fetch_assoc($todasAsTarefas)) {
            ?>
                <div class="row list-group-item d-flex align-items-center border-0 mb-2 rounded fundo-cinza justify-content-between">
                        <div class="col-4"><?php echo $umaTarefa['descricao'];?></div>
                        <div class="col-4 d-flex justify-content-center">Responsável - <?php echo $umaTarefa['responsavel'];?></div>
                        <div class="col-4 d-flex justify-content-end">
                            <a class='btn btn-warning' href="alterar-tarefa.php?id=<?php echo $umaTarefa['id']?>"><i class="bi bi-pencil-square"></i></a>
                            <a class='btn btn-danger ms-3' href="excluir-tarefa.php?id=<?php echo $umaTarefa['id']; ?>"><i class="bi bi-trash3"></i></a>
                        </div>
                    
                </div>
            <?php
            }
            mysqli_close($conexao);
            ?>
        </ul>

                            <!-- -------------------- Fim do conteudo -------------------- -->

<?php 
include_once 'footer.php'
?>