
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gestión de Certificación</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="assets/css/certificacion.css"> -->
<link rel="stylesheet" href="assets/css/certificacion.css">



</style>
</head>
<body>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h2>Gestión de <b>Certificación</b></h2>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <form action="#" method="GET" class="form-inline text-right">
                        <div class="form-group">
                            <!-- <label for="evento" style="color: #fff;">Evento:</label> -->
                            <select id="evento" name="evento" class="form-control" required>
                                <option value="">Seleccione un evento</option>
                                <option value="1">Conferencia de Tecnología</option>
                                <option value="2">Seminario de Marketing</option>
                                <option value="3">Taller de Ciberseguridad</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </form>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-xs-12">
                    <input type="text" id="buscar" class="form-control" placeholder="Buscar evento">
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nombres y apellidos</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jean Paul Blas</td>
                    <td>99474444</td>
                    <td>jblasa@gmail.com</td>
                    <td>
                        <button class="btn btn-estado btn-estado-emitido btn-xs" onclick="cambiarEstado(this, 'Emitido')">Emitido</button>
                        <button class="btn btn-estado btn-estado-proceso btn-xs" onclick="cambiarEstado(this, 'En Proceso')">En Proceso</button>
                        <button class="btn btn-estado btn-estado-no-emitido btn-xs" onclick="cambiarEstado(this, 'No Emitido')">No Emitido</button>
                    </td>
                </tr>
                <tr>
                    <td>María López</td>
                    <td>987654321</td>
                    <td>maria.lopez@example.com</td>
                    <td>
                        <button class="btn btn-estado btn-estado-emitido btn-xs" onclick="cambiarEstado(this, 'Emitido')">Emitido</button>
                        <button class="btn btn-estado btn-estado-proceso btn-xs" onclick="cambiarEstado(this, 'En Proceso')">En Proceso</button>
                        <button class="btn btn-estado btn-estado-no-emitido btn-xs" onclick="cambiarEstado(this, 'No Emitido')">No Emitido</button>
                    </td>
                </tr>
                <tr>
                    <td>Carlos Sánchez</td>
                    <td>555123456</td>
                    <td>carlos.sanchez@example.com</td>
                    <td>
                        <button class="btn btn-estado btn-estado-emitido btn-xs" onclick="cambiarEstado(this, 'Emitido')">Emitido</button>
                        <button class="btn btn-estado btn-estado-proceso btn-xs" onclick="cambiarEstado(this, 'En Proceso')">En Proceso</button>
                        <button class="btn btn-estado btn-estado-no-emitido btn-xs" onclick="cambiarEstado(this, 'No Emitido')">No Emitido</button>
                    </td>
                </tr>
                <tr>
                    <td>Laura Gómez</td>
                    <td>444654321</td>
                    <td>laura.gomez@example.com</td>
                    <td>
                        <button class="btn btn-estado btn-estado-emitido btn-xs" onclick="cambiarEstado(this, 'Emitido')">Emitido</button>
                        <button class="btn btn-estado btn-estado-proceso btn-xs" onclick="cambiarEstado(this, 'En Proceso')">En Proceso</button>
                        <button class="btn btn-estado btn-estado-no-emitido btn-xs" onclick="cambiarEstado(this, 'No Emitido')">No Emitido</button>
                    </td>
                </tr>
                <tr>
                    <td>Pedro Fernández</td>
                    <td>333789456</td>
                    <td>pedro.fernandez@example.com</td>
                    <td>
                        <button class="btn btn-estado btn-estado-emitido btn-xs" onclick="cambiarEstado(this, 'Emitido')">Emitido</button>
                        <button class="btn btn-estado btn-estado-proceso btn-xs" onclick="cambiarEstado(this, 'En Proceso')">En Proceso</button>
                        <button class="btn btn-estado btn-estado-no-emitido btn-xs" onclick="cambiarEstado(this, 'No Emitido')">No Emitido</button>
                    </td>
                </tr>
            </tbody>

        </table>
        <div class="clearfix">
            <div class="hint-text">Mostrando <b>5</b> de <b>5</b> registros</div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">‹</a></li>
                    <li class="page-item"><a class="page-link" href="#">Page</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">›</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </nav>
            <div>Resultados 1 a 5 de 16</div>
        </div>
        
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('buscar');
    input.addEventListener('keyup', function () {
        const filter = input.value.toLowerCase();
        const rows = document.querySelectorAll('tbody tr');

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            let match = false;
            cells.forEach(cell => {
                if (cell.textContent.toLowerCase().includes(filter)) {
                    match = true;
                }
            });
            if (match) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});

function cambiarEstado(btn, nuevoEstado) {
    const row = btn.closest('tr');
    
    // Quitar clases anteriores
    row.querySelectorAll('button').forEach(button => {
        button.classList.remove('btn-estado-emitido', 'btn-estado-proceso', 'btn-estado-no-emitido');
        button.classList.add('btn-estado');
    });
    
    // Agregar nueva clase según el estado
    btn.classList.add(nuevoEstado === 'Emitido' ? 'btn-estado-emitido' : nuevoEstado === 'En Proceso' ? 'btn-estado-proceso' : 'btn-estado-no-emitido');
}
</script>
</body>
</html>
