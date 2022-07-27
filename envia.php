<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['tel'];
$cidade = $_POST['cidade'];
$est = $_POST['est'];
$plano = $_POST['plano'];

$soli = $_POST['soli'];

$target_dir = "./tmp/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
    $name = basename( $_FILES["img"]["name"]);
    $flag = 1;
  } else {
    $flag = 0;
  }


$body="
<html>

<body>
<table>
    
  <tr>
      <td>Nome:$nome</td>
      </tr>
      <tr>
        <td>E-mail:$email</td>
  </tr>
  <tr>
        <td>Telefone:$telefone</td>
      </tr>
  <tr>
        <td>Cidade:$cidade</td>
      </tr>
      <tr>
        <td>Estado:$est</td>
      </tr>
      <tr>
        <td>Plano:$plano</td>
      </tr>
      <tr>
        <td>Solicitação:$soli</td>
      </tr>
    
  </td>
  </tr>

</table>
</body>
</html>";

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'no-reply@vhdwebsites.com.br';
$mail->Password = 'Vinicius@1010';
$mail->setFrom('no-reply@vhdwebsites.com.br', 'Fale Conosco');
$mail->addAddress('no-reply@vhdwebsites.com.br', '');
if($flag == 1){
  $mail->addAttachment('./tmp/'.$name,'tema');
}
else{

}


if ($mail->addReplyTo($email, $nome)) {
  $mail->Subject = 'Fale Conosco';
  $mail->isHTML(true);
  $mail->Body = $body;
  if (!$mail->send()) {
    echo "<script>
    alert('Erro, envie novamente!'); location= 'index.php';
    </script>";
  } else {

    include "./func.php";
    
    $dir_nome = "./tmp/$name";
 
   // chamada da função
   excluirArquivo($dir_nome);

    echo "<script>
    alert('Enviado com Sucesso'); location= 'index.php';
    </script>";
  }
} 

?>




 


