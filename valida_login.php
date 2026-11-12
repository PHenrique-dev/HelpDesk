<?php
    session_start();

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil = null;
    $perfis = [
        1 => 'administrativo',
        2 => 'usuario'
    ];

    $usuarios_app = [
        array('id' => 1, 'email'=>'eu@gmail.com', 'senha' => '123', 'perfil_id' => 1),
        array('id' => 2, 'email'=>'vc@gmail.com', 'senha' => '111', 'perfil_id' => 1),
        array('id' => 3, 'email'=>'jose@gmail.com', 'senha' => '111', 'perfil_id' => 2),
        array('id' => 4, 'email'=>'maria@gmail.com', 'senha' => '111', 'perfil_id' => 2),
        ];
        foreach($usuarios_app as $usuario){
        if($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $usuario['id'];
            $usuario_perfil = $usuario['perfil_id'];
        }
    }
    if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil;
        echo 'Usuário autenticado';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }


    $_POST;
    $_POST['email'];
    $_POST['senha'];
?>