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
    
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");
         .btn-group .btn i {
            color: black; /* Cambia el color de los íconos a negro */
        }
        .action-buttons .btn {
            padding: 0.25rem 0.5rem;
        }
        .table th {
            background-color: #25466B;
            color: white;
        }
        .pagination {
            justify-content: flex-start;
        }
        a {
    text-decoration: none;
}
.no-select {
    user-select: none;
}
body {
  background-color: #080202;
  font-family: "Poppins", sans-serif;
}    
    </style>
</head>
<body>
    <div class="container-fluid mt-3">
        <div class="row mb-3">
            <div class="col-md-2">
                <button class="btn btn-primary"><i class="bi bi-plus-circle"></i> AGREGAR NUEVO</button>
            </div>
            <div class="col-md-2">
                <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="exportDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-download"></i> EXPORTAR
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
                    <input type="text" class="form-control" placeholder="Buscar Address">
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
                   
                   
                    <th>Address</th>
                    <th>City</th>
                    <th>Postal code</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  
                   
                    <td>1074 Binzhou Manor</td>
                    <td>Mannheim</td>
                    <td>36490</td>
                    <td>
                        <div class="btn-group action-buttons">
                            <button class="btn btn-info btn-sm"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr>
                  
                   
                  <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>36490</td>
                  <td>
                      <div class="btn-group action-buttons">
                          <button class="btn btn-info btn-sm"><i class="bi bi-eye"></i></button>
                          <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
                  
                   
                  <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>36490</td>
                  <td>
                      <div class="btn-group action-buttons">
                          <button class="btn btn-info btn-sm"><i class="bi bi-eye"></i></button>
                          <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
                  
                   
                  <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>36490</td>
                  <td>
                      <div class="btn-group action-buttons">
                          <button class="btn btn-info btn-sm"><i class="bi bi-eye"></i></button>
                          <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
              <tr>
                  
                   
                  <td>1074 Binzhou Manor</td>
                  <td>Mannheim</td>
                  <td>36490</td>
                  <td>
                      <div class="btn-group action-buttons">
                          <button class="btn btn-info btn-sm"><i class="bi bi-eye"></i></button>
                          <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
                          <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                      </div>
                  </td>
              </tr>
                <tr>
                    
                   
                    <td>1074 Sanaa Parkway</td>
                    <td>Loja</td>
                    <td>22474</td>
                    <td>
                        <div class="btn-group action-buttons">
                            <button class="btn btn-info btn-sm"><i class="bi bi-eye"></i></button>
                            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>