<html lang= "pt-br">
 <head>
 	
<meta charset= "utf-8">


	
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>	Media Tech-Notícias Sobre Tecnologia</title>

        <!-- CSS -->
     	<link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

 <link rel="shortcut icon" href="assets/ico/favfav.png">
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body background="star1.jpg" >
	<a href="indexx.php"><img src="home.png" height="60px" width="60px" align="left" style="margin-left: 10px;"></a>
  <div class="login-wrap">
	<div class="login-html" >
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Cadastrar</label>
		
			<div class="login-form">
			
			<form method="POST" action="cadastro.php">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Nome</label>
					<input id="user" name="nome" type="text" class="input" required autocomplete="off">
				</div>
				<div class="group">
					<label for="pass" class="label">Senha</label>
					<input id="pass" name="senha" type="password" class="input" data-type="password" required autocomplete="off">
				</div>
				<div class="group">
					<label for="pass" class="label">Repetir a senha</label>
					<input id="pass" type="password" class="input" name="senha1" required autocomplete="off">
				</div>
				<div class="group">
					<label for="pass" class="label">Email</label>
					<input id="pass" type="email" name="email" class="input" required autocomplete="off">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Cadastrar" >

				</div>
				<label for="tab-1"><font color="00a845">Já tem Conta?</font></label><div class="hr" style="margin: 10px;"></div>
			</div>
		</form>
<form method="POST" action="valida.php">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" type="email" class="input" name='email' autocomplete="off">
				</div><br>
				<div class="group">
					<label for="pass" class="label">Senha</label>
					<input id="pass" type="password" class="input" data-type="password" name="senha" autocomplete="off">
				</div><br><br>
				


				<div class="group">
					<input type="submit" class="button" value="Login">
				</div>

				<div class="hr"></div>
				
				<?php 
				session_start();
				
				if(isset($_SESSION['loginErro'])){
						echo $_SESSION['loginErro'];
						unset($_SESSION['loginErro']);
					}

				if(@isset($_SESSION['logindeslogado'])){

				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);

				}

				 ?>
			</div>
		</form>
		</div>
		
	</div>
</div>
  
  
</body>
</html>
