<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Direcciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.1/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/eventos.css">
    <link rel="stylesheet" href="https://www.flaticon.es/iconos-gratis/enlace"> 
</head>
<body>
    <div class="container-fluid mt-3">
        <div class="row mb-3">
            <div class="col-md-2">
                <button  href="#addEmployeeModl" class="btn btn-primary" data-toggle="modal"><i class="bi bi-plus-circle"></i> AGREGAR NUEVO</button>
            </div>
            <div class="col-md-2">
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="exportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-file-earmark-text"></i> Reporte eventos
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="exportDropdown">
                        <li><a class="dropdown-item" href="#">CSV</a></li>
                        <li><a class="dropdown-item" href="#">Excel</a></li>
                        <li><a class="dropdown-item" href="#">PDF</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                    <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>
            <div class="col-md-2">
                <select class="form-select">
                    <option selected>20</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </div>
        </div>
       <br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SE</th>
                    <th>Evento</th>
                    <th>Tipo de evento</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha de culminación</th>
                    <th>Estado</th>
                    <th>Resolución</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td>
                        <div class="btn-group action-buttons">
                        <button href="#subeventEmployeeModl" class="btn btn-sm"  data-toggle="modal"><i class="bi bi-card-text"></i></button>
                        </div>
                    </td>
                    <td>1074 Binzhou Manor</td>
                    <td>Mannheim</td>
                    <td>36490</td>
                    <td>1074 Binzhou Manor</td>
                    <td>Mannheim</td>
                    <td>
                        <div class="btn-group action-buttons">
                            <button class="btn btn-primary btn-sm">VER</i></button>
                            <button class="btn btn-success btn-sm">Subir</button>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group action-buttons">
                            <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr>
                <td>
                        <div class="btn-group action-buttons">
                        <button href="#subeventEmployeeModl" class="btn  btn-sm"  data-toggle="modal"><i class="bi bi-card-text"></i></button>
                        </div>
                    </td>
                <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>36490</td> 
                  <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>
                        <div class="btn-group action-buttons">
                            <button class="btn btn-primary btn-sm">VER</i></button>
                            <button class="btn btn-success btn-sm">Subir</button>
                        </div>
                    </td>
                  <td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
              <td>
                        <div class="btn-group action-buttons">
                        <button href="#subeventEmployeeModl" class="btn  btn-sm"  data-toggle="modal"><i class="bi bi-card-text"></i></button>
                        </div>
                    </td>
              <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>36490</td>
                  <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>
                        <div class="btn-group action-buttons">
                            <button class="btn btn-primary btn-sm">VER</i></button>
                            <button class="btn btn-success btn-sm">Subir</button>
                        </div>
                    </td>
                  <td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
              <td>
                        <div class="btn-group action-buttons">
                        <button href="#subeventEmployeeModl" class="btn btn-sm"  data-toggle="modal"><i class="bi bi-card-text"></i></button>
                        </div>
                    </td>   
              <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>36490</td>
                  <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>
                        <div class="btn-group action-buttons">
                            <button class="btn btn-primary btn-sm">VER</i></button>
                            <button class="btn btn-success btn-sm">Subir</button>
                        </div>
                    </td>
                  <td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
              <td>
                        <div class="btn-group action-buttons">
                        <button href="#subeventEmployeeModl" class="btn  btn-sm"  data-toggle="modal"><i class="bi bi-card-text"></i></button>
                        </div>
                    </td>   
              <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>36490</td>
                  <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>
                        <div class="btn-group action-buttons">
                            <button class="btn btn-primary btn-sm">VER</i></button>
                            <button class="btn btn-success btn-sm">Subir</button>
                        </div>
                    </td>
                  <td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
                <tr>
                <td>
                        <div class="btn-group action-buttons">
                        <button href="#subeventEmployeeModl" class="btn  btn-sm"  data-toggle="modal"><i class="bi bi-card-text"></i></button>
                        </div>
                    </td> 
                <td>1074 Sanaa Parkway</td>
                    <td>Loja</td>
                    <td>22474</td>
                    <td>1074 Sanaa Parkway</td>
                    <td>Loja</td>
                    <td>
                        <div class="btn-group action-buttons">
                            <button class="btn btn-primary btn-sm">VER</i></button>
                            <button class="btn btn-success btn-sm">Subir</button>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group action-buttons">
                        <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <!-- Más filas aquí... -->
            </tbody>
        </table>

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
            <div>Resultados 21 a 40 de 603</div>
        </div>
    </div>

     <!-- crear Modal HTML -->
     <div id="addEmployeeModl" class="modal fade">
    <div class="modal-dialog modal-lg"> <!-- Cambiado a modal-lg para ancho mayor -->
        <div class="modal-content">
            <form>
                <div class="modal-header">            
                    <h4 class="modal-title">Agregar nuevo evento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">          
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tipo de evento</label>
                            <select id="tip_usu" class="form-control" required>
                                <option value="">Seleccione una opción</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Evento</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>  
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Fecha de inicio</label>
                             <input type="datetime-local" class="form-control" required>
                           
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de culminación</label>
                            <input type="datetime-local" class="form-control" required>
                        </div>
                    </div>    
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-warning" data-dismiss="modal" value="CANCELAR">
                    <input type="submit" class="btn btn-success" value="AGREGAR">
                </div>
            </form>
        </div>
    </div>
</div>
   <!-- edit Modal HTML -->
   <div id="editEmployeeModl" class="modal fade">
    <div class="modal-dialog modal-lg"> <!-- Cambiado a modal-lg para ancho mayor -->
        <div class="modal-content">
            <form>
                <div class="modal-header">            
                    <h4 class="modal-title">Editar nuevo evento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">          
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Tipo de evento</label>
                            <select id="tip_usu" class="form-control" required>
                                <option value="">Seleccione una opción</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Evento</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>  
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Fecha de inicio</label>
                             <input type="datetime-local" class="form-control" required>
                           
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha de culminación</label>
                            <input type="datetime-local" class="form-control" required>
                        </div>
                    </div>    
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-warning" data-dismiss="modal" value="CANCELAR">
                    <input type="submit" class="btn btn-success" value="MODIFICAR">
                </div>
            </form>
        </div>
    </div>
</div>
   <!-- sub evento Modal HTML -->
   <div id="subeventEmployeeModl" class="modal fade">
    <div class="modal-dialog modal-lg"> <!-- Cambiado a modal-lg para ancho mayor -->
        <div class="modal-content">
            <form>
                <div class="modal-header">            
                    <h4 class="modal-title">Agregar sub eventos</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">          
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Fecha</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Hora de inico</label>
                            <input type="time" class="form-control" required>
                        </div>
                    </div>  
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Hora de culminació</label>
                             <input type="time" class="form-control" required>
                           
                        </div>
                       
                    </div>    
                </div>
                <div class="modal-footer">
     <input type="submit" class="btn btn-success" value="Agregar">
     <input type="button" class="btn btn-primary" data-dismiss="modal" value="Agregar más sub eventos">
     <input type="button" class="btn btn-warning" data-dismiss="modal" value="CANCELAR">
 
                </div>
            </form>
        </div>
    </div>
</div>
      <script src="assets/js/evento.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>