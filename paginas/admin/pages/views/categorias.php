<?php

    $categoria = null;
    $actionType = 'adicionar';

    if (!empty($_POST)) {

        $Categorias->nome = $_POST['nome'];
        $Categorias->cor = $_POST['cor'];

        if ($_POST['actionType'] == 'editar') {

            $update = $Categorias->update($_POST['id']);

        } else if ($_POST['actionType'] == 'adicionar') {
            
            $adicionar = $Categorias->insert();
        }
    }
    
    if (isset($_GET['editar']) && !empty($_GET['editar'])) {

        $categoria = $Categorias->find(URL::getIdUri($_GET['editar']));
        $actionType = 'editar';

    } else if (isset($_GET['excluir']) && !empty($_GET['excluir'])) {

        $Categorias->delete($_GET['excluir']);
    }
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <div class="row">
                <div class="col-lg-9">Categorias</div>
                <div class="col-lg-3 text-right">
                    <a href="<?php echo URL::getBase() ?>admin/categorias/adicionar" class="btn btn-primary btn-lg">Nova Categoria</a>
                </div>
            </div>
        </h1>
    </div>
</div>
<section class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Categoria</th>
                <th>Cor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Categorias->findAll() as $value): ?>
                <tr>
                    <td><?php echo $value['id_categoria'] ?></td>
                    <td><?php echo $value['nome'] ?></td>
                    <td><div style="width: 30px; height: 30px; background-color: <?php echo $value['cor'] ?>"></div></td>
                    <td>
                        <a href="?editar=<?php echo $value['id_categoria'] ?>">Editar</a>
                        <a href="?excluir=<?php echo $value['id_categoria'] ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>