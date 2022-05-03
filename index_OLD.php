<?php //login

require_once "conexao.php";

if(isset($_SESSION['login_id'])){
  header("Location: dashboard.php");
  exit;

  require 'google-api/vendor/autoload.php';
  $cliente = new Google_Client();
  $cliente->setClientId('518980409361-v78m9oagahgh4r9s8f229fmt3c3b3stp.apps.googleusercontent.com');
  $cliente->setClientSecret('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');
  $cliente->setRedirectUri('http://localhost/oficina/');
  $cliente->addScope('email');
  $cliente->addScope('profile');


}

?>

<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <h1 style=text-align:center;>Registro</h1>
  <div class="shadow p-3 mb-5 bg-white rounded col-6 mx-auto">
  <form action="acesso.php" method=post>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Senha:</label>
    <input type="password" class="form-control" id="senha" placeholder="Enter password" name="senha">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Lembrar informações
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
  </div>
</body>
    </html>