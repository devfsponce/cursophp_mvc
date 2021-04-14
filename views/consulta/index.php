<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



    <title>CONSULTA</title>
</head>

<body>

    <?php require_once 'views\header.php' ?>

    <div class="container">

        <div id="respuesta" class="text-center"></div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody id="tbody-alumnos">
                <?php
                include_once 'models/alumno.php';
                foreach ($this->alumnos as $row) {
                    $alumno = $row;
                ?>
                    <tr id="fila-<?php echo $alumno->matricula; ?>">
                        <td><?php echo $alumno->matricula; ?></td>
                        <td><?php echo $alumno->nombre; ?></td>
                        <td><?php echo $alumno->apellido; ?></td>
                        <td><button class="btn-editar" data-matricula='<?php echo $alumno->matricula; ?>'>Editar</button></td>
                        <td><button class="btn-eliminar" data-matricula='<?php echo $alumno->matricula; ?>'>Eliminar</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <?php require_once 'views\footer.php' ?>

    <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>

</html>