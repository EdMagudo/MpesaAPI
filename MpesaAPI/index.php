<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .container-pagamento {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
  }
  .form-group {
    margin-bottom: 20px;
  }
  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  input[type="text"],
  input[type="number"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
  }
  input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<div class="container-pagamento">
  <h2>Formulário</h2>
  <form action="./payment.php" method="post">
    <div class="form-group">
      <label for="celular">Número de Celular:</label>
      <input type="text" id="celular" name="celular" placeholder="Digite seu número de celular" required>
    </div>
    <div class="form-group">
      <label for="valor">Valor:</label>
      <input type="number" id="valor" name="valor" placeholder="Digite o valor" required>
    </div>
    <div class="form-group">
      <label for="referencia">Referência:</label>
      <input type="text" id="referencia" name="referencia" placeholder="Digite a referência">
    </div>
    <input type="submit" value="Enviar">
  </form>
</div>


</body>
</html>
