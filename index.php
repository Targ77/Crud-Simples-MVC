<?php
require __DIR__ . '/vendor/autoload.php';

use \App\Entidades\Cliente;

//OBTÉM AS OS DADOS DO CLIENTE
$clientes = new Cliente;
$clientes = $clientes->getClientes();

include __DIR__ . '/Telas/header.php';
include __DIR__ . '/Telas/tabela.php';
include __DIR__ . '/Telas/footer.php';
