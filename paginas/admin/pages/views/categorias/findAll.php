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
                    <td>
                        <a href="<?php echo URL::getBase() . 'admin/categorias/' . $value['id_categoria'] ?>"><?php echo $value['nome'] ?></a>
                    </td>
                    <td><div style="width: 25px; height: 25px; background-color: <?php echo $value['cor'] ?>"></div></td>
                    <td>
                        <a href="?editar=<?php echo $value['id_categoria'] ?>">Editar</a>
                        <a href="?excluir=<?php echo $value['id_categoria'] ?>">Excluir</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</section>