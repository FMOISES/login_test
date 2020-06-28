<?php
    $usuarios_app = array(
        array('email'=> 'moises@com','senha'=> '12345678')
    );
    $user_autentic = false;

    foreach($usuarios_app as $user){
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $user_autentic = true;
        }
    }
    if($user_autentic  == true){
        echo 'Bem vindo '.$user['email'];
    }else{
        //echo 'usuario ou senha invalidos';
        header('location:index.php?login=erro');
        //direciona fluxo para o arquivo index.php.
    }
?>
