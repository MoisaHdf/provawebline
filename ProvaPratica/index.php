<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de automóveis</title>
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</head>
<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <h2 class="text-center mb-4">Cadastro de automóveis</h2>
        <form action="insere_automovel.php" method="post">
          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
          </div>
          <div class="form-group">
            <label for="placa">Placa</label>
            <input type="text" class="form-control" id="placa" name="placa" required>
          </div>
          <div class="form-group">
            <label for="chassi">Chassi</label>
            <input type="text" class="form-control" id="chassi" name="chassi" required>
          </div>
          <div class="form-group">
            <label for="montadora">Montadora</label>
            <select class="form-control" id="montadora" name="montadora" required>
              <option value="" selected disabled>Selecione uma montadora</option>
              <?php
              include "conexao.php";
              $query = "SELECT * FROM montadoras";
              $result = mysqli_query($conexao, $query);
              while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['codigo'] . "'>" . $row['nome'] . "</option>";
              }
              mysqli_close($conexao);
              ?>
            </select>
          </div>
          <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></
