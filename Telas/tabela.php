<div class="pt-3 pl-3 pr-3 mx-auto text-center">
    <?php

    $mensagem = '';

    //GERA AS NOTIFICAÇÕES
    if (isset($_GET['status'])) {

        switch ($_GET['status']) {
            case 'success':
                $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
                break;
            case 'error':
                $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
                break;
            case 'senhaIncorreta':
                $mensagem = '<div class="alert alert-warning">Senha Incorreta!</div>';
                break;
        }
    }

    //GERA os clientes NA TABELA
    $resultados = null;

    if ($clientes != null) {
        foreach ($clientes as $cliente) {
            $resultados .=  '
                            <tr>
                                <td>' . $cliente->nome_cliente . '</td>
                                <td>' . $cliente->email_cliente . '</td>
                                <td>' . $cliente->telefone_cliente . '</td>
                                <td>' . $cliente->data_nasc_cliente . '</td>
                                <td>
                                <a href= "editar.php?id_cliente=' . $cliente->id_cliente . '">
                                    <button type="button" class="btn btn-outline-primary">Editar</button>
                                </a>
                                <a href= "excluir.php?id_cliente=' . $cliente->id_cliente . '">
                                    <button type="button" class="btn btn-outline-danger">Excluir</button>
                                </a>
                                </td>
                            </tr>';
        }
    }


    ?>

    <div class="container">
        <?= $mensagem ?>
        <div class="row mb-1">
            <div class="col-md-2">
                <h2>Clientes:</h2>
            </div>
        </div> <!-- /cabeçario -->
        <div class="row">
            <?php if ($resultados != null) {
            ?>
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $resultados ?>
                    </tbody>
                </table>
            <?php } else { //se nao houver produtos cadastrados no BD 
            ?>
                <div class="container m-5">
                    <h3 class="font-weight-light text-secondary text-center">Não Existe Clientes Cadastrados!</h3>
                </div>

            <?php } //Fim if-else 
            ?>
        </div> <!-- /tabela -->
    </div>