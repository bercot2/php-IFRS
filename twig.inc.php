<?php
    # twig.inc.php
    # este arquivo serve para inicializar o twig
    
    require('vendor/autoload.php');

    $loader = new \Twig\Loader\FilesystemLoader('views');
    $twig = new \Twig\Environment($loader);