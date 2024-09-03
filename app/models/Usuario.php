<?php

require_once __DIR__ . '/../../config/config.php';

class Usuario {
    public static function todos() {
        $con = getConnection();
        $stmt = $con->query( 'SELECT * FROM usuarios' );
        return $stmt->fetchAll();
    }

    public static function adicionar( $nome, $email ) {
        $con = getConnection();
        $stmt = $con->prepare( 'INSERT INTO usuarios (nome, email) VALUES (:nome, :email)' );
        return $stmt->execute( [ 'nome' => $nome, 'email' => $email ] );
    }

    public static function excluir( $id ) {
        $con = getConnection();
        $stmt = $con->prepare( 'DELETE FROM usuarios WHERE id = :id' );
        return $stmt->execute( [ 'id' => $id ] );
    }
}