<!DOCTYPE html>
<html>
<head>
    <title>Administrador de Universidad</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-4">
        </div>
        <div class="col-4">
        Alta de aula
            <form action="altaaula.php" method="POST">
                Numero:
                <input type="text" name="numero" value=""> </input></br>
                Cantidad de Alumnos:
                <input type="text" name="cantalumnos" value=""> </input></br>
                Piso:
                <input type="text" name="piso" value=""> </input></br>
                <input type="submit" value="Alta"></input>
            </form>
        </div>
    </div>
</body>
</html>