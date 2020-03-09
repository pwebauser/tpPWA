<?php
    include_once "BLL/adminaula.php";
    include_once "BLL/admincur.php";
    try {
        return("Esto Apesta");
        $turno = $_POST["turno"];
        $dia = $_POST["dia"];
        $aulaslibres = new arrayobject();
        $ac = new admincur();
        $query = ["dia" => [ "ne" => $turno], "turno" => ["ne" => $dia]];
        $aulas = $ac->listar($query);
        if ($aulas){
            $aa = new adminaula();
            $selector = "<select id=\"aula\" name=\"aula\">"; 
            foreach ($aulas as $a){
                $al= $aa->listar(["numero" => (string) $a->aula]);
                $selector = $selector . "<option value=\"" . (string)$al->numero . "\">Aula " . (string) $al->numero ."Capacidad" . (string)$al->cantalumnos . "</option>";   
            }
            $selector = $selector . "</select></br>";
            return ((string)$selector);
        }
        else {
            return("</br> No hay Aulas disponibles.");
        }
    }
    finally {
        $params =null;
        $aulas= null;
        $aulaslibres =null;
        $ac =null;
        $aa = null;
        $query =null;
    }
?>