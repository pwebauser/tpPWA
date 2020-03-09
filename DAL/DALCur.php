<?php
    include_once "dbmanager.php";
    include_once "EN/entidades.php";
    class DALCur {
        function ReadAll(){
            try{
                $dbman = new DBManager("mongodb://localhost:27017");
                $res = $dbman->Read("AdminUni", "Cursadas", null);
                $Cursadas = new ArrayObject();
                foreach ($res as $i) {
                    $c = new Cursada($i["materia"], $i["carrera"], $i["cantalumnos"], $i["turno"], $i["dia"], $i["comision"], $i["aula"]);
                    $Cursadas->append($c);
                    $c=null;
                }
                return($Cursadas);
            }
            catch (Exception $e){
                echo "</br>Error al leer todas las Cursadas de la base de datos</br>";
                var_dump($e);
            }
            finally {
                $dbman = null;
                $Cursadas = null;
            }
        }
        function Create($Cursada){
            try{
                $dbman = new DBManager("mongodb://localhost:27017");
                $dbman->Create("AdminUni", "Cursadas", $Cursada);
            }
             catch (Exception $e){
                echo "</br>Error al escribir una cursada en la base de datos</br>";
                var_dump($e);
            }
            finally {
                $dbman = null;
            }
        }
        function Read($query){
            try{
                $dbman = new DBManager("mongodb://localhost:27017");
                $res = $dbman->Read("AdminUni", "Cursadas", $query);
                $Cursadas = new ArrayObject();
                foreach ($res as $i) {
                    $c = new Cursada($i["materia"], $i["carrera"], $i["cantalumnos"], $i["turno"], $i["dia"], $i["comision"], $i["aula"]);
                    $aulas->append($c);
                    $c=null;
                }
                return($Cursadas);
            }
            catch (Exception $e){
                echo "</br>Error al leer una cursada de la base de datos</br>";
                var_dump($e);
            }
            finally {
                $dbman = null;
                $Cursadas = null;
            }
        }
    }