<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="assets/css/eventos.css">
</head>
  <body>
  <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Registro <b>Participantes</b></h2><br>
                    </div>
                    
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo participante</span></a>        
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
            <br>

            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>DNI</th>
                        <th>Participante</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Dirección</th>
                        <th>Genero</th>
                        <th>Facultad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>75451722</td>
                        <td>Jean Blas Avila</td>
                        <td>999474444</td>
                        <td>Jeapblasa@gmail.com</td>
                        <td>Av. Interoceánica</td>
                        <td>Masculino</td>
                        <td>Ciencias</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>         
                    <tr>
                        <td></td>
                        <td>78109756</td>
                        <td>Kath Aranibar Rondan</td>
                        <td>92839012</td>
                        <td>kathara@gmail.com</td>
                        <td>Jr. union</td>
                        <td>Femenino</td>
                        <td>Ciencias</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr> 
                    <tr>
                        <td></td>
                        <td>78787845</td>
                        <td>Yabeth Yesenia</td>
                        <td>92886989</td>
                        <td>Yabetyes@gmail.com</td>
                        <td>Av. Universitaria</td>
                        <td>Femenino</td>
                        <td>Ciencias</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>45454545</td>
                        <td>Franc Inti Coral</td>
                        <td>986545153</td>
                        <td>FrancInt@gmail.com</td>
                        <td>Av. Centenario</td>
                        <td>Masculino</td>
                        <td>Ciencias</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
    


<!-- Agregar Participante Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header">            
                    <h4 class="modal-title">Agregar nuevo participante</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dni">DNI</label>
                                    <input type="text" class="form-control" id="dni" required>
                                </div>
                                <div class="form-group">
                                    <label for="nom">Nombres</label>
                                    <input type="text" class="form-control" id="nom" required>
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo electrónico</label>
                                    <input type="email" class="form-control" id="correo" required>
                                </div>
                                <div class="form-group">
                                    <label for="gen">Género</label>
                                    <select id="gen" class="form-control" required>
                                        <option value="">Seleccione una opción</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="apellido">Apellidos</label>
                                    <input type="text" class="form-control" id="apellido" required>
                                </div>
                                <div class="form-group">
                                    <label for="telef">Teléfono</label>
                                    <input type="text" class="form-control" id="telef" required>
                                </div>
                                <div class="form-group">
                                    <label for="direcc">Dirección</label>
                                    <input type="text" class="form-control" id="direcc" required>
                                </div>
                                <div class="form-group">
                                    <label for="facul">Facultad</label>
                                    <select id="facul" class="form-control" required>
                                        <option value="">Seleccione una opción</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-success" value="Agregar">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Editar Participante Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header">            
                    <h4 class="modal-title">Editar datos del participante</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Edni">DNI</label>
                                    <input type="text" class="form-control" id="Edni" required>
                                </div>
                                <div class="form-group">
                                    <label for="Enom">Nombres</label>
                                    <input type="text" class="form-control" id="Enom" required>
                                </div>
                                <div class="form-group">
                                    <label for="Ecorreo">Correo electrónico</label>
                                    <input type="email" class="form-control" id="Ecorreo" required>
                                </div>
                                <div class="form-group">
                                    <label for="Egen">Género</label>
                                    <select id="Egen" class="form-control" required>
                                        <option value="">Seleccione una opción</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Eapell">Apellidos</label>
                                    <input type="text" class="form-control" id="Eapell" required>
                                </div>
                                <div class="form-group">
                                    <label for="Etelef">Teléfono</label>
                                    <input type="text" class="form-control" id="Etelef" required>
                                </div>
                                <div class="form-group">
                                    <label for="Edurecc">Dirección</label>
                                    <input type="text" class="form-control" id="Edurecc" required>
                                </div>
                                <div class="form-group">
                                    <label for="Efacu">Facultad</label>
                                    <select id="Efacu" class="form-control" required>
                                        <option value="">Seleccione una opción</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                    <input type="submit" class="btn btn-info" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</div>





    

  <!-- Delete Modal HTML -->
  <div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">            
            <h4 class="modal-title">Delete Employee</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">          
            <p>Are you sure you want to delete these Records?</p>
            <p class="text-warning"><small>This action cannot be undone.</small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-danger" value="Delete">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="assets/js/usuario.js"></script>
</body>
</html>