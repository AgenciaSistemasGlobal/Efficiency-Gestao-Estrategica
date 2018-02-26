<!-- <ul></ul>
    <li><a href="<?php echo URL::getBase() ?>admin">Home</a></li>
    <li><a href="<?php echo URL::getBase() ?>admin/ebooks">Ebooks</a></li>
    <li><a href="<?php echo URL::getBase() ?>admin/posts">Postagens</a></li>
    <li><a href="<?php echo URL::getBase() ?>admin/categorias">Categorias</a></li>
    <li><a href="<?php echo URL::getBase() ?>admin/servicos">Serviços</a></li>
    <li><a href="<?php echo URL::getBase() ?>admin/parceiros">Parceiros</a></li>
    <li><a href="<?php echo URL::getBase() ?>admin/contatos">Contatos</a></li>
</ul> -->
<?php
    switch ($modulo1) {
        case 'posts':
            $requirePage = 'posts';
            break;

        case 'categorias':
            $requirePage = 'categorias';
            break;
        
        case 'ebooks':
            $requirePage = 'ebooks';
            break;

        case 'servicos':
            $requirePage = 'servicos';
            break;

        case 'parceiros':
            $requirePage = 'parceiros';
            break;
        
        case 'contatos':
            $requirePage = 'contatos';
            break;
        
        default:
            $requirePage = 'home';
            break;
    }

    require 'views/' . $requirePage . '.php';
?>