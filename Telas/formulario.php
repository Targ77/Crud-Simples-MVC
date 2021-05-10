  <div class="container mt-3">
    <h2><?= TITLE ?></h2>
    <?php
    if (TITLE == "Editar Cliente:") {
      $pedirSenha = 'Digite a senha já cadastrada';
    } else {
      $pedirSenha = '';
    }
    ?>
    <form method="post">
      <div class="form-row justify-content-center">
        <div class="col-md-6 mb-3">
          <label>Nome</label>
          <input type="text" class="form-control" name="nome_cliente" value="<?= $obCliente->nome_cliente ?>" required>
        </div>
      </div>
      <div class="form-row justify-content-center">
        <div class="col-md-3 mb-3">
          <label>E-mail</label>
          <input type="email" class="form-control" name="email_cliente" value="<?= $obCliente->email_cliente ?>" required>
        </div>
        <div class="col-md-3 mb-3">
          <label>Telefone</label>
          <input type="text" class="form-control" id="celular" name="telefone_cliente" value="<?= $obCliente->telefone_cliente ?>" required>
        </div>
      </div>
      <div class="form-row justify-content-center">
        <div class="col-md-3 mb-3">
          <label>Data de Nascimento</label>
          <input type="date" class="form-control" id="data" name="data_nasc_cliente" value="<?= $obCliente->data_nasc_cliente ?>" required>
        </div>
        <div class="col-md-3 mb-3">
          <label>Senha</label>
          <input type="password" class="form-control" placeholder="<?= $pedirSenha ?>" name="senha_cliente" value="" required>
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="mb-4 btn btn-warning text-center">Enviar</button>
      </div>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <script type="text/javascript">
    $("#celular").mask("(00)000000000");
  </script>