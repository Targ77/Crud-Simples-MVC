<?php
namespace App\Entidades;

use \App\BD\BancoDeDados;
use \PDO;
class Cliente{
    public $id_cliente;
    public $telefone_cliente;
    public $email_cliente;
    public $nome_cliente;
    public $data_nasc_cliente;
    public $senha_cliente;

    public function cadastrar(){
        //INSERINDO FICHA NO BD 
        $obBancoDeDados = new BancoDeDados();
        $this->id_cliente = $obBancoDeDados->insert([
            'nome_cliente' => $this->nome_cliente,
            'telefone_cliente' => $this->telefone_cliente,
            'data_nasc_cliente' => $this->data_nasc_cliente,
            'email_cliente' => $this->email_cliente,
            'senha_cliente' =>  md5($this->senha_cliente)
        ]);
    }

    public function getClientes($where = null, $order = null, $limit = null){

        $clientes = (new BancoDeDados())->select($where, $order, $limit)->fetchAll(PDO::FETCH_OBJ);
        return $clientes;
    }

    public function getCliente($id){
        
        $clientes = (new BancoDeDados())->select('id_cliente = ' . $id)->fetchObject(self::class);

        return $clientes;

    }

    public function atualizar(){

        return (new BancoDeDados())->update('id_cliente = ' . $this->id_cliente, [
            'nome_cliente' => $this->nome_cliente,
            'telefone_cliente' => $this->telefone_cliente,
            'data_nasc_cliente' => $this->data_nasc_cliente,
            'email_cliente' => $this->email_cliente
        ]);
    }

    /**
     * Método respoável por excluir uma ficha 
     * @return bool
     */
    public static function excluir($id_cliente){

        return (new BancoDeDados())->delete('id_cliente = ' . $id_cliente);
    }
}

