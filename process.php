<?php

include 'db.php';

$usuario = addslashes($_POST['usuario']);

$senha = md5($_POST['password']);




	$query = "SELECT * FROM usuario WHERE usuario = '$usuario' AND pass = '$senha'";

	$consulta = mysqli_query($conexao, $query);

	if(mysqli_num_rows($consulta) == 1){
		session_start();
		$_SESSION['login'] = true;
		$_SESSION['usuario'] = $usuario;
		$linha = mysqli_fetch_array($consulta);
		$_SESSION['nome_user'] = $linha['nome'];
        $_SESSION['cpf'] = $linha['cpf'];
        $_SESSION['rg'] = $linha['rg'];
        $_SESSION['endereco'] = $linha['endereco'];
        $_SESSION['cidade'] = $linha['cidade'];
        $_SESSION['estado'] = $linha['estado'];
        $_SESSION['tel'] = $linha['tel'];
        $_SESSION['cel'] = $linha['cel'];
        $_SESSION['email'] = $linha['email'];
        $_SESSION['site'] = $linha['site'];
       
        
		


		header('location:./member/indexuser.php');
	}
	else{
		header('location:login.php?erro');
	}

?>