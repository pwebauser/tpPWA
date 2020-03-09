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
        Alta de cursada
            <form action="BLL/altacur.php" method="POST">
                Nombre de la materia:
                <input type="text" name="materia" value=""> </input></br>
                Nombre de la carrera:
                <input type="text" name="carrera" value=""> </input></br>
                Cantidad de Alumnos:
                <input type="text" name="cantalumnos" value=""> </input></br>
                Turno:
                <select id="turno" name="turno">
                    <option value="M">Mañana</option>
                    <option value="T">Tarde</option>
                    <option value="N">Noche</option>
                </select></br>
                Dia:
                <select id="dia" name="dia">
                    <option value="Lunes">Lunes</option>
                    <option value="Martes">Martes</option>
                    <option value="Miercoles">Miercoles</option>
                    <option value="Jueves">Jueves</option>
                    <option value="Viernes">Viernes</option>
                </select></br>
                Comisión:
                <input type="text" name="comision" value=""> </input></br>
                <div id="aula" class="aula">
                    <?php
                        include_once "BLL/adminaula.php";
                        include_once "BLL/admincur.php";
                        $aa = new adminaula();
                        echo "<select id=\"aula\" name=\"aula\">";
                        $al= $aa->listartodas();
                        foreach($al as $a){
                            echo "<option value=\"" . (string)$a->Numero . "\">Aula: " . (string) $a->Numero . " Capacidad: " . (string) $a->CantAlumnos . "</option>";
                        }
                        echo "</select></br>";
                    ?>
                </div>
                <input type="submit" value="Alta"></input>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>