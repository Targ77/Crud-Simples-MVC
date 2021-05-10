<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entidades\Cliente;


define('TITLE', 'Editar Cliente:');

///VALIDAÇÃO DO ID
if (!isset($_GET['id_cliente']) or !is_numeric($_GET['id_cliente'])) {

    header('location: index.php?status=error');
    exit;
}

//CONSULTA A Cliente
$obCliente = new Cliente;
$obCliente = $obCliente->getCliente($_GET['id_cliente']);

//VALIDAÇÃO DO POST
if (isset($_POST['nome_cliente'], $_POST['telefone_cliente'], $_POST['email_cliente'], $_POST['data_nasc_cliente'], $_POST['senha_cliente'])) {

    //atribuição dos valores a serem atualizados
    $obCliente->nome_cliente = $_POST['nome_cliente'];
    $obCliente->telefone_cliente = $_POST['telefone_cliente'];
    $obCliente->email_cliente = $_POST['email_cliente'];
    $obCliente->data_nasc_cliente = $_POST['data_nasc_cliente'];
    
    //testa se a senha digitada está correta
    if (md5($_POST['senha_cliente']) == $obCliente->senha_cliente) { 
            $obCliente->atualizar();
            header('location: index.php?status=success');
    } else {
        header('location: index.php?status=senhaIncorreta');
    }
}

include __DIR__ . '/Telas/header.php';
include __DIR__ . '/Telas/formulario.php';
include __DIR__ . '/Telas/footer.php';
