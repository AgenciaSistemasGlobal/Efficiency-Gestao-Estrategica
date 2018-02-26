<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <div class="row">
                <div class="col-lg-9">Categorias</div>
                <div class="col-lg-3 text-right">
                    <a href="<?php echo URL::getBase() ?>admin/categorias/adicionar" class="btn btn-success">Nova Categoria</a>
                </div>
            </div>
        </h1>
    </div>
</div>
<?php
if (!$modulo2) {
    $page = 'findAll';
} else {
    if (is_numeric($modulo2)) {
        $page = 'find';
    }
}
require $page . '.php';
?>