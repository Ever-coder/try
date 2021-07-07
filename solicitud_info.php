<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Colegio La Asunción - SV</title>
  <meta name="description" content="corporacion la asuncion">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
  <link rel="shortcut icon" href="images/ico/icono.ico" />
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Dropdown -->
  <link rel="stylesheet" href="css/drop.css">
</head>
<style type="text/css">
  .box{
    padding: 10px;
    margin: 50px auto;

    box-shadow: 0px 0px 10px 5px  #170125;
    background-color:#B29CD3;
    border-radius: 20px;

  }
  .img{
    border: 3px solid;
    height: 100px;
  }
  .input{
    padding-bottom: 15px;
  }
  .nota{
    font: oblique bold 120% cursive;
    color: #340B5F;
  }
  .h1{
    font-weight: bold;
  }
  .textinput{
    float: left;
    width: 100%;
    min-height: 75px;
    outline: none;
    resize: none;
    border: 1px solid grey;
    border-radius: 20px;
  }
</style>
<body id="top" data-spy="scroll">
  <header id="home">

    <section class="top-nav hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="top-left">
            </div>
          </div>

          <div class="col-md-6">
            <div class="top-right">
              <p>Dirección:<span>1a Calle Poniente, 1148, San Salvador</span></p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!--main-nav-->

    <div id="main-nav">

      <nav class="navbar">
        <div class="container">

          <div class="navbar-header">
            <img src="images/slider/logo.png">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ftheme">
              <span class="sr-only">Toggle</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse" id="ftheme">

            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">INICIO</a></li>
              <li><a href="quienes.html">QUIÉNES SOMOS</a></li>
              <li class="dropdown"><a>SITIOS DE INTERÉS <i class="fa fa-caret-down"></i></a>
                  <div class="dropdown-content">
                      <a href="sitios.html">Plataforma y Correo</a>
                      <a href="noticias.html">Noticias</a>
                      <a href="galeria.html">Galería</a>
                      <a href="https://sites.google.com/view/biblioteca-monseor-romero/inicio" target="_blank">BIBLIOTECA</a>
                  </div>
              </li>
              <li class="dropdown"><a>NUEVO INGRESO <i class="fa fa-caret-down"></i></a>
                  <div class="dropdown-content">
                      <a href="oferta.html">Oferta Académica</a>
                      <a href="solicitud_info.php" target="_blank">Proceso de Admisión</a>
                  </div>
              </li>
              <li><a class="a" href="contactenos.html">Contáctenos</a></li>
              <li></li>
              <li><a href="https://www.facebook.com/colegiolaasuncionsv" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/laasuncionsv?lang=es" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/laasuncionsv/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </header>
  <div>
      <div class="box">
                <!--<center><img class="img" src="asunclog.jpg"></center>-->
                 <center>

                    <h1 class="h1">Solicitud de Información para Nuevo Ingreso 2022</h1><hr>
                    <h4 class="nota text-left">NOTA: Llenar formulario por estudiante</h4><hr>
                        <form  method="POST" name="form-work" action="logica/guardar.php">
                    
                          <fieldset>
                            <?php
                    date_default_timezone_set('America/El_Salvador');
                    $fecha_actual=date("Y-m-d");
                  ?>
                  <input type="hidden" name="fecha" value="<?= $fecha_actual?>">

                              <div class="row">
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="nomeR">Nombre Responsable</label>
                                    <input name="nombreR" class="form-control" placeholder="Ingresar Nombre..." type="text" required="required">
                                  </div>
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="nomeE">Nombre Estudiante</label>
                                    <input name="nombreE" class="form-control" placeholder="Ingresar Nombre..." type="text" required="required">
                                  </div>
                              </div>    
                              <div class="row">
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="telefono">Telefono/Celular</label>
                                    <input name="tel" class="form-control" placeholder="Ingresar Número" type="text" required="required">
                                  </div>
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="email">Correo Electrónico</label>
                                    <input name="email" class="form-control" placeholder="ejemplo@gmail.com" type="email" required="required">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="grado">Grado de Interés</label>
                                    <select name="grado" class="form-control">

                                      <option>Primer Grado</option>

                                      <option>Segundo Grado</option>

                                      <option>Tercer Grado</option>

                                      <option>Cuarto Grado</option>

                                      <option>Quinto Grado</option>

                                      <option>Sexto Grado</option>

                                      <option>Séptimo Grado</option>

                                      <option>Octavo Grado</option>

                                      <option>Noveno Grado</option>

                                      <option>Primer Año Bachillerato</option>

                                    </select>
                                  </div>
                                  <div class="col-md-6 col-sm-6 input">
                                    <label class="control-label" for="sector">Sector Trabajo</label>
                                    <select name="sector" class="form-control">

                                      <option>Privado</option>

                                      <option>Público</option>

                                      <option>Informal</option>

                                    </select>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-md-12 col-sm-6 input">
                                    <center><label class="control-label" for="message">Ampliación de Información</label></center>
                                    <textarea class="textinput" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Solicitud de Información..."></textarea>
                                  </div>
                              </div>

                              <div class="form-group">
                                <center>
                                  <div class="col-md-12 col-sm-6">
                                      <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
                                  </div>
                                </center>
                              </div>     
                          </fieldset> 
                        </form>
                 </center>
      </div><br>
  </div><br><br>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.inview.js"></script>
  <script src="js/script.js"></script>
</html>