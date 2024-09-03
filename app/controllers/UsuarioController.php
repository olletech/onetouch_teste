<?php

require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {
    public function index() {
        $usuarios = Usuario::todos();
        include __DIR__ . '/../views/usuarios/index.php';
    }

    public function adicionar() {
        if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
            $nome = $_POST[ 'nome' ];
            $email = $_POST[ 'email' ];
            Usuario::adicionar( $nome, $email );
            header( 'Location: /' );
            exit;
        }
        include __DIR__ . '/../views/usuarios/adicionar.php';
    }

    public function excluir() {
        if ( isset( $_GET[ 'id' ] ) ) {
            Usuario::excluir( $_GET[ 'id' ] );
            header( 'Location: /' );
            exit;
        }
    }
}