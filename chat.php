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
        <div class="card grey lighten-3 chat-room">
            <div class="card-body">
                <div class="row px-lg-2 px-2">
                    <div class="col-md-6 col-xl-4 px-0">
                        <h6 class="font-bold mb-3 text-center text-lg-left">Miembros</h6>
                        <div class="white z-depth-1 px-3 pt-3 pb-0">
                            <ul class="list-unstyled friend-list">
                                <li class="active grey lighten-3 p-2">
                                    <a href="#" class="d-flex justify-content-between">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8" alt="avatar" class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1">
                                        <div class="text-small">   
                                            <strong>John Doe</strong>
                                            <p class="last-message text-muted">Hello, Are you there?</p>
                                        </div>
                                        <div class="chat-footer">
                                            <p class="text-smaller text-muted mb-0">Just now</p>
                                            <span class="badge badge-danger float-right">1</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a href="#" class="d-flex justify-content-between">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-1" alt="avatar" class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1">
                                        <div class="text-small">   
                                            <strong>Danny Smith</strong>
                                            <p class="last-message text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                        <div class="chat-footer">
                                            <p class="text-smaller text-muted mb-0">5 min ago</p>
                                            <span class="text-muted float-right"><i class="fa fa-mail-reply" aria-hidden="true"></i></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a href="#" class="d-flex justify-content-between">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2" alt="avatar" class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1">
                                        <div class="text-small">   
                                            <strong>Alex Steward</strong>
                                            <p class="last-message text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                        <div class="chat-footer">
                                            <p class="text-smaller text-muted mb-0">Yesterday</p>
                                            <span class="text-muted float-right"><i class="fa fa-mail-reply" aria-hidden="true"></i></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a href="#" class="d-flex justify-content-between">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-3" alt="avatar" class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1">
                                        <div class="text-small">   
                                            <strong>Ashley Olsen</strong>
                                            <p class="last-message text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                        <div class="chat-footer">
                                            <p class="text-smaller text-muted mb-0">Yesterday</p>
                                            <span class="text-muted float-right"><i class="fa fa-mail-reply" aria-hidden="true"></i></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a href="#" class="d-flex justify-content-between">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-4" alt="avatar" class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1">
                                        <div class="text-small">   
                                            <strong>Kate Moss</strong>
                                            <p class="last-message text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                        <div class="chat-footer">
                                            <p class="text-smaller text-muted mb-0">Yesterday</p>
                                            <span class="text-muted float-right"><i class="fa fa-mail-reply" aria-hidden="true"></i></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a href="#" class="d-flex justify-content-between">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5" alt="avatar" class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1">
                                        <div class="text-small">   
                                            <strong>Lara Croft</strong>
                                            <p class="last-message text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                        <div class="chat-footer">
                                            <p class="text-smaller text-muted mb-0">Yesterday</p>
                                            <span class="text-muted float-right"><i class="fa fa-mail-reply" aria-hidden="true"></i></span>
                                        </div>
                                    </a>
                                </li>
                                <li class="p-2">
                                    <a href="#" class="d-flex justify-content-between">
                                        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6" alt="avatar" class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1">
                                        <div class="text-small">   
                                            <strong>Brad Pitt</strong>
                                            <p class="last-message text-muted">Lorem ipsum dolor sit.</p>
                                        </div>
                                        <div class="chat-footer">
                                            <p class="text-smaller text-muted mb-0">5 min ago</p>
                                            <span class="text-muted float-right"><i class="fa fa-check" aria-hidden="true"></i></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-8 pl-md-3 px-lg-auto px-0">
                        <div class="chat-message">
                            <ul class="list-unstyled chat">
                                <li class="d-flex justify-content-between mb-4">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6" alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1">
                                    <div class="chat-body white p-3 ml-2 z-depth-1">
                                        <div class="header">
                                            <strong class="primary-font">Brad Pitt</strong>
                                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                                        </div>
                                        <hr class="w-100">
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between mb-4">
                                    <div class="chat-body white p-3 z-depth-1">
                                        <div class="header">
                                            <strong class="primary-font">Lara Croft</strong>
                                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                                        </div>
                                        <hr class="w-100">
                                        <p class="mb-0">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                                        </p>
                                    </div>
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5" alt="avatar" class="avatar rounded-circle mr-0 ml-3 z-depth-1">
                                </li>
                                <li class="d-flex justify-content-between mb-4 pb-3">
                                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-6" alt="avatar" class="avatar rounded-circle mr-2 ml-lg-3 ml-0 z-depth-1">
                                    <div class="chat-body white p-3 ml-2 z-depth-1">
                                        <div class="header">
                                            <strong class="primary-font">Brad Pitt</strong>
                                            <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                                        </div>
                                        <hr class="w-100">
                                        <p class="mb-0">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>
                                </li>
                                <li class="white">
                                    <div class="form-group basic-textarea">
                                        <textarea class="form-control pl-2 my-0" id="exampleFormControlTextarea2" rows="3" placeholder="Type your message here..."></textarea>
                                    </div>
                                </li>
                                <button type="button" class="btn btn-info btn-rounded btn-sm waves-effect waves-light float-right">Send</button>
                            </ul>
                        </div>
                    </div>
                </div>
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
