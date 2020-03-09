<?php
class Aula {
    public $Numero;
    public $CantAlumnos;
    public $Piso;
    function __construct($Numero, $CantAlumnos, $Piso){
        $this->Numero = $Numero;
        $this->CantAlumnos = $CantAlumnos;
        $this->Piso = $Piso;
    }
    function toString(){
        return ((string) $this->Numero . " " . (string) $this->CantAlumnos . " " . (string) $this->Piso);
    }
}

class cursada {
    public $Materia;
    public $Carrera;
    public $CantAlumnos;
    public $Turno;
    public $Dia;
    public $Comision;
    public $Aula;
    function __construct($Materia, $Carrera, $CantAlumnos, $Turno, $Dia, $Comision, $Aula){
        $this->Materia = $Materia;
        $this->Carrera = $Carrera;
        $this->CantAlumnos = $CantAlumnos;
        $this->Turno = $Turno;
        $this->Dia = $Dia;
        $this->Comision = $Comision;
        $this->Aula = $Aula;
    }
}

?>