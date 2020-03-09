<?php
    include_once "dbmanager.php";
    include_once "EN/entidades.php";
    class DALAula {
        function ReadAll(){
            try{
                $dbman = new DBManager("mongodb://localhost:27017");
                $res = $dbman->Read("AdminUni", "Aulas", null);
                $aulas = new ArrayObject();
                foreach ($res as $i) {
                    $a = new Aula($i["numero"], $i["cantalumnos"], $i["piso"]);
                    $aulas->append($a);
                    $a=null;
                }
                return($aulas);
            }
            catch (Exception $e){
                echo "</br>Error al leer todas las aulas de la base de datos</br>";
                var_dump($e);
            }
            finally {
                $dbman = null;
                $aulas = null;
            }
        }
        function Create($Aula){
            try{
                $dbman = new DBManager("mongodb://localhost:27017");
                echo json_encode($Aula);
                $dbman->Create("AdminUni", "Aulas", $Aula);
                echo "ecrito";
            }
             catch (Exception $e){
                echo "</br>Error al escribir un aula en la base de datos</br>";
                var_dump($e);
            }
            finally {
                $dbman = null;
                $Cursor = null;
            }
        }
        function Read($query){
            try{
                $dbman = new DBManager("mongodb://localhost:27017");
                $res = $dbman->Read("AdminUni", "Aulas", $query);
                $aulas = new ArrayObject();
                foreach ($res as $i) {
                    $a = new Aula($i["numero"], $i["cantalumnos"], $i["piso"]);
                    $aulas->append($a);
                    $a=null;
                }
                return($aulas);
            }
            catch (Exception $e){
                echo "</br>Error al leer todas las aulas de la base de datos</br>";
                var_dump($e);
            }
            finally {
                $dbman = null;
                $aulas = null;
            }
        }
    }