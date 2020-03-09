<?php
include_once "../EN/entidades.php";
include_once "../DAL/altacur.php";
$c = new cursada($_POST["materia"], $_POST["carrera"], $_POST["cantalumnos"], $_POST["turno"], $_POST["horario"], $_POST["comision"]);

//printf("Contenido de Cursada Materia: {$Cursada->Materia} Carrera:{$Cursada->Carrera} Cantidad de Alumnos:{$Cursada->CantAlumnos} Turno:{$Cursada->Turno} Horario:{$Cursada->Horario} Comision:{$Cursada->Comision}"); 

?>