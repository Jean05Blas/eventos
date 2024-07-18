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
    <link rel="stylesheet" href="assets/css/usuarios.css">
    <link rel="stylesheet" href="https://www.flaticon.es/iconos-gratis/enlace"> 
</head>
<style>
  
.password-wrapper {
  position: relative;
}

.toggle-button {
  display: inline-flex;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: unset;
  right: 12px;
  cursor: pointer;
}

.eye-icon {
  width: 20px;
  height: 20px;
}
    </style>
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
                     <th>DNI</th>
                     <th>Apellidos y Nombres</th>
                     <th>Dirección</th>
                     <th>Email</th>
                     <th>Teléfono</th>
                    <th>Tipo de usuario</th>
                    <th>Usuario</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                    <td>1074 Binzhou Manor</td>
                    <td>Mannheim</td>
                    <td>Mannheim</td>
                    <td>
                        <div class="btn-group action-buttons">
                            <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr>
                <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                    <td>1074 Binzhou Manor</td>
                    <td>Mannheim</td>
                    <td>Mannheim</td>
                 
                  <td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
              <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                    <td>1074 Binzhou Manor</td>
                    <td>Mannheim</td>
                    <td>Mannheim</td>
                  <td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
              <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                    <td>1074 Binzhou Manor</td>
                    <td>Mannheim</td>
                    <td>Mannheim</td>
                  <td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
              <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                    <td>1074 Binzhou Manor</td>
                    <td>Mannheim</td>
                    <td>Mannheim</td>
                  <td>
                      <div class="btn-group action-buttons">
                      <button href="#editEmployeeModl" class="btn btn-warning btn-sm"  data-toggle="modal"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
                <tr>
                <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                <td>1074 Binzhou Manor</td>
                <td>Mannheim</td>
                    <td>1074 Binzhou Manor</td>
                    <td>Mannheim</td>
                    <td>Mannheim</td>
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
                    <h4 class="modal-title">Agregar nuevo usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    
                <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>DNI</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>  


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nombres</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Dirrección</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>  


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Teléfono</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tipo de usuario</label>
                            <select id="tip_usu" class="form-control" required>
                                <option value="">Seleccione una opción</option>
                            </select>
                        </div>
                    </div>  


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Usuario</label>
                            <input type="text" class="form-control" required>
                        </div>

                  
                        <div class="form-group col-md-6">
                        <div class="mb-3">
               <label for="password-field" class="form-label">
                  Password
               </label>
               <div class="password-wrapper">
                  <input type="password" id="password-field" class="form-control" />
                  <div class="toggle-button">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="eye-icon">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                     </svg>
                  </div>
               </div>
            </div>
  
                     
                       
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
                    <h4 class="modal-title">Editar datos de usuario</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">          
                        
                <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>DNI</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>  


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Nombres</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Dirrección</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>  


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Teléfono</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tipo de usuario</label>
                            <select id="tip_usu" class="form-control" required>
                                <option value="">Seleccione una opción</option>
                            </select>
                        </div>
                    </div>  


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Usuario</label>
                            <input type="text" class="form-control" required>
                        </div>

                  
                        <div class="form-group col-md-6">
                        <div class="mb-3">
               <label for="password-field" class="form-label">
                  Password
               </label>
               <div class="password-wrapper">
                  <input type="password" id="password-field" class="form-control" />
                  <div class="toggle-button">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="eye-icon">
                        <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                        <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" clip-rule="evenodd" />
                     </svg>
                  </div>
               </div>
            </div>
  
                     
                       
                    </div>  
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


<script src="assets/js/usuarios.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>