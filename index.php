<?php
    require "server/Url.class.php";
    require "server/Conexao.class.php";

    session_start();

    $modulo = Url::getURL(0);

    switch ($modulo) {
        case 'blog':
            require "blog/index.php";
            break;
        
        default:
            require "site/index.php";
            break;
    }
?>