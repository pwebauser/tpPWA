<?php
    include_once "EN/entidades.php";
    include_once "BLL/adminaula.php";
    $aa = new adminaula();
    $a= new Aula("","","");
    echo "<table> <tr> <th>Numero</th>
          <th>Cantidad de Alumnos</th> <th>Piso</th> </tr>";

    foreach ($aa->listartodas() as $a){
          echo "<tr>";
          echo "<td>" . (string) $a->Numero . "</td>";
          echo "<td>" . (string) $a->CantAlumnos . "</td>";
          echo "<td>" . (string) $a->Piso . "</td>";
    }
    echo "</tr> </table>"
?>