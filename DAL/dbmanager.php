<?php
/* 
    *******************************************************************
    ***   DATABASE MANAGER CLASS: Clase encargada del manejo de la  ***
    ***   base de Datos MongoDB                                     ***
    *******************************************************************
*/

require_once 'vendor/autoload.php'; //mongodb/mongodb

class dbmanager {
    public $Conexion;
    private $Cliente;
    function __construct($Conexion){
        $this->Conexion = $Conexion;
    }

    function conectar(){
        try{
            $this->Cliente = new MongoDB\Client($this->Conexion);
            if ($this->Cliente)
                return(0);
            else
                return(1);
        }
        catch (Exception $e){
            echo "</br>Fallo la conexion a la base</br>";
            var_dump($e);
            echo "</br>";
        }
    }
    function Create ($Database, $Collection, $Documento)
    {
        try{
            $this->conectar();
            $Cursor =  $this->Cliente->{$Database}->{$Collection};
            $Cursor->insertOne($Documento);
        }
        catch (Exception $e){
            echo "</br> <em>Fallo al escribir en la base de datos </em> </br>";
            var_dump($e);
            echo "</br>";
        }
        finally {
            $this->Cliente = null;
        }
    }
    function Read ($Database, $Collection, $Query){
        try{
            if (!$this->conectar()){
                $Cursor =  $this->Cliente->{$Database}->{$Collection};
                if ($Query!= null){
                    $res = $Cursor->find($Query);
                }
                else {
                    $res = $Cursor->find();
                }
                return ($res);
            }
        }
        catch (Exception $e){
            echo "</br> Fallo al leer de la base de datos </br>";
            var_dump($e);
            echo "</br>";
        }
        finally {
            $this->Cliente = null;
        }
    }
    function Update ($Database, $Collection, $Query){
       /* try{
            $Cursor =  $Cliente->{$Database}->{$Collection};
            $Cursor->Insert($Documento);
        }*/
    }
}
?>