<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/principal.css">
    <title>Listado de Alumnos</title>
</head>
<body class="bg-dark">
    <div class="card w-75 shadow rounded mx-auto">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h4 class="card-title">Alumnos Registrados</h4>
                </div>
                <div class="col text-end">
                    <a href="nuevo.php" class="btn btn-primary me-4 btn-card">Agregar</a>
                    <a href="logout.php" class="btn btn-secondary btn-card">Salir</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover table-borderless mb-0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>E-mail</th>
                        <th>Usuario</th>
                        <th>Creado</th>
                        <th>Modificado</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Benito</td>
                        <td>Bodoque</td>
                        <td>b.bodoque@correo.com</td>
                        <td>b.bodoque</td>
                        <td>17/07/2021</td>
                        <td>17/07/2021</td>
                        <td class="btn-row"><i class="far fa-edit"></i></td>
                        <td class="btn-row"><i class="far fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td>Benito</td>
                        <td>Bodoque</td>
                        <td>b.bodoque@correo.com</td>
                        <td>b.bodoque</td>
                        <td>17/07/2021</td>
                        <td>17/07/2021</td>
                        <td class="btn-row"><i class="far fa-edit"></i></td>
                        <td class="btn-row"><i class="far fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td>Benito</td>
                        <td>Bodoque</td>
                        <td>b.bodoque@correo.com</td>
                        <td>b.bodoque</td>
                        <td>17/07/2021</td>
                        <td>17/07/2021</td>
                        <td class="btn-row"><i class="far fa-edit"></i></td>
                        <td class="btn-row"><i class="far fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td>Benito</td>
                        <td>Bodoque</td>
                        <td>b.bodoque@correo.com</td>
                        <td>b.bodoque</td>
                        <td>17/07/2021</td>
                        <td>17/07/2021</td>
                        <td class="btn-row"><i class="far fa-edit"></i></td>
                        <td class="btn-row"><i class="far fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td>Benito</td>
                        <td>Bodoque</td>
                        <td>b.bodoque@correo.com</td>
                        <td>b.bodoque</td>
                        <td>17/07/2021</td>
                        <td>17/07/2021</td>
                        <td class="btn-row"><i class="far fa-edit"></i></td>
                        <td class="btn-row"><i class="far fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td>Benito</td>
                        <td>Bodoque</td>
                        <td>b.bodoque@correo.com</td>
                        <td>b.bodoque</td>
                        <td>17/07/2021</td>
                        <td>17/07/2021</td>
                        <td class="btn-row"><i class="far fa-edit"></i></td>
                        <td class="btn-row"><i class="far fa-trash-alt"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="row">
                    <div class="col">Balance</div>
                    <div class="col text-end icn-star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
        </ul>

    </div>
    
</body>
</html>