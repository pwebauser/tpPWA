<?php
/* 
    *******************************************************************
    ***   CURSADA MANAGER CLASS: Clase encargada del manejo de las     ***
    ***   operaciones de negocio referentes a la entidad Aula       ***
    *******************************************************************
*/
    include_once "DAL/DALCur.php";
    class admincur {
        function listartodas(){
            try {
                $dalcur = new DALCur();
                $Cursadas = $dalcur->ReadALL();
                return ($Cursadas);
            }
            finally {
                $Cursadas = null;
                $dalcur = null;
            }
        }
        function listar($query){
            try {
                $dalcur = new DALCur();
                $Cursadas = $dalcur->Read($query);
                return ($Cursadas);
            }
            
            finally {
                $dalcur = null;
                $Cursadas = null;
            }
        }
        function alta($cursada){
            try {
                $dalcur = new DALCur();
                $mismacursada = $this->listar(["materia" => (string) $cursada->Materia, "carrera" => (string) $cursada->Carrera , "cantalumnos" => (string) $cursada->CantAlumnos, "turno" => (string) $cursada->Turno, "dia" => (string) $cursada->Dia, "comision" => (string) $cursada->comision, "aula" => (string) $cursada->Aula]);
                $mismacomdiaaula = $this->listar(["turno" => (string) $cursada->Turno, "dia" => (string) $cursada->Dia, "comision" => (string) $cursada->comision, "aula" => (string) $cursada->Aula]);
                $mismamatcomdia = $this->listar(["materia" => (string) $cursada->Materia, "turno" => (string) $cursada->Turno, "dia" => (string) $cursada->Dia, "comision" => (string) $cursada->comision]);
                if ($mismacursada) {
                    return(1);
                }
                else {
                    $dalau->Create($aula);
                    return(0);
                }
            }
            finally{
                $dalau = null;
            }
        }
    }
?>