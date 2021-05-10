<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Entidades\Cliente;

define('TITLE', 'Cadastrar:');

$obCliente = new Cliente;


//VALIDAÇÃO DO POST
if (isset($_POST['nome_cliente'], $_POST['telefone_cliente'], $_POST['email_cliente'], $_POST['data_nasc_cliente'], $_POST['senha_cliente'])) {

    //atribuição dos valores a serem cadastrados
    $obCliente->nome_cliente = $_POST['nome_cliente'];
    $obCliente->telefone_cliente = $_POST['telefone_cliente'];
    $obCliente->email_cliente = $_POST['email_cliente'];
    $obCliente->data_nasc_cliente = $_POST['data_nasc_cliente'];
    $obCliente->senha_cliente = $_POST['senha_cliente'];

    //chamada do metodo reponsavel pelo cadastro
    $obCliente->cadastrar();
    header('location: index.php?status=success');
}

include __DIR__ . '/Telas/header.php';
include __DIR__ . '/Telas/formulario.php';
include __DIR__ . '/Telas/footer.php';
