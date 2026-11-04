<?php
    $usuario_autenticado = false;
    $usuarios_app = [
        array('email'=>'eu@gmail.com', 'senha' => '123'),
        array('email'=>'vc@gmail.com', 'senha' => '111'),
    ];
    foreach($usuarios_app as $usuario){
        if($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }
    if($usuario_autenticado){
        echo 'Usuário autenticado';
    }else{
        echo 'Usuário não autenticado';
    }

    
    $_POST;
    $_POST['email'];
    $_POST['senha'];
?>