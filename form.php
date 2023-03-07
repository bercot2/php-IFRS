<?php
    // if(isset($_GET['erro'])){
    //     echo 'Usuário ou senha inválidos';
    // }

    switch ($_GET['erro']) {
        case 1:
            echo 'Usuário ou senha inválidos';
            break;
        
        case 2:
            echo 'Você não está autenticado!';
            break;
    }
?>

<form action="form_receber.php" method="post">
    <div>
        <input type="text" name="usuario" placeholder="Usuário">
    </div>
    <div>
        <input type="password" name="senha" placeholder="Senha">
    </div>
    <div>
        <input type="submit" value="Acessar">
    </div>
</form>