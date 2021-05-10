<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entidades\Cliente;

//VALIDAÇÃO DO ID
if(!isset($_GET['id_cliente']) or !is_numeric($_GET['id_cliente'])){
    header('location: index.php?status=error');
    exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

    Cliente::excluir($_GET['id_cliente']);

     header('location: index.php?status=success');

}

include __DIR__.'/Telas/header.php';
include __DIR__.'/Telas/confirmarExclusao.php';
include __DIR__.'/Telas/footer.php';

?>