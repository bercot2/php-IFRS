<?php
    # form_receber.php
    $usuario = $_POST['usuario'] ?? false;
    $senha = $_POST['senha'] ?? false;

    if ($usuario == 'rafael' && $senha == '123') {
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