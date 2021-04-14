<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <title><?php echo $this->alumno->matricula . '-' . $this->alumno->apellido; ?></title>
</head>

<body>

    <?php require_once 'views\header.php' ?>

    <div class="text-center">
        <h2>Detalle de </h2>
        <h2><?php echo $this->mensaje; ?></h2>
    </div>

    <div class='container mb-3'>
        <form action="<?php echo constant('URL'); ?>consulta/actualizarAlumno" method="POST">
            <div class="mb-3">
                <label for="matricula" class="form-label">Matricula</label>
                <input type="text" class="form-control" disabled value="<?php echo $this->alumno->matricula; ?>" name="matricula" required>

            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" value="<?php echo $this->alumno->nombre; ?>" name="nombre" required>

            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" value="<?php echo $this->alumno->apellido; ?>" name="apellido" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>



    <?php require_once 'views\footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>