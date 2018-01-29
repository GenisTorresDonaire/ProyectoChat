<?php
  session_destroy();
	session_start();
	if(isset($_SESSION["session_username"])){
		header("Location: inicio.php");
		}
		if(!empty($_POST['nombre']) && !empty($_POST['password']) ) {
			$username=$_POST['nombre'];												//Asigna a las variables el post 
			$password=$_POST['password']; 
			if($username == "Anonimo" && $password == "Anonimo"){
				echo "lol";	
				$_SESSION['session_username']=$username;
				header("Location: chat.php");
			}
		}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ProjecteXat</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/script.js"></script>

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color: #960018;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img style="height: 120px; width: 300px;" src="img/logo.png"/></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive" style="color: white">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#chat">Iniciar Sesion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contactanos</a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>
   
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row" style="color: black;">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Ayuntamiento de Cornellá</strong>
            </h1>
            <br>
          </div>
          <div class="col-lg-8 mx-auto" style="background-color: white; border-radius: 10px; height: auto;">
            <br />
            <p class="text-faded mb-5" style="color: black; text-align: justify;">Bienvenidos a la pagina de Loggin del ayuntamiento. Como ya sabras, al iniciar sesion, podras acceder a formulario de denuncias, al chat, etc... Para saber mas ventajas ponte en contacto con nosotros.</p>
          </div>
        </div>
      </div>
    </header>
    
    <section class="granate" id="chat" style="background-color: #ab2a3e; color: white">
      <div class="container granate">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Inicio de Sesion!</h2>
            <br />
            <p>Hola! A que esperas si ya tienes una cuenta, inicia sesion y entra a las opciones de usuarios.</p>
            <br />
            <div style="margin-left: 25%; color: white;">
                <form method="post">
                   <table>
                       <tr>
                           <td>Usuario: </td>
                           <td><input type="text" name="nombre"/></td>
                       </tr>
                       <tr>
                           <td>Password: </td>
                           <td><input type="password" name="password"/></td>
                       </tr>
                       <tr>
                           <td colspan="2"><input class="btn btn-primary" type="submit" value="Entrar"></td>
                       </tr>
                   </table>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  
   
    <section id="contact" style="background-color: #9C9C9C; color: black">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contacta con el Ayuntamiento</h2>
            <br>
            <p class="mb-5">El Ayuntamiento ofrece diferentes líneas on-line para atender cualquier petición informativa o trámite.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>932-393-432</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <p>informacio@aj-cornella.cat</p>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
