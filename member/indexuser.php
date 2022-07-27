<?php
session_start();

if($_SESSION['login'] == true){

	
	}
	else{
		header('location:../login.php');
	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icon/keyboard-key-v.svg" >
    <title>VHD WebSites</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/style3.css">
    <link rel="stylesheet" href="../CSS/style.css">
    
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info ">
  <a class="navbar-brand" href="#" style="margin-right:-150px;">
  <img src="../icon/keyboard-key-v.svg" width="30" height="30" class="d-inline-block align-top" alt="">    
  VHD WebSites</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample05">
    <ul class="navbar-nav ">
      <li class="nav-item active menu ">
        <a class="nav-link" href="indexuser.php">Meu perfil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active menu">
        <a class="nav-link" href="plano.php" id="animar">Meu Plano <span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item active menu">
        <a class="nav-link" href="pagamento.php" id="animar2">Pagamento <span class="sr-only">(current)</span></a>
      </li> 
      <li class="nav-item active menu">
        <a class="nav-link" href="suporte.php">Suporte<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active menu">
        <a class="nav-link" href="logout.php">Sair<span class="sr-only">(current)</span></a>
      </li>        
    </ul>
  </div>
</nav>



<form class="perfil" method="post" action="envia.php" >
          <div class="form-row ">
            <div class="form-group col-md-3">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" value="<?php echo $_SESSION['nome_user']; ?>" required disabled>
            </div>
          <div class="form-group col-md-2">
            <label for="inputPassword4">Usuario</label>
            <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['usuario']; ?>" required disabled>
          </div>
          <div class="form-group col-md-2">
            <label for="tel">Email</label>
            <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $_SESSION['email']; ?>" disabled>
          </div>
          <div class="form-group col-md-2">
            <label for="tel">Telefone</label>
            <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $_SESSION['tel']; ?>" disabled>
          </div>
          <div class="form-group col-md-2">
            <label for="tel">Celular</label>
            <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $_SESSION['cel']; ?>" disabled>
          </div>
    
          </div>
  
  
          <div class="form-row">
            
          <div class="form-group col-md-3">
              <label for="cidade">Endereço</label>
              <input type="text" class="form-control" name="cidade" value="<?php echo $_SESSION['endereco']; ?>" disabled>
            </div>
            <div class="form-group col-md-3">
              <label for="cidade">Cidade</label>
              <input type="text" class="form-control" name="cidade" value="<?php echo $_SESSION['cidade']; ?>" disabled>
            </div>
            <div class="form-group col-md-1">
              <label for="est">Estado</label>
              <input type="text" class="form-control" name="est" value="<?php echo $_SESSION['estado']; ?>" disabled>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
                <label for="plano">Plano</label>
                <input type="text" class="form-control" name="est" value="" disabled>
              </div>
              <div class="form-group col-md-4">
                <label for="plano">Site</label>
                <input type="text" class="form-control" name="est" value="<?php echo $_SESSION['site']; ?>" disabled>
              </div>
          </div>
  
          
          <button type="submit" class="btn btn-primary" name="submit" disabled>Salvar</button>
          <button type="button" class="btn btn-primary" name="button" >Editar</button>
</form>



<footer class="">
  <div class="">
    <br><br><br><br>
    <p>@VHD WebSites 2021</p>
    
  </div>
</footer>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    
</body>
</html>