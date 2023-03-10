<?php 
include_once 'header.php';
include_once 'mensagem.php';
?>

                            <!-- -------------------- Inicio conteudo -------------------- -->

        <form class="mb-4" action="inserir-tarefa.php" method="post">
            <div class="row">
                <div class=" col-4 form-outline flex-fill">
                    <input type="text" id="form2" class="form-control" placeholder="Nova tarefa" name="tarefa">
                </div>
                <div class="col-3">
                    <input type="text" id="form3" class="form-control" placeholder="Responsável" name="responsavel">
                </div>
                <div class="col-3">
                    <select name="status" id="select" class="form-select">
                    <option value="1">Em aberto</option>
                    <option value="2">Concluído</option>
                    </select>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success"><i class="bi bi-plus-square"></i> ADD</button>
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
                <a class="nav-link" href="#">Concluídas</a>
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

                        <div class="col-3">
                            <?php echo $umaTarefa['descricao'];?>
                        </div>

                        <div class="col-3 d-flex justify-content-center">
                            Responsável - <?php echo $umaTarefa['responsavel'];?>
                        </div>

                        <div class="col-3">
                            <!-- <?php echo $umaTarefa['status'];?> -->
                            <form action="confirmar-alteracao2.php" id="editStatus">
                                <input type="hidden" name="id" value="<?php echo $umaTarefa['id'];?>">
                                <select name="status" id="status" class="form-select" onchange="this.form.submit();">

                                    <?php if ($umaTarefa['status'] == 1) {
                                        echo '<option selected value="1">Em aberto</option>';
                                        echo '<option value="2">Concluido</option>';
                                    }else if ($umaTarefa['status'] == 2) {
                                        echo '<option selected value="2">Concluido</option>';
                                        echo '<option value="1">Em aberto</option>';
                                    }?>

                                </select>
                            </form>
                                
                        </div>

                        <div class="col-3 d-flex justify-content-end">
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