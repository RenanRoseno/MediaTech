<html lang= "pt-br">
        <head>                                                                  
                <meta charset= "utf-8">
              
                <meta name="viewport" content="width=device-width, initial-scale=1">
        
                <title> Media Tech-Notícias Sobre Tecnologia</title>

                                <!-- CSS -->
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
                <link rel="stylesheet" href="assets/css/animate.css">
                <link rel="stylesheet" href="assets/css/form-elements.css">
                <link rel="stylesheet" href="assets/css/style.css">
                <link rel="stylesheet" href="assets/css/media-queries.css">

                <link rel="shortcut icon" href="assets/ico/favfav.png">
        
        </head>
        <body background="fundoPreto.jpg">
<?php
            include_once('conexao.php');
            @$nome = $_POST['nome'];
            @$senha = $_POST['senha'];
            @$senha1 = $_POST['senha1'];
            @$email = $_POST['email'];
			$inserir = "INSERT INTO cadastro(usuario, senha, email ) VALUES ('$nome', '$senha', '$email');";

            if($senha == $senha1){
				mysqli_query($conn, $inserir) or die (mysqli_error($conn));
            	echo "<h1><font color='white'>Cadastrado com sucesso. Clique <a href='login.php' style='color:#00a845;'>aqui</a> para fazer log-in.</font> </h1>";
            	
        	}else{

        		echo "Senhas diferentes, por favor, retorne clicando <a href='login.php'>aqui</a>";

        	}
          

?>
</body>
</html>