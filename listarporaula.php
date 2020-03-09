<?php
    include_once "EN/entidades.php";
    include_once "BLL/admincur.php";
    $ac = new admincur();
    $aula = $_POST["aula"];
    $c= new Cursada("","","","","","","");
    echo "<table> <tr> <th>Materia</th> <th>Carrera</th>
          <th>Cantidad de Alumnos</th> <th>Turno/th> <th>Dia/th>
          <th>Comision</th><th>Aula</th></tr>";

    foreach ($ac->listar(["Comision" => (string) $aula]) as $c){
          echo "<tr>";
          echo "<td>" . (string) $c->Materia . "</td>";
          echo "<td>" . (string) $c->Carrera . "</td>";
          echo "<td>" . (string) $c->CantAlumnos . "</td>";
          echo "<td>" . (string) $c->Turno . "</td>";
          echo "<td>" . (string) $c->Dia . "</td>";
          echo "<td>" . (string) $c->Comision . "</td>";
          echo "<td>" . (string) $c->Aula . "</td>";
    }
    echo "</tr> </table>"
?>