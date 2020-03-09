<?php
    include_once "BLL/adminaula.php";
    include_once "EN/entidades.php";
    try {
        $aa = new adminaula();
        $a= new aula($_POST["numero"], $_POST["cantalumnos"], $_POST["piso"]);
        if ($aa->alta($a)){
            echo "<script type=\"text/javascript\">
                alert(\"El Aula ya existe\");
                window.location.href = \"index.php\";
             </script>";
        }
        else {
            echo "<script type=\"text/javascript\">
                alert(\"Aula creada correctamente\");
                window.location.href = \"index.php\";
             </script>";
        }
    }
    catch (Exception $e){
        echo "<script type=\"text/javascript\">
                alert(\"Error en el alta de Aula. Exception: " . (string) $e . ");
                window.location.href = \"index.php\";
              </script>";
    }
    finally {
        $aa = null;
        $a = null;
    }
?>