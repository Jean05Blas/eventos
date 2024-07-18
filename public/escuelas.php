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
    <link rel="stylesheet" href="assets/css/escuela.css">
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
                    <th>Facultades</th>
                    <th>Escuela</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                
                    <td>Facultad de ciencias del ambiente</td> 
                    <td>Ingeniería de ambiente</td> 
                    <td>
                        <div class="btn-group action-buttons">
                            <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr>
               
                <td>Facultad de turismo y administración</td>
                <td>Administración</td> 
                  <td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
             
              <td>Facultad del ciencias politicas</td>  
              <td>Derecho</td>  
              <td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
              
              <td>Facultdad de economia y contabilidad</td> 
              <td>Contabilidad</td> <td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
               
              <td>Facultad de ingeniería civil</td> 
              <td>Ingeniería civil</td><td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
                <tr>
                
                <td>Facultad de ciencias</td> 
                <td>Ingeniería de sistemas e informática</td><td>
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
                    <h4 class="modal-title">Agregar escuela</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">          
                    <div class="form-row">
                 
                            <label>Facultad</label>
                            <select id="tip_usu" class="form-control" required>
                                <option value="">Seleccione una opción</option>
                            </select>
                
                            <label>Escuela</label>
                          <input type="text" class="form-control" required>
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
                    <h4 class="modal-title">Editar Escuela</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">          
                    <div class="form-row">
                  
                            <label>Facultad</label>
                            <select id="tip_usu" class="form-control" required>
                                <option value="">Seleccione una opción</option>
                            </select>
                       
                  
                            <label>Escuela</label>
                          <input type="text" class="form-control" required>
                         
                          
                       
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>