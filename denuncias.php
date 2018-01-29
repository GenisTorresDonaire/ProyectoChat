<?php
	session_start();
	if(!isset($_SESSION["session_username"])){
		header("Location: inicio.php");
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
              <a class="nav-link js-scroll-trigger" href="chat.php">Chat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="denuncias.php">Formulario</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contactanos</a>
            </li>
            <li class="nav-item" style="margin-left: 80px;">
              <a class="nav-link fa fa-user-circle-o" style="transform: scale(2.0);" href="editarDatos.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link fa fa-sign-out" style="transform: scale(2.0);" href="logout.php"></a>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>

    <section>
        <div class="container">
           <div id="denuncias" style="margin-top: 50px; margin-left: 200px;">
                <form>
                  <div class="form-group">
                    <b for="exampleInputFile"><label style="color: red">*</label> DNI </b>
                    <br>
                    <input type="text" >
                  </div>  
                  <div class="form-group">
                    <b for="exampleInputFile"><label style="color: red">*</label> Telefono </b>
                    <br>
                    <input type="tel" >
                  </div>  
                  <div class="form-group">
                    <b for="exampleTextarea"><label style="color: red">*</label> Redacte su denuncia</b>
                    <textarea class="form-control" id="exampleTextarea" style="width: 700px;" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <b for="exampleInputFile"><label style="color: red">*</label> Ajuntar archivos, imagenes, etc..</b>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Es necesario alguna imagen.</small>
                  </div>
                  <fieldset class="form-group">
                    <legend><label style="color: red">*</label> Nivel de urgencia</legend>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Bajo
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Medio
                      </label>
                    </div>
                    <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                        Urgente
                      </label>
                    </div>
                  </fieldset>

                  <button type="submit" class="btn btn-primary" style="margin-left: 30%">Enviar denuncia</button>
                </form>
            </div>
        </div>
    </section>
   
    <section id="contact" style="background-color: #9C9C9C; color: black;">
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
    <script src="js/script.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  </body>

</html>
