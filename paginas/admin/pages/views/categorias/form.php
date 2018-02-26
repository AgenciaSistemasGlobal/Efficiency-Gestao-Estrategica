<form action="<?php echo URL::getBase() ?>admin/categorias" method="post">
    <label for="nome">Nome</label>
    <input type="text" name="nome" value="<?php echo $categoria ? $categoria['nome'] : '' ?>" id="nome">

    <label for="cor">Cor</label>
    <input type="color" name="cor" value="<?php echo $categoria ? $categoria['cor'] : '' ?>" id="cor">

    <input type="hidden" name="actionType" value="<?php echo $actionType ?>">
    <input type="hidden" name="id" value="<?php echo $_GET ? $_GET[$actionType] : 0 ?>">

    <input type="submit" value="Salvar">
</form>