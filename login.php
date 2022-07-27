<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./icon/keyboard-key-v.svg" >
    <title>Login - VHD WebSites</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style1.css">
</head>
<body>

<div class="login">

<form class="form-signin " method="post" action="process.php">
<br><br>
<div class="border border-white rounded-lg borda">
  <div class="text-center mb-4">
    <img class="mb-4" src="./icon/keyboard-key-v.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
  </div>

  <div class="form-label-group">
  
    <input type="text" id="inputEmail" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
    <br>
    
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required>
    <br>
  </div>

  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  <a class="btn btn-lg btn-primary btn-block" href="index.php">Sair</a>
  <p class="mt-5 mb-3 text-white text-center">@VHD WebSites 2021</p>
  </div>
</form>
</div>






    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>