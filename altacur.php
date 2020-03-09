
<?php
include_once "EN/entidades.php";
include_once "BLL/admincur.php";
$c = new cursada($_POST["materia"], $_POST["carrera"], $_POST["cantalumnos"], $_POST["turno"], $_POST["dia"], $_POST["comision"], $_POST["aula"]);
$ac = new admincur();
$res = $ac->alta($c);

if ($res==1){
    echo "<script type=\"text/javascript\">
                alert(\"Cursada ya existente\");
                window.location.href = \"index.php\";
          </script>";
} else if ($res==2) {
    echo "<script type=\"text/javascript\">
                alert(\"Este aula ya fue asiganada a este dia y comision\");
                window.location.href = \"index.php\";
          </script>";
} else if ($res==3) {
    echo "<script type=\"text/javascript\">
                alert(\"Esta materia ya fue asignada a esta comision\");
                window.location.href = \"index.php\";
          </script>";
} else {
    echo "<script type=\"text/javascript\">
                alert(\"Cursada creada con exito\");
                window.location.href = \"index.php\";
          </script>";
}
?>