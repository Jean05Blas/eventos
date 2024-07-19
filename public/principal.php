<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EVENTOS</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="assets/css/font-awesome.css"> 
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap/_all-skins.min.css">
  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <link rel="stylesheet" href="./style.css">
  <style>
    .main-header .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .navbar-custom-menu .nav > li > a {
      color: #FFFFFF;
    }
    .sidebar-menu > li > a {
      color: #FFFFFF;
    }
    @media (max-width: 767px) {
      .navbar-custom-menu {
        display: flex;
        justify-content: flex-end;
      }
    }
    .carousel-container {
  float: left;
  width: 100%;
  height: 400px; /* Altura fija para evitar el redimensionamiento */
  margin-right: 15px;
  overflow: hidden; /* Para asegurarse de que las imágenes no sobresalgan */
}

.carousel-inner img {
  width: 90%;
  height: 90%;
  object-fit: cover; /* Ajuste para que las imágenes se ajusten dentro del contenedor sin distorsionarse */
  object-position: center;
  margin: 0 auto;
}

    .content-wrapper {
      display: flex;
      flex-wrap: wrap;
    }
    .content {
      flex: 1;
    }
    .text-container {
  float: right;
  width: 50%; /* Ocupa el otro 50% del contenedor principal */
  padding: 20px; /* Espaciado interno */
  box-sizing: border-box; /* Para que el padding no afecte el ancho total */
}

@media (max-width: 767px) {
  .carousel-container, .text-container {
    width: 100%; /* En pantallas pequeñas, ambos contenedores ocupan el 100% del ancho */
    float: none; /* Quita el flotado para que los contenedores se apilen verticalmente */
  }
}


  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a class="logo" style="background-color:#25466B; height: 70px;">
        <span class="logo-lg" style="color: #FFFFFF;"><b>EVENTOS</b></span>
      </a>
      <nav class="navbar navbar-static-top" role="navigation" style="background-color: #007bff;">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="color: #ffffff;">
          <span class="sr-only">Navegación</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs" style="color: #FFFFFF;">Cueva Sanchez Yabeth Yesenia</span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <p>otros usuarios
                  <small></small></p>
                </li>
                <li class="user-footer">
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar" style="background-color: #0056b3;">
      <section class="sidebar">
        <ul class="sidebar-menu">
          <li class="header"></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-calendar" style="color: #FFFFFF;"></i>
              <span style="color: #FFFFFF;">Eventos</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="#" onclick="loadContent('eventos.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Evento</a></li>
              <li><a href="#" onclick="loadContent('tip_evento.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Tipo de evento</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fas fa-users" style="color: #FFFFFF;"></i>
              <span style="color: #FFFFFF;">Participante</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="#" onclick="loadContent('inscripcion.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Inscripción</a></li>
              <li><a href="#" onclick="loadContent('asistencia.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Asistencia</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fas fa-certificate" style="color: #FFFFFF;"></i>
              <span style="color: #FFFFFF;">Certificado</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="#" onclick="loadContent('certificado.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Certificado</a></li>
              <!-- <li><a href="ventas/cliente" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Clientes</a></li> -->
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fas fa-building" style="color: #FFFFFF;"></i> <span style="color: #FFFFFF;">Facultades</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="#" onclick="loadContent('facultades.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Facultad</a></li>
              <li><a href="#" onclick="loadContent('escuelas.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Escuela</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fas fa-file" style="color: #FFFFFF;"></i> <span style="color: #FFFFFF;">Reportes</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="#" onclick="loadContent('reporte1.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Reporte N°1</a></li>
              <li><a href="#" onclick="loadContent('reporte2.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Reporte N°2</a></li>
              <li><a href="#" onclick="loadContent('reporte3.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Reporte N°3</a></li>
              <li><a href="#" onclick="loadContent('reporte4.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Reporte N°4</a></li>
              <li><a href="#" onclick="loadContent('reporte5.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Reporte N°5</a></li>
              <li><a href="#" onclick="loadContent('reporte6.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Reporte N°6</a></li>
              <li><a href="#" onclick="loadContent('reporte7.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Reporte N°7</a></li>
              <li><a href="#" onclick="loadContent('reporte8.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Reporte N°8</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fas fa-key" style="color: #FFFFFF;"></i> <span style="color: #FFFFFF;">Acceso</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="#" onclick="loadContent('usuarios.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Usuarios</a></li>
              <li><a href="#" onclick="loadContent('datosusu.php')" style="color: #FFFFFF;"><i class="fa fa-circle-o"></i> Datos Usuarios</a></li>
            </ul>
          </li>
        </ul>
      </section>
    </aside>

    <div class="content-wrapper">
      <section class="content" id="myContent">
        <div class="carousel-container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/evento2.jpeg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/evento5.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/evento4.jpeg" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/una.jpg" alt="Fourth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/unasam.jpg" alt="Fifth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/images/evento1.jpg" alt="Fifth slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
              
      </section>
      <div class="text-container">
            <p>Texto de relleno</p>
            <!-- Puedes añadir más contenido aquí -->
            <p>Lorem ipsum dolor sit amet. Et voluptatem dolorum non internos magni ut repellat rerum est numquam voluptatum 
              ut sint consectetur! Et inventore eaque ut soluta similique eos fugiat reprehenderit eum obcaecati velit. 
              Et minus veniam et nulla nisi et fugit sapiente vel sunt dolor sit dolores odit. </p>
              <p>Non voluptatem necessitatibus et cupiditate voluptatem et deserunt provident. 
                Id accusamus ratione ut quidem sint eum iusto delectus aut voluptatem tempore eos enim similique. 
                Ea animi molestiae non placeat ipsam rem perspiciatis impedit et alias pariatur. 
                Est consectetur reiciendis et quibusdam earum aut omnis vitae et iusto omnis cum facilis
                 quae ea voluptas reiciendis et ducimus numquam! </p>
                 <p>Eos suscipit sapiente aut voluptas molestiae sit magnam dolore sed quia veritatis.
                   Ut culpa impedit At nemo cumque quo enim eaque non voluptatem sint. </p>

          </div>
    </div>
  </div>

  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <script src="assets/js/jQuery-2.1.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/js/usuario.js"></script>
  <script>
    function loadContent(url) {
      $.ajax({
        url: url,
        success: function(data) {
          document.getElementById('myContent').innerHTML = data;
        },
        error: function() {
          document.getElementById('myContent').innerHTML = '<p>Error al cargar el contenido.</p>';
        }
      });
    }

    $('.carousel').carousel({
      interval: 2000
    });
  </script>
</body>
</html>
