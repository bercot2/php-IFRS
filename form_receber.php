<?php

    $senha123 = '$2y$12$AXfsmrkhOVFz7L1WgfIXfu/2J7ihYHi/8wUcAgTjuuPtQADM/WR5y';

    # form_receber.php
    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;

    // $senha_crypto = password_hash('123', PASSWORD_BCRYPT, ['cost' => 12]);

    // echo $senha_crypto;

    if ($usuario == 'rafael' && password_verify($senha, $senha123)) {
        //Autenticação OK
        session_start();
        
        $_SESSION['usuario'] = $usuario;

        echo '<p>Autenticado com sucesso</p>';
        header('location:boasvindas.php');
        die;
    } else {
        header('location:form.php?erro=1');
        die;
    }