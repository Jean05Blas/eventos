
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Registro de Eventos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/asistenci.css"> -->
    <link rel="stylesheet" href="assets/css/eventos.css">

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="https://www.flaticon.es/iconos-gratis/enlace"> 


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    
</head>
<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Registro <b>ASISTENCIA</b></h2>
                </div>
                <div class="col-sm-6 text-right">
                    <button class="btn btn-success"><i class="material-icons"></i> <span>GUARDAR REGISTRO</span></button>
                </div>
            </div>
        </div>
        
        
        
       
         <!-- Lista de Eventos y Sub-Eventos -->
         <div class="row mt-3">
                <div class="col-sm-6">
                    <label for="evento">Evento</label>
                    <select id="evento" class="form-control">
                        <option value="">Seleccionar evento</option>
                        <option value="evento1">Evento 1</option>
                        <option value="evento2">Evento 2</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="sub_evento">Sub eventos</label>
                    <select id="sub_evento" class="form-control">
                        <option value="">Seleccionar Sub evento</option>
                        <option value="sub_evento1">Sub Evento 1</option>
                        <option value="sub_evento2">Sub Evento 2</option>
                    </select>
                </div>
            </div>

        
         <!-- Buscar participantes y botones -->
         <div class="row mt-3">
                <!-- <div class="col-sm-6">
                    <label for="busqueda">Buscar participantes</label>
                    <input type="text" id="busqueda" class="form-control" placeholder="BUSCAR PARTICIPANTE">
                </div> -->
                <div class="col-sm-6">
                <div class="input-group">
                <label for="busqueda">Buscar participantes</label>
                    <input for="busqueda" type="text" class="form-control" placeholder="Buscar">
                    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>
                <br>
                <div class="col-sm-6 text-right d-flex align-items-end justify-content-end">
                    <button class="btn btn-primary mr-2">Ver Participantes</button>
                    <button class="btn btn-secondary">Añadir Asistencia</button>
                </div>
            </div>


        
        <div class="d-flex justify-content-between align-items-center my-3">
            <h3 class="mt-4">TALLER DE CIBERSEGURIDAD</h3>
            <div>
                <span class="badge badge-success">Presentes: <span id="count-present">0</span></span>
                <span class="badge badge-danger">Ausentes: <span id="count-absent">0</span></span>
            </div>
        </div>
        
        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>Nombres y apellidos</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tablaParticipantes">
                <tr class="default">
                    <td>Jean Blas Avila</td>
                    <td>999474444</td>
                    <td>Jean@gmail.com</td>
                    <td>
                        <button class="btn btn-toggle btn-danger"><span class="attendance-icon">A</span></button>
                    </td>
                </tr>
                <tr class="default">
                    <td>Nicole Aranibar</td>
                    <td>994512012</td>
                    <td>nicole@gmail.com</td>
                    <td>
                        <button class="btn btn-toggle btn-danger"><span class="attendance-icon">A</span></button>
                    </td>
                </tr>
                <tr class="default">
                    <td>Yabeth Cueva Sanchez</td>
                    <td>978745125</td>
                    <td>yabeth@gmail.com</td>
                    <td>
                        <button class="btn btn-toggle btn-danger"><span class="attendance-icon">A</span></button>
                    </td>
                </tr>
                <tr class="default">
                    <td>Frank Inti Coral</td>
                    <td>912345678</td>
                    <td>frak@gmail.com</td>
                    <td>
                        <button class="btn btn-toggle btn-danger"><span class="attendance-icon">A</span></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="clearfix">
            <div class="hint-text">Mostrando <b>4</b> de <b>25</b> entradas</div>
            <br>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#" class="page-link">Anterior</a></li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
            </ul>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Inicializar contadores
        var countPresent = 0;
        var countAbsent = 4; // Inicialmente todos están marcados como ausentes

        // Manejar clic en el botón de alternancia de asistencia
        $('.btn-toggle').on('click', function() {
            var row = $(this).closest('tr');
            var button = $(this);

            if (button.hasClass('btn-danger')) {
                // Cambiar a presente
                countPresent++;
                countAbsent--;
                row.removeClass('default absent').addClass('present');
                button.removeClass('btn-danger').addClass('btn-success').find('.attendance-icon').text('P');
            } else {
                // Cambiar a ausente
                countPresent--;
                countAbsent++;
                row.removeClass('present').addClass('default absent');
                button.removeClass('btn-success').addClass('btn-danger').find('.attendance-icon').text('A');
            }

            // Actualizar contadores
            $('#count-present').text(countPresent);
            $('#count-absent').text(countAbsent);
        });

        // Actualiza los contadores al cargar la página
        $('#count-present').text(countPresent);
        $('#count-absent').text(countAbsent);
    });
</script>
</body>
</html>
